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
                <h2>Contact</h2>
                <p><a href="index.html">Home</a> / Contact</p>
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
                        <p><a href="#"><? echo contact::$address ?></a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-box">
                        <div class="icon">
                            <i class="flaticon-call-answer"></i>
                        </div>
                        <h4>Phone</h4>
                        <p><a href="tel:<? echo contact::$number ?>"><? echo contact::$number ?></a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="contact-box">
                        <div class="icon">
                            <i class="flaticon-envelope"></i>
                        </div>
                        <h4>Email</h4>

                        <p><a href="mailto:<? echo contact::$email ?>"><? echo contact::$email ?></a></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End  Room Page Section -->

    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-area">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3754.0694152641668!2d85.81307819999999!3d19.794653999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19c5714b487ef7%3A0x27b7ca13d404d9f7!2sSai%20Harapriya!5e0!3m2!1sen!2sin!4v1673107402266!5m2!1sen!2sin" ></iframe>

                            
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-area">
                        <div class="contactForm">
                            <form id="contactForm" novalidate="true">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name" placeholder="Your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email" placeholder="Your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required="" data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject" placeholder="Your Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="5" required="" data-error="Write your message" placeholder="Your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="send-btn">
                                            
                                            <button type="submit" class="send-btn-one disabled" style="pointer-events: all; cursor: pointer;">
                                                Send Message
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