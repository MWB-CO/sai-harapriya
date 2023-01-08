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

    <style>
        .nice-select {
            width: 100%;
            margin: 0px;
            height: 56px;
            border: none;
            background: #f2eeee;
            border-radius: 0px;
            display: flex;
            align-items: center;
        }
    </style>

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
                <h2>Booking Form</h2>
                <p><a href="index.php">Home</a> / Book</p>
            </div>
        </div>
    </section>
    <!-- End Page banner -->

    <!-- Start Room Page Section -->
    <section class="contact-info-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-box">
                        <div class="icon">
                            <i class="flaticon-placeholder"></i>
                        </div>
                        <h4>Address</h4>
                        <p><a href="#"><?php echo contact::$address ?></a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-box">
                        <div class="icon">
                            <i class="flaticon-call-answer"></i>
                        </div>
                        <h4>Phone</h4>
                        <p><a href="tel:<?php echo contact::$number ?>"><?php echo contact::$number ?></a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="contact-box">
                        <div class="icon">
                            <i class="flaticon-envelope"></i>
                        </div>
                        <h4>Email</h4>

                        <p><a href="mailto:<?php echo contact::$email ?>"><?php echo contact::$email ?></a></p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End  Room Page Section -->

    <div class="contact-section">
        <div class="container">
            <div class="row">


                <div class="col-lg-12">
                    <div class="contact-area">
                        <div class="contactForm">
                            <form id="contactForm" novalidate="true" action="#" >
                                <div class="row">

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="">Check in</label>
                                            <input type="date" name="name" id="name" class="form-control" required="" data-error="Please enter Check in date" placeholder="Your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="">Check Out</label>
                                            <input type="date" name="name" id="name" class="form-control" required="" data-error="Please enter Check Out date" placeholder="Your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-4">
                                        <div class="form-group">

                                            <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter How Many Adult" placeholder="Adult">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-sm-4">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter How Many Child" placeholder="Child">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-sm-4">
                                        <div class="form-group">

                                            <select name="" id="">

                                                <option value="" selected disabled>Select Room</option>

                                                <?php

                                                for ($i = 0; $i < count(room::$room); $i++) {

                                                    $loop = room::$room[$i];

                                                    $value = explode("|", $loop);

                                                    echo '
    
                                                    <option value="'.$value[1].'">'.$value[1].'</option>
                                                        
                                                        
                                                    ';
                                                }

                                                ?>


                                            </select>

                                            <!-- <input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email" placeholder="Your Email"> -->
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name" placeholder="Your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email" placeholder="Your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                   
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" id="msg_subject" class="form-control" required="" data-error="Please enter your number" placeholder="Your MOB Number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <!-- <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="5" required="" data-error="Write your message" placeholder="Your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div> -->

                                    <div class="col-lg-12 col-md-12">
                                        <div class="send-btn">

                                            <button type="submit" class=" col-lg-12  col-md-12 send-btn-one disabled" style="pointer-events: all; cursor: pointer;">
                                                BOOK NOW
                                            </button>
                                        </div>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










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