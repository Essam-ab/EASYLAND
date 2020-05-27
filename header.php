<?php
require "includes/dbh.inc.php";
if (session_status() == PHP_SESSION_NONE)
    session_start();
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
    <!-- <link rel="stylesheet" href="css/all.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="css/jquery.mb.YTPlayer.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/contact-index.css">


    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-static/" />
    <link href="navbar-top.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="icon" href="images/easyland_logo.png" sizes="32x32"> -->

    <title>EasyLand | login</title>
    <style>
        header {
            font-size: 16px;
        }

        .btn.btn-outline-primary {
            color: #accf52;
            border-color: #accf52;
        }

        .btn.btn-outline-primary:hover {
            color: white;
            /* border-color: white; */
            background: #accf52;
        }

        .nav-item.active a.nav-link {
            color: #accf52 !important;
        }

        body {
            background: url(images/home_background.jpg) no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center 30px;
            /* height: 100vh; */
        }

        .navbar {
            height: 20px;
        }

        .form-control:focus {
            color: #398f72;
            background-color: #fff;
            border-color: #c0d86a;
            outline: 0;
            box-shadow: 0 0 0 0.2rem #c0d86a;
        }

        .btn-outline-primary:active,
        .btn-outline-primary:focus {
            background: #fec92f !important;
            border-color: #fec92f !important;
            box-shadow: 0 0 0 0.2rem #fec92f !important;
        }
    </style>

</head>

<body style="overflow:hidden">

    <header>
        <style>
            .navbar-brand img {
                margin-top: 2px;
            }
        </style>
        <nav class="navbar navbar-expand-md navbar-light bg-light mb-4">
            <a href="#" class="l">
                <img src="images/easyland_logo.png" alt="easylandLogo">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> </span>
            </button>

            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"><?php echo $lang['first navbar']; ?> <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link contact" href="contactUs.php"><?php echo $lang['contact']; ?></a>
                    </li>
                </ul>
                <style>
                    #form-fix {
                        padding: 0px !important;
                        font-size: 1.1rem !important;
                    }
                </style>
                <div class="form-group-md form-inline mt-md-0 ">
                    <?php
                    if (isset($_SESSION['userId'])) {
                        // header("location:main.php"); ==> this doesn't work it has an unknown error
                        echo '<script type="text/javascript">
				                location.replace("main.php");
			                </script>';
                        echo ' <form action="includes/logout.inc.php" method="post">
                        <button type="submit" class="btn btn-outline-primary my-2 my-sm-0" name="logout-submit">Logout</button>
                        </form>';
                    } else {
                        echo '<form action="includes/login.inc.php" class="form-login" method="post" style="z-index:222">
                            <input class="form-control mr-sm-2" id="form-fix" type="text" name="mailuid" placeholder="' . $lang['usermail'] . '...">
                            <input type="password" name="pwd" class="form-control mr-sm-2" id="form-fix"  placeholder="' . $lang['passwd'] . '...">
                            <button class="btn btn-outline-primary my-2 my-sm-0 mr-4" type="submit" name="login-submit">' . $lang['login'] . '</button>
                        </form>
                        <a href="signup.php" class="btn btn-outline-primary mr-4 signup">' . $lang['signup'] . '</a>';
                    }
                    ?>

                </div>
            </div>
        </nav>
    </header>


    <style>
        .image-index {
            z-index: -1;
            background-image: url(images/person_transparent.webp);
            background-size: contain;
            background-repeat: no-repeat;
            vertical-align: middle;
            position: absolute;
            height: 100vh;
        }
    </style>
    <div class="container image-index">
    </div>

    <style>
        .errorHandler {
            color: black;
        }

        .linkHandler {
            text-decoration: none;
        }

        .container {
            text-align: center;
        }
    </style>


    <div class="container">
        <?php
        if (isset($_POST['login-submit'])) {
            $mailuid = $_POST['mailuid'];
        }
        if (!isset($_SESSION['userId'])) {
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "wrongpwd") {
                    echo " <form method='post' style='background:#f8f9fa!important;padding:20px;border-radius: 15px;'>
                        <h2 class='errorHandler text-primary' style='margin-bottom:20px'>" . $lang['wrongpwd'] . "</h2>
                        <button name='recovery' type='submit' class='btn btn-danger'>" . $lang['forgetpwd'] . "</button> 
                        </form>";
                } elseif ($_GET['error'] == "nouser")
                    echo "<h2 class='errorHandler text-primary' style='background:#f8f9fa!important;padding:20px;border-radius: 15px;'>" . $lang['exist'] . "</h2>";
                elseif ($_GET['error'] == "emptyfields")
                    echo "<h2 class='errorHandler text-primary' style='background:#f8f9fa!important;padding:20px;border-radius: 15px;'>" . $lang['fill'] . "</h2>";
                elseif ($_GET['error'] == "messagesent") {
                    echo "<h2 class='errorHandler text-primary' style='background:#f8f9fa!important;padding:20px;border-radius: 15px;'>" . $lang['okmessage'] . "</h2>";
                } elseif ($_GET['error'] == "messagenotsent") {
                    echo "<h2 class='errorHandler text-primary' style='background:#f8f9fa!important;padding:20px;border-radius: 15px;'>" . $lang['errormessage'] . "</h2>";
                }
            }
        }

        ?>
    </div>