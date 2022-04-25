<?php 

$conn=new mysqli('localhost','root','','register');
$sql1="SELECT permission FROM student where member_account='" .$_SESSION['username']. "'";
$result=$conn->query($sql1);
$row = mysqli_fetch_array($result);

?>

<header id="header" class="alt">
    <h1 id="logo"><a href="">Activities <span>Management</span></a></h1>
    <!--manage-->
    <?php
    	if($row['permission']=='1'){
    ?>
    <nav id="nav">
        <ul>
            <li class="current"><a href="index2.php">Home</a></li>
            <li class="submenu">
                <a href="#">Layouts</a>
                <ul>             
                    <li><a href="information.php">Information</a></li>

                    <li class="submenu"><a href="#">Activities</a>
                        <ul>
                            <li><a href="activity_manage.php">Recent Activity</a></li>
                            <li><a href="activity_insert.php">Create New Activitiy</a></li>
                        </ul>
                    </li>

                    <li><a href="feedback_show.php">Feedback</a></li>
                 
                    <li class="submenu">
                        <a href="#">Contact Us</a>
                        <ul>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </li>
                </ul>
                </li>
            <?php
                if(isset($_SESSION['username'])){
                if($_SESSION['username']!=null){
            ?>
            <li class="current"><a href="logout.php">Log Out</a></li>
            <li><a href="profile.php" class="button special">
                <?php
                    echo $_SESSION['username'];     
                    //將資料庫裡的所有會員資料顯示在畫面上
                    //$sql = "SELECT * FROM future";
                    //$result = $conn->query($sql);
                    }}
                    else{
                        echo '<a href="signin.php"><strong>SIGN IN</strong></a>';
                    }
                ?>
            </a></li>
        </ul>
    </nav>
    <?php }else{ ?> 
        <nav id="nav">
        <ul>
            <li class="current"><a href="index2.php">Home</a></li>
            <li class="submenu">
                <a href="#">Layouts</a>
                <ul>             
                    <li><a href="information.php">Information</a></li>

                    <li><a href="feedback.php">Feedback</a></li>

                    <li class="submenu"><a href="#">Activities</a>
                        <ul>
                            <li><a href="activity.php">Recent Activity</a></li>
                        </ul>
                    </li>
                 
                    <li class="submenu">
                        <a href="#">Contact Us</a>
                        <ul>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </li>
                </ul>
             </li>
            <?php
                if(isset($_SESSION['username'])){
                if($_SESSION['username']!=null){
            ?>
            <li class="current"><a href="logout.php">Log Out</a></li>
            <li><a href="profile.php" class="button special">
                <?php
                    echo $_SESSION['username'];     
                    //將資料庫裡的所有會員資料顯示在畫面上
                    //$sql = "SELECT * FROM future";
                    //$result = $conn->query($sql);
                    }}
                    else{
                        echo '<a href="signin.php"><strong>SIGN IN</strong></a>';
                    }
                ?>
            </a></li>
        </ul>
    </nav>
    <?php }?>
</header>
