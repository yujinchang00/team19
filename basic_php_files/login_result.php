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
      $login_sql="select _password from user_db where user_name =".$_POST["user_name"];
      $res=mysqli_query($mysqli, $login_sql);
      if(empty($pass=mysqli_fetch_assoc($res))){
        echo '<h1>존재하지 않는 아이디입니다.</h1>';
      }
      else{
        if ( $login ) {
          echo '<h1>이미 로그인하셨습니다.</h1>';
        } else {
          $username = $_POST[ 'user_name' ];
          $password = $_POST[ '_password' ];
          if ( $password == $pass ) { 
            $_SESSION[ 'user_name' ] = $username;
            echo '<h1>Hi!</h1>';
          } else {
            echo '<p>사용자 이름 또는 비밀번호가 틀렸습니다.</p>';
          }
       }
     }
    ?>
  </body>
</html>