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
										<h2>ABOUT US</h2>
									</header>
									<p></p>
									<section>
										 <h3>Company Details</h3>
									<p>The company exist solely to providing a job opportunity to all people by using IT as their main skills, basically anything involve working or job opportunity that are related to IT skills. The reason why this company exist is because Brunei Darussalam has a very limited Information Technology Company but there are a lot of people with IT education background. To even the ratio, we create the company and the website called Job League where we connect any customer directly to the employee as a third party.</p></br>
									<h3>Mission</h3>
									<p>Our mission for this businesses is to gives chances and opportunities to all people to find their dream jobs, to showcase their masterpiece and gain experience from real life works. But it is limited to Information Technology skills. By creating Ranking system, it can overcome where people who doesn’t have any IT Background to be acknowledge by other people based on their talent alone. Other than that, we also help any company who need help by promoting their project and which also a chances for people to gain experience and income.</p></br>
									<h3>Vision</h3>
									<p>Our vision is that anyone can achieve their goals and be acknowledge by other people with their skills and effort alone, less unemployed people within country, or even worldwide and to make the Employee more prepared with real experience and skills before seeking IT jobs in companies.</p></br>
									
									<h3>Goals and Objectives </h3>
									<ul>
									<li><b>Efficiency</b> – make use of IT background for someone who need it.</li>
									<li><b>Growth</b> – success growth for people and any company, basically it is a win-win situation where they help each other to create the project.</li>
									<li><b>Retention</b> - it is to control the rate of unemployed people by providing them opportunities.</li>
									<li><b>Profitability</b> – to gain profit while helping people to connect with each other and many other possible revenue streams. For instance, ads, tax, fees and etc.</li>
									</ul>
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