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
</head>

<body>

    <!-- covid button -->
    <a href="covid.php">
        <button class="btn covid-relief" type="button">
            <span class="blink"><i class="fa fa-medkit blink" aria-hidden="true"></i> Covid Relief</span>
        </button>
    </a>

    <!-- header starts here -->
    <?php @include 'header.php' ?>





    <!--  Gallery Starts Here  -->
    <div id="portfolio" class="gallery">
        <div class="container">

            <div class="row justify-content-center">


                <div class="gallery-filter d-none d-sm-block">
                    <button class="btn btn-default filter-button" data-filter="all">All</button>
                    <button class="btn btn-default filter-button" data-filter="covid"><i class="fas fa-heartbeat" style="color:crimson;"></i> Covid Relief</button>
                    <button class="btn btn-default filter-button" data-filter="orphanage">Orphanage Visits</button>
                    <button class="btn btn-default filter-button" data-filter="distribution">Items Distributions</button>
                    <button class="btn btn-default filter-button" data-filter="education">Education Projects</button>
                </div>
                <br />

                <div class="gallery_product text-center col-lg-3 col-md-3 col-sm-4 col-xs-6 filter covid">
                    <img src="assets/images/events/image_01.jpg" class="img-responsive">
                    <small class=""><i>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam tenetur, error ab saepe laboriosam nisi est cum. Consequuntur, odio error ea ab corrupti, nobis temporibus, vel iste quam facere consequatur!
                    </i></small>
                </div>

                <div class="gallery_product text-center col-lg-3 col-md-3 col-sm-4 col-xs-6 filter orphanage">
                    <img src="assets/images/events/image_02.jpg" class="img-responsive">
                    <small class=""><i>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab velit facere unde ducimus! Dolorem, dolore consequuntur, animi laborum commodi molestiae, tempore nulla hic corporis itaque officiis corrupti dignissimos veritatis aut!
                    </i></small>
                </div>

                <div class="gallery_product text-center col-lg-3 col-md-3 col-sm-4 col-xs-6 filter covid">
                    <img height="175px;" src="https://images.indianexpress.com/2020/04/coronavirus-delhi-food-759.jpg" class="img-responsive">
                    <small class=""><i>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, placeat sed, recusandae similique tenetur quod et maxime aliquid provident laudantium excepturi voluptates, quibusdam ea dolores cum officiis ducimus. Dolores, praesentium.
                    </i></small>
                </div>

                <div class="gallery_product text-center col-lg-3 col-md-3 col-sm-4 col-xs-6 filter education">
                    <img src="assets/images/events/image_03.jpg" class="img-responsive">
                    <small class=""><i>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus sed iusto voluptatibus, quasi laborum molestias mollitia nam, voluptatem dolore voluptates non impedit placeat porro itaque neque sint ut explicabo eos.
                    </i></small>
                </div>

                <div class="gallery_product text-center col-lg-3 col-md-3 col-sm-4 col-xs-6 filter distribution">
                    <img src="assets/images/events/image_04.jpg" class="img-responsive">
                    <small class=""><i>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia et facere optio quisquam ea! Odit soluta perspiciatis ratione itaque voluptatum culpa dolore omnis quod consequuntur! Esse facere aperiam dolore reiciendis!
                    </i></small>
                </div>


                <div class="gallery_product text-center col-lg-3 col-md-3 col-sm-4 col-xs-6 filter distribution">
                    <img src="assets/images/events/image_05.jpg" class="img-responsive">
                    <small class=""><i>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quia aperiam dolorum voluptas facilis numquam quod a alias cum ipsa sed, voluptatem eum reprehenderit labore culpa neque dolore nobis laborum.
                    </i></small>
                </div>

                <div class="gallery_product text-center col-lg-3 col-md-3 col-sm-4 col-xs-6 filter education">
                    <img src="assets/images/events/image_06.jpg" class="img-responsive">
                    <small class=""><i>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit perferendis odio debitis nihil reprehenderit esse, quibusdam iste neque vero alias inventore cupiditate, distinctio, ex excepturi adipisci aperiam ratione tenetur! Officiis.
                    </i></small>
                </div>

                <div class="gallery_product text-center col-lg-3 col-md-4 col-sm-3 col-xs-6 filter education">
                    <img src="assets/images/events/image_07.jpg" class="img-responsive">
                    <small class=""><i>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet impedit voluptatum velit ratione quidem dignissimos commodi nostrum veritatis, vel placeat! Quo sapiente voluptatem magni ab architecto adipisci officia corporis saepe.
                    </i></small>
                </div>



            </div>
        </div>


    </div>
    <!--  Gallery End  -->


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