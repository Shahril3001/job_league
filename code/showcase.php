<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Job League - Show Case</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main2.css" />
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
										<h2>SHOW CASE</h2>
									</header>
									<section>
									<p>Here are our freelance product. You can purchase directly to the original product from the original creator.</p>
										<div id="product-grid">
	<?php
	include 'connection.php';
$query = "SELECT * FROM showcase;";
$result = mysql_query ($query);
if($result === FALSE){
die (mysql_error());
}
while ($item = mysql_fetch_array ($result)){
	?>
		<div class="product-item">
			<div class="product-image"><?php echo "<img src='".$item['showimage']."' width='120px' height='150px' />" ; ?></div>
			<div class="product-name"><?php echo"<a href='showcaseview.php?showcaseID=".$item['showcaseID']."&email=".$item['email']."'><h4>".$item ['showname']."</h4></a>";?></div>
			<div class="product-price">BND$<?php echo $item['showprice']; ?></div>
		</div>
	<?php
	}
	?>
</div>
									</section>
								</article>
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