<?php
2: include 'ch19_include.php';
3: if (!$_POST) {
4:      //haven't seen the form, so display it
5:      $display_block = <<<END_OF_BLOCK
6:      <form method="POST" action="$_SERVER[PHP_SELF]">
7:
8:      <p><label for="subject">Subject:</label><br/>
9:      <input type="text" id="subject" name="subject" size="40" /></p>
10:
11:     <p><label for="message">Mail Body:</label><br/>
12:     <textarea id="message" name="message" cols="50"   rows="10"></textarea></p>
13:     <button type="submit" name="submit" value="submit">Submit</button>
14:     </form>
15: END_OF_BLOCK;
16: } else if ($_POST) {
17:     //want to send form, so check for required fields
18:     if (($_POST['subject'] == "") || ($_POST['message'] == "")) {
19:          header("Location: sendmymail.php");
20:          exit;
21:     }
22:
23:     //connect to database
24:     doDB();
25:
26:     if (mysqli_connect_errno()) {
27:          //if connection fails, stop script execution
28:          printf("Connect failed: %s\n", mysqli_connect_error());
29:          exit();
30:     } else {
31:          //otherwise, get emails from subscribers list
32:          $sql = "SELECT Email FROM emails";
33:          $result = mysqli_query($mysqli, $sql)
34:                   or die(mysqli_error($mysqli));
35:
36:          //create a From: mailheader
37:          $mailheaders = "From: Your Mailing List
38:              <you@yourdomain.com>";
39:          //loop through results and send mail
40:          while ($row = mysqli_fetch_array($result)) {
41:              set_time_limit(0);
42:              $email = $row['email'];
43:              mail("$email", stripslashes($_POST['subject']),
44:                   stripslashes($_POST['message']), $mailheaders);
45:              $display_block .= "newsletter sent to: ".$email."<br/>";
46:          }
47:          mysqli_free_result($result);
48:          mysqli_close($mysqli);
49:     }
50: }
51: ?>
52: <!DOCTYPE html>
53: <html>
54: <head>
55: <title>Sending a Newsletter</title>
56: </head>
57: <body>
58: <h1>Send a Newsletter</h1>
59: <?php echo $display_block; ?>
60: </body>
61: </html>