<?php session_start(); ?>
<?php
  
  $host="127.0.0.1";
  $user="root";
  $pass="";
  $dbname="register";
  $db= new PDO("mysql::host=$host;dbname=$dbname",$user,$pass);
    if(isset($_POST['bulk_delete_submit'])){
        $idArr = $_POST['checked_id'];
        foreach($idArr as $id){
    		$db->exec("delete from activity where activity_id=".$id);
        $db->exec("delete from user_activity where activity_id=".$id);
        }
       
        header("Location:activity_manage.php");
    }
?>

