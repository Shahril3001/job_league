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
								<h1>Job League</h1>
							</header>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index1.php">Home</a></li>
								<li><a href="applicantlist.php">Applicant List</a></li>
								<li><a href="showcase(a).php">Show Case</a></li>
								<li><a href="project(a).php">Project</a></li>
								<li><a href="feedback.php">Feedback</a></li>
			<li><a href="#" onclick="myFunction()">Sign Out</a></li>
<script>
				function myFunction() {
				var x;
				if (confirm("Are you sure to log out?") == true) {
				window.location="logout1.php";
				} else {}
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
										<h2>APPLICANT LIST</h2>
									</header>
									</br>
									<p></p>
									<?php
include 'connection.php';

$query = "SELECT * FROM customer";
$result = mysql_query ($query);

if($result === FALSE){
die (mysql_error());
}

echo "<table width=1050>";
echo "<tr>
<th>No.</th>
<th>Account Image</th>
<th>Fullname</th>
<th>Phone Number</th>
<th>Email</th>
<th>Action</th>
</tr>";

while ($customer = mysql_fetch_array ($result)){
echo "<tr>
<td>".$customer ['customerID']."</td>
<td width='200px'><img src= '".$customer['cimage']."' width='150px' height='150px' /></td>
<td>".$customer ['fullname']."</td>
<td>".$customer ['phone']."</td>
<td>".$customer ['email']."</td>
<td>
<center><a href='viewprofile.php?customerID=".$customer['customerID']."'><input type='button' name='apply' value='View Profile'></a></br></br>
<a href='viewprofile.php?customerID=".$customer['customerID']."'><input type='button' name='apply' value='Hire'></a></center>
</td>

</tr>";
}

echo "</table>";
?>
</center>
</br>
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