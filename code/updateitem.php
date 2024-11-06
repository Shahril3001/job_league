<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Job League - Add Item</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="right-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="#" id="logo">Job League</a></h1>
							</header>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
							<?php
			$email=$_GET['email'];
			echo"
								<li><a href='index2.php?email=".$email."'>Home</a></li>
								<li><a href='about(c).php?email=".$email."'>About Us</a></li>
								<li><a href='showcase(c).php?email=".$email."'>Show Case</a></li>
								<li><a href='project(c).php?email=".$email."'>Project</a></li>
								<li><a href='contact(c).php?email=".$email."'>Contact Us</a></li>
								";
			?>
			<li><a href="#" onclick="myFunction()">Sign Out</a></li>
<script>
function myFunction() {
    var x;
    if (confirm("Are you sure to log out?") == true) {
		window.location="<?php echo "logout.php?email=".$email.""; ?>";
    } else {
    }
}
</script>
							</ul>
						</nav>

				</div>

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<div class="row 200%">
							<div class="8u 12u(mobile)" id="content">
								<article id="main">
									<header>
										<h2>UPDATE ITEM</h2>
									</header>
									<p></p>
										<?php
										$email=$_GET['email'];
include 'connection.php';
if(isset($_GET['showcaseID'])){
	$showcaseID=$_GET['showcaseID'];
	

	$query1=mysql_query("SELECT * FROM showcase WHERE showcaseID='$showcaseID'");

	$query2=mysql_fetch_array($query1);
	
	if(isset($_POST['submit'])){
		$target_dir = "item/";
	$target_dir = $target_dir . basename( $_FILES["new_image"]["name"]);
	$uploadOk=1;

	if (file_exists($target_dir . $_FILES["new_image"]["name"])) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	if ($uploadOk==0) {
		echo "Sorry, your file was not uploaded.";
	} 
	else { 
    if (move_uploaded_file($_FILES["new_image"]["tmp_name"], $target_dir)) 
	{
		$imageup = $target_dir;
		echo "<img src='" . $imageup . "' />";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
		$_var1 = $imageup;
		$_var2 = $_POST['new_name'];			
		$_var3 = $_POST['new_price'];	

	$query3 = "UPDATE showcase SET  showimage='$_var1', showname='$_var2', showprice='$_var3' WHERE showcaseID='$showcaseID'";
	$success = mysql_query($query3);
		if($success)
		{	 
		$old_pic= $query2['image'];
			if (file_exists($old_pic)) 
			{
				unlink($old_pic); 
			} 
            header('location:showcase(c).php?email='.$email.'');	
		}
	}
		else
		{
		echo "";
		}
?>

<center>
<table width=960>
<form method="post" enctype="multipart/form-data">
<tr>
<th width=120>Image:</th>
<td style="background-color:#; color:black;"><input type="file" name="new_image"  />	Old picture: <?php echo "<img src='".$query2['showimage']."' width='50' height='50' />" ; ?></td>
</tr>

<tr>
<th width=200>Name:</th>
<td style="background-color:#;"><input type="text" name="new_name" size="50" 
value="<?php echo $query2['showname']; ?>" /></td>
</tr>
<tr>
<th width=200>Price:</th>
<td style="background-color:#;"><input type="text" name="new_price" size="50" 
value="<?php echo $query2['showprice']; ?>" /></td>
</tr>
<tr>
<td colspan='2' align='center' style="background-color:#;"><input type="submit" name="submit" 
value="Update" /> <input type="button" name="back" value="Cancel" onclick="goBack()">
<script>
function goBack(){
window.history.back();
}
</script></td>
</tr>
</form>
</table>
</center>
<?php
}
?>
								</article>
							</div>
							<div class="4u 12u(mobile)" id="sidebar">
								<hr class="first" />
								<section>
									<header>
										<h3><a href="#">Our Address</a></h3>
									</header>							
										<h3>Job League</h3>
								<p>3rd Floor, The Mall, Gadong BE3519,</br>
								Negara Brunei Darussalam</br>
								Tel, : 242 0939 Fax, : 242 0938</p>
						<br />
          <h3>Our Location</h3></br>
          <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987.6024795706637!2d114.91632645382562!3d4.905336162801964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3222f5452ea1388d%3A0xf6138d8c4ea7a5ea!2sThe+Mall+Cineplex!5e0!3m2!1sms!2sbn!4v1523029514492" width="350px" height="350px" frameborder="0" style="border:2px solid #d2d5f1" allowfullscreen></iframe></p>
					</div>
									</div>
								</section>
							</div>
						</div>
					</div>

				</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<div class="12u">

								<!-- Contact -->
									<section class="contact">
										
										<ul class="icons">
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
											<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>Job League Cooperation &copy; 2018. All rights reserved.</li><li>Design: <a href="http://html5up.net">Job League</a></li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>