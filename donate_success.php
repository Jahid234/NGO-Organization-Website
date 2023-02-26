<?php

// Start the session
session_start();

// // Set session variables
// $_SESSION["amount"] = $_POST["amount"];
// $_SESSION["mode"] = $_POST["mode"];

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
        small {
            color: red;
        }
    </style>
</head>

<body>

    <!-- covid button -->
    <a href="covid.php">
        <button class="btn covid-relief" type="button">
            <span class="blink"><i class="fa fa-medkit blink" aria-hidden="true"></i> Covid Relief</span>
        </button>
    </a>

    <?php @include 'header.php' ?> 


    <!--   Volunteer Form Starts Here  -->
    
    <?php

    $errorname = $erroremail = $errorphone = $genderErr = $addressErr = "";
    $name = $email = $phone = $gender = $address = "";

    $anyErr = false;

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        // name
        if (empty($_POST["name"])) {
            $errorname = "Name is required";
            $anyErr = true;
        } else {
            $name = $_POST["name"];
            $name = trim($name);
            if (ctype_alpha(str_replace(' ', '', $name)) === false) {
                $errorname = "Please write a valid name";
                $anyErr = true;
            }
        }

        // email
        if (empty($_POST["email"])) {
            $erroremail = "Email is required";
            $anyErr = true;
        } else {
            $email = trim($_POST["email"]);
            
            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                $erroremail = "Enter valid email";
                $anyErr = true;
            }
        }

        // phone
        if (empty($_POST["phone"])) {
            $errorphone = "Phone is required";
            $anyErr = true;
        } else {
            $phone = trim($_POST["phone"]);
            if (!ctype_digit($phone)) {
                $errorphone = "Only digits are allowed";
                $anyErr = true;
            }
            if (strlen($phone) < 10) {
                $errorphone = "Phone number cannot be less than 10 digits";
                $anyErr = true;
            }
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["address"])) {
            $addressErr = "Address is required";
        } else {
            $address = test_input($_POST["address"]);
        }
    }

    function checkSubmission()
    {
        global $anyErr;
        if ($anyErr == false) {
            return true;
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>


    <div>

        <div>

            <div class="p-5 d-flex justify-content-center align-items-center">
                <div class="">

                    <h1 class="mb-3">Thank you for your help!</h1>

                    <p>We assure you that your contribution will be used for a right cause.</p>

                    <p>Your filled details are provided below -</p>
                    <br>


                    <table class="table">
                        <tr>
                            <td style="border-top: solid;">Name</td>
                            <td style="border-top: solid;">:</td>
                            <td style="border-top: solid;"><?php echo $_SESSION['name']; ?></td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td>:</td>
                            <td><?php echo $_SESSION['age']; ?> years</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td><?php echo $_SESSION['gender']; ?></td>
                        </tr>
                        <tr>
                            <td>Phone number</td>
                            <td>:</td>
                            <td><?php echo $_SESSION['phone']; ?></td>
                        </tr>
                        <tr>
                            <td>Email address</td>
                            <td>:</td>
                            <td style="text-transform: lowercase;"><?php echo $_SESSION['email']; ?></td>
                        </tr>
                        <tr>
                            <td>Amount donated</td>
                            <td>:</td>
                            <td><?php echo " " . $_POST['amount']; ?></td>
                        </tr>
                        <tr>
                            <td style="border-bottom: solid;">Payment method</td>
                            <td style="border-bottom: solid;">:</td>
                            <td style="border-bottom: solid;"><?php echo $_POST['mode']; ?></td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>

    </div>

    <!-- databse -->
    <?php
    include('functional/donation_tbl.php');
    ?>


    <!--  Footer Starts Here  -->

    <?php @include 'footer.php' ?>


</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>