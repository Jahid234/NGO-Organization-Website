<?php

// Start the session
session_start();

if (isset($_SESSION["login"]))
    header("location: dashboard.php");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NEUB Foundation</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/custom_css.css" />

    <style>
        .login-error {
            color: red;
            text-align: center;
            /* border: .5px solid pink; */
            border-radius: 1rem;
            background-color: #fae0e4;
        }
    </style>
</head>

<body>

    <!-- covid button -->
    <a href="covid.php">
        <button class="btn covid-relief" type="button">
            <span class="blink"><i class="fa fa-medkit blink" aria-hidden="true"></i> Covid-19</span>
        </button>
    </a>

    <?php @include 'header.php' ?>

    <!--  ************************* login Starts Here ************************** -->

    <section class="container-fluid mission-vision">
        <div class="container">
            <div class="text-center">
                <br>
                <h1>Login</h1>               
            </div>

            <form action="functional/login_formval.php" class="pt-5 col-md-5 m-auto" name="loginform" method="POST">
                <!-- email -->
                <div class="form-label-group">
                    <label class="col-form-label" for="email">Valid Email<small>*</small></label>
                    <input class="form-control" type="email" name="email">
                    <small id="erroremail"><?php // echo $erroremail; 
                                            ?> </small>
                </div>
                <!-- passwd -->
                <div class="form-label-group">
                    <label class="col-form-label" for="password">Confirm Password<small>*</small></label>
                    <input class="form-control" type="password" name="password">
                    <small id="errorphone"><?php //echo $errorphone; 
                                            ?> </small>
                </div>
                <br>
                <input class="btn btn-success btn-block" type="submit" value="Login " />

            </form>

            <?php
            if (isset($_GET["error"]))
                $msg = "Invalid email or password!";
            ?>
            <p class="mt-5 text-center" data-darkreader-inline-color="">

                <?php if (isset($msg)) {
                    echo '<span class="login-error p-2 pl-5 pr-5">';
                    echo $msg;
                    echo '</span>';
                }
                ?>
            </p>



            <p class="text-center pt-5 pb-3">If you're new user, sign up here!!!! </p>
            <p class="text-center"><a href="signup.php"><button class="btn btn-white">SIGN UP</button></a></p>

            <br>
        </div>
    </section>


</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>