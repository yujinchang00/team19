<?php
 if(!session_id()){

  session_start();

}
  if(isset($_SESSION[ 'user_name' ] ) ) {
    $login = TRUE;
  }
  else{
    $login=False;
  }
?>