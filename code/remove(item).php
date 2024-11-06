<!DOCTYPE html>
<html>
<head>
<title>Delete Destination</title>
</head>
<body>
<?php
include 'connection.php';
$email=$_GET['email'];
if (isset($_GET['showcaseID']))
{
	$showcaseID =$_GET['showcaseID'];
	$query1=mysql_query("SELECT from showcase where showcaseID='$showcaseID'");
	$query2=mysql_query("DELETE from showcase where showcaseID='$showcaseID'");
		?>
		<script>alert('Delete successful.');</script>
	<?php
	header("location:showcase(c).php?email=".$email."");
}
?>
</body>
</html>