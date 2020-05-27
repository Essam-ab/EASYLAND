<?php
include "header.php";
?>
<script>
    document.querySelector('.image-index').style.opacity = "0.7";
</script>
<!-- buttons style starts -->
<style>
    .btnOther {
        border: 1px solid #accf52;
        background: none;
        background-image: -webkit-linear-gradient(40deg, #2171d4 0%, #2cc4f0 100%);
        background: #accf52;
        padding: 10px 20px;
        font-size: 20px;
        font-family: "montserrat";
        cursor: pointer;
        margin: 10px;
        transition: 0.3s;
        position: relative;
        overflow: hidden;
        border-radius: 15px;
    }

    .btn1,
    .btn2 {
        color: white;
    }

    .btn3,
    .btn4 {
        color: #fec92f;
    }

    .btn1:hover,
    .btn2:hover {
        color: white;
        border: 1px solid #fec92f;
    }

    .btn3:hover,
    .btn4:hover {
        color: white;
    }

    .btnOther::before {
        content: "";
        position: absolute;
        left: 0;
        width: 100%;
        height: 0%;
        background: #fec92f;
        z-index: -1;
        transition: 0.3s;
    }

    .btn1::before,
    .btn3::before {
        top: 0;
        border-radius: 0 0 50% 50%;

    }

    .btn2::before,
    .btn4::before {
        bottom: 0;
        border-radius: 50% 50% 0 0;
    }

    .btn3::before,
    .btn4::before {
        height: 180%;
    }

    .btn1:hover::before,
    .btn2:hover::before {
        height: 180%;
    }

    .btn3:hover::before,
    .btn4:hover::before {
        height: 0%;
    }

    #form-fix {
        padding: 0px !important;
        font-size: 1.1rem !important;
    }
</style>
<!-- buttons style ends -->
<link rel="stylesheet" href="sendButton.css">
<main class="container" style="position: relative; z-index: 1000000000000000000000">
    <style>
        .wrapperFooterPart {
            position: relative;
            overflow: hidden;
            transform: translateY(5%);
        }

        .contact-area .message {}

        #form_name,
        #form_email,
        #form_message {
            background: white;
            border-radius: 15px;
        }

        .contact-area .container .row:nth-child(1) {
            margin-top: 20px;
        }
    </style>
    <section class="wrapperFooterPart">
        <!--contact area starts-->
        <div class="contact-area section-padding" id="contact">
            <div class="container">
                <div class="row">
                    <style>
                        .single-contact {
                            margin-bottom: 20px;
                            color: white;
                            font-size: 20px;
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
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class="single-contact text-center wow fadeInDown phone" data-wow-delay="0.6s">
                            <i class="fas fa-phone"></i>
                            <h2><?php echo $lang['phone'] ?></h2>
                            <p>(+216) 50642672</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class="single-contact text-center wow fadeInDown email" data-wow-delay="0.8s">
                            <i class="fas fa-envelope-open"></i>
                            <h2><?php echo $lang['email'] ?></h2>
                            <p>abedissam95@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class="single-contact text-center wow fadeInDown socialMedia" data-wow-delay="1s">
                            <i class="fas fa-share-alt"></i>
                            <h2><?php echo $lang['social media'] ?></h2>
                            <div class="socials">
                                <a href=" https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a href="https://twitter.com/?lang=en" target="_blank"><i class="fab fa-pinterest-square"></i></a>
                                <a href="https://www.pinterest.com/" target="_blank"><i class="fab fa-twitter-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row ">

                    <div class="col-md-10 col-md-offset-1 ">
                        <h1><?php echo $lang['leave message']; ?></h1>
                        <div class="message">
                            <form id="contact-form" method="post" action="contact.php" class="wow fadeInDown" data-wow-delay="1.2s">
                                <div class="messages"></div>

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
                                                <textarea id="form_message" style="padding-left:30px" name="message" style="resize:none;overflow:scroll" class="form-control" placeholder="<?php echo $lang['message'] ?>" rows="5" required="required" data-error="Leave a message for me"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <style>
                                            .btnOther {
                                                transform: translateX(16px)
                                            }
                                        </style>
                                        <div class="col-md-12">
                                            <button class="btnOther btn1">
                                                <span><?php echo $lang['send'];  ?></span>
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
</main>
<script src="sendButton.js"></script>
<?php
include "footer.php";
?>