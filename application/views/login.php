<!doctype html>
<html lang="zxx">
    
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<base href="<?php echo base_url() ?>">    

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="public/css/bootstrap..min.css">
        <!-- BoxIcons CSS -->
        <link rel="stylesheet" href="public/css/boxicons.min.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="public/css/owl.carousel.min.css">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="public/css/odometer.min.css">
        <!-- MeanMenu CSS -->
        <link rel="stylesheet" href="public/css/meanmenu.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="public/css/animate.min.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="public/css/nice-select.min.css">
        <!-- Viewer CSS -->
        <link rel="stylesheet" href="public/css/viewer.min.css">
        <!-- Slick CSS -->
        <link rel="stylesheet" href="public/css/slick.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="public/css/magnific-popup.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="public/css/ol.style.css">
       <!-- <link rel="stylesheet" href="public/css/style.css">
       --> <!-- Responsive CSS -->
        <link rel="stylesheet" href="public/css/responsive.css">

        <title>Raque - Education & LMS HTML Template</title>

        <link rel="icon" type="image/png" href="public/img/favicon.png">
        <style>.hidden{ display:none !important;}
       .alert{position: fixed;
    top: 0;
    right: 0;
    width: 50%;
    text-align: left;} 
        </style>
    </head>

    <body>

       
<?php 
$setting=getSetting();
?>
        <!-- Start Login Area -->
        <section class="login-area">
            <div class="row m-0">
                <div class="col-lg-6 col-md-12 p-0">
                    <div class="login-image">
                        <img src="public/img/login-bg.jpg" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 p-0">
                    <div class="login-content">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="login-form">
                                    <div class="logo">
                                        <a href="index.php"> <?php
							   $logo=base_url().'uploads/'.$setting->image; 
							  
								   echo '<img width="200" height="65" class="logo" src="'.$logo.'" alt="zenith learning ">';
								   
							   ?></a>
                                    </div>

                                    <h3>Welcome back</h3>
                                    <p>Don't have account? <a href="user/register">Sign up</a></p>

                                    <form id="form_user_loggedin">
                                    <div class="alert" style="display:none">
  
</div>
                                        <div class="form-group">
                                            <input type="email" name="identity" id="identity" placeholder="Your email address" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password" id="password" placeholder="Your password" class="form-control">
                                        </div>

                                        <button type="button" onClick="loggedin_user()">Login</button>
                                        
                                        <div class="forgot-password">
                                            <a href="#">Forgot Password?</a>
                                        </div>

                                        <div class="connect-with-social hidden hide">
                                            <button type="submit" class="facebook"><i class='bx bxl-facebook'></i> Connect with Facebook</button>
                                            <button type="submit" class="twitter"><i class='bx bxl-twitter'></i> Connect with Twitter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Login Area -->

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
 
    </body>

</html><?php include_once"includes/js/user.php"; ?>