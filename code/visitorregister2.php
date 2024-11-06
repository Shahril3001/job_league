<html>
<head>
<title>Registration Process</title>
<link href="css/.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php
include 'connection.php';
session_start();

$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];


$query= mysql_query ("SELECT * FROM customer WHERE email='$email'");

if (mysql_num_rows($query) !=0)
{
echo "<center>";
echo "<h2>User Account Are Already Exists!</h2>"	;
echo "</p>";
echo "<img src='css/images/warning2.jpg' width='300' height='300' alt='' />";
echo "</p>";	
echo "<h3>If this you, please click <a href ='visitorlogin.php' style='color:blue';><input type='button' value='Login'/></a> to continue.<h3>";	
echo "</p>";
echo "<h3>Otherwise click <a href='visitorregister.php' style='color:blue';><input type='button' value='Register'/></a> to go back and register yourself again.<h3>";	
echo "</center>";
}
else
{
if($password == $cpassword)
{
		
mysql_query ("INSERT into customer (customerID,fullname,phone,email,password,status)
VALUES ('','".$fullname."','".$phone."','".$email."','".$password."','Unemployeed')")or die(mysql_error());
echo "<center>";
echo "<h2>Registration Successful</h2>";
echo "</br>";
echo "<img src='css/images/success.jpg' width='300' height='300'>";
echo "<p></p>";
echo "<h3>To continue, please click button login below.</h3></a>";
echo "<p></p>";
echo "<p><a href='visitorlogin.php'><input type='button' name='login' value='Login'/></p>";
echo "</center>";

}
else
{
echo "The password don't match";
}
}
?>
</body>
</html>