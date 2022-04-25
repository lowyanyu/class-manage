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
    function participateConfirm(){
        var result = confirm("Are you sure to done this action?");
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
        <?php include("menu.php"); ?>

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
                $sql="select * from `activity`";
                $result=$db->query($sql);
                $result->setfetchmode(PDO::FETCH_ASSOC);

                ?>
                    
                <form name="form" action="participate_checkbox.php" method="post" onsubmit="return participateConfirm();"/>
                    <table style="margin:auto;">
                        <thead>
                        <tr>
                            <th>Select</th>        
                            <th> </th>
                            <th>活動名稱</th>
                            <th>活動起始日期</th>
                            <th>活動結束日期</th>
                            <th>活動內容</th>
                            <th>報名人數</th>
                            <th>是否參加</th>
                            <th></th>
                        </tr>
                        </thead>
                        <?php
                        while( $row=$result->fetch())
                        {
                            /* 參加總數和是否參加*/
                            $sql="SELECT *  FROM user_activity WHERE activity_id =".$row['activity_id'];
                            $column_count=($db->query($sql))->rowCount();
                            $sql="SELECT * FROM user_activity WHERE activity_id =".$row['activity_id']
                            ."&& username ='".$_SESSION['username']."'";
                            $participate=($db->query($sql))->rowCount();
                            $if_participate =($participate!=0)?("已參加"):("未參加");
                            $sql="SELECT id FROM user_activity WHERE activity_id =".$row['activity_id']
                            ."&& username ='".$_SESSION['username']."'";
                            $r=$db->query($sql);
                            $ua=$r->fetch(PDO::FETCH_ASSOC);
                            $ua_id=$ua['id']; 
                        ?>
                        <tr>
                            <?php
                            if($participate==0){
                            ?>
                            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['activity_id']; ?>"/></td>   
                            <?php }else{ ?>
                            <td></td>
                            <?php } ?>    
                            <td><?php echo $row['activity_id']; ?>.</td>
                            <td><?php echo $row['activity_name']; ?></td>
                            <td><?php echo $row['activity_startdate']; ?></td>
                            <td><?php echo $row['activity_enddate']; ?></td>
                            <td><?php echo $row['activity_subscribe']; ?></td>
                            <td><?php echo $column_count;?></td>
                            <td><?php echo $if_participate;?></td>
                            <?php
                            if($participate!=0){
                            ?>
                            <td><button type="submit" class="button special" style="min-width:100px; line-height:inherit; background:#db6b67; border-color:#db6b67;" name="cancel_participate_submit" value="<?php echo $ua_id; ?>">CANCEL</button></td>
                            <?php }else{ ?>
                            <td></td>
                            <?php } ?> 
                        </tr> 
                        <?php 
                        }
                        $db=null;
                        ?>
                 </table> 
                        <br/>
                        <h6 align="left"><strong>Select All <input type="checkbox" name="select_all" id="select_all" value=""/></strong></h6>
                        <br/>   
                        <input type="submit" class="btn btn-danger" name="bulk_participate_submit" value="participate"/>   
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