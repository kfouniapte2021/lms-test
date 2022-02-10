<!doctype html>
<html lang="zxx">
    
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
<base href="<?php echo base_url() ?>">    
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
        <link rel="stylesheet" href="public/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="public/css/responsive.css">

        <title>
        <?php 
		if(isset($page_title)){
			echo $page_title;
			}else{
				echo 'Zenith Learning';
				}
		?>
        </title>

        <link rel="icon" type="image/png" href="public/img/favicon.png">
        <style type="text/css">
		.br_red{ border:1px solid red !important; }
		.sbcms{ display:none;}
		.sbcms p {color: red;font-size: 12px;margin-bottom: 3px; margin-bottom: 0px;}
		.sbcmssuc {color: #11b719 !important;font-size: 12px;margin-bottom: 3px;}
		.sbcmssucalready {color:#03F !important;font-size: 12px;margin-bottom: 3px;}
		.ref_p{ color: #000;
font-size: 13px;
font-family: arial;}
		
            .hidden{
                display: none;
            }
            .mtop5{
                margin-top: 5%;
            }.mtop8{
                margin-top: 8%;
            }
			.pull-right{ float:right}
			.pull-left{ float:left}
			.btn-info {
    background-color:#ff1949;
    border-color: #3f384c;
}.btn {
    border-radius: 3px;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 1px solid transparent;
}.btn, .btn-xs {
    padding: 1px 5px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
}.rowEnd {
    clear: both;
    border-bottom: 1px solid #dad4d4;
    margin: 6px 0 6px 0;
}
.btn_play{color: #fff !important;}
.btn_play .bx-play-circle{font-size: 20px;
    float: right;
    margin: 0 0 0 3px;}
	.logo{    width: 200px;
    height: 68px;}
	
	.cyphersol .img-responsive{
   
    height: 200px;
}
#quizul li { list-style-type:none;}

	.top-header{
		background: rgb(63,94,251);
background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);
}
.banner-wrapper{
background: rgb(63,94,251);
background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,251,0.8855917366946778) 100%);}

        </style>
    </head>

    <body>

        <!-- Preloader -->
        <!--<div class="preloader ">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>-->
        <!-- End Preloader -->

        <!-- Start Header Area -->
        <header class="header-area">
<?php 
$setting=getSetting();
?>
            <div class="top-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <ul class="top-header-contact-info">
                                <li>
                                    <i class='bx bx-phone-call'></i>
                                    <span>Contact support</span>
                                    <a href="tel:<?php echo $setting->phone ?>"><?php echo $setting->phone ?></a>
                                </li>
                                <li>
                                    <i class='bx bx-map'></i>
                                    <span>Our location</span>
                                    <a href="#"><?php echo $setting->address ?></a>
                                </li>
                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <span>Contact email</span>
                                    <a href="mailto:<?php echo $setting->email ?>"><?php echo $setting->email ?></a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-4">
                            <div class="top-header-btn">
                            
                            <?php
						$u=	$this->session->userdata();
							/*
							[identity] => waseemafzal31@gmail.com
    [email] => waseemafzal31@gmail.com
    [user_type] => 2
    [phone] => 03417090031
    [address] => 
    [city] => 
    [postal_code] => 
    [mobile] => 
    [name] => Waseem afzal
    [add_by] => 0
    [user_id] => 18
    [old_last_login] => 1595683830
    [lang_code] => en
    [login] => 1
    [userlogin] => 1
							*/
							if($this->session->userdata('userlogin')==1){
							?>
                            
                            
                                <a href="auth/userlogout" class="default-btn"><i class='bx bx-log-in icon-arrow before'></i><span class="label">Log out</span><i class="bx bx-log-in icon-arrow after"></i></a>
                               <?php }else { ?>
                                <a href="user/login" class="default-btn"><i class='bx bx-log-in icon-arrow before'></i><span class="label">Log In</span><i class="bx bx-log-in icon-arrow after"></i></a>
                               <?php } ?> 
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Navbar Area -->
            <?php include_once"main_nav.php" ?>
            <!-- End Navbar Area -->

               <!-- Start Sticky Navbar Area -->
            <div class="navbar-area header-sticky">
                <div class="raque-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="javascript:void(0)">
                               Digi Learning
                            </a>

                            <div class="collapse navbar-collapse">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a href="index.php" class="nav-link active">Home </a>
                                        
                                    </li>

                                    <li class="nav-item"><a href="#" class="nav-link">About <i class='bx bx-chevron-down'></i></a>
                                        <ul class="dropdown-menu">
                                              <li class="nav-item"><a href="page/about" class="nav-link">About Us</a>
                                                
                                            </li>
                                            
                                            <li class="nav-item"><a href="page/instructors" class="nav-link">Instructors </a>
                                            </li>
                                        </ul>
                                    </li>

                                    

                                 
<li class="nav-item"><a href="page/coursesList" class="nav-link">Courses </a></li>
<li class="nav-item"><a href="page/bookcategories" class="nav-link">Library </a></li>
<li class="nav-item"><a href="page/contact" class="nav-link">Contact</a></li>
                                </ul>
                                
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Sticky Navbar Area -->
          
        </header>
        <!-- End Header Area -->

        <!-- search-box-layout -->
        <div class="search-overlay">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    
                    <div class="search-overlay-close">
                        <span class="search-overlay-close-line"></span>
                        <span class="search-overlay-close-line"></span>
                    </div>

                    <div class="search-overlay-form">
                        <form>
                            <input type="text" class="input-search" placeholder="Search here...">
                            <button type="submit"><i class='bx bx-search-alt'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- search-box-layout end -->

