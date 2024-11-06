<html>
<head>
<title>Add Item (Process)</title>
</head>
<body>

<?php
include 'connection.php';
$showname = $_POST['showname'];
$email= $_POST['email'];
$showprice = $_POST['showprice'];
$date = $_POST['date'];

$target_dir="item/";
$target_dir=$target_dir. basename($_FILES["showimage"]["name"]);
move_uploaded_file($_FILES["showimage"]["tmp_name"],$target_dir);
$imageup=$target_dir;

$query = "INSERT INTO showcase (showcaseID, showname, showimage, showprice, email, date) 
VALUES ('','".$showname."','".$imageup."','".$showprice."','".$email."','".$date."')";

mysql_query($query) or die(mysql_error());
header("location:showcase(c).php?email=".$email."");
?>
</body>
</html>