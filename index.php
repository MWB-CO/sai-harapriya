<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/overtop/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2022 08:53:01 GMT -->

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

    <title>Hotel Sai Harapriya || Best Hotel In puri</title>

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

    <!-- Main Slider Area -->
    <div class="main-slider owl-carousel owl-theme">

        <?php

        for ($i = 0; $i < count(slider::$slider_loop); $i++) {

            $loop = slider::$slider_loop[$i];

            $value = explode("|", $loop);

            echo '
    
            <div class="slider-item item-bg-one" style="background-image: url(' . $value[0] . ');" >
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="banner-item">
                                <div class="slider-content">
                                    <h1>' . $value[1] . '</h1>
                                    <p>' . contact::$number . '</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            ';
        }

        ?>




    </div>
    <!-- End Banner Area -->

    <!-- Start Check Section -->
    <div class="check-section">
        <div class="container">
            <form class="check-form">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 no-padding">
                        <div class="check-content">
                            <p>Check-In</p>

                            <div class="form-group">
                                <input type="text" name="check-in" id="datepicker" class="form-control" placeholder="Date">
                                <i class="flaticon-calendar"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 no-padding">
                        <div class="check-content">
                            <p>Check-Out</p>
                            <div class="form-group">
                                <input type="text" name="check-out" id="check-datepicker" class="form-control" placeholder="Date">
                                <i class="flaticon-calendar"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 no-padding">
                        <div class="check-content">
                            <p>Adult</p>
                            <div class="form-group">
                                <select name="adult" class="form-content">
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 no-padding">
                        <div class="btn-content">
                            <div class="check-btn">
                                <button class="default-btn-one">
                                    Check Availability
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Check Section -->




    <!-- Start Memory Section -->
    <section class="memory-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="memory-item">
                        <div class="memory-content">
                            <span>About Us</span>
                            <h2><?php echo about::$title ?></h2>
                            <p> <?php echo about::$deception ?> </p>
                        </div>

                        <div class="memory-btn">
                            <a href="<?php echo button_link::$about ?>" class="memory-btn-one">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="dot-image">
                        <img src="assets/img/dot-shape.png" alt="image">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="memory-image">
                        <img src="<?php echo about::$img ?>" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Memory Section -->

    <!-- Start Room Area -->
    <section class="room-page-section">
        <div class="container">
            <div class="section-title">
                <span>Tariff</span>
                <h3>Discover Our Room</h3>
            </div>

            <div class="row">



                <?php

                for ($i = 0; $i < count(room::$room); $i++) {

                    $loop = room::$room[$i];

                    $value = explode("|", $loop);

                    echo '
    
                    <div class="col-lg-6 col-md-6">
                        <div class="room-item">
                            <div class="room-image">
                                <img style="width:100%;" src="' . $value[0] . '" alt="image">

                                <div class="night-btn">
                                    <a href="' . button_link::$book . '" class="default-btn-one">BOOK NOW</a>
                                </div>
                            </div>

                            <div class="room-content">
                                <h3>' . $value[1] . '</h3>
                                <p>' . $value[2] . '</p>
                                <p>' . $value[3] . '</p>
                                <p>' . $value[4] . '</p>
                            
                            </div>
                        </div>
                    </div>
                        
                        
                    ';
                }

                ?>














            </div>

            <br>
            <br>
            <br>


        </div>
    </section>
    <!-- End Room Area -->




















    <!-- Start Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-title">
                <span>List of service</span>
                <h3>During Your Stay</h3>
            </div>

            <div class="row">



                <?php

                for ($i = 0; $i < count(facility::$facility); $i++) {

                    $loop = facility::$facility[$i];

                    $value = explode("|", $loop);

                    echo '
    
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <div class="services-image">
                                <img style="width: 80px;" src="' . $value[0] . '" alt="image">
                            </div>
                            <h2>' . $value[1] . '</h2>
                        </div>
                    </div>
                        
                        
                    ';
                }

                ?>








            </div>
        </div>
    </section>
    <!-- End Services Section -->










    <section class="room-page-section">
        <div class="container">
            <div class="section-title">
                <span>TRAVEL</span>
                <h3>Side View</h3>
            </div>

            <div class="row">



                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <div class="room-image">
                            <img style="width:100%;" src="./img/siteview/1.jpg" alt="image">
                        </div>

                        <div class="room-content">
                            <h3>Jagannath Temple</h3>
                            <p>LThe Jagannath Temple is an important Hindu temple dedicated to Jagannath, a form of Vishnu - one of the trinity of supreme divinity in Hinduism. Puri is in the state of Odisha, on the eastern coast of India. </p>

                        </div>
                    </div>
                </div>







                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <div class="room-image">
                            <img style="width:100%;" src="./img/siteview/2.jpg" alt="image">
                        </div>

                        <div class="room-content">
                            <h3>Puri Beach</h3>
                            <p>The pilgrim town is famous for its golden beaches which forms its eastern boundary. Considered one of the safest beaches in the country, one can find tourists taking to sea and enjoying a leisurely bath. </p>

                        </div>
                    </div>
                </div>




                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <div class="room-image">
                            <img style="width:100%;" src="./img/siteview/9.jpg" alt="image">
                        </div>

                        <div class="room-content">
                            <h3>Chilika Lake </h3>
                            <p>Chilika Lake is a brackish water lagoon, spread over the Puri, Khordha and Ganjam districts of Odisha state on the east coast of India, at the mouth of the Daya River, flowing into the Bay of Bengal. </p>

                        </div>
                    </div>
                </div>










                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <div class="room-image">
                            <img style="width:100%;" src="./img/siteview/3.jpg" alt="image">
                        </div>

                        <div class="room-content">
                            <h3>Konark Sun Temple</h3>
                            <p>Konark Sun Temple is a 13th-century CE (year 1250) Sun temple at Konark about 35 kilometres (22 mi) northeast from Puri city on the coastline in Puri district, Odisha, India.</p>

                        </div>
                    </div>
                </div>













                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <div class="room-image">
                            <img style="width:100%;" src="./img/siteview/10.jpg" alt="image">
                        </div>

                        <div class="room-content">
                            <h3>Narendra Pokhari</h3>
                            <p>At a distance of 1 km from Jagannath Temple and 2.5 km from Puri Junction, Narendra Tank or Narendra Pokhari is a holy tank situated at Mauza Dandimala Sahi in Puri. This is one of the largest tanks in Orissa and also one of the must visit places in Puri. </p>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <div class="room-image">
                            <img style="width:100%;" src="./img/siteview/11.jpg" alt="image">
                        </div>

                        <div class="room-content">
                            <h3>Gundicha Temple</h3>
                            <p>Gundicha Temple, is a Hindu temple, situated in the temple town of Puri in the state of Odisha, India. It is significant for being the destination of the celebrated annual Rath Yatra of Puri.</p>

                        </div>
                    </div>
                </div>




                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <div class="room-image">
                            <img style="width:100%;" src="./img/siteview/4.jpg" alt="image">
                        </div>

                        <div class="room-content">
                            <h3>Mata Matha</h3>
                            <p>The Mata Matha Puri is an ???Ashram??? (Hermitage or Monastery) located in the city of Puri, at an approximate distance of 67.6 kilometres from the city of Bhubaneshwar. </p>

                        </div>
                    </div>
                </div>











                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <div class="room-image">
                            <img style="width:100%;" src="./img/siteview/5.jpg" alt="image">
                        </div>

                        <div class="room-content">
                            <h3>Dhauli</h3>
                            <p>Dhauligiri Hills is a place marked with the serenity of Daya River and lies at a distance of 8 Km from Bhubaneswar. The famous rock edicts of Ashoka are worth witnessing. Moreover,</p>

                        </div>
                    </div>
                </div>










                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <div class="room-image">
                            <img style="width:100%;" src="./img/siteview/6.jpg" alt="image">
                        </div>

                        <div class="room-content">
                            <h3>Udayagiri and Khandagiri Caves</h3>
                            <p>Udayagiri and Khandagiri Caves, formerly called Kattaka Caves or Cuttack caves, are partly natural & partly artificial caves of archaeological, historical and religious importance near the city of Bhubaneswar in Odisha, India</p>

                        </div>
                    </div>
                </div>







                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <div class="room-image">
                            <img style="width:100%;" src="./img/siteview/7.jpg" alt="image">
                        </div>

                        <div class="room-content">
                            <h3>Nandankanan Zoological Park</h3>
                            <p>Nandankanan Zoological Park is a 437-hectare zoo and botanical garden in Bhubaneswar, Odisha, India. Established in 1960, it was opened to the public in 1979 and became the first zoo in India to join World Association of Zoos and Aquariums in 2009.</p>

                        </div>
                    </div>
                </div>









                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <div class="room-image">
                            <img style="width:100%;" src="./img/siteview/8.jpg" alt="image">
                        </div>

                        <div class="room-content">
                            <h3>Odisha State Museum</h3>
                            <p>Odisha State Museum is a museum in Bhubaneswar, Odisha. In its original form it was established in 1932 and later moved to the current building in 1960.</p>

                        </div>
                    </div>
                </div>





                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <div class="room-image">
                            <img style="width:100%;" src="./img/siteview/12.jpg" alt="image">
                        </div>

                        <div class="room-content">
                            <h3>Lingaraj temple</h3>
                            <p>Lingaraja Temple is a Hindu temple dedicated to Shiva and is one of the oldest temples in Bhubaneswar, the capital of the Indian state of Odisha, India.</p>

                        </div>
                    </div>
                </div>














            </div>



        </div>
    </section>










    <!-- Start Gallery Section -->
    <section class="gallery-section">
        <div class="container">
            <div class="section-title">
                <span>Project</span>
                <h3>Our Gallery</h3>
            </div>

            <div class="row">
                <div class="gallery-slider owl-carousel owl-theme">
                    <div class="col-lg-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="assets/img/gallery/1.jpg" alt="image">
                                <a href="#" class="popup-btn">Our Hotel</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="assets/img/gallery/2.jpg" alt="image">
                                <a href="#" class="popup-btn">Top View</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="assets/img/gallery/3.jpg" alt="image">
                                <a href="#" class="popup-btn">Room View</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Section -->

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

<!-- Mirrored from templates.envytheme.com/overtop/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2022 08:53:06 GMT -->

</html>