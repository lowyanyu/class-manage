<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sign Up</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<style>
			::-webkit-datetime-edit { padding: 2em; padding-bottom: 0.5em; padding-top: 0.5em; }
			::-webkit-datetime-edit-text { color: white; padding: 0 0.3em; }
			::-webkit-datetime-edit-month-field { color: white; }
			::-webkit-datetime-edit-day-field { color: white; }
			::-webkit-datetime-edit-year-field { color: white; }
			#input[type="date"]:after{
				border-color: #83d3c9;
			}
		</style>
	</head>
	<body class="index">
		<div id="page-wrapper">
			<!-- Header -->
				<?php include("menu_before_login.php"); ?>

			<!-- Banner -->
				<section id="banner">

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
					<div class="inner">
					<header>
							<h2>SIGN UP</h2>
					</header>
					<form class="header__form" name="form" method="post" action="register_finish.php">
					
						Username : <br/>
						<input class="header__form__input" type="text" name="id" value=""/><br/>
						Password : <br/>
						<input class="header__form__input" type="password" name="pw" value=""/><br/>
						Enter your password again : <br/>
						<input class="header__form__input" type="password" name="pw2" value=""/><br/>
						Name : <br/>
						<input class="header__form__input" type="text" name="name" value=""/><br/>
						Student ID : <br/>
						<input class="header__form__input" type="text" name="sid" value=""/><br/>
						Birthday : <br/>
						<input class="header__form__input" type="date" name="birth" style="background-color: transparent; border: solid 1px rgba(124, 128, 129, 0.2); "/><br/>
						<br/>
						Gender : <br/>
						<input class="header__form__input" type="radio" name="gender" value="1" checked/> Male
						<input class="header__form__input" type="radio" name="gender" value="0"/>Female<br/>
						<br/>
						Permission : <br/>
						<input class="header__form__input" type="radio" name="permission" value="1"/> Admin
						<input class="header__form__input" type="radio" name="permission" value="0" checked/>Member<br/>
						<br/>

  					<input type="submit" name="button" value="SUBMIT" onclick="location.href='signin.php'">
  					
					</form>
					</div>

				</section>		
		</div>

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