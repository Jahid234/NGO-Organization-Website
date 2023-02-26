<header class="continer-fluid ">        
        <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row nav-row"> 
                    <div class="col-lg-3 col-md-12 logo">            
                        <a href="index.php">
                            <img src="assets/images/neub.jpg" alt="" width="45px" height="45px">
                            <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars" ></i> NEUB Foundation</a>
                        </a>
                    </div>
                    <div id="menu" class="col-lg-9 col-md-12 d-none d-lg-block nav-col">
                        <ul class="navbad">

                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about_us.php">About Us</a>
                            </li>                            

                            <li class="nav-item">
                                <a class="nav-link" href="blog.php">Blog</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact_us.php">Contact US</a>
                            </li>                            

                            <li class="nav-item">
                                <a class="nav-link" href="volunteer.php">Join Us</a>
                                
                            </li>
                            
                            <li class="nav-item">
                                <a  class="nav-link" href="donate1.php">Donate</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="login.php">
                                    <i class="fas fa-user"></i>
                                    <?php
                                    if (isset($_SESSION["login"])) {
                                        echo $_SESSION['user_name'];
                                    } ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    