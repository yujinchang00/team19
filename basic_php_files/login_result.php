<?php 
  include 'session.php';
  include "mysql_connect.php";
  $login_sql="select _password from user_db where user_name = '".$_POST["user_name"]."'";
  $res=mysqli_query($mysqli, $login_sql);
  if(!empty($pass=mysqli_fetch_assoc($res)) && !$login){
    $username = $_POST[ 'user_name' ];
    $password = $_POST[ '_password' ];
    if ( $password == $pass['_password'] ) { 
      $_SESSION[ 'user_name' ] = $username;
      echo '<h1>Hi!</h1>';
    } else {
      echo '<p>사용자 이름 또는 비밀번호가 틀렸습니다.</p>';
    }
  }
  $link = $_POST['login_n_url'];
  header('Location: ../'.$link);
  die();
?>