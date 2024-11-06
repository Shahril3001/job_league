<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Job League - Administrator Login</title>
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
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About Us</a></li>
								<li>
									<a href="#">Login</a>
									<ul>
										<li><a href="adminlogin.php">Admin Login</a></li>
										<li><a href="visitorlogin.php">Freelancer Login</a></li>
										<li><a href="hirerlogin.php">Hirer Login</a></li>
									</ul>
								</li>
								<li><a href="showcase.php">Show Case</a></li>
								<li><a href="project.php">Project</a></li>
								<li><a href="contest.php">Contest</a></li>
								<li><a href="contact.php">Contact Us</a></li>
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
										<h2>SHOWCASE VIEW</h2>
									</header>
									<p></p>
									<section>
										 <?php
include 'connection.php';


$email=$_GET['email'];
$query = "SELECT * FROM customer WHERE email='$email'";
$result = mysql_query($query);

$showcaseID=$_GET['showcaseID'];
$query1 = "SELECT * FROM showcase WHERE showcaseID='$showcaseID'";
$result1 = mysql_query($query1);

while($item = mysql_fetch_array($result)){
while($item1 = mysql_fetch_array($result1)){
	echo "
	<table>
	<tr>
	<th>Product Detail</th>
	</tr>
	<tr>
	<td width=250px><center>
	<img src='".$item1['showimage']."' width='400px' height='200px' /></br>
	".$item1['showname']."</br>
	BND$".$item1['showprice']."</center></td>
	</tr>
	<tr>
	
	<td colspan=3>
	<center>
	<p align=right><input type='button' onClick='window.print()' value='Print'>
	<a href='hirerlogin.php'><input type='button' value='Buy'></a></p></center>
<script>function goBack(){window.history.back();}</script></td>
	</tr>
	
	</table></br>";
	?>
	
	<?php
}
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