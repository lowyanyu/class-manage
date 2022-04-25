<?php session_start(); ?>
<?php
$member_id=$_SESSION['member_id'];

$activity_name=$_POST['activity_name'];

$activity_startdate=$_POST['activity_startdate'];

$activity_enddate=$_POST['activity_enddate'];

$activity_subscribe=$_POST['activity_subscribe'];

$conn=new mysqli('localhost','root','','register');

mysqli_set_charset($conn,"utf8");  //編碼


if ($conn->connect_error){
    die("conncet error:".$conn->connect_error);
}
//$sql = "INSERT INTO `activity`(`activity_name`, `activity_startdate`, `activity_enddate`, `activity_id`, `activity_subscribe`) VALUES ('{$activity_name}' ,'{$activity_startdate}','{$activity_enddate}',NULL,'{$activity_subscribe}')";
$sql="INSERT INTO activity(member_id,activity_name,activity_startdate,activity_enddate,activity_id,activity_subscribe) VALUES ('{$member_id}','{$activity_name}' ,'{$activity_startdate}','{$activity_enddate}',NULL,'{$activity_subscribe}')";

if ($conn->query($sql) === TRUE) {
    $url='activity_manage.php';
    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<br /><br />";
}

$sql1="SELECT * FROM activity;";
$result=$conn->query($sql1);

//while ($activity = $result->fetch_Array()){

//}


$conn->close();

?>
