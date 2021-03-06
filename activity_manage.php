<?php session_start(); ?>
<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Activities</title>
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
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.min.css"/>
    <script type="text/javascript">
    function deleteConfirm(){
        var result = confirm("Are you sure to delete?");
        if(result){
            return true;
        }else{
            return false;
        }
    }
    $(document).ready(function(){
        $('#select_all').on('click',function(){
            if(this.checked){
                $('.checkbox').each(function(){
                    this.checked = true;
                });
            }else{
                $('.checkbox').each(function(){
                    this.checked = false;
                });
            }
        });
        
        $('.checkbox').on('click',function(){
            if($('.checkbox:checked').length == $('.checkbox').length){
                $('#select_all').prop('checked',true);
            }else{
                $('#select_all').prop('checked',false);
            }
        });
    });
    </script>
</head>

<body class="index">
    <div id="page-wrapper">

        <!-- Header -->
        <?php include("menu.php");?>

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
                    <h2>ACTIVITIES</h2>
                </header>
                <!-- <p>This is <strong>Twenty</strong>, a free
                    <br /> responsive template
                    <br /> by <a href="http://html5up.net">HTML5 UP</a>.</p>
                <footer>
                    <ul class="buttons vertical">
                        <li><a href="#main" class="button fit scrolly">Tell Me More</a></li>
                    </ul>
                </footer> !-->

                <?php
                $host="127.0.0.1";
                $user="root";
                $pass="";
                $dbname="register";
                $db= new PDO("mysql::host=$host;dbname=$dbname",$user,$pass);
                $sql="SELECT a.*, IFNULL(u.num, 0) AS cal FROM activity AS a 
                        LEFT JOIN(
                            SELECT COUNT(*) AS num , activity_id FROM user_activity GROUP BY activity_id 
                        ) as u ON a.activity_id = u.activity_id
                        GROUP BY a.activity_id";
                $result=$db->query($sql);
                $result->setfetchmode(PDO::FETCH_ASSOC);
                ?>
                    
                <form name="form" action="delete_checkbox.php" method="post" onsubmit="return deleteConfirm();"/>
                
                    <table style="margin:auto;">
                        <thead>
                        <tr>
                            <th>Select</th>        
                            <th> </th>
                            <th>????????????</th>
                            <th>??????????????????</th>
                            <th>??????????????????</th>
                            <th>????????????</th>
                            <th>????????????</th>
                        </tr>
                        </thead>
                        <?php
                        while( $row=$result->fetch())
                        {
                        ?>
                        <tr>
                            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['activity_id']; ?>"/></td>        
                            <td><?php echo $row['activity_id']; ?>.</td>
                            <td><?php echo $row['activity_name']; ?></td>
                            <td><?php echo $row['activity_startdate']; ?></td>
                            <td><?php echo $row['activity_enddate']; ?></td>
                            <td><?php echo $row['activity_subscribe']; ?></td>
                            <td><?php echo $row['cal']; ?></td>
                        </tr> 
                        <?php 
                        }
                        $db=null;
                        ?>
                 </table> 
                        <br/>
                        <h6 align="left"><strong>Select All <input type="checkbox" name="select_all" id="select_all" value=""/></strong></h6>
                        <br/>   
                        <input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="Delete"/>   
                </form>

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