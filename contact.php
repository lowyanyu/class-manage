<?php session_start(); ?>
<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Contact</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	 	<style>
	 	div.inner{
	 		height: 90%;
	 		width:90%;
	 		top:0;
	 		left:0;
	 	}
	 	p {
	 		text-align: center;
	 	}
	 	</style>
	</head>
	<body class="index">
		<div id="page-wrapper">

			<!-- Header -->
			<?php
                if(isset($_SESSION['username'])){
            		include("menu.php");
            	}else{
            		include("menu_before_login.php");
            	}
            ?>

			<!-- Banner -->
				<section id="banner">

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
					<!--中間框框-->
					<div class="inner">
						<header>
							<h2>CONTACT</h2>
						</header>
							<p>TEL : 02-1180-1180<br>
							   TAX : 02-1180-1180<br></p>
							  
						<div class="row 50%">

							<div class="col-md-8" >
								
							</div>
							<div class="12u">
								<div class="col-md-8" > 
                    			<!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! --> 
                    				<iframe  align="center" width="900" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&ie=UTF8&ll=25.013250, 121.541119&spn=56.506174,79.013672&t=m&z=15&output=embed"></iframe> 
                				</div>
							</div>
						</div>
					</div>

				</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>