<?php 
  include 'session.php';
  include "mysql_connect.php";
  if($login){
    session_destroy();
  }
  $link = $_POST['logout_n_url'];
  header('Location: ../'.$link);
  die();
?>
<!--
<!doctype html>
<html lang="ko">
  <head>  
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <?php
      #if($login) {echo '<h2>로그아웃실패</h2>';} else {echo '<h2>로그아웃 성공</h2>';}
    ?>
  </body>
</html>
-->