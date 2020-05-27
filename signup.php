<?php
require "header.php";
?>

<main style="z-index: 2222; margin-top: 70px;">
    <div class="container" style="width: 30%;" role="main">
        <style>
            .form-signup input {
                margin-bottom: 10px;
                padding: 15px;
            }

            .jumbotron {
                background: #f8f9fa;
            }

            .form-signup input {
                font-size: 1.05rem
            }

            .form-signup button {
                font-size: 1.05rem
            }
        </style>
        <div class="jumbotron">
            <h1 style="font-size: 30px;" class="text-center text-dark"><?php echo $lang['signup']; ?></h1>
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfeilds") {
                    echo ' <p class=" text-danger" style="font-size: 12px; text-align:center">' . $lang['fill'] . '</p>';
                } elseif ($_GET['error'] == "invaliduidmail") {
                    echo ' <p class=" text-danger" style="font-size: 12px; text-align:center">' . $lang['invalidUorE'] . '</p>';
                } elseif ($_GET['error'] == "invaliduid") {
                    echo ' <p class=" text-danger" style="font-size: 12px; text-align:center">' . $lang['invalidU'] . '</p>';
                } elseif ($_GET['error'] == "invlidmail") {
                    echo ' <p class=" text-danger" style="font-size: 12px; text-align:center">' . $lang['invalidE'] . '</p>';
                } elseif ($_GET['error'] == "passwordcheck") {
                    echo ' <p class=" text-danger" style="font-size: 12px; text-align:center">' . $lang['passwordmatch'] . '</p>';
                } elseif ($_GET['error'] == "usertaken") {
                    echo ' <p class=" text-danger" style="font-size: 12px; text-align:center">' . $lang['usernametoken'] . '</p>';
                }
            } elseif (isset($_GET['signup']))
                if ($_GET['signup'] == "success") {
                    echo ' <p class="text-success" style="font-size: 12px; text-align:center">' . $lang['signupsuccess'] . '</p>';
                }
            ?>
            <div>
                <form action="includes/signup.inc.php" class="form-signup" method="post">
                    <input class="form-control" type="text" name="uid" placeholder="<?php echo $lang['username']; ?>">
                    <input class="form-control" type="email" name="mail" placeholder="<?php echo $lang['email']; ?>">
                    <input class="form-control" type="password" name="pwd" placeholder="<?php echo $lang['passwd']; ?>">
                    <input class="form-control" type="password" name="pwd-repeat" placeholder="<?php echo $lang['repeat']; ?> <?php echo $lang['passwd']; ?>">
                    <button type="submit" class="btn btn-outline-primary btn-block" name="signup-submit"><?php echo $lang['signup']; ?></button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
require "footer.php";
?>