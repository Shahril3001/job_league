<html>
<head>
<title>Add Project (Process)</title>
</head>
<body>

<?php
include 'connection.php';
$hirername = $_POST['hirername'];
$email= $_POST['pemail'];
$pemail = $_POST['pemail'];
$pname = $_POST['pname'];
$pdetail = $_POST['pdetail'];
$pbudget = $_POST['pbudget'];
$date = $_POST['date'];

$query = "INSERT INTO projectdemo (projectID, hirername, pname, pdetail, pbudget, pcontact, pemail, date) 
VALUES ('','".$hirername."','".$pname."','".$pdetail."','".$pbudget."','".$pcontact."','".$pemail."','".$date."')";

mysql_query($query) or die(mysql_error());
header("location:project(a).php");
?>
</body>
</html>