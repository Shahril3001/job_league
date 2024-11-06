<!DOCTYPE html>
<html>
<head>
<title>Delete Message</title>
<link rel="stylesheet" type="text/css" href="style4.css"/>
</head>
<body>
<?php
include 'connection.php';
if (isset($_GET['contactID']))

{
	$contactID =$_GET['contactID'];
	$query1=mysql_query("SELECT from contact where contactID='$contactID'");
	$query2=mysql_fetch_array($query1);
	$query3=mysql_query("DELETE from contact where contactID='$contactID'");
	If ($query3)
	{
		?>
		<script>alert('Delete successful.');</script>
	<?php
	header('Location:feedback.php');
	}
	else{echo "<img src='How+About+No.jpg' alt='How about NO.'/>";}
}
?>
</body>
</html>