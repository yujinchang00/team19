<?php 
include('./basic_php_files/session.php'); 
include('./basic_php_files/mysql_connect.php');
if($login){
  $sql= "delete from user_fav_db where user_id in (select user_id from user_db where user_name = '".$_SESSION['user_name']."')";
  $res=mysqli_query($mysqli, $sql);
}

$link = $_POST['fav_n_url'];
header('Location: '.$link);
die();
?>