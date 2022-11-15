<?php
#이미지를 버튼으로 바꿔준다!!!  
#대문자를 소문자로

include 'mysql_connect.php';

function img_layout($mysqli, $class){
    $count=0;
    $_sql= "select  mid, rank() over (order by ".$class." desc) as mid_rank from movies_ott limit 4;";
    $res=mysqli_query($mysqli, $_sql);
    echo '<form action="Detail_Page.php" method="get">';
    echo '<div class="div_rank_list"><input type="hidden" name="lan" value="eng"/>';
    while($array=mysqli_fetch_assoc($res)){
        $count+=1;
        

        $img_src_sql="select img_src from movies_poster, movies_ott where movies_poster.mid = ".$array["mid"];
        $img_res=mysqli_query($mysqli, $img_src_sql);

        #foreach(mysqli_fetch_array($img_res) as $rank){   
        $poster_res=mysqli_fetch_array($img_res);
        echo '<div class="div_center">
                <h2 class="text_rank_green">'.(string)$count.'</h2>';       
        echo '<button class="btn_movie_detail" type="submit" name="movie_id" value="'.$array['mid'].'"><img class="img_rank_list" src='.$poster_res["img_src"].' alt="My Image"></button>
        </div>';
        #echo '<button class="btn_movie_detail" type="submit" name="movie_id" value="'.$array['mid'].'"><img class="img_movie_list" src="'.$poster_res["img_src"].'" alt="My Image"></button>';              
    }  
    echo '</div></form>';
 
}       
    #}
    

?>