<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Job League - Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<p><a href="#" id="logo"><img src="logo.png" width="320px" height="320px"/></a></p>
								<hr />
								<p>Everything is start here.</p>
							</header>
							<footer>
								<a href="#banner" class="button circled scrolly">Start</a>
							</footer>
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

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2>Hi. You're looking at <strong>Job League</strong>.</h2>
						<p>
							We offer you many job for you. Your dream is begin here.
						</p>
					</header>
					<center><table width="100%" height="80%" style="border:hidden;">
    <tr>
      <td align="center">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9.0.0.0" width="720" height="540" ID="sf" VIEWASTEXT>
          <param name="movie" value="pexels-photo-75083-1024x681.swf" />
          <param name="quality" value="high" />
          <param name="wmode" value="transparent" />
          <param name="allowScriptAccess" value="always" />
          <param name="allowFullScreen" value="true" />
          <embed src="assets/pexels-photo-75083-1024x681.swf" quality="high" name="sf" allowScriptAccess="always" loop="true" allowFullScreen="true" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="720" height="540" />
        </object>
      </td>
    </tr>
  </table></br>
  
  <img src="assets/image/banner.png" width="1340px" height="780px"/></br></br>
  <img src="assets/image/banner3.png" width="400px" height="900px"/><img src="assets/image/banner2.png" width="900px" height="900px"/>
  </center></br>
				</section>

			<!-- Carousel -->
				<section class="carousel">
					<div class="reel">
						<?php
							include 'connection.php';
							$query = "SELECT * FROM showcase ORDER BY date DESC LIMIT 8;";
							$result = mysql_query ($query);
							if($result === FALSE){
							die (mysql_error());
							}
							while ($item = mysql_fetch_array ($result)){
							?>
						<article>
							<a href="#" class="image featured"><?php echo "<img src='".$item['showimage']."' width='290' height='200' />" ; ?></a>
							<header>
								<h3><a href="#"><?php echo $item['showname']; ?></a></h3>
							</header>
							<p>BND$<?php echo $item['showprice']; ?></p>
						</article>
<?php
	}
	?>
					</div>
				</section>

			<!-- Main -->
				

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