<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$name = $_POST['name'];
$sid = $_POST['sid'];
$birth = $_POST['birth'];
$gender = $_POST['gender'];
$permission = $_POST['permission'];
$conn = new mysqli("localhost", "root", "", "register");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if(($id != null) && ($pw != null) && ($pw2 != null ))
{
        //新增資料進資料庫語法
        $sql =  "INSERT INTO student(member_id,member_account,member_password,member_name,member_studentid,member_birthday,member_gender,permission) VALUES (NULL, '$id', '$pw', '$name', '$sid', '$birth', '$gender', '$permission')";
      //  $sql = "insert into member_table (username, password) values ('$id', '$pw')";
        if( $pw != $pw2){
                echo '驗證密碼不相同';
                echo '<META HTTP-EQUIV="refresh" CONTENT="15; url=signup.php">';

        }
        else if(mysqli_query($conn,$sql))
        {
           //     mysqli_query($con,$sql);
                $url='signin.php';
                echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
  //              echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
        else
        {
                echo '新增失敗!';
                echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
//                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
    //    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>