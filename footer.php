<?php include("assets/allcss.php");?>
<footer class="footer">
         <div class="container">
            <div class="row">
                <div class="about about-1 col-md-3 col-sm-10">
                    <h2>About Us</h2>
                    <p>
                        NEUB NGO Foundation, a non-profit organization in Bangladesh is to empower underprivileged children,youth and women through relevant education, innovative healthcare and market-focused livelihood programmes.
                    </p>
                    <p>We aim to achieve behavioural,social and economic transformation for all girls towards an Bangladesh where all children have equal opportunities to access quality education.</p>
                </div>
                <div class="about about-2 col-md-3 col-sm-10">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="about_us.php">About us</a></li>
                        <li><a ui-sref="portfolio" href="blog.php">Blogs</a></li>
                        <li><a ui-sref="products" href="services.php">Our Work</a></li>
                        <li><a ui-sref="gallery" href="gallery.php">Gallery</a></li>
                        <li><a ui-sref="contact" href="contact_us.php">Contact us</a></li>
                    </ul>
                </div>
                <div class="about about-3 col-md-3 col-sm-10 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        NEUB Foundation <br>
                        Sheikhghat, Sylhet <br>
                        
                        Phone: +88 01948474774 <br>
                        Email: <a href="mailto:jahid1213cvgc@gmail.com" class="">jahid1213cvgc@gmail.com</a><br>
                        Web: <a href="index.php" class="">www.neub.edu.bd</a>
                    </address>

                </div>
            </div>
            <!-- php code for form validation -->
            <?php

            $errorname = $erroremail = "";
            $name = $email = "";

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
                    // $pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
                    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                        $erroremail = "Enter valid email";
                        $anyErr = true;
                    }
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
        </div>
    </footer>