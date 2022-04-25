<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db($connection, "register");
// Storing Session
$user_check=$_SESSION['username'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection, "SELECT member_account FROM student WHERE member_account='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['member_account'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: signin.php'); // Redirecting To Home Page
}
?>