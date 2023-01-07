<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/overtop/default/room.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2022 08:53:06 GMT -->

<head>
    <!-- REQUIRED META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Fontawesome Min CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Magnific CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Owl Theme Default Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <!-- Ui CSS -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <title>hotel sai harapriya puri || Best Hotel In puri</title>

    <link rel="icon" type="image/png" href="assets/img/favicon.jpg">
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Start Navbar Area -->
    <?php require("./config/global.php") ?>
    <?php require("./get_file/header.php") ?>
    <!-- End Navbar Area -->

    <!-- Page banner -->
    <section class="page-banner" style="background-image: url(./img/1.jpg);">
        <div class="container">
            <div class="page-banner-content">
                <h2>Gallery</h2>
                <p><a href="index.php">Home</a> / gallery</p>
            </div>
        </div>
    </section>
    <!-- End Page banner -->

    <!-- Start Room Page Section -->
    <div class="gallery-page-section">
        <div class="container-fluid">

            <div id="Container" class="row">



                <?php

                for ($i = 0; $i < count(gallery::$img); $i++) {

                    $loop = gallery::$img[$i];


                    echo '

                        <div class="col-lg-3 col-sm-6 mix restaurent conference" data-bound="" style="display: inline-block;">
                            <div class="single-work">
                                <div class="work-image">
                                    <img src="' . $loop . '" alt="gallery">
                                    <a href="' . $loop . '" class="popup-btn">View</a>
                                </div>
                            </div>
                        </div>


                    ';
                }

                ?>


            </div>







        </div>
    </div>
    <!-- End  Room Page Section -->

    <!-- Start Footer Section -->
    <?php require("./get_file/footer.php") ?>
    <!-- End Footer Section -->

    <!-- Back Top top -->
    <div class="back-to-top">Top</div>
    <!-- End Back Top top -->


    <!-- jQuery Min JS -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <!-- Popper Min JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap Min JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Slick Min JS -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Mean Menu Min JS -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- Magnific Min JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Mixitup Min JS -->
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <!-- Owl Carousel Min JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Counterup JS -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Waypoints Min JS -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- Nice Select Min JS -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Ui JS -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Form Ajaxchimp JS -->
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- Form Validator JS -->
    <script src="assets/js/form-validator.min.js"></script>
    <!-- Contact JS -->
    <script src="assets/js/contact-form-script.js"></script>
    <!-- Active JS -->
    <script src="assets/js/active.js"></script>
</body>

<!-- Mirrored from templates.envytheme.com/overtop/default/room.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2022 08:53:07 GMT -->

</html>