<?php include('./basic_php_files/session.php'); ?>

<?php 


function initial_post_community($mysqli, $title, $content, $mid){

    $find_id_sql="select user_id from user_db where user_name ='".(string)$_SESSION["user_name"]."'";
    $id_res=mysqli_query($mysqli, $find_id_sql);
    while($id=mysqli_fetch_assoc($id_res)) $user_id=$id["user_id"];
    

    $sql_board="insert into user_board (title, content, mid) values ('".$title."','".$content."''".$mid."');";
    $find_board_id="select board_id from user_board where content='".$content."';";

    

    $create_board=mysqli_query($mysqli, $sql_board);
    $find_board_res=mysqli_query($mysqli, $find_board_id);

    while($row=mysqli_fetch_assoc($find_board_res)){
        $board_id=$row["board_id"];
    }

    $sql_user_board="insert into user_db (user_id, user_name, board_id) values (' ".$user_id."','".(string)$_SESSION["user_name"]."','".
        $board_id."');";

    $create_user_board=mysqli_query($mysqli, $sql_user_board);


}
?>