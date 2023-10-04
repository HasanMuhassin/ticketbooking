<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/login.css">
    <!--link boxicon css-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header class="h1">
        <div class="logo">Vijaya <span>theatre</span></div>
        <div class="hum">
            <div class="line"></div>
        </div>
        <!--navition bar-->
        <nav class="nav">
            <ul class="nbar">
                <li><a href="home.php">HOME</a></li>
                <li><a href="logr.php" class="active">LOGIN</a></li>
                <li><a href="Seate.php">BOOKING</a></li>
                <li><a href="main_movie.php">MOVIE</a></li>
                <li><a href="#">ABOUT</a></li>
            </ul>
        </nav>
        <a href="" class="user">
            <img src="image/movie003.jpg" alt="user" class="user-img">
        </a>
    </header>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form id="Create-Account">
                <h1 id="c">Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="#" class="social">
                        <i class='bx bxl-google'></i>
                    </a>
                    <a href="#" class="social">
                        <i class='bx bxl-twitter'></i>
                    </a>
                </div>
                <div class="kiru">
                    <span class="span">or use your email for registration</span>
                    <input type="text" name="name" placeholder="user name" id="user-name">
                    <small>Error Message</small>
                    <input type="email" name="email" placeholder="email" id="email">
                    <small>Error Message</small>
                    <input type="password" name="password" placeholder="password" id="password">
                    <small>Error Message</small>
                    <input type="password" name="repassword" placeholder="Repeat password" id="r-password">
                    <small>Error Message</small>
                </div>
                <button type="submit" name="singup"> SING UP</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form id="sign-in">
                <h1 id="c">Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="#" class="social">
                        <i class='bx bxl-google'></i>
                    </a>
                    <a href="#" class="social">
                        <i class='bx bxl-twitter'></i>
                    </a>
                </div>
                <span>or use your Account</span>
                <input type="text" name="name2" placeholder="user name" id="si-user-name">
                <input type="password" name="password2" placeholder="password" id="si-password">
                <small>Error Message</small>
                <button name="singin"> SING IN</button>
                <a href="reset_password.php" class="reset-password">Forgot Password?</a>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>WELCOME</h1>
                    <p>If you already have account click here</p>
                    <button class="press" id="singin"> Sing-in</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>WELCOME</h1>
                    <p>If you don't have account click here</p>
                    <button class="press" id="singup"> Sing-up</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const singupbtn = document.getElementById("singup");
        const singinbtn = document.getElementById("singin");
        const container = document.getElementById("container");

        singupbtn.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        })
        singinbtn.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        })
    </script>

    <!--link js-->
    <script src="js/logr.js"></script>
</body>

</html>