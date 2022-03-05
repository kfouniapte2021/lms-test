<!doctype html>
<html lang="zxx">
    
<head><base href="<?php echo base_url() ?>">    

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="public/css/responsive.css">

        <title>Signup</title>

        <link rel="icon" type="image/png" href="public/img/favicon.png">
        <style>
        .nice-select .current{
			margin-top:17px; display:inline-block;
			}
			.form-group label{ float:left; display:block; text-align:left; text-transform:uppercase;}
			.alert{position: fixed;
    top: 0;
    right: 0;
    width: 50%;
    text-align: left;}
        </style>
    </head>

    <body>

        <!-- Preloader -->
       
        <!-- End Preloader -->

        <!-- Start Register Area -->
        <section class="register-area">
            <div class="row m-0">
                <div class="col-lg-6 col-md-12 p-0">
                    <div class="register-image">
                        <img src="public/img/register-bg.jpg" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 p-0">
                    <div class="register-content">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="register-form">
                                    

                                    
                                    
<div class="alert" style="display:none">
  
</div>
                                    <form id="form_user">
                                    <div class="form-group"><label>Name</label>
                                            <input type="text" name="name" id="name" value="<?=$user->name?>" placeholder="Name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label>Email</label>
                                            <input type="email" name="email" id="email" value="<?=$user->name?>" placeholder="Your email address" class="form-control">
                                        </div>

                                        <div class="form-group">
                                        <label>password</label>
                                            <input type="password" name="password" id="password" placeholder="Create a password" class="form-control">
                                        </div>
 <div class="form-group">
<label>Phone</label>
                                            <input type="text" name="phone" id="phone" placeholder="Your contact no" class="form-control">
                                        </div>

<div class="form-group">
                                       
                                        <select class="form-control" name="class_id" >
                        <option value="" > Choose Class</option>
						<?php 
						if($classes->result()){
						 foreach ($classes->result() as $class){
							 if($user->class_id==$class->id){
								 $selected='selected="selected"';
								 }
						?>  
                           
                             
                            <option <?=$selected?>  value="<?php echo $class->id;?>" >
							<?php echo $class->class_name;?>
                            </option>
                            
                       <?php 
					       }
					   }?>     
                      </select>
                                      
                                        </div>
<div class="form-group" id="subjectDiv"> 
                          
                    </div>
                                        <button type="button" onClick="create_user()">Update Profile</button>

                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Register Area -->

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
    </body>

</html>
<?php include_once"includes/js/user.php"; ?>