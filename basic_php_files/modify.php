<?php 
  include 'session.php';
  include "mysql_connect.php";
?>
<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <?php
      $modify_sql="update user_db set user_name='".$_POST["user_name"]."', _password='".$_POST["_password"]."', user_email ='".$_POST["user_email"].
      "' where user_name='".$_SESSION[ 'user_name' ]."'";
      
      $res=mysqli_query($mysqli, $modify_sql);
      echo "회원정보가 변경되었습니다.";

      $_SESSION[ 'user_name' ]=$_POST["user_name"];
      $link = $_POST['modify_n_url'];
      header('Location: ../'.$link);
      die();
?>      

  </body>
</html>
