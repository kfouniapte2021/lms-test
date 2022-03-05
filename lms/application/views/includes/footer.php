        <!-- Start Footer Area -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget mb-30">
                            <h3>Contact Us</h3>

                            <ul class="contact-us-link">
                                <li>
                                    <i class='bx bx-map'></i>
                                    <a href="#" target="_blank"><?php echo $setting->address ?></a>
                                </li>
                                <li>
                                    <i class='bx bx-phone-call'></i>
                                    <a href="tel:<?php echo $setting->phone ?>"><?php echo $setting->phone ?></a>
                                </li>
                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <a href="#"><?php echo $setting->email ?></a>
                                </li>
                            </ul>

                            <ul class="social-link">
                            <?php
							$asocialLink=json_decode($setting->asocial_links);
							
							?>
                                <li><a href="<?=$asocialLink->fb?>" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="<?=$asocialLink->tw?>" class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="<?=$asocialLink->go?>" class="d-block" target="_blank"><i class='bx bxl-google'></i></a></li>
                                <li><a href="<?=$asocialLink->li?>" class="d-block" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                                <li><a href="<?=$asocialLink->yo?>" class="d-block" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget mb-30">
                            <h3>Support</h3>

                            <ul class="support-link">
                                <li><a href="privacy">Privacy</a></li>
                                <li><a href="faq">FAQ's</a></li>
                                <li><a href="page/contact">Contact</a></li>
                               
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget mb-30">
                            <h3>Useful Link</h3>

                            <ul class="useful-link">
                                <li><a href="page/instructors" class="nav-link">Instructors </a></li>
                                <li><a href="page/coursesList" class="nav-link">Courses </a></li>
                                <li><a href="page/library" class="nav-link">Library </a></li>
                                
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget mb-30">
                            <h3>Newsletter</h3>

                            <div class="newsletter-box">
                                <p>To get the latest news and latest updates.</p>

                                <form class="newsletter-form" data-toggle="validator">
                                    <label>Your e-mail address:</label>
                                    <span class="sbcms"></span> 
                                    <input type="email" id="sbcriber_id" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                                    <button type="button" onclick="subscribe();">Subscribe</button>
                                    <div id="validator-newsletter" class="form-result"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom-area">
                <div class="container">
                    <div >
                        <a href="index.php" class="d-inline-block" style="color:#fff">Zenith Learning</a>
                    </div>
                    <p>Copyright <i class='bx bx-copyright'></i> 2020 <a href="index.php" target="_blank">skillsquared inc</a>| All rights reserved.</p>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
        
        <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

        <!-- Jquery JS -->
        <script src="public/js/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="public/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="public/js/bootstrap.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="public/js/owl.carousel.min.js"></script>
        <!-- Mixitup JS -->
        <script src="public/js/mixitup.min.js"></script>
        <!-- Parallax JS -->
        <script src="public/js/parallax.min.js"></script>
        <!-- Appear JS -->
        <script src="public/js/jquery.appear.min.js"></script>
        <!-- Odometer JS -->
        <script src="public/js/odometer.min.js"></script>
        <!-- Particles JS -->
        <script src="public/js/particles.min.js"></script>
        <!-- MeanMenu JS -->
        <script src="public/js/meanmenu.min.js"></script>
        <!-- Nice Select JS -->
        <script src="public/js/jquery.nice-select.min.js"></script>
        <!-- Viewer JS -->
        <script src="public/js/viewer.min.js"></script>
        <!-- Slick JS -->
        <script src="public/js/slick.min.js"></script>
        <!-- Magnific Popup JS -->
        <script src="public/js/jquery.magnific-popup.min.js"></script>
        <!-- AjaxChimp JS -->
        <script src="public/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator JS -->
        <script src="public/js/form-validator.min.js"></script>
        <!-- Contact Form JS -->
        <script src="public/js/contact-form-script.js"></script>
        <!-- Raque Map JS -->
        <script src="public/js/raque-map.js"></script>
        <!-- Main JS -->
        <script src="public/js/main.js"></script>
        <?php include_once "js/user.php"; ?>
        <?php //include_once "js/bubles.php"; ?>
    </body>

</html>