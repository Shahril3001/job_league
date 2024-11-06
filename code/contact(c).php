<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Right Sidebar - Helios by HTML5 UP</title>
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
										<h2>CONTACT US</h2>
									</header>
									<p>If you have any question, you can submit the	message by fill in your name and email below.</p>
									<section>
										  <?php
											$email=$_GET['email'];
											echo "<form action='contact(c)2.php?email=".$email."' method='post' enctype='multipart/form-data'>";
											?>
											<table width="620" height="318">
												<tr>
												<input type="hidden" name="date" value="<?php echo date('Y-m-d g:i:s');?>"/>
												<th width="128">Name:</th>
												<td width="365" style="background-color:white;"><input type="text" name="fullname" placeholder="(Required)"/></td></tr>
												<tr>
												<th>Email:</th>
												<td style="background-color:white;"><input type="text" name="email" placeholder="(Required)"/></td></tr>
												<tr>
												<th height="135">Message:</th>
												<td style="background-color:white;"><textarea rows="5" cols="45" name="feedback"></textarea></td>
												</tr>
												<tr>
												<td style="background-color:white;" colspan=2><center><input type="submit" name="submit" value="Submit">
												<script type="text/javascript">Your feedback have been send.</script>
												<input type="reset" name="reset" value="Clear">
												<script type="text/javascript">All are have been cleared.</script>
												</center></td>
												</tr>
											</table>
										</form>	
									</section>
								</article>
							</div>
							<div class="4u 12u(mobile)" id="sidebar">
								<hr class="first" />
								<section>
									<header>
										<h3><a href="#">Our Address</a></h3>
									</header>							
										<h3>Job League</h3>
								<p> No 4, Simpang 456-25, Kg Beribi,</br>
								Bandar Seri Begawan BE3188, </br>
								Negara Brunei Darussalam</br>
								Tel, : 242 0939 Fax, : 242 0938</p>
						<br />
          <h3>Our Location</h3></br>
          <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.305350529791!2d114.8950328231356!3d4.888447434401729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32226004319b508d%3A0x5365620940edb73a!2sTop+Folk+Eatery!5e0!3m2!1sms!2sbn!4v1523316951716" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></p>
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
											<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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