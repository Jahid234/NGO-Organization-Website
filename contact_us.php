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

    <!-- covif button -->
    <a href="covid.php">
        <button class="btn covid-relief" type="button">
            <span class="blink"><i class="fa fa-medkit blink" aria-hidden="true"></i> Covid-19</span>
        </button>
    </a>

    <?php @include 'header.php' ?>

    <!--   Contact Us Starts Here  -->


    <!-- form validation -->
    <?php
    $errorname = $erroremail = $errorphone = $errormessage = "";
    $name = $email = $phone = $message = "";

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
            $email = $_POST["email"];
            $email = trim($email);
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
            $phone = $_POST["phone"];
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
        // message
        if (empty($_POST["message"])) {
            $errormessage = "Message is required";
            $anyErr = true;
        } else {
            $message = $_POST["message"];
            $message = trim($_POST["message"]);
        }
    }
    ?>

    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">

                <div style="padding:20px" class="col-sm-7">
                    <h2>Contact Details</h2>

                    <form name="contactusform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"> <br>
                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Enter Name <small>*</small> </label><span>:</span></div>
                            <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"><small id="errorname"><?php echo $errorname; ?> </small></div>
                        </div>
                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Email Address<small>*</small> </label><span>:</span></div>
                            <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm"><small id="erroremail"><?php echo $erroremail; ?></small></div>
                        </div>
                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Mobile Number<small>*</small></label><span>:</span></div>
                            <div class="col-sm-8"><input type="text" name="phone" placeholder="Enter Mobile Number" class="form-control input-sm"><small id="errorphone"><?php echo $errorphone; ?></small></div>

                        </div>
                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Enter Message<small>*</small></label><span>:</span></div>
                            <div class="col-sm-8">
                                <textarea rows="5" placeholder="Enter Your Message" name="message" class="form-control input-sm"></textarea>
                                <small id="errormessage"><?php echo $errormessage; ?> </small>
                            </div>
                        </div>
                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                            <div class="col-sm-8">
                                <button class="btn btn-primary btn-sm">Send Message</button>
                            </div>
                        </div>
                    </form>

                </div>


                <!-- sending mail -->
                <?php

                use PHPMailer\PHPMailer\PHPMailer;

                if (isset($_POST['name']) && isset($_POST['email'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];

                    require 'assets/PHPMailer-master/src/Exception.php';
                    require 'assets/PHPMailer-master/src/PHPMailer.php';
                    require 'assets/PHPMailer-master/src/SMTP.php';

                    $mail = new PHPMailer();

                    //smtp settings
                    $mail->isSMTP();
                    $mail->Host = "smtp.gmail.com";
                    $mail->SMTPAuth = true;
                    $mail->Username = "jahid1213cvgc@gmail.com";
                    $mail->Password = 'xxicbhydyhoxynbl';
                    $mail->Port = 587;
                    $mail->SMTPSecure = "tls";

                    //email settings
                    $mail->isHTML(true);
                    $mail->setFrom($email, $name);
                    $mail->addAddress("jamil123neub@gmail.com");
                    $mail->Subject = ("Email from NEUB Foundation");
                    $mail->Body = $message;

                    if ($mail->send()) {
                        $status = "success";
                        $response = "Email is sent!";
                    } else {
                        $status = "failed";
                        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
                    }
                }

                ?>

                <div class="col-sm-5">

                    <div style="margin:50px" class="serv">

                        <h2 style="margin-top:10px;">Address</h2>
                      
                        NEUB Foundation<br>
                        Sheikhghat, Sylhet<br><br>
                        Phone: +8801998936352<br>
                        Email: jahid1213cvgc@gmail.com<br>
                        Website: www.neub.edu.bd<br>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- insert in contact table in db -->
    <?php
    
    $con = mysqli_connect('localhost', 'root', '', 'ngo_db');

    mysqli_select_db($con, "ngo_db");

    $sql = "CREATE TABLE IF NOT EXISTS
            contact_tbl(
                id INT(6) UNSIGNED
                AUTO_INCREMENT
                PRIMARY KEY,
                fldName VARCHAR(30) NOT NULL,
                fldEmail VARCHAR(50) NOT NULL,
                fldPhone VARCHAR(10) NOT NULL,
                fldMessage VARCHAR(100) NOT NULL
            )";

    mysqli_query($con, $sql);


    $sql = "INSERT INTO contact_tbl ( fldName, fldEmail, fldPhone, fldMessage) VALUES ('" . $name . "','" . $email . "','" . $phone . "','" . $message . "')";

    // insert in database 
    mysqli_query($con, $sql);
    mysqli_close($con);

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