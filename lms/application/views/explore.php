<!DOCTYPE html>
<html lang="en">

<head> 
<?php include_once'inc/head.php'; ?>
  
</head>

<body>

    <div id="wrapper" class="is-verticle">

      <?php include_once'inc/header.php'; ?>

        <!-- Main Contents -->
        <div class="main_content">

            <!-- Slideshow -->
            <div class="uk-position-relative uk-visible-toggle overflow-hidden lg:-mt-20" tabindex="-1"
              uk-slideshow="animation: scale ;min-height: 200; max-height: 450 ;autoplay: t rue">

              <ul class="uk-slideshow-items rounded">
                  <li>
                      <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                          <img src="public/assets/images/hero-1.jpg" class="object-cover" alt="" uk-cover>
                      </div>
                      <div class="container relative md:p-20 md:mt-7 p-5 h-full"> 
                        <div uk-slideshow-parallax="scale: 1,1,0.8" class="flex flex-col justify-center h-full w-full space-y-3">
                            <h1 uk-slideshow-parallax="y: 100,0,0" class="lg:text-4xl text-2xl text-white font-semibold"> Learn from the best</h1>
                            <p uk-slideshow-parallax="y: 150,0,0" class="text-base text-white font-medium pb-4 lg:w-1/2"> Choose from 130,000 online video courses with new additions published every month </p>
                            <a uk-slideshow-parallax="y: 200,0,50" href="#" class="bg-opacity-90 bg-white py-2.5 rounded-md text-base text-center w-32"> Get Started </a> 
                        </div>
                      </div>
                  </li> 
                  <li>
                    <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                        <img src="public/assets/images/hero-2.jpg" class="object-cover" alt="" uk-cover>
                    </div>
                    <div class="container relative md:p-20 md:mt-7 p-5 h-full"> 
                        <div uk-slideshow-parallax="scale: 1,1,0.8" class="flex flex-col justify-center h-full w-full space-y-3">
                            <h1 uk-slideshow-parallax="y: 100,0,0" class="lg:text-4xl text-2xl text-white font-semibold"> Learn from the best</h1>
                            <p uk-slideshow-parallax="y: 150,0,0" class="text-base text-white font-medium pb-4 lg:w-1/2"> Choose from 130,000 online video courses with new additions published every month </p>
                            <a uk-slideshow-parallax="y: 200,0,0" href="#" class="bg-opacity-90 bg-white py-2.5 rounded-md text-base text-center w-32"> Get Started </a> 
                        </div>
                      </div>
                </li> 
              </ul>

              <ul class="uk-slideshow-nav uk-dotnav absolute bottom-0 left-0 m-7 lg:flex hidden"></ul>
            </div> 
            
            <div class="container">

                <!--  course feature -->
                <div class="sm:my-4 my-3 flex items-end justify-between pt-3">
                  <h2 class="text-2xl font-semibold"> Featured Classes   </h2> 
                </div> 
               
                <div class="relative -mt-3" uk-slider="finite: true">

                    <div class="uk-slider-container px-1 py-3">
                        <ul class="uk-slider-items uk-child-width-1-1@m uk-grid">
                        <?php
if(count($courses)>0){
foreach($courses as $course){
 ?>

                            <li>
                               
                                <div class="bg-white shadow-sm rounded-lg uk-transition-toggle md:flex">
                                    <div class="md:w-5/12 md:h-60 h-40 overflow-hidden rounded-l-lg relative">
                                        <img src="<?=get_thumbnail($course['thumbnail'])?>" alt="" class="w-full h-full absolute inset-0 object-cover">
                                        <img src="<?=base_url()?>public/assets/images/icon-play.svg" class="w-16 h-16 uk-position-center uk-transition-fade" alt="">
                                    </div>
                                    <div class="flex-1 md:p-6 p-4">
                                        <div class="font-semibold line-clamp-2 md:text-xl md:leading-relaxed"><?=ucfirst($course['post_title'])?></div>
                                        <div class="mt-2 md:block hidden">
                                            <p class="line-clamp-2"><?=html_cut($course['post_description'],150)?></p>
                                        </div>
                                        <div class="font-semibold mt-3"> <?=ucfirst($course['instructor'])?></div>
                                        <div class="mt-1 flex items-center justify-between">
                                            <div class="flex space-x-2 items-center text-sm pt-2">
                                                <div> 13 hours </div>
                                                <div>·</div>
                                                <div> <?=count_where('course_lectures',array('course_id'=>$course['id']))?> lectures </div>
                                            </div>
                                            <div class="text-lg font-semibold"> $<?=$course['price']?>  </div>
                                        </div>
                                    </div> 
                                </div>

                            </li>
                            <?php }}else{ ?>
                            
                            <li>

                                <div class="bg-white shadow-sm rounded-lg uk-transition-toggle md:flex">
                                    <div class="md:w-5/12 md:h-60 h-40 overflow-hidden rounded-l-lg relative">
                                        <img src="public/assets/images/courses/img-1.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                        <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-16 h-16 uk-position-center uk-transition-fade" alt="">
                                    </div>
                                    <div class="flex-1 md:p-6 p-4">
                                        <div class="font-semibold line-clamp-2 md:text-xl md:leading-relaxed"> Learn JavaScript and Express to become a professional JavaScript developer. </div>
                                        <div class="mt-2 md:block hidden">
                                            <p class="line-clamp-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
                                        </div>
                                        <div class="font-semibold mt-3"> John Michael </div>
                                        <div class="mt-1 flex items-center justify-between">
                                            <div class="flex space-x-2 items-center text-sm pt-2">
                                                <div> 13 hours </div>
                                                <div>·</div>
                                                <div> 32 lectures </div>
                                            </div>
                                            <div class="text-lg font-semibold"> $14.99 </div>
                                        </div>
                                    </div> 
                                </div>
                                 
                            </li>
                            <?php } ?>
                            
                        </ul>
                    </div>
                    
                    <a class="absolute bg-white uk-position-center-left -ml-3 flex items-center justify-center p-2 rounded-full shadow-md text-xl w-11 h-11 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                    <a class="absolute bg-white uk-position-center-right -mr-3 flex items-center justify-center p-2 rounded-full shadow-md text-xl w-11 h-11 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                </div>

                <!--  slider courses --> 
                <div class="sm:my-4 my-3 flex items-end justify-between pt-3">
                      <h2 class="text-2xl font-semibold"> Popular Classes  </h2>
                  <a href="#" class="text-blue-500 sm:block hidden"> See all </a>
                </div> 

                <div class="mt-3">

                    <h4 class="py-3 border-b font-semibold text-grey-700  mx-1 mb-4" hidden> <ion-icon name="star"></ion-icon> Featured today </h4>

                    <!--  slider -->
                    <div class="mt-3">

                        <h4 class="py-3 border-b font-semibold text-grey-700  mx-1 mb-4" hidden> <ion-icon name="star"></ion-icon> Featured today </h4>

                        <div class="relative" uk-slider="finite: true">

                            <div class="uk-slider-container px-1 py-3">

                                <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-small uk-grid">

<?php
if(count($courses)>0){
foreach($courses as $course){
 ?>
                                    <li>

                                        <a href="javascript:void(0)" class="uk-link-reset">
                                            <div class="card uk-transition-toggle">
                                                <div class="card-media h-40">
                                                    <div class="card-media-overly"></div>
                                                    <img src="<?=get_thumbnail($course['thumbnail'])?>" alt="" class="">
                                                    <span class="icon-play"></span>
                                                </div>
                                                <div class="card-body p-4">
                                                    <div class="font-semibold line-clamp-2"> <?=ucfirst($course['post_title'])?></div>
                                                    <div class="flex space-x-2 items-center text-sm pt-3">
                                                        <div> 13 hours  </div>
                                                        
                                                        <div> <?=count_where('course_lectures',array('course_id'=>$course['id']))?> lectures </div>
                                                         <div>  <?=ucfirst($course['terms'])?>  </div>
                                                    </div>
                                                    <div class="pt-1 flex items-center justify-between">
                                                        <div class="text-sm font-medium"> <?=ucfirst($course['instructor'])?></div>
                                                        <div class="text-lg font-semibold"> $<?=$course['price']?> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </li>
                                 <?php }
								 }
								 else {?>
<!-- if no course show demo course content   -->                                 <li>

                                        <a href="course-intro.php" class="uk-link-reset">
                                            <div class="card uk-transition-toggle">
                                                <div class="card-media h-40">
                                                    <div class="card-media-overly"></div>
                                                    <img src="public/assets/images/courses/img-1.jpg" alt="" class="">
                                                    <span class="icon-play"></span>
                                                </div>
                                                <div class="card-body p-4">
                                                    <div class="font-semibold line-clamp-2"> Learn JavaScript and Express to become a professional JavaScript developer. </div>
                                                    <div class="flex space-x-2 items-center text-sm pt-3">
                                                        <div> 13 hours  </div>
                                                        <div> · </div>
                                                        <div> 32 lectures </div>
                                                    </div>
                                                    <div class="pt-1 flex items-center justify-between">
                                                        <div class="text-sm font-medium"> John Michael </div>
                                                        <div class="text-lg font-semibold"> $14.99 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </li>
<?php } ?>
                                </ul>

                                <a class="absolute bg-white top-1/4 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                                <a class="absolute bg-white top-1/4 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                            </div>
                        </div>

                    </div>
                
                </div>
                
                <!--  books  --> 
                <div class="sm:my-4 my-3 flex items-end justify-between pt-3">
                      <h2 class="text-2xl font-semibold"> Latest Books </h2>
                  <a href="#" class="text-blue-500 sm:block hidden"> See all </a>
                </div> 

                <div class="relative" uk-slider="finite: true">
                    <div class="uk-slider-container px-1 py-3">
                        <ul
                            class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid text-sm font-medium text-center">
                             <?php
				if(count($books)>0){
					foreach($books as $book){
					$image=	$book['image'];
	
				 ?>
                            <li>
                                <div class="card">
                                    <a href="javscript:void(0)">
                                        <img src="<?=get_bookcover($image)?>" alt="" class="w-full h-52 object-cover">
                                        <div class="p-3 truncate"><?=ucfirst($book['title'])?></div>
                                    </a>
                                </div>
                            </li>
                            <?php }}else{ ?>
                            <li>
                                <div class="card">
                                    <a href="javscript:void(0)">
                                        <img src="public/assets/images/book/book5.jpg" alt="" class="w-full h-52 object-cover">
                                        <div class="p-3 truncate"> CSS Master </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="javscript:void(0)">
                                        <img src="public/assets/images/book/book1.jpg" alt="" class="w-full h-52 object-cover">
                                        <div class="p-3 truncate"> Vue.js Basics </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="javscript:void(0)">
                                        <img src="public/assets/images/book/book2.jpg" alt="" class="w-full h-52 object-cover">
                                        <div class="p-3 truncate"> HTML5 & CSS3 </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="javscript:void(0)">
                                        <img src="public/assets/images/book/book3.jpg" alt="" class="w-full h-52 object-cover">
                                        <div class="p-3 truncate"> Learn CSS </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="javscript:void(0)">
                                        <img src="public/assets/images/book/book4.jpg" alt="" class="w-full h-52 object-cover">
                                        <div class="p-3 truncate">HTML Breaker</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="#">
                                        <img src="public/assets/images/book/book5.jpg" alt="" class="w-full h-52 object-cover">
                                        <div class="p-3 truncate"> CSS Master </div>
                                    </a>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                
                        <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                            href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                        <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                            href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>
                
                    </div>
                </div>

                <!--  episcodes  -->
                <!-- this is user toggle media to remove unwanted class for small devices more check docs uikit on https://getuikit.com/docs/toggle. -->
                <div class="tube-card p-4 mt-3" uk-toggle="cls: tube-card p-4; mode: media; media: 640">
  
                    <h4 class="py-3 px-5 border-b font-semibold text-grey-700 -mx-4 -mt-3 mb-4"> Latest Episodes </h4>
  
                    <div class="relative -mx-1" uk-slider="finite: true">
                
                          <div class="uk-slider-container md:px-1 px-2 py-3">
                            <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-2 uk-grid-small uk-grid">
                                <li>
                                    <a href="episodes-watch.php">
                                        <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                            <img src="public/assets/images/episodes/img-2.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                            <span
                                                class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                                12:21</span>
                                            <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                        </div>
                                    </a>
                                    <div class="pt-3">
                                        <a href="episodes-watch.php" class="font-semibold line-clamp-2">  The PHP Singleton class  </a>
                                        <p class="text-sm pt-1"> By <a href="#"> Stella Johnson  </a> </p>
                                    </div>
                                </li>
                                <li>
                                    <a href="episodes-watch.php">
                                        <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                            <img src="public/assets/images/episodes/img-4.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                            <span class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                                12:21</span>
                                            <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                        </div>
                                    </a>
                                    <div class="pt-3">
                                        <a href="episodes-watch.php" class="font-semibold line-clamp-2">  Larafel $ fliepond   </a>
                                        <p href="episodes-watch.php" class="text-sm pt-1"> By <a href="#"> Jesse Stevens </a> </p>
                                    </div>
                                </li>
                                <li>
                                    <a href="episodes-watch.php">
                                        <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                            <img src="public/assets/images/episodes/img-1.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                            <span class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                                12:21</span>
                                            <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                        </div>
                                    </a>
                                    <div class="pt-3">
                                        <a href="episodes-watch.php" class="font-semibold line-clamp-2">  Creating a Laravel Package   </a>
                                        <p class="text-sm pt-1"> By <a href="#"> John Michael </a> </p>
                                    </div>
                                </li>
                                <li>
                                    <a href="episodes-watch.php">
                                        <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                            <img src="public/assets/images/episodes/img-3.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                            <span class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                                12:21</span>
                                            <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                        </div>
                                    </a>
                                    <div class="pt-3">
                                        <a href="episodes-watch.php" class="font-semibold line-clamp-2">  Creating sticky in HTML   </a>
                                        <p class="text-sm pt-1"> By <a href="#"> Monroe Parker </a> </p>
                                    </div>
                                </li> 
                            </ul>
                
                            <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous">  <ion-icon name="chevron-back-outline"></ion-icon> </a>
                            <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <ion-icon name="chevron-forward-outline"></ion-icon></a>
                
                          </div>
                
                    </div>
  
                </div>
               

            </div>
            
            <!-- footer -->
            <div class="lg:mt-28 mt-10 mb-7 px-12 border-t pt-7">
                <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
                    <p class="capitalize font-medium"> © copyright 2021  Courseplus</p>
                    <div class="lg:flex space-x-4 text-gray-700 capitalize hidden">
                        <a href="#"> About</a>
                        <a href="#"> Help</a>
                        <a href="#"> Terms</a>
                        <a href="#"> Privacy</a>
                    </div>
                </div>
            </div>

        </div>
        
       <?php include_once'inc/sidebar.php'; ?>

        
    </div>

 <?php include_once'inc/commonjs.php'; ?>


</body>

</html>
