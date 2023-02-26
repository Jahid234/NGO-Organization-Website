<?php

// Start the session
session_start();

if (!isset($_SESSION["login"]))
    header("location: login.php");

include('functional/dashboard_details.php');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NEUB Foundation</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/custom_css.css" />
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            color: rgb(37, 37, 37);
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        .covid-btn.w3-button {
            color: crimson;
            /* background-color: crimson; */
        }
        .covid-btn.w3-button:hover {
            color: white !important;
            background-color: crimson !important;
        }
    </style>
</head>

<body class="dashboard">

    <!-- side bar -->
    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:20%">

        <h3 class="w3-bar-item">
            Welcome <?php echo $_SESSION['user_name']; ?>
        </h3>
        <a href="about_us.php" class="mt-5 w3-bar-item w3-button">About us</a>
        <a href="blog.php" class="w3-bar-item w3-button">Blogs</a>
        <a href="services.php" class="w3-bar-item w3-button">Upcoming Events</a>
        <a href="donate1.php" class="w3-bar-item w3-button">Donate to us</a>
        <a href="volunteer.php" class="w3-bar-item w3-button">Join us by volunteering</a>
        <a href="gallery.php" class="w3-bar-item w3-button">Gallery</a>
        <a href="contact_us.php" class="w3-bar-item w3-button">Contact us</a>
        <br>
        <a href="covid.php" class="covid-btn w3-bar-item w3-button"><i class="fa fa-medkit blink" aria-hidden="true"></i> Covid-19</a>
        <br>
        <a href="logout.php" class="w3-bar-item w3-button btn btn-dark">Logout</a>
    </div>

    <!-- main page -->

    <div style="margin-left: 20%;">
        <?php @include 'header.php'?>        

        <!--  dashboard Starts Here  -->

        <div class="p-5">

            <section class="sub-sec row align-items-center">
                <h2 class="col-md-12">Personal details</h2>

                <div class="col-md-2">
                    <img class="profile-img mt-1 mb-1" src="assets/images/team/jahid.jpeg" width="100%" alt="">
                </div>
                <div class="col-md-10">
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <td><?php echo $_SESSION['user_name']; ?></td>
                        </tr>
                        <tr>
                            <th>Phone number</th>

                            <td><?php echo $_SESSION['user_phone']; ?></td>
                        </tr>
                        <tr>
                            <th>Email address</th>
                            <td style="text-transform: lowercase;"><?php echo $_SESSION['user_email']; ?></td>
                        </tr>
                    </table>
                </div>
            </section>
        </div>
        <!--   Footer Starts Here  -->

        <?php @include 'footer.php' ?>


</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>