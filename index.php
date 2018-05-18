

<!doctype html>
<html>
<head>
<title>email subscription</title>
<link href="emailsub.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action="http://scriptkid.com/website/emailsub.php" method="post" class="subform">
fill out the form below to subscribe<br>
<label for="fname" class="labels">first name</label>
<input type="text" name="fname" placeholder="enter your first name"  id="fname"><br>
<label for="lname" class="labels">last name</label>
<input type="text" name="lname" placeholder="enter your last name"  id="lname"><br>
<label for="uname" class="labels"> user name</LABEL>
 <input type="text" name="Uname" placeholder="enter your user name" required id="uname"><br>   

<label for="country" class="labels">country</label>
<input type="text"  name="country"placeholder="which country are you from?" id="country"><br>
<label for="city" class="labels">city</label>
<input type="text"  name="city" placeholder="which city are you from?" id="city"><br>
<label for="email" class="labels">email</label>
<input type="e-mail" name="email" placeholder="enter email here" required id="email"><br>
<span class="labels" for="sex">sex</label>
    <input type="radio" name="sex" value="m">male
    <input type="radio" name="sex" value="f">female
<input type="submit" value="subscribe">

</form>
</body>
</html>