<?php session_start(); ?>
<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Feedback</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <style>
        div.inner {
            height: 90%;
            width: 90%;
            top: 0;
            left: 0;
        }
        
        p {
            text-align: left;
        }
        h1 {
            text-align: left;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body class="index">
    <div id="page-wrapper">

        <!-- Header -->
        <?php include("menu.php"); ?>

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
                    <h2>Feedback</h2>
                </header>

                <?php
                $host="127.0.0.1";
                $user="root";
                $pass="";
                $dbname="register";
                $db= new PDO("mysql::host=$host;dbname=$dbname",$user,$pass);
                $sql="select * from feedback";
                $result=$db->query($sql);
                $result->setfetchmode(PDO::FETCH_ASSOC);
                ?> 

                <?php
                while( $row=$result->fetch())
                {
                ?>     
                    <h1><?php echo $row['feedback_activity']; ?></h1>
                    <p><?php echo $row['feedback_content']; ?></p>
                    <br/><hr/>
                <?php 
                }
                $db=null;
                ?>
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