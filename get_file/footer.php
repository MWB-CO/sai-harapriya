<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="fooetr-item">
                    <div class="footer-logo">
                        <img src="assets/img/logo.png" alt="image">
                    </div>

                    <div class="footer-text">
                        <p>Hotel SAI HARAPRIYA, the best guest house in Puri, Odisha, is located right on the beach</p>
                    </div>

                    <ul>
                        <li>
                            <a href="<?php echo contact::$facebook ?>" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li> -->
                        <li>
                            <a href="<?php echo contact::$instagram ?>" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-content">
                    <h2>About Overtop</h2>
                </div>

                <ul class="footer-info">
                    <li>
                        <i class="fas fa-map-marker-alt"></i> Address : <?php echo contact::$address ?>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i> <?php echo contact::$number ?>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i> <?php echo contact::$email ?>
                    </li>

                </ul>
            </div>



            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer-content">
                    <h2>Inquiries</h2>
                </div>

                <ul class="footer-list"  >
                    <li class="nav-item"  > <a style="padding:0px;" href="<?php echo button_link::$home ?>" class="nav-link">Home</a> </li>
                    <li class="nav-item"  > <a style="padding:0px;" href="<?php echo button_link::$about ?>" class="nav-link">About</a> </li>
                    <li class="nav-item"  > <a style="padding:0px;" href="<?php echo button_link::$rooms ?>" class="nav-link">Rooms</a> </li>
                    <li class="nav-item"  > <a style="padding:0px;" href="<?php echo button_link::$why_puri ?>" class="nav-link">Side View</a> </li>
                    <li class="nav-item"  > <a style="padding:0px;" href="<?php echo button_link::$service ?>" class="nav-link">Services</a> </li>
                    <li class="nav-item"  > <a style="padding:0px;" href="<?php echo button_link::$gallery ?>" class="nav-link">Gallery</a> </li>
                    <li class="nav-item"  > <a style="padding:0px;" href="<?php echo button_link::$contact ?>" class="nav-link">Contact</a> </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-bottom-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-7">
                    <div class="footer-bottom-content">
                        <p>Copyright <i class="far fa-copyright"></i>  2023 . All Rights Reserved by MWB</a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-5">
                    <div class="footer-bottom-links">
                        <p>
                            <a href="<?php echo button_link::$privacy ?>">Terms & Privacy Policy</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>