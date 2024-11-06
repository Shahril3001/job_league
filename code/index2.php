<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Job League - About Us</title>
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
								<h1>Applicant Dashboard</h1>
									<?php 
									include 'connection.php';
									$email=$_GET['email'];
									$query1=mysql_query("SELECT * FROM customer WHERE email='$email'");
									$query2=mysql_fetch_array($query1);?>
									<p>[Your Last Login Was: <?php echo $query2['last_login']; ?>.]</p>
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
										<h2>MY PROFILE</h2>
									</header>
									<p></p>
									<section>
										 <?php
include 'connection.php';
if(isset($_GET['email'])){
	$email=$_GET['email'];
	

	$query1=mysql_query("SELECT * FROM customer WHERE email='$email'");

	$query2=mysql_fetch_array($query1);
	
	if(isset($_POST['submit'])){
$target_dir = "account/";
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


$target_dir1 = "cvfile/";
	$target_dir1 = $target_dir1 . basename( $_FILES["new_cvfile"]["name"]);
	$uploadOk1=1;

	if (file_exists($target_dir1 . $_FILES["new_cvfile"]["name"])) {
		echo "Sorry, file already exists.";
		$uploadOk1 = 0;
	}
	if ($uploadOk1==0) {
		echo "Sorry, your file was not uploaded.";
	} 
	else { 
    if (move_uploaded_file($_FILES["new_cvfile"]["tmp_name"], $target_dir1)) 
	{
		$cvfileup = $target_dir1;
		echo "<img src='" . $cv_fileup . "' />";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

		$_var1 = $imageup;
		$_var2 = $_POST['new_fullname'];			
		$_var3 = $_POST['new_phone'];			
		$_var4 = $_POST['new_status'];			
		$_var5 = $_POST['new_ranking'];			
		$_var6 = $cvfileup;		
		$_var7 = $_POST['new_password'];			
	

	$query3 = "UPDATE customer SET  cimage='$_var1', fullname='$_var2', phone='$_var3', status='$_var4', ranking='$_var5', cvfile='$_var6', password='$_var7' WHERE email='$email'";
	$success = mysql_query($query3);
		if($success)
		{	
            header('location:index2.php?email='.$email.'');	
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
<th width=120>Account Image:</th>
<td style="background-color:#; color:black;"><input type="file" name="new_image"  />	Old picture: <?php echo "<img src='".$query2['cimage']."' width='50' height='50' />" ; ?></td>
</tr>
<tr>
<th>Name:</th>
<td style="background-color:#;"><input type="text" name="new_fullname" size="43" 
value="<?php echo $query2['fullname']; ?>" /></td>
</tr>
<tr>
<th>Email:</th>
<td style="background-color:#;"><?php echo $query2['email']; ?></td>
</tr>
<tr>
<th>Phone:</th>
<td style="background-color:#;"><input type="text" name="new_phone" size="43" 
value="<?php echo $query2['phone']; ?>" /></td>
</tr>
<tr>
<th>Status:</th>
<td style="background-color:#;"><input type="text" name="new_status" size="43" 
value="<?php echo $query2['status']; ?>" /></td>
</tr>
<tr>
<th>Ranking:</th>
<td style="background-color:#;"><input type="text" name="new_ranking" size="43" 
value="<?php echo $query2['ranking']; ?>" /></td>
</tr>
<tr>
<th width=120>CV File:</th>
<td style="background-color:#;"><input type="file" name="new_cvfile"  />Old CV File: <?php echo $query2['cvfile']; ?></td>
</tr>
<tr>
<th>Password:</th>
<td style="background-color:#;"><input type="text" name="new_password" size="43" 
value="<?php echo $query2['password']; ?>" /></td>
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
									</section>
								</article>
							</div>
							<div class="4u 12u(mobile)" id="sidebar">
								<hr class="first" />
								<section>
									<header>
										<h3><a href="#">Latest News</a></h3>
									</header>
									<div class="row 50%">
										<div class="4u">
											<a href="#" class="image fit"><img src="assets/image/1.jpg" alt="" /></a>
										</div>
										<div class="8u">
											<h4>Great Questions to Ask at Career Fairs</h4>
											<p>
												A Better Interview
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="#" class="image fit"><img src="assets/image/4.jpg" alt="" /></a>
										</div>
										<div class="8u">
											<h4>Want to become Mobile Developer</h4>
											<p>
												Training to become Mobile Developer
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="#" class="image fit"><img src="assets/image/9.jpg" alt="" /></a>
										</div>
										<div class="8u">
											<h4>Need someone for Web Designer</h4>
											<p>
												Need some help. Here is the right place for help.
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="#" class="image fit"><img src="assets/image/6.gif" alt="" /></a>
										</div>
										<div class="8u">
											<h4>Job Fair 2018 is coming soon.</h4>
											<p>
												Don't let go this chance in Brunei.
											</p>
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