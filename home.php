<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vijaya theater</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/movie.css">
    <!--link boxicon css-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--link swiper css-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
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
    <!--home image add-->
    <section class="home_image" id="im">
        <img src="image/movie0.jpg" alt="photo" class="first-image">
        <div class="homei-text">
            <h1 class="homei-title">Avatar<br>The Way Of Water</h1>
            <p>Now Showing</p>
            <a href="main_movie.php" class="watch-btn">
                <i class='bx bx-play-circle'></i>
                <span>Book ticket</span>
            </a>
        </div>
    </section>
    <!--end of home image -->
    <!--movie list-->
    <section class="now-show" id="movie1">
        <!-- now showing heading-->
        <div class="heading-pu">
            <h1 class="ns-title">Now Showing</h1>
        </div>
        <!--movie list-->
        <div class="movie-content">
            <!--movie box 1-->
            <div class="movie-box" id="movie-box-m1">
                <img src="image/movie20.jpg" alt="photo" class="movieim">
                <div class="movie-text">
                    <h2 class="movie-title">Vaathi</h2>
                    <span class="movie-type">Action</span>
                    <a href="movie1.php" class="watch-btn play-btn">
                        <i class='bx bx-play-circle'></i>
                    </a>
                </div>
            </div>
            <!--movie box 2-->
            <div class="movie-box" id="movie-box-m2">
                <img src="image/movie1.jpg" alt="photo" class="movieim">
                <div class="movie-text">
                    <h2 class="movie-title">Varisu</h2>
                    <span class="movie-type">Action</span>
                    <a href="movie2.php" class="watch-btn play-btn">
                        <i class='bx bx-play-circle'></i>
                    </a>
                </div>
            </div>
            <!--movie box 3-->
            <div class="movie-box" id="movie-box-m3">
                <img src="image/movie4.jpeg" alt="photo" class="movieim">
                <div class="movie-text">
                    <h2 class="movie-title">Thunivu</h2>
                    <span class="movie-type">Action</span>
                    <a href="movie3.php" class="watch-btn play-btn">
                        <i class='bx bx-play-circle'></i>
                    </a>
                </div>
            </div>
            <!--movie box 4-->
            <div class="movie-box" id="movie-box-m4">
                <img src="image/movie8.jpg" alt="photo" class="movieim">
                <div class="movie-text">
                    <h2 class="movie-title">Black Panther:Wakanda Forever</h2>
                    <span class="movie-type">Action/Adventure</span>
                    <a href="movie4.php" class="watch-btn play-btn">
                        <i class='bx bx-play-circle'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--upcoming movie list-->
    <selection class="upcoming-show" id="movie2">
        <!--moive heading-->
        <div class="heading-up">
            <h1 class="up-title">Upcoming Movies</h1>
            <!--swiper btn-->
            <div class="swiper-btn">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

        <!--movies-->
        <div class="upcoming-movie swiper">
            <div class="swiper-wrapper">
                <!--movie 1-->
                <div class="swiper-slide">
                    <div class="movie-box2" id="movie-box2-m1">
                        <img src="image/movie13.jpg" alt="photo" class="movieim2">
                        <div class="movie-text2">
                            <h2 class="movie-title2">Aquaman and the Lost Kingdom</h2>
                            <span class="movie-type2">Action/Fantasy</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--movie 2-->
                <div class="swiper-slide">
                    <div class="movie-box2" id="movie-box2-m2">
                        <img src="image/movie2.jpg" alt="photo" class="movieim2">
                        <div class="movie-text2">
                            <h2 class="movie-title2">Vanangaan</h2>
                            <span class="movie-type2">Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--movie 3-->
                <div class="swiper-slide">
                    <div class="movie-box2" id="movie-box2-m3">
                        <img src="image/movie7.jpg" alt="photo" class="movieim2">
                        <div class="movie-text2">
                            <h2 class="movie-title2">The Flash</h2>
                            <span class="movie-type2">Action/Fantasy</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--movie 4-->
                <div class="swiper-slide">
                    <div class="movie-box2" id="movie-box2-m4">
                        <img src="image/movie3.jpg" alt="photo" class="movieim2">
                        <div class="movie-text2">
                            <h2 class="movie-title2">Maaveeran</h2>
                            <span class="movie-type2">Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--movie 5-->
                <div class="swiper-slide">
                    <div class="movie-box2" id="movie-box2-m5">
                        <img src="image/movie6.jpg" alt="photo" class="movieim2">
                        <div class="movie-text2">
                            <h2 class="movie-title2">Jailer</h2>
                            <span class="movie-type2">Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--movie 6-->
                <div class="swiper-slide">
                    <div class="movie-box2" id="movie-box2-m6">
                        <img src="image/movie22.jpg" alt="photo" class="movieim2">
                        <div class="movie-text2">
                            <h2 class="movie-title2">indian 2</h2>
                            <span class="movie-type2">Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--movie 7-->
                <div class="swiper-slide">
                    <div class="movie-box2" id="movie-box2-m7">
                        <img src="image/movie23.jpg" alt="photo" class="movieim2">
                        <div class="movie-text2">
                            <h2 class="movie-title2">Vaadivaasal</h2>
                            <span class="movie-type2">Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--movie 8-->
                <div class="swiper-slide">
                    <div class="movie-box2" id="movie-box2-m8">
                        <img src="image/movie21.jpg" alt="photo" class="movieim2">
                        <div class="movie-text2">
                            <h2 class="movie-title2">Captain Miller</h2>
                            <span class="movie-type2">Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </selection>
    <!--upcoming movie end-->
    <!--populer movie start-->
    <section class="populer-movie" id="movie3">
        <!-- populer heading-->
        <div class="heading-pu">
            <h1 class="ns-title">Populer movies</h1>
        </div>
        <!--movie list-->
        <div class="movie-content2">
            <!--movie 1-->
            <div class="movie-box3" id="movie-box3-m1">
                <img src="image/movie9.jpg" alt="photo" class="movieim3">
                <div class="movie-text3">
                    <h2 class="movie-title3">Black<br>adam</h2>
                    <span class="movie-type3">Action/Fantasy</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class='bx bx-play-circle'></i>
                    </a>
                </div>
            </div>
            <!--movie 2-->
            <div class="movie-box3" id="movie-box3-m2">
                <img src="image/movie10.jpg" alt="photo" class="movieim3">
                <div class="movie-text3">
                    <h2 class="movie-title3">Ponniyin Selvan: I</h2>
                    <span class="movie-type3">Drama/Action </span>
                    <a href="#" class="watch-btn play-btn">
                        <i class='bx bx-play-circle'></i>
                    </a>
                </div>
            </div>
            <!--movie 3-->
            <div class="movie-box3" id="movie-box3-m3">
                <img src="image/movie19.jpg" alt="photo" class="movieim3">
                <div class="movie-text3">
                    <h2 class="movie-title3">Vikram</h2>
                    <span class="movie-type3">Action/Mystery</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class='bx bx-play-circle'></i>
                    </a>
                </div>
            </div>
            <!--movie 4-->
            <div class="movie-box3" id="movie-box3-m4">
                <img src="image/movie18.jpg" alt="photo" class="movieim3">
                <div class="movie-text3">
                    <h2 class="movie-title3">Cobra</h2>
                    <span class="movie-type3">Mystery/Crime</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class='bx bx-play-circle'></i>
                    </a>
                </div>
            </div>
            <!--movie 5-->
            <div class="movie-box3" id="movie-box3-m5">
                <img src="image/movie17.jpg" alt="photo" class="movieim3">
                <div class="movie-text3">
                    <h2 class="movie-title3">RRR</h2>
                    <span class="movie-type3">Action/Drama</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class='bx bx-play-circle'></i>
                    </a>
                </div>
            </div>
            <!--movie 6-->
            <div class="movie-box3" id="movie-box3-m6">
                <img src="image/movie12.jpg" alt="photo" class="movieim3">
                <div class="movie-text3">
                    <h2 class="movie-title3">Batman</h2>
                    <span class="movie-type3">Action/Adventure</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class='bx bx-play-circle'></i>
                    </a>
                </div>
            </div>
            <!--movie 7-->
            <div class="movie-box3" id="movie-box3-m7">
                <img src="image/movie14.jpg" alt="photo" class="movieim3">
                <div class="movie-text3">
                    <h2 class="movie-title3">Don</h2>
                    <span class="movie-type3">Action/Drama</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class='bx bx-play-circle'></i>
                    </a>
                </div>
            </div>
            <!--movie 8-->
            <div class="movie-box3" id="movie-box3-m8">
                <img src="image/movie15.jpg" alt="photo" class="movieim3">
                <div class="movie-text3">
                    <h2 class="movie-title3">Jai Bhim</h2>
                    <span class="movie-type3">crime/Legal drama</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class='bx bx-play-circle'></i>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!--link swiper js-->
    <script src="js/swiper-bundle.min.js"></script>
    <!--link js-->
    <script src="js/kiru.js"></script>
</body>

</html>