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
         <link rel="stylesheet" href="public/css/ol.style.css">

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
				$u=	$this->session->userdata();
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

	.top-header,header-sticky{
		background: rgb(63,94,251);
background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);
}
.banner-wrapper{
background: rgb(63,94,251);
background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,251,0.8855917366946778) 100%);}
.header-bottom {
    background: #c054ff;
    background: -moz-linear-gradient(top, #c054ff 0%, #5274ff 100%);
    background: -webkit-linear-gradient(top, #c054ff 0%, #5274ff 100%);
    background: linear-gradient(to bottom, #c054ff 0%, #5274ff 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c054ff', endColorstr='#5274ff', GradientType=0);
}
.footer-area {
    background-color: #4255A4;
    padding-top: 100px;
}
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
        <div class="col-md-12">
                
                <ul class="bubbles">
                    
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                
                </ul>
            
            </div>
<?php 
$setting=getSetting();
?>
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="#"><img src="public/img/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li class="active" ><a href="index.php">Home</a></li>
                                                 
                                                 
                                                <li><a href="page/about">About</a>
                                                    <ul class="submenu">
                                                        <li><a href="page/about">About Us</a></li>
                                                        <li><a href="page/instructors">Instructions</a></li> 
                                                    </ul>
                                                </li>
                                                  <?php
						
							
							if($this->session->userdata('userlogin')==1){
								
							?>
                                                <li><a href="page/coursesList">Courses</a></li>
                                                <li><a href="page/bookcategories">Library</a></li>
                                                <?php } ?>
                                                <li><a href="page/contact">Contact</a></li>
                                                <!-- Button -->
                                                
                                                
                                                
                                                 <?php
						
							
							if($this->session->userdata('userlogin')==1){
								$aname=explode(' ',$u['name']);
							?>
                            
                            <li><a href="page/about"><i class='bx bx-user'></i> <?=$aname[0]?> </a>
                                                    <ul class="submenu">
                                                        <li><a href="auth/userlogout">Logout</a></li>
                                                        <li><a href="page/instructors">Instructions</a></li> 
                                                    </ul>
                                                </li>
                             
                               <?php }else { ?>
                                <li class="button-header"><a href="login" class="btn btn3"><i class="fas fa-sign-in-alt"></i> Log in</a></li>
                               <?php } ?> 
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
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

