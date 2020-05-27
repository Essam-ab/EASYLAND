<style>
    div.footer-area-index {
        font-size: 12px;
        position: absolute;
        bottom: 0px;
        transform: translateX(40vw);
    }

    div.footer-area-index p {
        color: black;
    }

    a {
        color: #accf52
    }

    .footer-area-index .container {
        background-color: #eee !important;
        border-top-right-radius: 15px;
        border-top-left-radius: 15px;
    }
</style>
<div class="footer-area-index page-footer font-small blue">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center">
                <p><?php echo $lang['copyright'] ?> <a style="text-decoration: none;" href="#" target="_blank">Essam Abed</a></p>
                <div class="footer bg-light"></div>
                <a style="text-decoration: none;" name="english" href="index.php?lang=en">
                    <?php echo $lang['Englich'] ?>
                    <?php
                    if (isset($_POST['english']))
                        echo '<script type="text/javascript">
                                location.replace("main.php?lang=en");
                                </script>';
                    ?>
                </a>
                |
                <a style="text-decoration: none;" name="french" href="index.php?lang=fr">
                    <?php echo $lang['Frensh'] ?>
                    <?php
                    if (isset($_POST['french']))
                        echo '<script type="text/javascript">
                                location.replace("main.php?lang=fr");
                            </script>';
                    ?>
                </a>
                |
                <a style="text-decoration: none;" name="arabic" href="index.php?lang=ar">
                    <?php echo $lang['Arabic'] ?>
                    <?php
                    if (isset($_POST['arabic']))
                        echo '<script type="text/javascript">
                                location.replace("main.php?lang=ar");
                            </script>';
                    ?>
                </a>
            </div>
        </div>
    </div>
</div>


<script src="js/all.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js.bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script>
    window.jQuery ||
        document.write(
            '<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>'
        );
</script>
</body>

</html>