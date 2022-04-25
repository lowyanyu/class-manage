<?php session_start();

$feedback_activity=$_POST['feedback_activity'];

$feedback_content=$_POST['feedback_content'];

$conn=new mysqli('localhost','root','','register');

mysqli_set_charset($conn,"utf8");  //編碼


if ($conn->connect_error){
    die("conncet error:".$conn->connect_error);
}
//$sql = "INSERT INTO `activity`(`activity_name`, `activity_startdate`, `activity_enddate`, `activity_id`, `activity_subscribe`) VALUES ('{$activity_name}' ,'{$activity_startdate}','{$activity_enddate}',NULL,'{$activity_subscribe}')";
$sql="INSERT INTO feedback(feedback_activity,feedback_content) VALUES ('{$feedback_activity}' ,'{$feedback_content}')";

if ($conn->query($sql) === TRUE) {
    $url='response.php';
    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<br /><br />";
}

$sql1="SELECT * FROM feedback;";
$result=$conn->query($sql1);

//while ($activity = $result->fetch_Array()){

//}


$conn->close();

?>