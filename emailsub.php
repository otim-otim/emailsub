 <?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";
global $email="$_POST[email]";
include("functions.php")
// Create connection
doDB();


$sql = "INSERT INTO emails (Fname, Lname,sex,country,city,Email,Uname)
VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[sex]','$_POST[country]','$_POST[city]','$_POST[email]','$_POST[uname]')";

emailchecker($email);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?> 