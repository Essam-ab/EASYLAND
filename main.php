<?php
include "config.php";
function luanch($cmd)
{
    popen($cmd, 'r');
}
?>

<!doctype html>
<html lang="en">

<head>
    <!--meta tags-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="onepage, developer, resume, cv, personal, portfolio, personal resume, clean, modern">
    <meta name="author" content="MouriTheme">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>

    <!--site title-->
    <title> <?php echo $lang['title']  ?> </title>

    <!--========== Theme Fonts ==========-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,600,700,800" rel="stylesheet">

    <!--Font Awesome css-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/all.css">
    <script src="js/fontawesome.js"></script>
    <script src="js/all.js"></script>

    <!--Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Animated headline css-->
    <link rel="stylesheet" href="css/jquery.animatedheadline.css">

    <!--Animate css-->
    <link rel="stylesheet" href="css/animate.css">

    <!--Owl carousel css-->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">

    <!--Magnific popup css-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--Normalizer css-->
    <link rel="stylesheet" href="css/normalize.css">

    <!--Theme css-->
    <link rel="stylesheet" href="css/style.css">

    <!--Responsive css-->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- colors corrections -->
    <link rel="stylesheet" href="css/colors correction.css">

    <!-- ending stylesheet -->
    <link rel="stylesheet" href="css/endingStyle.css">

    <!-- sidebar starts -->
    <link rel="stylesheet" href="css/sidebar.css">

    <!-- slider style -->
    <link rel="stylesheet" href="css/slider.css">
    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-thumb {
            /* border-radius: 10px; */
            background: linear-gradient(to right, #accf52 0%, #4bf90c 100%);
            box-shadow: inset 0 0 6px lightblue;
        }

        ::-webkit-scrollbar-track {
            /* border-radius: 10px; */
            background: white;
            box-shadow: inset 0 0 6px black;
        }

        .nav-area.sticky_navigation {
            background: linear-gradient(to right, #accf52 50%, #4bf90c 100%);
            background: -webkit-linear-gradient(40deg, white 0%, #accf52 100%);
            background: white;
            opacity: 1;
            height: 80px;
        }

        .nav-area.sticky_navigation:hover {
            opacity: 1;
        }

        .sticky_navigation .nav li a {
            color: black !important;
            background: none;
        }

        .sticky_navigation .nav li.active a {
            color: #accf52 !important;
        }
    </style>
    <!-- mouse follow effect style -->
    <link rel="stylesheet" href="followMouse.css">
</head>

<body style="overflow-x:hidden;">


    <!--preloader starts-->
    <!-- <div class="loader_bg">
        <div class="loader"></div>
    </div> -->
    <!--preloader ends-->


    <!-- sidebar area starts -->
    <style media="screen">
        .sh-side-options {
            transform: translateY(50vh);
            background: transparent;
        }

        .sh-side-options-item {
            /* #e87e16; */
            /* background-image: -webkit-linear-gradient(40deg, #e87e16  0%, #f9a47a 100%); */
        }

        .sh-side-options-item i {
            transform: translateX(-6px);
        }

        .profileFix {
            margin-right: 40px;
            margin-top: -10px;
        }
    </style>
    <div class="sh-side-options profileFix">

        <div class="sh-side-options-container">
            <a href="preposition profil.php" class="sh-side-options-item sh-accent-color first hide same">
                <i class="icon fas fa-user-circle"></i>
                <div class="sh-side-options-hover"><?php echo $lang['profile'] ?><span></span>
                </div>
            </a>

            <div class="sh-side-options-divider"></div>

            <a href="" class="sh-side-options-item sh-accent-color second hide same">
                <i class="fas fa-home"></i>
                <!-- <?php echo $lang['go to'] ?><span></span> -->
                <div class="sh-side-options-hover" style="margin: 0 !important;"> <?php echo $lang['first navbar'] ?></div>
            </a>

            <div class="sh-side-options-divider"></div>

            <a class="smooth-menu sh-side-options-item sh-accent-color third hide same">
                <i class="fas fa-exclamation-circle" style="transform: translateX(-1px)"></i>
                <div class="sh-side-options-hover"><?php echo $lang['See'] ?><span></span><?php echo $lang['not'] ?></div>
            </a>

            <div class="sh-side-options-divider"></div>

            <a href="#home" class="smooth-menu sh-side-options-item sh-accent-color fourth hide same">
                <i class="icon fas fa-chevron-circle-up"></i>
                <div class="sh-side-options-hover" style="white-space: nowrap;"><span></span><?php echo $lang['top'] ?></div>
            </a>
            <a href="#footer_bottom" class="smooth-menu sh-side-options-item sh-accent-color fourth hide same">
                <i class="icon fas fa-chevron-circle-down"></i>
                <div class="sh-side-options-hover" style="white-space: nowrap;"><span></span><?php echo $lang['bottom'] ?></div>
            </a>
            <style media="screen">
                .toShow i {
                    transform: translateX(0px);
                }

                .same,
                .toShow {
                    opacity: .6;
                }

                .same:hover,
                .toShow:hover {
                    cursor: pointer;
                    opacity: 1;
                }
            </style>
            <a class="sh-side-options-item sh-accent-color toShow fourth">
                <i class="fas fa-ellipsis-h"></i>
            </a>
            <script type="text/javascript">
                document.querySelector('.toShow').style = "border-top:0px";

                $(document).ready(function() {
                    $('.toShow').click(function() {
                        // alert('this is working');
                        if (!$(".same").hasClass('hide')) {
                            $('.same').addClass('hide');
                            $('.sh-side-options').removeClass('translateUp');
                            document.querySelector('.sh-side-options').style = "transform:translateY(50vh)";
                            document.querySelector('.toShow').style = "border-radius: 50px; border-top-left-radius: 0px; border-top:0px";
                        } else {
                            $('.same').removeClass('hide');
                            document.querySelector('.sh-side-options').style = "transform:translateY(0vh)";
                            document.querySelector('.toShow').style = "border-radius: 0px; border-bottom-left-radius: 0px; border-top:1px solid white";
                        }
                    });
                });
            </script>
        </div>
    </div>
    <!-- sidebar area ends -->

    <!--navigation area starts-->
    <style>
        .sticky_navigation {
            #e87e16;
        }
    </style>
    <header class="nav-area navbar-fixed-top">
        <div class="container">
            <div class="row">
                <!--main menu starts-->
                <div class="col-md-12">
                    <div class="main-menu">
                        <div class="navbar navbar-cus">
                            <div class="navbar-header" style="margin-left: -30px">
                                <a href="index.html" class="navbar-brand">
                                    <style>
                                        .navbar-brand {
                                            display: inline-block;
                                            padding-top: .3125rem;
                                            padding-bottom: .3125rem;
                                            margin-right: 1rem;
                                            font-size: 1.25rem;
                                            line-height: inherit;
                                            white-space: nowrap;
                                            transform: translate(0px, 0px)
                                        }

                                        span.txt-banner {
                                            margin-left: -60px;
                                            font-size: 30px;
                                            text-transform: initial;
                                            font-weight: normal;
                                            font-family: 'Poppins', sans-serif;
                                        }

                                        a.txt-banner {
                                            transform: translate(0px, 12px);
                                        }
                                    </style>
                                    <a class="navbar-brand sticky_logo" href="main.php">
                                        <img src="images/easyland_logo.png" alt="easylandLogo class=" easylandLogo">
                                    </a>
                                    <a class="navbar-brand sticky_logo txt-banner " href="main.php">
                                        <span class="txt-banner">asyLand</span>
                                    </a>
                                </a>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse">
                                <nav>
                                    <style>
                                        .fas.fa-home,
                                        .fas.fa-star,
                                        .fab.fa-product-hunt,
                                        .fas.fa-comment-dots {
                                            margin-right: 2px;
                                            transform: translateY(0px);
                                        }

                                        .fas.fa-comment-dots {
                                            transform: translateY(3px);
                                        }
                                    </style>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smooth-menu slideHome" href="#home">
                                                <i class="fas fa-home"></i>
                                                <?php echo $lang['first navbar'] ?></a>
                                        </li>
                                        <li><a class="smooth-menu removeBanner" href="#prepositions">
                                                <i class="fab fa-product-hunt"></i>
                                                <?php echo $lang['second navbar'] ?></a>
                                        </li>
                                        <li><a class="smooth-menu" href="#bestThisWeek">
                                                <i class="fas fa-star"></i>
                                                <?php echo $lang['week'] ?>
                                            </a></li>
                                        <li><a class="smooth-menu" href="#contact">
                                                <i class="icon fas fa-comment-dots"></i>
                                                <?php echo $lang['contact'] ?>
                                            </a></li>
                                        <li style="margin-left: 180px">
                                            <style>
                                                .btn {
                                                    outline: none;
                                                    padding: 10px 25px;
                                                    font-size: inherit;
                                                    cursor: pointer;
                                                    font-weight: bold;
                                                    display: inline-block;
                                                    margin: 15px;
                                                    text-transform: uppercase;
                                                    letter-spacing: 1px;
                                                    position: relative;
                                                    -webkit-transition: all 0.3s;
                                                    -moz-transition: all 0.3s;
                                                    transition: all 0.3s;
                                                    /* border: 1px solid #e87e16 ; */
                                                    border: none;
                                                    border-radius: 30px;
                                                    color: #4bf90c;
                                                    color: white;
                                                    background-image: -webkit-linear-gradient(180deg, #fec92f 0%, #e87e16 100%);
                                                    overflow: hidden;
                                                }

                                                .btn:after {
                                                    content: '';
                                                    position: absolute;
                                                    z-index: 1;
                                                    -webkit-transition: all 0.3s;
                                                    -moz-transition: all 0.3s;
                                                    transition: all 0.3s;
                                                    width: 100%;
                                                    height: 0;
                                                    top: 50%;
                                                    left: 50%;
                                                    background: #e87e16;
                                                    background: linear-gradient(to right, #accf52 0%, #4bf90c 100%);
                                                    opacity: 0;
                                                    -webkit-transform: translateX(-50%) translateY(-50%) rotate(45deg);
                                                    -moz-transform: translateX(-50%) translateY(-50%) rotate(45deg);
                                                    -ms-transform: translateX(-50%) translateY(-50%) rotate(45deg);
                                                    transform: translateX(-50%) translateY(-50%) rotate(45deg);
                                                }

                                                .btn:hover {
                                                    color: #fff;
                                                    transform: scale(1.1) translate3d(2px, 2px, 2px);
                                                    transition: all 0.3s ease-in-out;
                                                }

                                                .btn:active {
                                                    color: #fff;
                                                    transform: scale(0.95) translate3d(2px, 2px, 2px);
                                                    transition: all 0.3s ease-in-out;
                                                }

                                                .btn:hover:after {
                                                    color: white;
                                                    opacity: 1;
                                                    height: 260%;
                                                }

                                                button i {
                                                    position: relative;
                                                    z-index: 2;
                                                }

                                                button span {
                                                    position: relative;
                                                    z-index: 2;
                                                }

                                                .fa-sign-out-alt {
                                                    font-size: 20px;
                                                    color: white;
                                                    transition: all 0.2s ease-in-out;
                                                }

                                                .sticky_navigation .fa-sign-out-alt {
                                                    color: black !important;
                                                }

                                                .sticky_navigation .fa-sign-out-alt:hover {
                                                    color: purple !important;
                                                }

                                                .fa-sign-out-alt:hover {
                                                    color: #accf52 !important;
                                                    transform: scale(1.2);
                                                    transition: all 0.2s ease-in-out;
                                                }

                                                .fa-sign-out-alt:active {
                                                    transform: scale(0.9);
                                                    transition: all 0.2s ease-in-out;
                                                }
                                            </style>
                                            <!-- styling the title attribute -->
                                            <style>
                                                .title .tooltiptext {
                                                    visibility: hidden;
                                                    width: 120px;
                                                    background-color: black;
                                                    color: #fff;
                                                    text-align: center;
                                                    border-radius: 6px;
                                                    padding: 3px 0;
                                                    position: absolute;
                                                    z-index: 1;
                                                    bottom: 110%;
                                                    left: 50%;
                                                    margin-left: -60px;
                                                    transition: all 0.1s ease-in-out 0.1s;
                                                }

                                                .title .tooltiptext::after {
                                                    content: "";
                                                    position: absolute;
                                                    top: 100%;
                                                    left: 50%;
                                                    margin-left: -5px;
                                                    border-width: 5px;
                                                    border-style: solid;
                                                    border-color: black transparent transparent transparent;
                                                }

                                                .title:hover .tooltiptext {
                                                    visibility: visible;
                                                    transition: all 0.5s ease-in-out 0.3s;
                                                }
                                            </style>
                                            <form action="includes/logout.inc.php" method="POST" style=" transform:translateX(-50%)">
                                                <button type="submit" class="title" style="background: transparent; border: none" name="logout-link">
                                                    <i style="color:white" class="fas fa-sign-out-alt" class="tooltip"></i>
                                                    <span class="tooltiptext">Logout</span>
                                                </button>

                                            </form>
                                            <?php
                                            if (isset($_POST['logout-link'])) {
                                                header("Location: index.php");
                                            }
                                            ?>
                                        </li>

                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--navigation area ends-->

    <!--Banner area starts-->
    <div class="banner-area" id="home">
        <div class="banner-table">
            <div class="banner-table-cell">
                <div class="welcome-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <style>
                                    .intro {
                                        transform: translate(-30%, -50%)
                                    }

                                    .intro button i {
                                        transform: scale(1.5);
                                        margin-right: 10px;
                                    }

                                    .intro button {
                                        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', monospace, Helvetica;
                                    }
                                </style>
                                <section class="intro animate-scale" style="margin-top: 180px">
                                    <!-- transform:translateY(120%) -->

                                    <section class="move-area" style="transform:translate(-110px, 60%)">
                                        <div class='.container'>
                                            <div class='eye'></div>
                                            <div class='eye'></div>
                                        </div>
                                    </section>

                                    <script>
                                        //This is a pen based off of Codewoofy's eyes follow mouse. It is just cleaned up, face removed, and then made to be a little more cartoony. https://codepen.io/Codewoofy/pen/VeBJEP

                                        $(".move-area").mousemove(function(event) {
                                            var eye = $(".eye");
                                            var x = (eye.offset().left) + (eye.width() / 2);
                                            var y = (eye.offset().top) + (eye.height() / 2);
                                            var rad = Math.atan2(event.pageX - x, event.pageY - y);
                                            var rot = (rad * (180 / Math.PI) * -1) + 180;
                                            eye.css({
                                                '-webkit-transform': 'rotate(' + rot + 'deg)',
                                                '-moz-transform': 'rotate(' + rot + 'deg)',
                                                '-ms-transform': 'rotate(' + rot + 'deg)',
                                                'transform': 'rotate(' + rot + 'deg)'
                                            });
                                        });
                                    </script>

                                    <h3 class="userNameColor" style="font-size: 25px !important;transform:translate(-110px, 40px)">
                                        <?php echo $lang['welcome'] ?>
                                        <?php
                                        if (isset($_SESSION['userId'])) {
                                            echo $_SESSION['userUid'];
                                        }
                                        ?>
                                    </h3>

                                    <style>
                                        .containerAbout {
                                            width: 50%;
                                            transform: translate(350px, 50px)
                                        }

                                        .welcomeAbout {
                                            color: white;
                                            font-size: 18px;
                                            font-weight: 800;
                                            text-align: left;
                                        }
                                    </style>
                                    <div class="containerAbout">
                                        <p class="welcomeAbout">
                                            <?php echo $lang['about us'] ?>
                                        </p>
                                    </div>
                                </section>

                                <style>
                                    .bannerImg {
                                        transform: translate(220%, -120%)
                                    }
                                </style>
                                <!-- <section class="col-md-4">
                                    <div class="bannerImg">
                                        <img src="images/header-img.webp" alt="">
                                    </div>
                                </section> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .hero-app-1 {
                position: absolute;
                left: 4%;
                top: 10%;
            }

            .custom-animation {
                backface-visibility: hidden;
                animation: jumping 9s ease-in-out 2s infinite alternate;
                animation-delay: 2s;
                animation-delay: 1s;
                transition: all .9s ease 5s;
                user-select: none;
            }

            .hero-app-5 {
                position: absolute;
                bottom: 40%;
                left: 50%;
                transform: scale(2)
            }

            .custom-animation2 {
                backface-visibility: hidden;
                animation: jumping2 9s ease-in-out 2s infinite alternate;
                animation-delay: 2s;
                animation-delay: 1s;
                transition: all 1s ease 3s;
                user-select: none;
            }

            .hero-app-7 {
                position: absolute;
                top: 13%;
                left: 51%;
            }

            .custom-animation3 {
                backface-visibility: hidden;
                animation: jumping3 9s ease-in-out 2s infinite alternate;
                animation-delay: 2s;
                animation-delay: 1s;
                transition: all 7s ease 2s;
                user-select: none;
            }

            .hero-app-8 {
                position: absolute;
                left: 10%;
                top: 40%;
            }

            .custom-animation {
                backface-visibility: hidden;
                animation: jumping 9s ease-in-out 2s infinite alternate;
                animation-delay: 2s;
                animation-delay: 1s;
                transition: all .9s ease 5s;
                user-select: none;
            }

            @keyframes jumping {
                0% {
                    transform: translateY(0px) translateX(0) rotate(0) scale(0.4);
                    opacity: .8;
                }

                25% {
                    transform: translateY(-10px) translateX(-10px) rotate(20deg) scale(0.3);
                    opacity: .9;
                }

                50% {
                    transform: translateY(-15px) translateX(-15px) rotate(10deg) scale(0.2);
                    opacity: .8;
                }

                75% {
                    transform: translateY(-20px) translateX(-20px) rotate(20deg) scale(0.25);
                    opacity: .6;
                }

                85% {
                    transform: translateY(-25px) translateX(-25px) rotate(20deg) scale(0.35);
                    opacity: .7;
                }

                100% {
                    transform: translateY(-15px) translateX(-15px) rotate(0) scale(0.5);
                    opacity: .85;
                }
            }

            @keyframes jumping2 {
                0% {
                    transform: translateY(0px) translateX(0) rotate(0) scale(1.5);
                    opacity: .5;
                }

                25% {
                    transform: translateY(-30px) translateX(10px) rotate(20deg) scale(1.3);
                    opacity: .8;
                }

                50% {
                    transform: translateY(15px) translateX(-15px) rotate(10deg) scale(1.2);
                    opacity: .8;
                }

                75% {
                    transform: translateY(30px) translateX(20px) rotate(20deg) scale(1);
                    opacity: .7;
                }

                100% {
                    transform: translateY(-15px) translateX(15px) rotate(0) scale(1);
                    opacity: .9;
                }
            }

            @keyframes jumping3 {
                0% {
                    transform: translateY(10px) translateX(0) rotate(0) scale(1);
                    opacity: .9;
                }

                20% {
                    transform: translateY(20px) translateX(10px) rotate(-20deg) scale(0.8);
                    opacity: .8;
                }

                40% {
                    transform: translateY(15px) translateX(-15px) rotate(10deg) scale(0.75);
                    opacity: .8;
                }

                40% {
                    transform: translateY(-15px) translateX(-25px) rotate(10deg) scale(0.5);
                    opacity: 1;
                }

                80% {
                    transform: translateY(-30px) translateX(20px) rotate(-20deg) scale(0.75);
                    opacity: .6;
                }

                100% {
                    transform: translateY(15px) translateX(15px) rotate(0) scale(0.95);
                    opacity: .7;
                }
            }

            @keyframes jumping4 {
                0% {
                    transform: translateY(-30px) translateX(20px) rotate(0) scale(1.2);
                    opacity: .7;
                }

                25% {
                    transform: translateY(-20px) translateX(10px) rotate(50deg) scale(0.6);
                    opacity: .8;
                }

                50% {
                    transform: translateY(15px) translateX(-15px) rotate(20deg) scale(0.5);
                    opacity: .9;
                }

                75% {
                    transform: translateY(30px) translateX(20px) rotate(50deg) scale(0.75);
                    opacity: .7;
                }

                100% {
                    transform: translateY(-15px) translateX(15px) rotate(0) scale(0.5);
                    opacity: .9;
                }
            }

            @keyframes jumping10 {
                0% {
                    transform: rotate(180deg);
                    display: block;
                }

                100% {
                    transform: rotate(30deg);
                    display: block;
                }
            }

            @keyframes jumping11 {
                0% {
                    transform: rotate(180deg) translate(-20px, 20px);
                    display: block;
                }

                100% {
                    transform: rotate(30deg) translate(0px, 0px);
                    display: block;
                }
            }

            .floatingIcons img {
                max-width: 100%;
            }

            .floatingIcons img {
                vertical-align: middle;
                border-style: none;
            }
        </style>

        <div class="floatingIcons">
            <div class="hero-app-1 custom-animation"><img src="images/floating icons/icon_1.webp" alt=""></div>
            <div class="hero-app-5 custom-animation2"><img src="images/floating icons/icon_3.png" alt=""></div>
            <div class="hero-app-7 custom-animation3"><img src="images/floating icons/icon_2.webp" alt=""></div>
            <div class="hero-app-8 custom-animation"><img src="images/floating icons/icon_4.png" alt=""></div>
        </div>
    </div>

    <!--Banner area ends-->

    <script>
        $(document).ready(function() {
            $('.removeBanner').click(function() {
                $('.banner-area').slideUp();
                $('#prepositions').css('margin-top', '100px');
                // $('.removeBanner').attr('id', 'prepositions');
            });
            $('.slideHome').click(function() {
                    $('.banner-area').slideDown();
                    // $('.removeBanner').removeAttr('id', 'prepositions');
                );
            });
        });
    </script>

    <!-- Prepositions area strats -->
    <style>
        #prepositions {
            z-index: 1;
            position: relative;

        }

        .contaienr .row.prepo {
            /* width: 100vh */
        }

        .backgroundClear {
            background: white;
        }

        .prepositionSideBar {}

        .rightSide {
            transform: translateX(-100px);
            width: 100%;
            margin: 0;
            /* float: left; */
            z-index: 2;
            margin-right: -150px;
        }
    </style>

    <div class="backgroundClear">



        <section class="prepositionSideBar">
            <style>
                .container .boxer {
                    display: flex;
                    flex-direction: colomn;
                }

                .container .boxer img {
                    width: 250px;
                    height: 150px;
                    margin-right: -5px;
                    position: relative;
                    animation-name: test;
                    animation-duration: 50s;
                    animation-timing-function: linear;
                    animation-iteration-count: infinite;
                    animation-direction: alternate;
                    transition: all 0.1s ease-in-out;
                }

                @keyframes test {
                    0% {
                        right: 180%;
                        transition: all 0.1s ease-in-out;
                    }

                    10% {
                        right: 150%;
                        transition: all 0.1s ease-in-out;
                    }

                    20% {
                        right: 100%;
                        transition: all 0.1s ease-in-out;
                    }

                    30% {
                        right: 50%;
                        transition: all 0.1s ease-in-out;
                    }

                    40% {
                        right: 0%;
                        transition: all 0.1s ease-in-out;
                    }

                    50% {
                        right: -50%;
                        transition: all 0.1s ease-in-out;
                    }

                    60% {
                        right: -100%;
                        transition: all 0.1s ease-in-out;
                    }

                    70% {
                        right: -50%;
                        transition: all 0.1s ease-in-out;
                    }

                    80% {
                        right: -0%;
                        transition: all 0.1s ease-in-out;
                    }

                    90% {
                        right: 100%;
                        transition: all 0.1s ease-in-out;
                    }

                    100% {
                        right: 180%;
                        transition: all 0.1s ease-in-out;
                    }
                }
            </style>
            <!-- <div class="container">
                <div class="boxer">
                    <img src="images/spotify.png" alt="">
                    <img src="images/work.jpg" alt="">
                    <img src="images/food.jpg" alt="">
                    <img src="images/automobile.png" alt="">
                    <img src="images/amazon.jpg" alt="">
                    <img src="images/ooredoo.png" alt="">
                    <img src="images/security.jpg" alt="">
                    <img src="images/clean.jpg" alt="">
                    <img src="images/paris.jpg" alt="">
                    <img src="images/purchase.webp" alt="">
                    <img src="images/tunisiaTravelGuid.jpg" alt="">
                </div>
            </div> -->
            <script>
                image = new Image();
                images = [
                    "images/pepsi .jpg",
                    "images/orangina.jpg",
                    "images/ooredoo.jpg",
                ]
                var i = 0;
            </script>
            <div id="prepositions" class="services-area section-padding">
                <div class="row header">
                    <div class="col-md-12">
                        <div class="section-header wow fadeInDown" data-wow-delay="0s">
                            <h2 class="headers"> <?php echo $lang['second navbar'] ?></h2>
                            <p class="line-one"></p>
                        </div>
                    </div>
                </div>
                <div class="container" style="display:flex">
                    <div class="rightSide">
                        <div class="row header">
                        </div>
                        <div class="row prepo">
                            <div class="col-md-12">
                                <div class="section-header wow fadeInDown" data-wow-delay="0s">
                                    <script>
                                        $(document).ready(function() {
                                            $("#prepositionsForm").submit(function(event) {
                                                event.preventDefault();
                                                var preposition = $("#prepositionsArea").val();
                                                $("#messagePrep").load("preposition.php", {
                                                    preposition: preposition
                                                });
                                            });
                                        });
                                    </script>
                                    <style>
                                        #prepositionsArea {
                                            resize: none;
                                        }

                                        #custom-text {
                                            margin-left: 10px;
                                            font-family: sans-serif;
                                            color: #aaa;
                                        }

                                        .areaShadow {
                                            box-shadow: 0px 0px 5px red;
                                        }

                                        #prepositionsArea::placeholder {}

                                        .fixPrep {
                                            width: 80%;
                                            margin: 0 auto;
                                        }

                                        .prepositionsContainer {
                                            margin-bottom: 40px;
                                        }
                                    </style>
                                    <div class="row fixPrep">
                                        <div class="prepositionsContainer" style="line-height: 50px">
                                            <p class="addError"></p>
                                            <form action="preposition.php" enctype="multipart/form-data" id="prepositionsForm" class="form-control-inline" method=" POST">
                                                <h5 class="form-control" style="margin-bottm: 0px"><?php echo $lang['create post'] ?></h5>
                                                <textarea name="prepositionsArea" style="margin-bottom: 20px; margin-top: 0px" class="form-control" rows="5" cols="30" id="prepositionsArea" placeholder="<?php echo $lang['writep'];  ?>"></textarea>

                                                <button type="submit" name="submitPreposition" class="btn animation" id="submitPreposition">
                                                    <span><?php echo $lang['postButton']; ?></span>
                                                </button>
                                            </form>
                                            <script>
                                                document.getElementById('submitPreposition').addEventListener('click', () => {
                                                    if (document.getElementById('prepositionsArea').value == "") {
                                                        document.getElementById('prepositionsArea').classList.add("areaShadow");
                                                        document.querySelector('.addError').textContent = "You didn't write a preposition!";
                                                        document.querySelector('.addError').classList.add("text-danger");
                                                        document.getElementById('prepositionsArea').addEventListener('focus', () => {
                                                            document.getElementById('prepositionsArea').classList.remove("areaShadow");
                                                            document.querySelector('.addError').textContent = "";
                                                            document.querySelector('.addError').classList.remove("text-danger");
                                                        });
                                                    } else {
                                                        document.getElementById('prepositionsArea').classList.remove("areaShadow");
                                                    }
                                                });
                                            </script>
                                            <script>
                                                const realFileBtn = document.getElementById('fileUpload');
                                                const customBtn = document.getElementById('custom-button');
                                                const customTxt = document.getElementById('custom-text');
                                                customBtn.addEventListener('click', () => {
                                                    realFileBtn.click();
                                                });

                                                realFileBtn.addEventListener('change', () => {
                                                    if (realFileBtn.value) {
                                                        customTxt.innerHTML = realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
                                                    } else {
                                                        customTxt.innerHTML = "No file chosen, yet."
                                                    }
                                                })
                                            </script>
                                        </div>
                                    </div>
                                    <style>
                                        .prepositionStyle {
                                            text-align: left;
                                            font-size: 0.5rem;
                                        }

                                        .container .row.post .container {
                                            width: 80%;
                                        }
                                    </style>

                                    <div class="row wow fadeInDown post animated fadeInDownBig" data-wow-delay="0.2s">
                                        <div class="container prepositionStyle" id="messagePrep">
                                            <?php include "fetchPrepositions.php" ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        .leftSide {
                            border-radius: 50px;
                            border-bottom-left-radius: 0px;
                            border-bottom-right-radius: 0px;
                            margin-top: 5px;
                            width: 45%;
                            z-index: -1;
                        }

                        .backgroundCleaner {
                            border-radius: 50px;
                            border-bottom-left-radius: 0px;
                            border-bottom-right-radius: 0px;
                            background-color: #b8c6db;
                            background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%);
                            background-image: linear-gradient(260deg, lightgray 0%, #f7f6fa 70%);
                        }
                    </style>
                    <div class="leftSide wow fadeInDown" data-wow-delay="0.2s">
                        <div class="backgroundCleaner">
                            <style>
                                .wrapperBottom {
                                    display: flex;
                                    justify-content: space-between;
                                    width: 95%;
                                }

                                .bottomRecent {
                                    display: flex;
                                    justify-content: space-between
                                }

                                .bottomRecent h6 {
                                    margin-right: 20px;
                                }

                                .bottomUser {
                                    margin-right: 5px;
                                }

                                .bottomRecent h6 {
                                    font-size: 11px;
                                }

                                .buttonRecent h6 span {
                                    font-size: 10px
                                }

                                .bottomDate {
                                    font-weight: 400;
                                    font-size: 10px
                                }

                                .recentArea {
                                    transform: translateX(10px);
                                }

                                .leftSide div.bg {
                                    overflow: hidden;
                                    text-align: center;
                                    border-bottom: 1px solid white;
                                    margin-bottom: 20px;
                                }

                                div.bottomDevider {
                                    display: none;
                                    background: #fec92f;
                                    height: 10px;
                                    margin-top: 40px;
                                    width: 20%
                                }

                                .voteIcon .second,
                                .profileIcon .bottomUser,
                                .bg h4 {
                                    color: #accf52;
                                }

                                .bottomRecent div.voteIcon e {
                                    margin-left: 5px;
                                }
                            </style>
                            <div class="bg">
                                <h4> <?php echo $lang['best prepositions'] ?></h4>
                            </div>
                            <?php
                            $sql = "SELECT * FROM  preposition ORDER BY voteNumber DESC LIMIT 4";
                            $result = mysqli_query($conn, $sql);
                            if (!$result)
                                echo "echo in fetching recent added prepositions";
                            else {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '
                                    <div class="recentArea">
                                        <p class="bottomText">' . $row['text'] . ' </p>
                                        <div class="wrapperBottom">
                                            <div class="bottomRecent">
                                                <div class="profileIcon">
                                                    <i class="far fa-user bottomUser"></i>
                                                </div>
                                                <h6><span>' . $lang['writen by'] . '</span><br> ' . $row['uidUsers']  . '</h6>
                                                <div class="voteIcon">
                                                    <i class="far fa-thumbs-up second"></i><e>' . $row['voteNumber'] . '</e>
                                                </div>
                                            </div>
                                            <h6 class="bottomDate" style="border-bottom:5px solid #fec92f; margin-bottom: 50px; font-size:13px">' . $row['prepDate'] . '</h6>
                                        </div>
                                        <div class="bottomDevider"></div>
                                    </div>
                                        ';
                                }
                            }

                            ?>
                            <style>
                                .allUsers {
                                    text-align: left;
                                }

                                .allUsers h5 {
                                    margin-left: 20px;
                                    display: inline-block;
                                }

                                .wrappperside {
                                    display: flex;
                                    justify-content: space-between
                                }

                                .wrappperside i.dating {
                                    margin-right: -32%;
                                }
                            </style>
                            <div style="background:white;width:100%;height:2px;margin-top: 20px;"></div>
                            <div class="bg">
                                <h4><i class="fas fa-users"></i> <?php echo $lang['our'];  ?></h4>
                            </div>
                            <div class="box" style="margin-bottom: 50px">
                                <div class="allUsers">
                                    <?php
                                    $sql = "SELECT * FROM  users ORDER BY prepDate DESC";
                                    $result = mysqli_query($conn, $sql);
                                    if (!$result)
                                        echo "echo in fetching recent added prepositions";
                                    else {
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            $date = date_create($row['prepDate']);
                                            $dating = date_format($date, "Y-m-d");
                                            echo '
                                                    
                                                    <div class="wrappperside">
                                                        <h5><i class="fas fa-user-tie" style="margin-right:5px"></i>' . $row['uidUsers'] . '</h5>
                                                         <i style="font-style:normal" class="dating">' . $lang['since'] . ' ' . $dating . '</i><br>
                                                    </div>
                                                
                                            ';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end prepositions -->

    <!-- starting best this week slider -->
    <style>
        .inline h1 a i {
            transform: translate(-15px, 12px);
            font-style: normal;
        }

        .inline h1 a {
            text-decoration: none;
            cursor: normal;
            color: #accf52;
        }

        .inline h1 a i.second {
            color: #accf52
        }

        .inline h1 {
            text-align: center;
            transform: translateY(-20px);
        }

        .inline h1 a div.title {
            background: white;
            color: black;
            width: 10%;
            height: 20px;
            border-radius: 15px;
            font-size: 16px;
            transform: translate(0%, -60px);
            margin: 0 auto;
            opacity: 0;
            transition: all 0.3s ease-in-out;
        }

        .inline h1 a:hover div.title {
            opacity: 1;
            transition: all 0.3s ease-in-out 0.2s;
        }

        a.profileGo {
            text-decoration: none;
            transition: all 0.2s ease-in-out
        }

        a.profileGo:hover {
            color: white;
        }

        a.profileGo i {
            transform: translateX(-8px);
            animation: go 1s infinite;
            transition: all 0.5s ease-in-out;
            color: #accf52
        }

        a.profileGo:hover i {
            color: white;
        }

        @keyframes go {
            0% {
                transform: translateX(-8px);
                transition: all 0.5s ease-in-out
            }

            50% {
                transform: translateX(1px);
                transition: all 0.5s ease-in-out
            }

            100% {
                transform: translateX(-8px);
                transition: all 0.5s ease-in-out
            }
        }

        a.profileGo:hover i {
            transform: translateX(1px);
            transition: all 0.5s ease-in-out
        }

        a.profileGo p {
            color: #accf52;
            text-align: right;
            transform: translate(0, -120px);
        }

        a.profileGo p:hover {
            color: white;
        }

        .containerSlide h6:hover {}

        .inline h6 {
            color: lightgray
        }

        .votesTop {
            color: #accf52;
            color: lightgray
        }

        .textPrep>* {
            font-size: 18px;
            color: white;
            margin-top: 20px;
            text-align: center;
        }
    </style>
    <div class="wrapperSlide">
        <section id="bestThisWeek" class="slider">
            <div class="slidershow middle">
                <div class="slides">
                    <input type="radio" name="r" id="r1" checked>
                    <input type="radio" name="r" id="r2">
                    <input type="radio" name="r" id="r3">
                    <input type="radio" name="r" id="r4">
                    <input type="radio" name="r" id="r5">
                    <div class="slide s1">
                        <?php
                        if (session_status() == PHP_SESSION_NONE)
                            session_start();

                        $query = "SELECT max(voteNumber) as num FROM preposition WHERE WEEKOFYEAR(prepDate) = WEEKOFYEAR(NOW()) limit 1";
                        $result = mysqli_query($conn, $query);
                        if (!$result) {
                            echo "error in gettting the maximum voteNumber";
                        } else
                            while ($row = mysqli_fetch_assoc($result)) {
                                $max = $row['num'];
                            }
                        $query = "SELECT uidUsers, text, prepDate ,max(voteNumber) as voteNumber FROM preposition WHERE (voteNumber = ' $max ') and (WEEKOFYEAR(prepDate) = WEEKOFYEAR(NOW()))  limit 1";
                        $result = mysqli_query($conn, $query);
                        if (!$result) {
                            echo "error in gettting the maximum voteNumber";
                        } else
                            while ($row = mysqli_fetch_assoc($result)) {
                                if (empty($row['text']))
                                    $row['text'] = "Nothing posted this week";
                                echo "
                                <div class='slidePrep' style='margin-left: 10px'>
                                    <div class='shap one'></div>
                                    <div class='shap two'></div>
                                    <div class='shap two four'></div>
                                    <div class='shap one three'></div>
                                    <div class='containerSlide'>
                                        <div class='inline'>
                                            <h6 aria-disabled = 'true'>" . $row['prepDate'] . "  " . $lang['weeks'] . "</h6>
                                            <div class='votesTop' style='position:relative; left:90%; top:-30px'>
                                                <i class=' fas fa-thumbs-up '></i>
                                                <span style=''>" . $row['voteNumber'] . " " . $lang['voted'] . " </span>
                                            </div>
                                            <h1 style='margin:0px; padding:0px'>
                                                <a>
                                                    <i class='first icon fas fa-user-circle'></i>
                                                    <i class='second'>" . $row['uidUsers'] . "</i>
                                                </a>
                                            </h1>

                                        </div>
                                        <div class='textPrep'>
                                            <p>" . $row['text'] . "</p>
                                        </div>
                                    </div>
                                </div>
                                ";
                            }
                        ?>
                    </div>
                    <div class="slide">
                        <?php
                        if (session_status() == PHP_SESSION_NONE)
                            session_start();

                        $query = "SELECT max(voteNumber) as num FROM preposition WHERE WEEKOFYEAR(prepDate) = WEEKOFYEAR(NOW())-1 limit 1";
                        $result = mysqli_query($conn, $query);
                        if (!$result) {
                            echo "error in gettting the maximum voteNumber";
                        } else
                            while ($row = mysqli_fetch_assoc($result)) {
                                $max = $row['num'];
                            }
                        // SELECT * FROM preposition WHERE WEEKOFYEAR(prepDate)=WEEKOFYEAR(NOW())-1
                        $query = "SELECT uidUsers, text, prepDate ,max(voteNumber) as voteNumber FROM preposition WHERE (voteNumber = ' $max ') and (WEEKOFYEAR(prepDate) = WEEKOFYEAR(NOW()))-1  limit 1";
                        $result = mysqli_query($conn, $query);
                        if (!$result) {
                            echo "error in gettting the maximum voteNumber";
                        } else
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "
                                <div class='slidePrep' style='margin-left: 10px'>
                                    <div class='shap one'></div>
                                    <div class='shap two'></div>
                                    <div class='shap two four'></div>
                                    <div class='shap one three'></div>
                                    <div class='containerSlide'>
                                        <div class='inline'>
                                            <h6 aria-disabled = 'true'>" . $row['prepDate'] . "  " . $lang['sweeks'] . "</h6>
                                            <div class='votesTop' style='position:relative; left:90%; top:-30px'>
                                                <i class=' fas fa-thumbs-up '></i>
                                                <span style=''>" . $row['voteNumber'] . " Voted</span>
                                            </div>
                                            <h1 style='margin:0px; padding:0px'>
                                                <a>
                                                    <i class='first icon fas fa-user-circle'></i>
                                                    <i class='second'>" . $row['uidUsers'] . "</i>
                                                </a>
                                            </h1>

                                        </div>
                                        <div class='textPrep'>
                                            <p>" . $row['text'] . "</p>
                                        </div>
                                    </div>
                                </div>
                                ";
                            }
                        ?>
                    </div>
                    <div class="slide">
                        <?php
                        if (session_status() == PHP_SESSION_NONE)
                            session_start();

                        $query = "SELECT max(voteNumber) as num FROM preposition WHERE WEEKOFYEAR(prepDate) = WEEKOFYEAR(NOW())-2 limit 1";
                        $result = mysqli_query($conn, $query);
                        if (!$result) {
                            echo "error in gettting the maximum voteNumber";
                        } else
                            while ($row = mysqli_fetch_assoc($result)) {
                                $max = $row['num'];
                            }
                        $query = "SELECT uidUsers, text, prepDate ,max(voteNumber) as voteNumber FROM preposition WHERE (voteNumber = ' $max ') and (WEEKOFYEAR(prepDate) = WEEKOFYEAR(NOW()))-2  limit 1";
                        $result = mysqli_query($conn, $query);
                        if (!$result) {
                            echo "error in gettting the maximum voteNumber";
                        } else
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "
                                <div class='slidePrep' style='margin-left: 10px'>
                                    <div class='shap one'></div>
                                    <div class='shap two'></div>
                                    <div class='shap two four'></div>
                                    <div class='shap one three'></div>
                                    <div class='containerSlide'>
                                        <div class='inline'>
                                            <h6 aria-disabled = 'true'>" . $row['prepDate'] . "  " . $lang['tweeks'] . "</h6>
                                            <div class='votesTop' style='position:relative; left:90%; top:-30px'>
                                                <i class=' fas fa-thumbs-up '></i>
                                                <span style=''>" . $row['voteNumber'] . " Voted</span>
                                            </div>
                                            <h1 style='margin:0px; padding:0px'>
                                                <a>
                                                    <i class='first icon fas fa-user-circle'></i>
                                                    <i class='second'>" . $row['uidUsers'] . "</i>
                                                </a>
                                            </h1>

                                        </div>
                                        <div class='textPrep'>
                                            <p>" . $row['text'] . "</p>
                                        </div>
                                    </div>
                                </div>
                                ";
                            }
                        ?>
                    </div>
                </div>
                <div class="navigation" style="margin-left:16px;">
                    <label for="r1" class="bar r1 active"></label>
                    <label for="r2" class="bar r2"></label>
                    <label for="r3" class="bar r3"></label>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('.navigation .r1').click(function() {
                        $('.bar').removeClass('active');
                        $('.r1').addClass('active');
                    })
                    $(' .navigation .r2 ').click(function() {
                        $('.bar').removeClass('active');
                        $('.r2').addClass('active');
                    })
                    $('.navigation .r3').click(function() {
                        $('.bar').removeClass('active');
                        $('.r3').addClass('active');
                    })
                })
            </script>
        </section>
    </div>
    <?php
    // while (1) {
    // seding a broadcast message every sunday to every user alerting them the best proposition
    if (date('D', strtotime('Saturday')) == 'Sat' && date('h:i') == '11:59') {
        echo "<script>alert('executing the mail.php page')</script>";
        include "mail.php";
    } else {
        //this was just a test
        // echo "doesn't match <br>";
        // echo date('Y-m-D h:i');
    }
    // }
    ?>
    <!-- end best this week -->

    <style>
        .wrapperFooterPart {
            position: relative;
            overflow: hidden;
            transform: translateY(5%);
        }

        .contact-area .message {
            background: transparent;
        }

        #form_name,
        #form_email,
        #form_message {
            background: white;
            border-radius: 15px;
        }
    </style>
    <section class="wrapperFooterPart">
        <!--contact area starts-->

        <div class="contact-area section-padding" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header wow fadeInDown" data-wow-delay="0.2s">
                            <!-- <p class="line-one"></p> -->
                            <h2 class="headers"><?php echo $lang['contact'] ?></h2>
                            <p class="line-one"></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <style>
                        .single-contact {
                            margin-bottom: 20px;
                            color: white;
                            font-size: 14px;
                        }

                        .single-contact p {
                            color: black;
                            font-size: 12px;
                        }

                        .single-contact h2 {
                            color: white;
                            font-size: 18px;
                        }

                        .single-contact.location {
                            background-image: -webkit-linear-gradient(40deg, #e87e16 0%, #f0de14 100%);
                            border-radius: 6px;
                        }

                        .single-contact.phone {
                            background-image: -webkit-linear-gradient(40deg, #fec92f 0%, #e87e16 100%);
                            border-radius: 6px;
                        }

                        .single-contact.email {
                            background-image: -webkit-linear-gradient(40deg, #e87e16 0%, #f9a47a 100%);
                            border-radius: 6px;
                        }

                        .single-contact.socialMedia {
                            background-image: -webkit-linear-gradient(40deg, #2171d4 0%, #2cc4f0 100%);
                            border-radius: 6px;
                        }

                        .single-contact {
                            -webkit-box-shadow: 0 0px 0px 0 none;
                            box-shadow: 0 0px 0px 0 none;
                        }

                        .single-contact:hover {
                            -webkit-box-shadow: 0 20px 40px 0 rgba(12, 0, 46, .08);
                            box-shadow: 0 20px 40px 0 rgba(12, 0, 46, .08);
                        }

                        /* icons colors */
                        .single-contact i {
                            color: white;
                        }

                        /* social media colors */
                        .single-contact .socials i {
                            color: rgb(199, 219, 223);
                            transform: scale(1);
                            transition: all 0.1s ease-in-out;
                        }

                        .single-contact .socials i:hover {
                            color: #a485fd;
                            transform: scale(1.2);
                            transition: all 0.1s ease-in-out;
                        }
                    </style>
                    <div class="col-md-3 col-sm-6 ">
                        <div class="single-contact text-center wow fadeInDown location" data-wow-delay="0.4s">
                            <i class="fas fa-compass"></i>
                            <h2><?php echo $lang['location'] ?></h2>
                            <p>Tunis, Tunisie</p>
                            <!--edit here-->
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class="single-contact text-center wow fadeInDown phone" data-wow-delay="0.6s">
                            <i class="fas fa-phone"></i>
                            <h2><?php echo $lang['phone'] ?></h2>
                            <p>(+216) 50642672</p>
                            <!--edit here-->
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class="single-contact text-center wow fadeInDown email" data-wow-delay="0.8s">
                            <i class="fas fa-envelope-open"></i>
                            <h2><?php echo $lang['email'] ?></h2>
                            <p>abedissam95@gmail.com</p>
                            <!--edit here-->
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class="single-contact text-center wow fadeInDown socialMedia" data-wow-delay="1s">
                            <i class="fas fa-share-alt"></i>
                            <h2><?php echo $lang['social media'] ?></h2>
                            <div class="socials">
                                <style>
                                    .socials a {
                                        margin-right: 10px;
                                        font-size: 16px;
                                    }

                                    .socials a:nth-child(5) {
                                        margin-right: 0px
                                    }
                                </style>
                                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a href="https://twitter.com/?lang=en" target="_blank"><i class="fab fa-pinterest-square"></i></a>
                                <a href="https://www.pinterest.com/" target="_blank"><i class="fab fa-twitter-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row " style="background:transparent;">
                    <div class="col-md-10 col-md-offset-1" style="background:transparent;">
                        <h1><?php echo $lang['leave message'] ?></h1>
                        <div class="message" style="background:transparent;">
                            <style>
                                #contact-form {
                                    box-shadow: none;
                                }
                            </style>
                            <form style="background:transparent;" id="contact-form" method="post" action="contact.php" class="wow fadeInDown" data-wow-delay="1.2s">

                                <div class="messages"></div>
                                <!--you can change the message in contact.php file -->

                                <div class="controls">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="form_name" style="padding-left:30px" type="text" name="name" class="form-control" placeholder="<?php echo $lang['name'] ?>" required="required" data-error="Fullname is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="form_email" style="padding-left:30px" type="email" name="email" class="form-control" placeholder="<?php echo $lang['emailHolder'] ?>" required="required" data-error="Valid email is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea id="form_message" style="padding-left:30px" name="message" style="resize:none;overflow:hidden" class="form-control" placeholder="<?php echo $lang['message'] ?>" rows="5" required="required" data-error="Leave a message for me"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <style>
                                            button.btn {
                                                /* transform: translate(410px, 20px); */
                                            }
                                        </style>

                                        <div class="col-md-12">
                                            <button class="btn animation" name="submitFeedback">
                                                <span><?php echo $lang['send'] ?></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--contact area ends-->

        <style>
            .new_footer_area {
                overflow: hidden;
            }

            .new_footer_area {
                background: #f5f5fa;
            }

            .new_footer_top {
                padding: 120px 0 270px;
                position: relative;
            }

            .new_footer_top .f_widget.about-widget ul li:first-child,
            .new_footer_area .widget.footer-widget:nth-child(1),
            .new_footer_area .widget.footer-widget:nth-child(2),
            .new_footer_area .widget.footer-widget:nth-child(3),
            .new_footer_area .widget.footer-widget:nth-child(4) {
                padding-top: 0;
            }

            .new_footer_area .widget.footer-widget {
                padding-top: 50px;
            }

            .bg_color {
                background: #fbfbfd;
            }

            .new_footer_top p {
                font-size: 16px;
                font-weight: 300;
                line-height: 28px;
                color: #6a7695;
                margin-bottom: 20px;
            }

            .textwidget p {
                font-weight: 400;
                line-height: 1.9em;
            }

            p {
                margin-top: 0;
                margin-bottom: 1rem;
            }

            user agent stylesheet p {
                display: block;
                margin-block-start: 1em;
                margin-block-end: 1em;
                margin-inline-start: 0px;
                margin-inline-end: 0px;
            }

            .mt_30 {
                margin-top: 30px;
            }

            .f_300 {
                font-weight: 300;
            }

            .f_p {
                font-family: "Poppins", sans-serif;
            }

            .l_height28 {
                line-height: 28px;
            }

            .f_size_15 {
                font-size: 15px;
            }

            .mb-0,
            .my-0 {
                margin-bottom: 0 !important;
            }

            .new_footer_area .footer_bottom {
                padding-top: 5px;
                padding-bottom: 50px;
            }

            .footer_bottom,
            .s_pricing-item ul li,
            .footer_area_four .footer_top ul li a,
            .f_widget.about-widget .f_list li a {
                font-weight: 400;
            }

            .footer_bottom {
                font-size: 14px;
                font-weight: 300;
                line-height: 20px;
                color: #7f88a6;
                padding: 27px 0;
            }

            .footer-widget .widget_title {
                color: #606179;
            }

            .new_footer_top .f-title {
                margin-bottom: 30px;
                color: #263b5e;
            }

            .widget_title {
                margin-bottom: 35px;
            }

            .mb_40 {
                margin-bottom: 40px;
            }

            .t_color {
                color: #051441;
            }

            .f_600 {
                font-weight: 600;
            }

            .f_size_18 {
                font-size: 18px;
            }

            .widget.widget_nav_menu ul,
            .widget.widget_meta ul,
            .widget.widget_pages ul,
            .widget.widget_archive ul,
            .widget.widget_categories ul {
                margin-bottom: 0;
                padding-left: 0;
                list-style: none;
            }

            .footer-widget .menu {
                background: transparent;
            }

            .widget ul {
                list-style: none;
                margin: 0;
                padding: 0;
            }

            dl,
            ol,
            ul {
                margin-top: 0;
                margin-bottom: 1rem;
            }

            ul {
                display: block;
                list-style-type: disc;
                margin-block-start: 1em;
                margin-block-end: 1em;
                margin-inline-start: 0px;
                margin-inline-end: 0px;
                padding-inline-start: 40px;
            }

            a {
                text-decoration: none;
            }

            a:hover {
                text-decoration: none;
                color: #a485fd;
            }
        </style>
        <footer class="new_footer_area bg_color" id="footer">
            <div class="new_footer_top">
                <div class="container">
                    <style>
                        .map_area {
                            height: 552px;
                            position: relative;
                        }

                        .map-area iframe {
                            width: 100vw;
                            height: 500px;
                            transform: translateX(-110px)
                        }

                        img.size-medium {
                            margin-left: -60px;
                        }

                        p span.txt {
                            margin-left: -60px;
                            font-size: 30px;
                            font-family: 'Poppins', sans-serif !important;
                        }
                    </style>
                    <section class="map-area wow fadeInDown" data-wow-delay="0.2s">
                        <div class="conatiner">
                            <div class=" col-md-12">
                                <div class="row">
                                    <div style="margin: 0 auto; text-align:center;width:100vw;height:100vh">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12785.147232176545!2d10.269098677275121!3d36.76368647969075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd49fa15643927%3A0xad64c8c462b52435!2sInstitut+Sup%C3%A9rieur+des+Etudes+Technologiques+de+Rades!5e0!3m2!1sen!2stn!4v1558792534635!5m2!1sen!2stn" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="row" style="margin-top: -80px">
                        <div id="text-1" class="widget footer-widget col-lg-3 col-md-6 widget_text">
                            <div class="f_widget about-widget">
                                <div class="textwidget">
                                    <p>
                                        <img src="images/easyland_logo.png" width="156" height="40" alt="easyLandLogo" class="alignnone size-medium wp-image-3494">
                                        <span class="txt">EasyLand</span>
                                    </p>
                                    <p class="f_300 f_p f_size_15 mb-0 l_height28 mt_30">
                                        <?php echo $lang['EasyLand'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="nav_menu-2" class="widget footer-widget col-lg-3 col-md-6 widget_nav_menu">
                            <div class="f_widget about-widget">
                                <h3 class="widget_title f-title f_600 t_color f_size_18 mb_40"><?php echo $lang['solutions'] ?></h3>
                                <div class="menu-footer-02-container">
                                    <ul id="menu-footer-02" class="menu">
                                        <li id="menu-item-1012" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1012"><a href="#" class="nav-link"><?php echo $lang['report'] ?> </a></li>
                                        <li id="menu-item-1014" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1014"><a href="#" class="nav-link"><?php echo $lang['allUsers'] ?> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="nav_menu-1" class="widget footer-widget col-lg-3 col-md-6 widget_nav_menu">
                            <div class="f_widget about-widget">
                                <h3 class="widget_title f-title f_600 t_color f_size_18 mb_40"><?php echo $lang['title about'] ?></h3>
                                <div class="menu-footer-01-container">
                                    <ul id="menu-footer-01" class="menu">
                                        <li id="menu-item-1003" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1003"><a href="#" class="nav-link"><?php echo $lang['company'] ?> </a></li>
                                        <li id="menu-item-1004" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1004"><a href="#" class="nav-link"><?php echo $lang['leadership'] ?> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="nav_menu-1" class="widget footer-widget col-lg-3 col-md-6 widget_nav_menu">
                            <div class="f_widget about-widget">
                                <h3 class="widget_title f-title f_600 t_color f_size_18 mb_40"><?php echo $lang['languages'] ?></h3>
                                <div class="menu-footer-01-container">
                                    <ul id="menu-footer-01" class="menu">
                                        <li id="menu-item-1003" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1003">
                                            <a name="english" href="main.php?lang=en" class="nav-link">
                                                <?php echo $lang['Englich'] ?>
                                                <?php
                                                if (isset($_POST['english']))
                                                    echo '<script type="text/javascript">
                                                    location.replace("main.php?lang=en");
                                                    </script>';
                                                ?>
                                            </a>
                                        </li>
                                        <li id="menu-item-1004" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1004">
                                            <a name="french" href="main.php?lang=fr" class="nav-link">
                                                <?php echo $lang['Frensh'] ?>
                                                <?php
                                                if (isset($_POST['french']))
                                                    echo '<script type="text/javascript">
                                                        location.replace("main.php?lang=fr");
                                                    </script>';
                                                ?>
                                            </a>
                                        </li>
                                        <li id="menu-item-1004" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1004">
                                            <a name="arabic" href="main.php?lang=ar" class="nav-link">
                                                <?php echo $lang['Arabic'] ?>
                                                <?php
                                                if (isset($_POST['arabic']))
                                                    echo '<script type="text/javascript">
                                                        location.replace("main.php?lang=ar");
                                                    </script>';
                                                ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="nav_menu-3" class="widget footer-widget col-lg-3 col-md-6 widget_nav_menu">
                            <div class="f_widget about-widget">
                                <h3 class="widget_title f-title f_600 t_color f_size_18 mb_40"></h3>
                                <div class="menu-footer-03-container">
                                    <ul id="menu-footer-03" class="menu">
                                        <li id="menu-item-1004" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1004">
                                            <img href="#" class="nav-link">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div>
                    <img src="images/footer_bg.png" alt="">
                </div> -->
                <div class="container">
                    <hr width="50%">
                </div>
            </div>
            <div id="footer_bottom" class="footer_bottom" style="margin-top: -200px">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-7">
                            <p><?php echo $lang['copyright'] ?></p>
                        </div>
                        <!-- <div class="col-lg-6 col-sm-5 text-right">
                            <p><?php echo $lang['made'] ?> &nbsp;<i class="fas fa-heart" style="color: red;"></i>&nbsp;<?php echo $lang['with'] ?>&nbsp;<a href="#">Essam Abed</a></p>
                        </div> -->
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer Area Ends-->



        <!--button animation-->
        <script type="text/javascript">
            $(' . animation ').mouseover(function() {
                $(' . animation ').addClass(' animated bounceIn ');
            });
            $(' . animation ').mouseout(function() {
                $(' . animation ').removeClass(' animated bounceIn');
            });
        </script>

        <script src="boids-canvas/boids-canvas.js"></script>
        <script>
            var canvasDiv = document.getElementById('boids-canvas');
            var options = {
                background: '#ecf0f1',
                density: 'medium',
                speed: 'medium',
                interactive: true,
                mixedSizes: true,
                boidColours: ["#34495e", "#e74c3c", '#2ecc71', '#9b59b6', '#f1c40f', '#1abc9c']
            };
            var boidsCanvas = new BoidsCanvas(canvasDiv, options);
        </script>

        <!--Latest version JQuery-->
        <script src="js/jquery-3.2.1.min.js"></script>

        <!--Bootstrap js-->
        <script src="js/bootstrap.min.js"></script>

        <!--Magnific popup js-->
        <script src="js/jquery.magnific-popup.js"></script>

        <!--Owl Carousel js-->
        <script src="js/owl.carousel.js"></script>

        <!--Animated headline js-->
        <script src="js/jquery.animatedheadline.js"></script>

        <!--wow js-->
        <script src="js/wow.min.js"></script>

        <!--Validator js-->
        <script src="js/jquery.waypoints.js"></script>

        <!--counter up js-->
        <script src="js/jquery.counterup.min.js"></script>

        <!--Validator js-->
        <script src="js/validator.js"></script>

        <!--Contact js-->
        <script src="js/contact.js"></script>

        <!--Main js-->
        <script src="js/main.js"></script>

        <!-- vote css -->
        <script src="vote up and down.js"></script>
</body>

</html>