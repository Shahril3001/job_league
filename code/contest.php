<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Job League - Project</title>
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
										<h2>CONTEST</h2>
									</header>
									<p> Freelance Contests

On Freelancer.com creating a contest lets you see hundreds of unique ideas and only pay for the one you love. We provide access to over 27.9 million freelancers that are skilled in areas such as Logo Design, Graphic Design, Website Design, Business Card Design, Facebook & social media branding and much more. There is no need for you to place job ads or provide work space, simply post a contest and we provide you the best solutions.</br></br>

Getting started is easy! Once your contest is posted you can see the entries that freelancers submit, rate them and at the end of the contest choose the winner.</br></br>

Get started now - <a href="visitorlogin.php">Post a Contest</a></p>
									<section>
										    <?php
include 'connection.php';
$query = "SELECT * FROM projectdemo;";
$result = mysql_query ($query);
if($result === FALSE){
die (mysql_error());
}

echo "<center><table width=1200px>";
echo "<tr>
<th width=20>#</th>
<th></th>
<th>Quest Detail</th>
<th>Action</th>
</tr>";

while ($item = mysql_fetch_array ($result)){

echo "<tr>
<td width=50><center>".$item ['projectID']."</center></td>
<td width=250>
<b>Name: </b>".$item ['hirername']."</br>
<b>Email: </b>".$item ['pemail']."</br>
<b>Phone Number: </b>".$item ['pcontact']."</br>
<b>Date Create: </b> ".$item ['date']." </br>

<td width=350><h3>".$item ['pname']."</h3></br>".$item ['pdetail']."</br></br></br><b>Budget:</b> BND$".$item ['pbudget']."</td>
<td width=200><center>
<p><a href='visitorlogin.php'><input type='button' name='apply' value='Join'></a></p></br></center>
</td>
</tr>
";
}
echo "</table></br></center>";
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