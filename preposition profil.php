<?php
if (session_status() == PHP_SESSION_NONE)
    session_start();
require "includes/dbh.inc.php";
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Jekyll v3.8.5" />
    <link rel="stylesheet" href="css/bootstrapFaults.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-static/" />
    <link href="navbar-top.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profile.css">
    <!-- sidebar starts -->
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>

    <!--========== Theme Fonts ==========-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,600,700,800" rel="stylesheet">
    <!--Font Awesome css-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

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
    <title>EasyLand | Profile</title>
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

        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
        }

        .purple-bg {
            background: #accf52;
            background: -moz-linear-gradient(left, #accf52 0%, #4bf90c 100%);
            background: -webkit-gradient(left top, right top, color-stop(0%, #accf52), color-stop(100%, #4bf90c));
            background: -webkit-linear-gradient(left, #accf52 0%, #4bf90c 100%);
            background: -o-linear-gradient(left, #accf52 0%, #4bf90c 100%);
            background: -ms-linear-gradient(left, #accf52 0%, #4bf90c 100%);
            background: linear-gradient(to right, #accf52 0%, #4bf90c 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#accf52', endColorstr='#0072ff', GradientType=1);
            background: #accf52;
            background-image: -webkit-linear-gradient(180deg, #fec92f 0%, #e87e16 100%);
        }
    </style>
</head>

<body style="overflow:hidden;">
    <style>
        .navbar-brand {
            width: auto;
        }

        .navbar-brand img {
            transform: translateY(-10px);
            margin-right: 80px;
        }
    </style>
    <style>
        li>* {
            font-weight: 600;
            transform: scale(1);
            transition: all 0.1s ease-in-out;
            transition: all 2s;
            transition-timing-function: cubic-bezier(0.1, 0.7, 1.0, 2.0);
        }

        li>.activated:hover {
            color: #accf52 !important;
            transform: scale(1.05);
            transition: all 0.1s ease-in-out;
        }

        .profile p {
            color: #e87e16
        }
    </style>
    <style>
        div.purple-bg a.navbar-brand {
            margin-bottom: 100px;
        }

        main {
            width: 100vw;
            height: 100vh;
        }

        main .main-container {
            /* background: url(images/tunisia.jpg);
            background-size: contain;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center; */
            height: 100vh;
            width: 100vw;
            background: #f7f6fa
        }
    </style>
    <main style="overflow:hidden">
        <div class="main-container">
            <section class="me-home wrapper">
                <div class="container-fluid h-100">
                    <div class="row row-eq-height h-100">
                        <div class="col-md-3 purple-bg">
                            <style>
                                .txt-profile {
                                    margin-left: -50px;
                                    font-size: 25px;
                                    font-family: 'Poppins', sans-serif;
                                    color: white;
                                }
                            </style>
                            <img src="images/easyland_logo.png" alt=""><span class="txt-profile">asyLand</span>
                            <div class="iq-objects">
                                <span class="iq-objects-01">
                                    <img class="img-fluid" src="images/01.png" alt="drive">
                                </span>
                                <div class="conatiner containerUsername">
                                    <h1 style="text-transform: uppercase; color: lightblue">
                                        <?php
                                        if (isset($_SESSION['userId'])) {
                                            echo $_SESSION['userUid'];
                                        }
                                        ?>
                                    </h1>
                                </div>
                                <style>
                                    ul li a.nav-link {
                                        color: white;
                                    }

                                    ul li a.nav-link:hover {
                                        color: #accf52;
                                    }
                                </style>
                                <ul>
                                    <li><a href="preposition profil.php" class="nav-link"><?php echo $lang['second navbar']; ?></a></li>
                                    <li><a href="edit profile.php" class="nav-link"><?php echo $lang['profileEdition']; ?></a></li>
                                    <li><a href="about profile.php" class="nav-link"><?php echo $lang['about']; ?></a></li>
                                    <li><a href="change password.php" class="nav-link"><?php echo $lang['pwdChange']; ?></a></li>
                                </ul>

                            </div>
                        </div>
                        <style>
                            .col-md-9.main-content.align-self-center {
                                background: url(images/banner_origin.jpg) no-repeat;
                                background-size: cover;
                                background-position: center;
                            }

                            #boxscroll {
                                width: 88.6vw
                            }
                        </style>
                        <div class="col-md-9 main-content align-self-center" style="height:100vh">
                            <style>
                                #boids-canvas {
                                    width: 100%;
                                    height: 100%;
                                }
                            </style>


                            <div id="boxscroll" class="iq-home" style="overflow: scroll; outline: currentcolor none medium;" tabindex="1">

                                <div class="home-deta iq-mt-90">
                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="boder-img">
                                                <style media="screen">
                                                    .containerUsername h1 {
                                                        color: white;
                                                    }
                                                </style>

                                                <img src="images/unknown-person.jpg" class="img-fluid" alt="#" style="position:fixed; width: 28%;height: 60%">

                                            </div>
                                        </div>
                                        <style>
                                            h4.userColor {
                                                font-size: 16px;
                                            }

                                            .containerPrep {
                                                margin-bottom: 10px;
                                            }

                                            .jumbotron {
                                                background: white;
                                            }

                                            .jumbotron p#prepositionText {
                                                font-family: "Montserrat", Arial, sans-serif;
                                                font-size: 17px;
                                                line-height: 1.8;
                                                font-weight: 500;
                                                /* color: #999999; */
                                                color: #666
                                            }

                                            div.newStyle {
                                                display: flex;
                                                justify-content: space-between;
                                                margin-top: 60px;
                                            }

                                            .votingSpace {
                                                transform: translateY(5px);
                                                background: none;
                                                border: none;
                                                outline: none;
                                            }

                                            .votingSpace {
                                                color: #385898;
                                            }

                                            .votingSpace:hover {
                                                color: #fec92f;
                                            }

                                            .votingSpace:active {
                                                color: #a485fd;
                                            }

                                            .VoteSpace .groupProfile {
                                                /* display: flex; */
                                                justify-content: space-around
                                            }

                                            .groupProfile i {
                                                float: left;
                                                font-size: 20px;
                                            }

                                            .groupProfile h4 {
                                                margin-top: -1px;
                                                float: right;
                                                color: black;
                                            }

                                            .VoteSpace {
                                                margin-top: 8px;
                                                margin-right: 10px;
                                            }

                                            .VoteSpace>* {
                                                color: #411881 !important;
                                                transition: all 0.2s ease-in-out;
                                            }

                                            .VoteSpace>*:hover {
                                                color: #cb4efc !important;
                                                transition: all 0.2s ease-in-out;
                                            }

                                            .groupProfile {
                                                margin-top: 7px;
                                                margin-left: 20px;
                                            }

                                            .newStyle {
                                                border-top-right-radius: 20px;
                                                border-bottom-right-radius: 20px;
                                            }

                                            .containerPrep {
                                                box-shadow: 0px 30px 40px 0px #e2e3e7;
                                            }
                                        </style>
                                        <div class="col-md-8 content-deta prepContainer" style="transform: translateY(0%)">
                                            <h2 class="iq-tw-8" style="margin-bottom: 80px;"><?php echo $lang['yours']; ?> <span class="iq-font-purple"><?php echo $lang['second navbar']; ?></span></h2>
                                            <?php
                                            $username = $_SESSION['userUid'];
                                            $sql = "SELECT * FROM preposition WHERE uidUsers='$username' ORDER BY prepDate DESC";
                                            $result = mysqli_query($conn, $sql);
                                            if (!$result) {
                                                echo '<script> alert("error fetching user profile prepositions") </script>';
                                            }

                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '<div class="containerPrep">
                                                    <div class="jumbotron " id="prepositions" >
                                                    <h6>' . $row['prepDate'] . '</h6>
                                                    <p id="prepositionText">' . $row['text'] . ' </p>
                                                        <div class="newStyle">
                                                            <div class="groupProfile" >
                                                                <i class="fas fa-user-tie" style="margin-right:10px; font-size:30px;color:#accf52"></i>
                                                                <h4 class="userColor" style="color: #accf52">' . $lang['writen by'] . '<br> ' . $row['uidUsers']  . '</h4>
                                                            </div>
                                                            <br>
                                                            
                                                            <div class="VoteSpace">
                                                                <div class="line-divider"></div>
                                                                <button name="voteUp" type="button" class="votingSpace voteup " style="font-size: 16px;margin-top: 0px"> 
                                                                    <i class="fas fa-thumbs-up"></i>
                                                                    ' . $lang['vote'] . ' <i class="text"  style=" font-style: normal; font-size: 14px">' . $row['voteNumber'] . '</i>             
                                                                </button>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>';
                                                }
                                            } elseif (mysqli_num_rows($result) == 0) {
                                                echo "you have no prepositions, yet";
                                            } else {
                                                echo "sql error in fetching profile prepositions";
                                            }

                                            ?>

                                        </div>

                                        <!-- sidebar area starts -->
                                        <style media="screen">
                                            .sh-side-options {
                                                transform: translateY(50vh);
                                                background: transparent;
                                            }

                                            .sh-side-options-item i {
                                                transform: translateX(-6px);
                                            }

                                            .profileFix {
                                                margin-right: 40px;
                                                margin-top: -10px;
                                                background: transparent;
                                            }

                                            .same.second i {
                                                transform: translateX(0px);
                                            }

                                            .first .sh-side-options-hover,
                                            .second .sh-side-options-hover {
                                                transform: translateY(-20px);
                                                margin-bottom: 0px;
                                            }
                                        </style>
                                        <div class="sh-side-options profileFix">
                                            <div class="sh-side-options-container">

                                                <div class="sh-side-options-divider"></div>

                                                <a href="main.php" class="sh-side-options-item sh-accent-color second hide same">
                                                    <i class="fas fa-home"></i>
                                                    <div class="sh-side-options-hover"><?php echo $lang['first navbar'] ?></div>
                                                </a>

                                                <div class="sh-side-options-divider"></div>

                                                <style media="screen">
                                                    .toShow i {
                                                        transform: translateX(0px);
                                                    }

                                                    .toShow {
                                                        border: 1px solid white;
                                                    }

                                                    .toShow:hover {
                                                        cursor: pointer;
                                                    }
                                                </style>
                                                <a class="sh-side-options-item sh-accent-color toShow fourth">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </a>
                                                <script type="text/javascript">
                                                    document.querySelector('.toShow').style = "border-top:0px";

                                                    $(document).ready(function() {
                                                        $('.toShow').click(function() {
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
                                                        })
                                                    })
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- sidebar area ends -->

                                    <style>
                                        footer {
                                            margin-bottom: -30px;
                                        }
                                    </style>
                                    <footer>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-3 purple-bg">
                                                    <div class="footer-copyright text-white"><?php echo $lang['copyright'] ?></div>
                                                </div>
                                                <div class="col-md-9">
                                                    <ul class="follow-us pull-right">
                                                        <li><?php echo $lang['follow'] ?> :</li>
                                                        <li><a href="#"><i class="fab fa-facebook"></i> </a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script src="js/profile.js"></script>
    <script src="js/custom2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>