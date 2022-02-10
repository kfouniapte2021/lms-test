<!doctype html>
<html class="no-js">
 <?php
 //pre($trainer->result());
 ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home </title>
    <meta name="description" content="">
    <base href="<?php echo base_url() ?>">    

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="public/img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/css/slicknav.css">
    <link rel="stylesheet" href="public/css/flaticon.css">
    <link rel="stylesheet" href="public/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="public/css/gijgo.css">
    <link rel="stylesheet" href="public/css/animate.min.css">
    <link rel="stylesheet" href="public/css/animated-headline.css">
    <link rel="stylesheet" href="public/css/magnific-popup.css">
    <link rel="stylesheet" href="public/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="public/css/themify-icons.css">
    <link rel="stylesheet" href="public/css/slick.css">
    <link rel="stylesheet" href="public/css/nice-select.css">
    <link rel="stylesheet" href="public/css/style.css">
 
<style>
.btnSub{
padding: 15px !important;
    margin: 8px 0 0 32px;	
	}
.input-newsletter{padding: 3px 4px 4px 6px;
    height: 35px;}	
	
	.instructorIcon{width:250px;
width: 200px;
    height: 200px;
	border-radius: 150px;
    border: 4px solid #5274ff;
	opacity:0.8;
	}
	.instructorIcon:hover{opacity:1;}
	
	.topicBC{
     right: 12px !important;
       left: unset!important;
       top: unset!important;
    bottom: -6px!important;
	
}
.topicImg{ border-radius:30px; border:2px solid #c054ff;}
.topic-img{ border-radius:30px!important;}
.topicBC>h3>a{ text-decoration:none!important;}
.topicBC>h3>a:hover{ text-decoration:none!important;}
</style>
 
 
</head>

<body  > 
        
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
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="public/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
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
                                                <li class="active" ><a href="index-2.html">Home</a></li>
                                                 
                                                 
                                                <li><a href="page/about">About</a>
                                                    <ul class="submenu">
                                                        <li><a href="page/about">About Us</a></li>
                                                        <li><a href="page/instructors">Instructions</a></li> 
                                                    </ul>
                                                </li>
                                                <li><a href="page/bookcategories">Library</a></li>
                                                <li><a href="page/contact">Contact</a></li>
                                                <!-- Button -->
                                                
                                                
                                                
                                                        
                                                 <?php
						$u=	$this->session->userdata();
							
							if($this->session->userdata('userlogin')==1){
								$aname=explode(' ',$u['name']);
							?>
                            
                            <li><a href="page/about"><i class='fa fa-user'></i> <?=$aname[0]?> </a>
                                                    <ul class="submenu">
                                                        <li><a href="auth/userlogout">Logout</a></li>
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
    <main>

  


        <!--? slider Area Start-->
        <section class="slider-area "    >
            <div class="slider-active">
                <!-- Single Slider -->
 
   
  

                <div class="single-slider slider-height d-flex align-items-center">
 
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">A better future <br> starts here</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">Raque supports students by introducing collaborators outside R, internships and research experience abroad.</p><Br>
                                    
                                    
                                    
                                   <div class="media contact-info" style="padding-bottom: 10px">
                                        <span class="contact-info__icon" style="width:40px;height:40px;font-size:0;border:none; "><i class="fas fa-phone" style="width: 50px;
    height: 50px;
    border: 1px solid #fff;
    border-radius: 50%;
    padding: 10px;
    font-size: 25px;"></i></span>
                                        <div class="media-body" style="padding:15px">
                                            <h3 style="padding-left:30px">Contact support</h3>
                                            <p style="padding-left:10px">+1 (443) 854 8762</p>
                                        </div>
                                    </div>

                                    <div class="container" >
                                       <div class="media contact-info col-sm-6" style="float:left;padding:0">

                                        <span class="contact-info__icon" style="width:40px;height:40px;font-size:0;border:1px solid"><i class="fas fa-map" style="font-size:15px"></i></span>
                                        <div class="media-body" style="padding:15px;padding-top:5px">
                                             
                                            <p style="font-size:14px">Owings Mills ,MD, USA</p>
                                        </div>
                                    </div>

    <div class="media contact-info col-sm-6" style="float:left;padding:0">
                                        <span class="contact-info__icon" style="width:40px;height:40px;font-size:0;border:1px solid"><i class="fas fa-envelope" style="font-size:15px"></i></span>
                                        <div class="media-body" style="padding:15px;padding-top:5px">
                                            
                                            <p style="font-size:14px"> info@globalharvest.com</p>
                                        </div>
                                    </div>
                                         
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-6 col-lg-6 col-md-12 mobile_display_out"  >
                                <img src="public/img/bg1.png" style="width:100%">
                            </div>
                        </div>
                    </div>          
                </div>
            </div> </div>
        </section>
        <!-- ? services-area -->


        <div class="services-area">
            <div class="container">
                  <ul class="bubbles1">
                    
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
                <div class="row justify-content-sm-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="public/img/icon/icon1.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>60+ UX courses</h3>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="public/img/icon/icon2.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Expert instructors</h3>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="public/img/icon/icon3.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Life time access</h3>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses area start -->
<div class="clearfix"></div>
        <div class="topic-area" style="padding-top: 100px">
            <div class="container">
           <ul class="bubbles1">
                    
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
   
   
<br><br>
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Explore top subjects</h2>
                        </div>
                    </div>
                </div>
                <?php
				if($subjects->num_rows()>0){
				?>
                <div class="row">
                         <?php
				 
	foreach ($subjects->result() as $row){
		
		
		?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="<?=$row->image?>" class="topicImg" width="264" height="150" alt="">
                                <div class="topic-content-box ">
                                    <div class="topic-content topicBC">
                                        <h3><a href="javascript:void(0)"><?=$row->subject?></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                
                <?php }else { ?>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="public/img/gallery/topic1.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="javascript:void(0)">Physics</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="public/img/gallery/topic2.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="javascript:void(0)">Math</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="public/img/gallery/topic3.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="javascript:void(0)">English</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="public/img/gallery/topic4.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="javascript:void(0)">Chemistry</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="public/img/gallery/topic5.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="javascript:void(0)">Biology</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="public/img/gallery/topic6.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">Programing</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="public/img/gallery/topic7.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">Programing</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="public/img/gallery/topic8.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">Programing</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php } ?>
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mt-20 hidden">
                            <a href="courses.html" class="border-btn">View More Subjects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


 
        <!--? About Area-1 Start -->
        <section class="about-area1 fix pt-10">
            <div class="support-wrapper align-items-center">
                        <ul class="bubbles1">
                    
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
                <div class="left-content1">
                    <div class="about-icon">
                        <img src="public/img/icon/about.svg" alt="">
                    </div>
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-55">
                        <div class="front-text">
                            <h2 class="">Learn new skills online with top educators</h2>
                            <p>The automated process all your website tasks. Discover tools and 
                                techniques to engage effectively with vulnerable children and young 
                            people.</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="public/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Techniques to engage effectively with vulnerable children and young people.</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="public/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Join millions of people from around the world  learning together.</p>
                        </div>
                    </div>

                    <div class="single-features">
                        <div class="features-icon">
                            <img src="public/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Join millions of people from around the world learning together. Online learning is as easy and natural.</p>
                        </div>
                    </div>
                </div>
                <div class="right-content1">
                    <!-- img -->
                    <div class="right-img">
                        <img src="https://www.schoology.com/sites/default/files/schoology-learning-management-system.png" alt="" style="width:100%">

                         
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? top subjects Area Start -->
       
        <!-- top subjects End -->
        <!--? About Area-3 Start -->
        <section class="about-area3 fix" style="padding-top: 30px">
            <div class="support-wrapper align-items-center">
                <div class="right-content3">
                           <ul class="bubbles1">
                    
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
                    <div class="right-img">
                        <img src="public/img/gallery/about3.png" alt="">
                    </div>
                </div>        <ul class="bubbles1">
                    
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
                <div class="left-content3">
                         <ul class="bubbles1">
                    
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
                    <div class="section-tittle section-tittle2 mb-20">
                        <div class="front-text">
                            <h2 class="">Learner outcomes on courses you will take</h2>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="public/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Techniques to engage effectively with vulnerable children and young people.</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="public/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Join millions of people from around the world
                            learning together.</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="public/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Join millions of people from around the world learning together.
                            Online learning is as easy and natural.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? Team -->
        <section class="team-area section-padding40 fix">
            <div class="container">
                        <ul class="bubbles1">
                    
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
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Our  experts !</h2>
                        </div>
                    </div>
                </div>
                <div class="team-active">
                  <?php
				 
	if($trainer->num_rows()){
	foreach ($trainer->result() as $row){
		
		
		?>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="<?=$row->image?>" class="instructorIcon"  alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="user/instructor/<?=$row->id?>"><?=$row->name?></a></h5>
                            <p>Class / <?=$row->assignedSubject?> </p>
                        </div>
                    </div>
                    <?php }
	}
		else{
	?>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="public/img/gallery/team1.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Mr. Aqib</a></h5>
                            <p>lorem ipsmlorem ipsmlorem ipsmlorem ipsmlorem ipsm </p>
                        </div>
                    </div>
                   
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="public/img/gallery/team1.png" alt="">
                        </div>
                       <div class="cat-cap">
                            <h5><a href="#">Mr. Aqib</a></h5>
                            <p>lorem ipsmlorem ipsmlorem ipsmlorem ipsmlorem ipsm </p>
                        </div>
                    </div>
                     <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="public/img/gallery/team1.png" alt="">
                        </div>
                       <div class="cat-cap">
                            <h5><a href="#">Mr. Aqib</a></h5>
                            <p>lorem ipsmlorem ipsmlorem ipsmlorem ipsmlorem ipsm </p>
                        </div>
                    </div>
                     <?php } ?>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? About Area-2 Start -->
        <section class="about-area2 fix pb-padding">
            <div class="support-wrapper align-items-center">
                <div class="right-content2">
                            <ul class="bubbles1">
                    
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
                    <div class="right-img">
                        <img src="public/img/gallery/about2.png" alt="">
                    </div>
                </div>
                <div class="left-content2">
                           <ul class="bubbles1">
                    
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
                    <div class="section-tittle section-tittle2 mb-20">
                        <div class="front-text">
                            <h2 class="">Take the next step
                                toward your personal
                                and professional goals
                            with us.</h2>
                            <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.</p>
                            <a href="login" class="btn">Join now for Free</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
    </main>
    <footer>
       <div class="footer-wrappper footer-bg">
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo mb-25">
                                    <a href="#"><img src="public/img/logo.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Zenith is one of the best learning app in nigeria.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                  <?php
								  $setting=getSetting();
							$asocialLink=json_decode($setting->asocial_links);
							
							?>
							<?php 
							if($asocialLink->fb!=''){
							?>
                                <a href="<?=$asocialLink->fb?>" class="fab fa-facebook" target="_blank"><i class='bx bxl-facebook'></i></a>
							<?php } ?>
							<?php 
							if($asocialLink->go!=''){
							?>
                                <a href="<?=$asocialLink->go?>" class="fab fa-instagram" target="_blank"><i class='bx bxl-instagram'></i></a>
								<?php } ?>
							<?php 
							if($asocialLink->tw!=''){
							?>
                                <a href="<?=$asocialLink->tw?>" class="fab fa-twitter" target="_blank"><i class='bx bxl-twitter'></i></a>
                              <?php } ?>
							<?php 
							if($asocialLink->li!=''){
							?>  
                                <a href="<?=$asocialLink->li?>" class="fab fa-linkedin" target="_blank"><i class='bx bxl-linkedin'></i></a>
								<?php } ?>
							<?php 
							if($asocialLink->yo!=''){
							?>
                                <a href="<?=$asocialLink->yo?>" class="fab fa-youtube" target="_blank"><i class='bx bxl-youtube'></i></a>
								
							<?php } ?>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Our solutions</h4>
                                <ul>
                                <li><a href="page/instructors" class="nav-link">Instructors </a></li>
                                <li><a href="page/coursesList" class="nav-link">Courses </a></li>
                                <li><a href="page/library" class="nav-link">Library </a></li>
                                <li><a href="page/contact" class="nav-link">Contact </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>

                            <div class="newsletter-box" >
                                <p>To get the latest news and latest updates.</p>

                                <form class="newsletter-form" data-toggle="validator">
                                     <span class="sbcms"></span> 
                                    <input type="email" id="sbcriber_id" class="input-newsletter form-control" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                                    <button type="button" class="btn btn-info btnSub" onclick="subscribe();">Subscribe</button>
                                    <div id="validator-newsletter" class="form-result"></div>
                                </form>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p> 
                                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  by <a href="#" target="_blank">Zenith Learning</a>
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Footer End-->
      </div>
  </footer> 
  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<script src="public/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="public/js/vendor/jquery-1.12.4.min.js"></script>
<script src="public/js/popper.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="public/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="public/js/owl.carousel.min.js"></script>
<script src="public/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="public/js/wow.min.js"></script>
<script src="public/js/animated.headline.js"></script>
<script src="public/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="public/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="public/js/jquery.nice-select.min.js"></script>
<script src="public/js/jquery.sticky.js"></script>
<!-- Progress -->
<script src="public/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="public/js/jquery.counterup.min.js"></script>
<script src="public/js/waypoints.min.js"></script>
<script src="public/js/jquery.countdown.min.js"></script>
<script src="public/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="public/js/contact.js"></script>
<script src="public/js/jquery.form.js"></script>
<script src="public/js/jquery.validate.min.js"></script>
<script src="public/js/mail-script.js"></script>
<script src="public/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="public/js/plugins.js"></script>
<script src="public/js/main.js"></script>

 
</body>
 
</html>