<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.min.css"/>
<script type="text/javascript">
function block(){
	alert("Please login to use this function!");	
}
</script>

<header id="header" class="alt">
    <h1 id="logo"><a href="">ACtivities <span>MANAGEMENT</span></a></h1>
    <nav id="nav">
        <ul>
            <li class="current"><a href="index.php">HOME</a></li>
            <li class="submenu">
                <a href="#">Layouts</a>
                <ul>             
                    <li><a href="information.php">Information</a></li>
                    <li class="submenu"><a href="#">Activities</a>
                        <ul>
                            <li><a href="activity_show.php">Recent Activity</a></li>
                            <li><a href="#" onclick="block();">Create New Activitiy</a></li>
                        </ul>
                    </li>
                    <li><a href="#" onclick="block();">Feedback</a></li>
                    <li class="submenu">
                        <a href="#">Contact Us</a>
                        <ul>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="current"><a href="signin.php"><strong>SIGN IN</strong></a></li>
        </ul>
    </nav>
</header>