<?php
session_start();
include('conexion/config.php');
if (isset($_SESSION['emailUser']) != "") {
    $nameUser      = $_SESSION['nameUser'];
    $emailUser     = $_SESSION['emailUser'];
    $email         = $_SESSION['emailUser'];
}
?>
 
 
 <!--doctype html-->
 <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--==Title==================================-->
    <title>Movie Name - MHD</title>
    <!--Stylesheet(CSS)==========================-->
    <link rel="stylesheet" href="css/style.css"/>
    <!--==Fav-icon===============================-->
    <link rel="shortcut icon" href="images/fav-icon.png"/>
    <!--==Import-poppins-font====================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--==Import-Monoton-Font====================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <!--==Using-Font-Awesome======================-->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--==Scroll-Progress-bar=========================-->
        <div id="progress">
            <span id="progress-value"></span>
        </div>
        <!--==Navigation===================================-->
        <nav class="navigation">
            <!--menu-btn--------------->
            <input type="checkbox" class="menu-btn" id="menu-btn">
            <label for="menu-btn" class="menu-icon">
                <span class="nav-icon"></span>
            </label>
            <!--logo------------------->
            <a href="index.html" class="logo">
                Movies<span>.hd</span>
            </a>
            <!--menu------------------->
            <ul class="menu">
                <li><a><?php echo $nameUser; ?></a></li>
                <li><a href="#">Genero</a></li>
                <li><a href="#">Peliculas</a></li>
                <li><a href="#">Contactos</a></li>
                <li><a href="salirSesion.php">Salir</a></li>
            </ul>   
            <!--Search-box------------->
            <form action="" class="search-box">
                <!--input-->
                <input type="text" name="search" placeholder="Search Movie" class="search-input" required/>
                <!--btn-->
                <button type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </nav>
        <!--nav-end-->
        <!--==Movie-Banner=========================================-->
        <section class="movie-banner">
            <!--==img==================================-->
            <div class="m-banner-img">
                <img alt="" src="Movie-Data/Pirates-of-the-Caribbean-Salazar&#39;s-Revenge/cover.jpg">
            </div>
            <!--content================================-->
            <div class="banner-container">
                <!--title-container*******************----->
                <div class="title-container">
                    <!--title-top===============-->
                    <div class="title-top">
                    <!--title----->
                    <div class="movie-title">
                        <h1>Piratas del Caribe: La Venganza de Salazar</h1>
                    </div>
                    <!--more-about-movie-->
                    <div class="more-about-movie">
                        <span class="quality">Full HD</span>
                        <div class="rating">
                            8.2 <img alt="imbd" src="images/IMDb-icon.png">
                        </div>
                        <span>28 Agosto 2017</span>
                        <span>87min</span>
                    </div>
                    <!--language--------->
                    <div class="language">
                        <span>English</span>
                        <span>Español Latino</span>
                        <span>Castellano</span>
                    </div>
                    </div>
                    <!--Title-botttom==========================-->
                    <div class="title-bottom">
                        <!--category------->
                        <div class="category">
                            <strong>Categoria</strong><br/>
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--trailer-btn---->
                        <a target="_blank" href="https://www.youtube.com/watch?v=XibzC-e_s5M" class="watch-btn">Ver Trailer</a>
                    </div>
                </div>
                <!--play-btn******************************--->
                <div class="play-btn-container">
                    <div class="play-btn">
                        <a href="javascript:void">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
                <!--Video/full-Movie***************************-->
                <div id="play" class="play">
                    <!--close-btn--->
                    <a href="javascript:void" class="close-movie">
                        <i class="fas fa-times"></i>
                    </a>
                    <!--movie------->
                    <div class="play-movie">
                        <video id="m-video" controls>
                            <source src="Movie-Data/Pirates-of-the-Caribbean-Salazar's-Revenge/Movie.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </section>
        <!--Banner-end------------->
        <!--details=====================================-->
        <section class="movie-details">
            <strong>Piratas del Caribe: La Venganza de Salazar</strong>
            <p>Empujado hacia una nueva aventura, un sumamente desafortunado Jack Sparrow descubre que los vientos de los malos augurios soplan incluso más fuerte cuando los mortales piratas fantasma liderados por su viejo enemigo, el capitán Salazar, escapan del Triángulo del Diablo. Decididos a matar a todo pirata que encuentren en el mar, incluso al propio Sparrow. La única esperanza de supervivencia del Capitán Jack Sparrow se encuentra en la búsqueda del legendario tridente de Poseidón, un poderoso artefacto que otorga a su poseedor el control total sobre los mares.</p>
        </section>
        <!--==ScreenShots===============================-->
        <section class="screenshots">
            <strong>ScreenShots</strong>
            <!--screenshots-container----------->
            <div class="screen-s-container">
                <img alt="" src="Movie-Data/Pirates-of-the-Caribbean-Salazar&#39;s-Revenge/screenshot-1.jpg">
                <img alt="" src="Movie-Data/Pirates-of-the-Caribbean-Salazar&#39;s-Revenge/screenshot-2.jpg">
                <img alt="" src="Movie-Data/Pirates-of-the-Caribbean-Salazar&#39;s-Revenge/screenshot-3.jpg">
                <img alt="" src="Movie-Data/Pirates-of-the-Caribbean-Salazar&#39;s-Revenge/screenshot-4.jpg">
            </div>
        </section>
        <!--Download====================================-->
        <section class="download-movie">
            <!--container----------------->
            <div class="download-container">
                <!--box---->
                <div class="download-box">
                    <span><i class="fas fa-server"></i> Server 1</span>
                    <span>Español Latino</span>
                    <span>Full HD</span>
                    <a target="_blank" href="https://uptobox.com/lcnmsh6k4jit" download>Download</a>
                </div>
                <!--box---->
                <div class="download-box">
                    <span><i class="fas fa-server"></i> Server 2</span>
                    <span>English</span>
                    <span>Full HD</span>
                    <a target="_blank" href="https://uptobox.com/nkfhkowbmgjo">Download</a>
                </div>
                <!--box---->
                <div class="download-box">
                    <span><i class="fas fa-server"></i> Server 3</span>
                    <span>Castellano</span>
                    <span>Full HD</span>
                    <a target="_blank" href="https://1fichier.com/?733e4ramjk">Download</a>
                </div>
            </div>
        </section>
        <!--==footer==============================-->
        <footer>
            <!--footer-logo--->
            <a href="index.html" class="logo">
                Movies<span>hd</span>
            </a>
            <!--copyright----->
            <span class="copyright">
                Copyright 2022 - Equipo 7 (Cesar, Luis Eduardo, Miguel)
            </span>
        </footer>
        <!--==jQuery=======================================-->
        <script src="js/jQuery.js"></script>
        <script>
            /*==scroll-progress-bar======================*/
            let scrollPrecentage = () =>{
                let scrollProgress = document.getElementById("progress");
                let progressValue = document.getElementById("progress-value");
                let pos = document.documentElement.scrollTop;
                let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                let scrollValue = Math.round(pos * 100 / calcHeight);
                scrollProgress.style.background = `conic-gradient(#e70634 ${scrollValue}%, #2b2f38 ${scrollValue}%)`;
            }
            window.onscroll = scrollPrecentage;
            window.onload = scrollPrecentage;
            /*--menu-btn-fixed-when-scroll============*/
            $(window).scroll(function(){
                if($(document).scrollTop() > 20){
                    $('.navigation').addClass('fix-icon');
                }
                else{
                    $('.navigation').removeClass('fix-icon');
                }
            });
            /*==popup-open==================================*/
            $(document).on('click','.play-btn a',function(){
                $('.play').addClass('active-popup');
            });
            /*==popup-Close==================================*/
            $(document).on('click','.close-movie',function(){
                $('.play').removeClass('active-popup');
            });
            /*==auto-play-when-popup-open===================*/
            $('.play-btn a').click(function(){
                $('#m-video')[0].play();
            });
            /*==Close-video-when-poppup-close==============*/
            $('.close-movie').click(function(){
                $('#m-video')[0].pause();
            });
          </script>
    </body>
    </html>
      
      