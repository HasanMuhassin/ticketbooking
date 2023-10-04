<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vijaya theater</title>
    <link rel="stylesheet" href="css/payment.css">

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
                <li><a href="home.php" class="active">HOME</a></li>
                <li><a href="logr.php">LOGIN</a></li>
                <li><a href="main_movie.php">MOVIE</a></li>
                <li><a href="#">ABOUT</a></li>
            </ul>
        </nav>
        <a href="" class="user">
            <img src="image/movie003.jpg" alt="user" class="user-img">
        </a>
    </header>

    <div class="payment-form">
        <div class="pay-img">
            <img src="image/pay2.webp" alt="" class="img1">
        </div>
        <div class="form1">
            <form action="" class="payment">
                <h1>Payment</h1>
                <div class="payline1">
                    <div class="firstname">
                        <input type="text" placeholder="First name">
                    </div>
                    <div class="lastname">
                        <input type="text" placeholder="Last name">
                    </div>
                </div>
                <div class="payline2">
                    <div class="phone-nu">
                        <input type="text" placeholder="Phone Number">
                    </div>
                    <div class="email">
                        <input type="email" placeholder="Email Address">
                    </div>
                </div>
                <div class="card">
                    <input type="text" placeholder="Card Number">
                </div>
                <div class="movie-btn">
                    <div class="ok-btn">
                        <a href="">
                            <button class="pay-btn">
                            Pay                                        
                        </button>
                        </a>
                    </div>
                    <div class="cal-btn">
                        <a href="">
                            <button class="pay-cancel-btn">
                        Cancel
                    </button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>