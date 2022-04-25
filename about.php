<?php session_start(); ?>
<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>About Us</title>
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
	 		text-align: left;
	 	}
	 	table {
    		border-collapse: collapse;
		}

		table, td, th {
    		border: none;
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
							<h2>About Us</h2>
						</header>
						<div class="12u">
							<table>
	  							<tr>
								    <td><p>Name：姜之敏<br>
										   Class：四資管二<br>
										   Number：B10409036<br>
	                                       Job：前端</p><br></td>
								    
								    <td><p>Name：邱于珊<br>
										   Class：四管理二<br>
										   Number：B10433021<br>
	                                       Job：前端</p><br></td>
								 </tr>
								 <tr>
								    <td><p>Name：康銘麟<br>
										   Class：四不分二丁<br>
										   Number：B10430331<br>
	                                       Job：前端</p><br></td>
								    
								    <td><p>Name：劉彥妤<br>
										   Class：四資管二<br>
										   Number：B10409031<br>
	                                       Job：後端</p><br></td>
								 </tr>
								 <tr>
								    <td><p>Name：詹祐安<br>
										   Class：四資管二<br>
										   Number：B10409007<br>
	                                       Job：後端</p><br></td>
								    
								    <td><p>Name：林奕君<br>
										   Class：四不分<br>
										   Number：B10430230<br>
	                                       Job：後端</p><br></td>
								 </tr>
							</table>
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