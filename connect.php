<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php session_start();
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$pw = $_POST['pw'];
//搜尋資料庫資料
//$result = mysql_query("SELECT * FROM Persons");
//$sql = "SELECT * FROM `student` WHERE `member-account`=`$id` ;";
$sql = "SELECT * FROM student where member_account = '$id'";

//$sql = "SELECT `member_account`,member_password FROM `student`";        

$result = $conn->query($sql);

// if(!$result) {
//     echo $conn->error;
//     exit;
// }

$row = $result->fetch_assoc();
if(($id != null) && ($pw != null) && ($row['member_account'] == $id) && ($row["member_password"] == $pw))
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $id;
        $_SESSION['member_id'] = $row['member_id'];
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index2.php>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=signin.php>';
}
?>