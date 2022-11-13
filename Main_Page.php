<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Main_Page</title>
    <link href="Main_Page.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- 메인바 -->
    <div class="div_mainbar">
        <div class="div_logo">
            <hr class="hr_logo">
            <h1 class="text_logo">WHO's TT</h1>
            <hr class="hr_logo">
        </div>
        
        
        <div class="div_category">
            <nav class="clearfix">
                <ul class="clearfix">
                    <li><a onclick="location.href='Season_Page.php'">SEASONS</a></li>
                    <li><a href="">OTT SERVICE</a></li>
                    <li><a href="">GENRE</a></li>
                    <li><a href="">EVENT</a></li>
                    <li><a href="">COMMUNITY</a></li>
                    <li><a href="">KOREAN ACTOR</a></li>
                </ul>
            </nav>
        </div>
        

        <div class="div_img">
            <img src="images/alarm.png" alt="alarm" width="30px" height="30px">
            <img src="images/user.png" alt="alarm" width="30px" height="30px">
        </div>

    </div>

    <hr class="hr_division">

    <h1 class="text_main_section">What should I watch?</h1>

    <!-- 인지도에 따른 영화 순위 -->
    <div class="div_ott_section">
        <h2 class="text_subtitle">AWARENESS</h2>
    </div>
    
    <div class="div_rank_list_text">
        <h2 class="text_rank_green">1</h2>
        <h2 class="text_rank_green">2</h2>
        <h2 class="text_rank_green">3</h2>
        <h2 class="text_rank_green">4</h2>
    </div>
    <!-- 
        데이터: 영화 포스터 이미지
        테이블, 필드값: ex. image TABLE, image_url
        데이터가 들어갈 위치: <img class="img_rank_list" src="[실제 데이터]" alt="My Image">
        비고: X
     -->
    <div class="div_rank_list">
        <img class="img_rank_list" src="images/movie1.png" alt="My Image">
        <img class="img_rank_list" src="images/movie1.png" alt="My Image">
        <img class="img_rank_list" src="images/movie1.png" alt="My Image">
        <img class="img_rank_list" src="images/movie1.png" alt="My Image">
    </div>


    <!-- 별점에 따른 영화 순위 -->
    <div class="div_ott_section">
        <h2 class="text_subtitle">RATING</h2>
    </div>

    <div class="div_rank_list_text">
        <h2 class="text_rank_green">1</h2>
        <h2 class="text_rank_green">2</h2>
        <h2 class="text_rank_green">3</h2>
        <h2 class="text_rank_green">4</h2>
    </div>
    <!-- 
        데이터: 영화 포스터 이미지
        테이블, 필드값: ex. image TABLE, image_url
        데이터가 들어갈 위치: <img class="img_rank_list" src="[실제 데이터]" alt="My Image">
        비고: X
     -->
    <div class="div_rank_list">
        <img class="img_rank_list" src="images/movie1.png" alt="My Image">
        <img class="img_rank_list" src="images/movie1.png" alt="My Image">
        <img class="img_rank_list" src="images/movie1.png" alt="My Image">
        <img class="img_rank_list" src="images/movie1.png" alt="My Image">
    </div>


    <!-- 수익에 따른 영화 순위 -->
    <div class="div_ott_section">
        <h2 class="text_subtitle">PROFIT</h2>
    </div>

    <div class="div_rank_list_text">
        <h2 class="text_rank_green">1</h2>
        <h2 class="text_rank_green">2</h2>
        <h2 class="text_rank_green">3</h2>
        <h2 class="text_rank_green">4</h2>
    </div>
    <!-- 
        데이터: 영화 포스터 이미지
        테이블, 필드값: ex. image TABLE, image_url
        데이터가 들어갈 위치: <img class="img_rank_list" src="[실제 데이터]" alt="My Image">
        비고: X
     -->
    <div class="div_rank_list">
        <img class="img_rank_list" src="images/movie1.png" alt="My Image">
        <img class="img_rank_list" src="images/movie1.png" alt="My Image">
        <img class="img_rank_list" src="images/movie1.png" alt="My Image">
        <img class="img_rank_list" src="images/movie1.png" alt="My Image">
    </div>

    

</body>
</html>