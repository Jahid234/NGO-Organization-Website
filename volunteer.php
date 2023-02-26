<?php
    // Start the session
    session_start();
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
            <span class="blink"><i class="fa fa-medkit blink" aria-hidden="true"></i> Covid-19</span>
        </button>
    </a>

    <!-- header -->
    <?php @include 'header.php' ?>

    <!--   Volunteer Form Starts Here  -->    
    <!-- php code for form validation -->

    <?php

    $errorname = $erroremail = $errorphone = $genderErr = $locationErr = $checklistErr = "";
    $name = $email = $phone = $gender = $location = $checklist = "";

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
        // gender
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
            $anyErr = true;
        } else {
            $gender = test_input($_POST["gender"]);
        }
        // location
        if (empty($_POST["location"])) {
            $locationErr = "Location is required";
            $anyErr = true;
        } else {
            $location = test_input($_POST["location"]);
        }
        // 
        // if (empty($_POST["check_list[]"])) {
        //     $locationErr = "Please select atleast one.";
        //     $anyErr = true;
        // }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>



    <div class="">

        <div class="text-center">
            <br>
            <h1>Fillup the form</h1>
            <h5>We'll be happy to have you with us!</h5>
        </div>

        <!-- volunteer form -->
        <form class="pt-4 col-md-5 m-auto" name="userForm" method="POST" action='volunteer.php'>

            <div class="form-label-group">
                <label for="name">Full Name<small>*</small></label>
                <input type="text" class="form-control" name="name" placeholder="Abc Xyz">
                <small id="errorname"><?php echo $errorname; ?> </small>
            </div>

            <div class="form-label-group">
                <label class="col-form-label" for="email">Valid Email<small>*</small></label>
                <input class="form-control" type="email" name="email" placeholder="jahid1213cvgc@gmail.com">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                <small id="erroremail"><?php echo $erroremail; ?> </small>
            </div>
            <br>
            <div class="form-label-group">
                <label class="col-form-label" for="phone">Contact No.<small>*</small></label>
                <input class="form-control" type="tel" name="phone" placeholder="+8801*********">
                <small id="errorphone"><?php echo $errorphone; ?> </small>
            </div>

            <div class="form-label-group">
                <label class="col-form-label" for="gender">Gender<small>*</small></label><br>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="Female">&nbsp;&nbsp;Female<br>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="Male">&nbsp;&nbsp;Male<br>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="Other">&nbsp;&nbsp;Other<br>
                <small id="genderErr"><?php echo $genderErr; ?> </small>
            </div>
            <br>
            <div class="form-label-group">
                <label class="col-form-label" for="location">Confirm Location<small>*</small></label>
                <input type="text" name="location" class="form-control" placeholder="Akhalia, Sylhet">
                <small id="erroremail"><?php echo $locationErr; ?> </small>
            </div>

            <div class="form-label-group">
                <label for="events" class="col-form-label">Event's you would like to volunteer in: Choose anyone/more<small>*</small></label><br>
                <input type="checkbox" name="check_list[]" value="Food Distribution Drive"><label>&nbsp;&nbsp;Food Distribution Drive</label><br>
                <input type="checkbox" name="check_list[]" value="Covid Relief Camp"><label>&nbsp;&nbsp;Covid Relief Camp</label><br>
                <input type="checkbox" name="check_list[]" value="Old Age Home Visit"><label>&nbsp;&nbsp;Old Age Home Visit</label><br>
                <input type="checkbox" name="check_list[]" value="Orphange Visit"><label>&nbsp;&nbsp;Orphange Visit</label><br>
                <input type="checkbox" name="check_list[]" value="Mental Health Center Volunteering"><label>&nbsp;&nbsp;Mental Health Center Volunteering</label><br>
                <b>Please Select Atleast One Option for Volunteering.</b>
    
            </div>

            <br>

            <br>
            <input class="btn btn-green pull-left" type="submit" value="Submit " />
            <input class="btn btn-danger pull-right" type="reset" value="Reset" />
            <br><br>
        </form>

    </div>



    <!-- databse -->
    <?php
    include('functional/volunteer_tbl.php');
    ?>



    <!--  Footer Starts Here -->

    <?php @include 'footer.php' ?>

</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>