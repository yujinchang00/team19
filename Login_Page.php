<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Login_Page</title>
    <link href="Login_Page.css" rel="stylesheet" type="text/css" />
    <?php include('./basic_php_files/session.php'); ?>
</head>
<body>
    
    <div class="div_login_wrapper">
        <div class="div_login_section">

            <!-- 오른쪽 상단의 X 버튼 -->
            <img class="img_btn_close" src="images/btn_close.png" alt="close">
            
            <div class="div_vertical_middle">                
                <hr class="hr_division">
                <h2 class="text_gray">WELCOME TO</h2>

                <div class="div_logo">
                    <hr class="hr_logo">
                    <h1 class="text_green">WHO's TT</h1>
                    <hr class="hr_logo">
                </div>

                <hr class="hr_division">

                <!-- id 입력 -->
                <div class="div_horizontal">
                    <h2 class="text_green">ID</h2>
                    <form>
                        <input class="input_login" type="text" size="15" placeholder="사용자의 ID를 입력하세요.">
                    </form>
                </div>
                
                <!-- pw 입력 -->
                <div class="div_horizontal">
                    <h2 class="text_green">PW</h2>
                    <form>
                        <input class="input_login" type="password" size="15" placeholder="사용자의 PW를 입력하세요.">
                    </form>
                </div>

                <!-- 로그인 버튼 -->
                <button class="btn_login" type="submit">LOGIN</button>

                <!-- 아이디/비밀번호 찾기 -->
                <div class="div_horizontal">
                    <p class="text_gray_p">FORGOT ID/PW?</p>
                    <p class="text_gray_p">HERE</p>
                </div>

                <!-- 회원가입 -->
                <div class="div_horizontal">
                    <p class="text_gray_p">DON'T HAVE AN ACCOUNT?</p>
                    <p class="text_gray_p">HERE</p>
                </div>
            </div>          
        </div>
    </div>
</body>
</html>