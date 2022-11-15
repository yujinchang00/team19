<?php

include 'mysql_connect.php';

function img_layout($mysqli, $class){
    
    $_sql="SELECT  mid, RANK() OVER (ORDER BY" .$class."popularity DESC) AS mid_rank from movies_ott LIMIT 4;";
    $res=mysqli_query($mysqli, $_sql);
    echo '<div class="div_rank_list">';

    while($rank=mysqli_fetch_array($res)){
        $img_src="SELECT poster from poster_db, movies_ott WHERE id IN $rank";
        echo '<img class="img_rank_list" src=' . $img_src . 
        'alt="My Image" onclick="location.'."href='Detail_Page.php'".'">';
            
        
    }
    echo '</div>';

    



}
?>