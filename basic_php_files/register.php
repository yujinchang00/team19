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
      $register_sql="insert into user_db (user_name, _password, user_email) values('".$_POST["user_name"]."','".$_POST["_password"]."','".$_POST["user_email"]."')";
      $user=$_POST["user_name"];
      $check_name_sql="select * from user_db where user_name = '".$user."'";
      
      $check_res=mysqli_query($mysqli, $check_name_sql);
      if(!empty(mysqli_fetch_array($check_res))){
        echo '<h1>이미 존재합니다.</h1>';
      }
      elseif($_POST["_password"]!=$_POST["check_password"]){
        echo '<h1>비밀번호를 확인하세요.</h1>';
      }
      else{
        $_SESSION[ 'user_name' ]=$_POST["user_name"];        
        $res=mysqli_query($mysqli, $register_sql);
        echo '<h1>회원가입이 되었습니다.</h1>';
     }
    ?>
  </body>
</html>
