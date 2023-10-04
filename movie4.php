<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Now showing movie</title>
    <!--link css-->
    <link rel="stylesheet" href="css/main_movie.css">
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
                <li><a href="logr.php">LOGIN</a></li>
                <li><a href="movie4.php" class="active">MOVIE</a></li>
                <li><a href="#">ABOUT</a></li>
            </ul>
        </nav>
        <a href="" class="user">
            <img src="image/movie003.jpg" alt="user" class="user-img">
        </a>
    </header>
    <section class="main-movie-image" id="im">
        <img src="image/movie05.jpg" alt="photo" class="mmovie-image" id="mimg">
        <div class="main-movie-text">
            <h1 class="main-movie-title">
                <a id="mname">Black Panther<br>Wakanda Forever</a></h1>
            <p>Now Showing</p>
            <a href="https://www.youtube.com/watch?v=6y18xlGEzGo" class="watch-btn" id="mtri">
                <i class='bx bx-play-circle'></i>
                <span>Watch trailer</span>
            </a>
        </div>
    </section>
    <!--movie detail-->
    <div class="about-movie">
        <div class="about">
            <h1 class="about-movie-title">
                <a id="mname">Black Panther Wakanda Forever</a></h1>
            <h2 class="about-movie-gender">
                <a id="mgender">Action</a></h2>
            <h1><span>About : </span></h1>
            <a id="mabout">
                <h2 class="abot-txt">
                    Queen Ramonda, Shuri, M'Baku, Okoye and the Dora Milaje fight to protect their nation from intervening world powers in the wake of King T'Challa's death. As the Wakandans strive to embrace their next chapter, the heroes must band together with Nakia and
                    Everett Ross to forge a new path for their beloved kingdom.
                </h2>
            </a>
            <h2 class="movie-dir">
                <span>Director: </span>
                <a id="mdir">Ryan Coogler</a>
            </h2>
            <h2 class="movie-lan">
                <span>Languages: </span>
                <a id="mlang">English</a>
            </h2>
            <h2 class="movie-runnt">
                <span>Run time: </span>
                <a id="mrun">2h 40m</a>
            </h2>
            <h2 class="movie-relese-dt">
                <span>Release date: </span>
                <a id="mrele">November 11, 2022</a>
            </h2>
        </div>
    </div>
    <!--show time and date-->
    <h1 class="show-txt">Movie Show <span>Time And Date</span></h1>
    <div class="movie-booking">
        <table class="movie-table" border="2" width="100%" cellspacing="0">
            <tr class="show-title">
                <th>Show <span>Date</span></th>
                <th>Show <span>Time</span></th>
            </tr>
            <tr class="row1">
                <td class="date1"></td>
                <td class="time1"></td>
            </tr>
            <tr class="row2">
                <td lass="date1"></td>
                <td class="time1"></td>
            </tr>
            <tr class="row3">
                <td lass="date3"></td>
                <td class="time3"></td>
            </tr>
            <tr class="row4">
                <td lass="date4"></td>
                <td class="time4"></td>
            </tr>
        </table>
        <a href="Seate.php" class="book-btn">
            <button class="book-movie">BOOK NOW</button>
        </a>

    </div>


    <!--link js-->
    <script src="kiru.js"></script>
</body>

</html>