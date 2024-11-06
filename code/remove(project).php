<!DOCTYPE html>
<html>
<head>
<title>Delete Destination</title>
</head>
<body>
<?php
include 'connection.php';
if (isset($_GET['projectID']))
{
	$projectID =$_GET['projectID'];
	$query1=mysql_query("SELECT from projectdemo where projectID='$projectID'");
	$query2=mysql_query("DELETE from projectdemo where projectID='$projectID'");
		?>
		<script>alert('Delete successful.');</script>
	<?php
	header("location:project(a).php");
}
?>
</body>
</html>