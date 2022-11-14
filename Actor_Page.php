<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Actor_Page</title>
    <link href="Actor_Page.css?ver=1.1" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="div_mainbar">
        <div class="div_logo">
        <hr class="hr_logo">
        <h1 class="h1_logo" onclick="location.href='Main_Page.php'">WHO's TT</h1>
        <hr class="hr_logo">
        </div>
        <div class="div_category">
        <nav class="clearfix">
            <ul class="clearfix">
                <li><a onclick="location.href='Season_Page.php'">SEASONS</a></li>
                <li><a onclick="location.href='Favor_Page.php'">OTT SERVICE</a></li>
                <li><a onclick="location.href='Genre_Page.php'">GENRE</a></li>
                <li><a onclick="location.href='Event_Page_autoscroll.php'">EVENT</a></li>
                <li><a onclick="location.href='Community_Page.php'">COMMUNITY</a></li>
                <li><a class="text_green" onclick="location.href='Actor_Page.php'">KOREAN ACTOR</a></li>
            </ul>
        </nav>
        </div>
        <div class="div_img">
        <img src="images/alarm.png" alt="alarm" width="30px" height="30px">
        <img src="images/user.png" alt="alarm" width="30px" height="30px">
        </div>
    </div>
    <hr>
    <div class="div_inputwrapper">
        <h2 class="h2_title">WHO'S THE KOREAN ACTOR YOU ARE INTERESTED IN?</h2>
        <!-- 배우 이름 입력 폼: 검색한 키워드가 korean_actor DB 필터링용으로 사용됨 -->
        <form action="" method="POST" id="eventForm">
            <input id='searchEvent' type="text" name="input_event" placeholder="search keyword">
            <input id='searchButton' type="submit" value="ENTER" >
        </form>
    </div>
    <hr>
    <div class="div_result">
    <div class="div_movie_section">
        
        <div class="div_horizontal">
            <h2 class="h2_text">THE MOVIES WITH {배우이름 php}</h2> <!-- 배우 이름 출력 -->
            <h2 class="h2_text">19개{php}</h2> <!-- 해당 배우가 출연한 영화 갯수 출력 -->
        </div>
        <!-- TABLE: Korean Actor 
        DATA: name={배우이름}에 해당하는 영화의 포스터 url-->
        <div class="div_movie_list">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/xr3oGJYQWLunuw7L5myo4VT8DBz.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/un8ZDtx2SMwNwXRYy65aItnNjab.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/5YZ8JKV8i437z6O4YQ2IEzcSlsD.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/bGZn5RVzMMXju4ev7xbl1aLdXqq.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/xr3oGJYQWLunuw7L5myo4VT8DBz.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/un8ZDtx2SMwNwXRYy65aItnNjab.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/5YZ8JKV8i437z6O4YQ2IEzcSlsD.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/bGZn5RVzMMXju4ev7xbl1aLdXqq.jpg" alt="My Image">
            <!-- 반복문 종료 -->
        </div>
    </div> 
    <div class="div_stat">
        <div class="div_horizontal_left">
            <h2 class="h2_text">Statistics By Genre</h2>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <div>
            <canvas id="myChart"></canvas>
            </div>
            
            <script>
            // === include 'setup' then 'config' above ===
            // 막대 그래프: 해당 배우의 장르별 영화 갯수
            const labels = ['horror','romance','family','comedy','drama','SF']; //php 장르 라벨링
            const data = {
                labels: labels,
                datasets: [{
                label: 'The number of Film',
                data: [1,4,7,6,2,10],//php 삽입: 각 장르별 영화 갯수: korean_actor table의 genre count 
                backgroundColor: [
                    'rgba(0, 70, 42)',
                    'rgba(0, 70, 42)',
                    'rgba(0, 70, 42)',
                    'rgba(0, 70, 42)',
                    'rgba(0, 70, 42)',
                    'rgba(0, 70, 42)'
                ],
                borderColor: [
                    'rgb(0, 70, 42)',
                    'rgb(0, 70, 42)',
                    'rgb(0, 70, 42)',
                    'rgb(0, 70, 42)',
                    'rgb(0, 70, 42)',
                    'rgb(0, 70, 42)'
                ],
                borderWidth: 1
                }]
            };

            const config = {
                type: 'bar', // 그래프 타입 bar
                data: data,
                options: {
                scales: {
                    y: {
                    beginAtZero: true
                    }
                }
                },
            };

            var myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
            </script> 
        </div>
        <div class="div_horizontal_right">
            <h2 class="h2_text">Statistics By Year</h2>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <div>
            <canvas id="myLineChart"></canvas>
            </div>
            
            <script>
            // === include 'setup' then 'config' above ===
            // 꺾은선 그래프: 해당 배우의 연도별 영화 갯수(추이)
            const labels2 = ['2012','2013','2014','2015','2016','2017','2018','2019','2020','2021']; // php 연도 라벨링
            const data2 = {
                labels: labels2,
                datasets: [{
                label: 'The number of Film',
                data: [1,4,7,6,2,10,1,4,6,3], // php 삽입: 각 연도별 영화 갯수. korean_actor table의 개봉년도 year count 
                backgroundColor: [
                    'rgba(0, 70, 42)',
                    'rgba(0, 70, 42)',
                    'rgba(0, 70, 42)',
                    'rgba(0, 70, 42)',
                    'rgba(0, 70, 42)',
                    'rgba(0, 70, 42)',
                    'rgba(0, 70, 42)',
                    'rgba(0, 70, 42)',
                    'rgba(0, 70, 42)',
                    'rgba(0, 70, 42)',
                ],
                borderColor: [
                    'rgb(0, 70, 42)',
                    'rgb(0, 70, 42)',
                    'rgb(0, 70, 42)',
                    'rgb(0, 70, 42)',
                    'rgb(0, 70, 42)',
                    'rgb(0, 70, 42)',
                    'rgb(0, 70, 42)',
                    'rgb(0, 70, 42)',
                    'rgb(0, 70, 42)',
                    'rgb(0, 70, 42)'
                ],
                borderWidth: 1
                }]
            };

            const config2 = {
                type: 'line', // 그래프 타입 line
                data: data2,
                options: {
                scales: {
                    y: {
                    beginAtZero: true
                    }
                }
                },
            };

            var myLineChart = new Chart(
                document.getElementById('myLineChart'),
                config2
            );
            </script> 
        </div> 
    </div>
  
    
</body>
</html>