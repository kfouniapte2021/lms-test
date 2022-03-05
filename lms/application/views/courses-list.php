<!DOCTYPE html>
<html lang="en">

<head> 

<?php include_once'inc/head.php'; ?>

</head>

<body>

    <div id="wrapper" class="is-verticle">

        <!--  Header  -->
       <?php include_once'inc/header.php'; ?>

        <!-- Main Contents -->
        <div class="main_content">
            <div class="container">
 
                <div class="md:flex justify-between items-center mb-8">

                    <div>
                        <div class="text-xl font-semibold"> Web Development Courses </div>
                        <div class="text-sm mt-2 font-medium text-gray-500 leading-6">  Choose from +10.000 courses with new  additions published every months  </div>
                    </div>

                    <div class="flex items-center justify-end">

                        <div class="bg-gray-100 border inline-flex p-0.5 rounded-md text-lg self-center">
                            <a href="#" class="py-1.5 px-2.5 rounded-md bg-white shadow" data-tippy-placement="top" title="List view"> 
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg> 
                            </a>
                            <a href="courses.html" class="py-1.5 px-2.5 rounded-md" data-tippy-placement="top" title="Grid view"> 
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                            </a>
                        </div>
                        <a href="#" class="bg-gray-100 border ml-2 px-3 py-2 rounded-md" data-tippy-placement="top"  title="Filter" uk-toggle="target: #course-filter;flip: true"> 
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd"></path></svg>
                        </a>

                    </div>
                </div>

                <!--   Courselist  -->
                <div class="tube-card mt-3 lg:mx-0 -mx-5">
                    
                    <h4 class="py-3 px-5 border-b font-semibold text-grey-700"> <ion-icon name="star"></ion-icon> Featured today </h4>

                    <div class="divide-y">
                    <?php
if(count($courses)>0){
foreach($courses as $course){
 ?>
                        <div class="flex md:space-x-6 space-x-3 md:p-5 p-2 relative">
                            <a href="course-intro-2.html" class="md:w-60 md:h-36 w-28 h-20 overflow-hidden rounded-lg relative shadow-sm">
                                <img src="<?=get_thumbnail($course['thumbnail'])?>" alt=""  class="w-full h-full absolute inset-0 object-cover">
                                <img src="public/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                            </a>
                            <div class="flex-1 md:space-y-2 space-y-1">
                                <a href="course-intro-2.html" class="md:text-xl font-semibold line-clamp-2"> <?=ucfirst($course['post_title'])?> </a>
                                <p class="leading-6 pr-4 line-clamp-2 md:block hidden"> <?=html_cut($course['post_description'],250)?> </p>
                                <a href="#" class="md:font-semibold block text-sm"> <?=ucfirst($course['instructor'])?></a>
                                <div class="flex items-center justify-between">
                                    <div class="flex space-x-2 items-center text-sm">
                                        <div> <?=ucfirst($course['terms'])?> levels  </div>
                                        <div class="md:block hidden">·</div>
                                        <div class="flex items-center"> <?=count_where('course_lectures',array('course_id'=>$course['id']))?> Lectures </div>
                                    </div>
                                    <a href="javascript:void(0)" class="md:flex items-center justify-center h-9 px-8 rounded-md border -mt-3.5 hidden"> Enroll Now </a>
                                </div>

                                <div class="absolute top-1 right-3 md:flex hidden">
                                    <a href="#" class="hover:bg-gray-200 p-1.5 inline-block rounded-full">
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                     </svg>
                                    </a>
                                    <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" uk-drop="mode: hover;pos: top-right">

                                        <ul class="space-y-1">
                                          <li>
                                              <a href="#" class="flex items-center px-3 py-2 text-sm hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                <ion-icon name="share-outline" class="mr-1 text-lg"></ion-icon> Share
                                              </a>
                                          </li>
                                          <li>
                                              <a href="#" class="flex items-center px-3 py-2 text-sm hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                <ion-icon name="star-outline" class="mr-1 text-lg"></ion-icon>  Add favorites
                                              </a>
                                          </li>
                                          <li>
                                              <a href="#" class="flex items-center px-3 py-2 text-sm hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                <ion-icon name="bookmark-outline" class="mr-1 text-lg"></ion-icon>   Add Bookmark
                                              </a>
                                          </li>
                                          <li>
                                            <hr class="-mx-2 my-2 dark:border-gray-800">
                                          </li>
                                          <li>
                                              <a href="#" class="flex items-center px-3 py-2 text-sm text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                                <ion-icon name="heart-outline" class="mr-1 text-lg"></ion-icon>  Wishlist
                                              </a>
                                          </li>
                                        </ul>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php }}else{ ?>
                            
                        <div class="flex md:space-x-6 space-x-3 md:p-5 p-2 relative">
                            <a href="course-intro-2.html" class="md:w-60 md:h-36 w-28 h-20 overflow-hidden rounded-lg relative shadow-sm">
                                <img src="public/assets/images/courses/img-1.jpg" alt=""  class="w-full h-full absolute inset-0 object-cover">
                                <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                            </a>
                            <div class="flex-1 md:space-y-2 space-y-1">
                                <a href="course-intro-2.html" class="md:text-xl font-semibold line-clamp-2"> Ultimate Web Developer Course  </a>
                                <p class="leading-6 pr-4 line-clamp-2 md:block hidden"> Lorem ipsum dolor sit amet,
                                    consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                    magna . </p>
                                <a href="#" class="md:font-semibold block text-sm"> Stella Johnson</a>
                                <div class="flex items-center justify-between">
                                    <div class="flex space-x-2 items-center text-sm">
                                        <div> Advance levels  </div>
                                        <div class="md:block hidden">·</div>
                                        <div class="flex items-center"> 13 Hourse </div>
                                    </div>
                                    <a href="#" class="md:flex items-center justify-center h-9 px-8 rounded-md border -mt-3.5 hidden"> Enroll Now </a>
                                </div>

                                <div class="absolute top-1 right-3 md:flex hidden">
                                    <a href="#" class="hover:bg-gray-200 p-1.5 inline-block rounded-full">
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                     </svg>
                                    </a>
                                    <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" uk-drop="mode: hover;pos: top-right">

                                        <ul class="space-y-1">
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 text-sm hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                  <ion-icon name="share-outline" class="mr-1 text-lg"></ion-icon> Share
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 text-sm hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                  <ion-icon name="star-outline" class="mr-1 text-lg"></ion-icon>  Add favorites
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 text-sm hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                  <ion-icon name="bookmark-outline" class="mr-1 text-lg"></ion-icon>   Add Bookmark
                                                </a>
                                            </li>
                                            <li>
                                              <hr class="-mx-2 my-2 dark:border-gray-800">
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 text-sm text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                                  <ion-icon name="heart-outline" class="mr-1 text-lg"></ion-icon>  Wishlist
                                                </a>
                                            </li> 
                                        </ul>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="flex md:space-x-6 space-x-3 md:p-5 p-2 relative">
                            <a href="course-intro-2.html" class="md:w-60 md:h-36 w-28 h-20 overflow-hidden rounded-lg relative shadow-sm">
                                <img src="public/assets/images/courses/img-3.jpg" alt=""  class="w-full h-full absolute inset-0 object-cover">
                                <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                            </a>
                            <div class="flex-1 md:space-y-2 space-y-1">
                                <a href="course-intro-2.html" class="md:text-xl font-semibold line-clamp-2"> Build Responsive Real World Websites </a>
                                <p class="leading-6 pr-4 line-clamp-2 md:block hidden"> Lorem ipsum dolor sit amet,
                                    consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                    magna . </p>
                                <a href="#" class="md:font-semibold block text-sm"> Monroe Parker</a>
                                <div class="flex items-center justify-between">
                                    <div class="flex space-x-2 items-center text-sm">
                                        <div> Binginner levels  </div>
                                        <div class="md:block hidden">·</div>
                                        <div class="flex items-center"> 23 Hourse </div>
                                    </div>
                                    <a href="#" class="md:flex items-center justify-center h-9 px-8 rounded-md border -mt-3.5 hidden"> Enroll Now </a>
                                </div>

                                <div class="absolute top-1 right-3 md:flex hidden">
                                    <a href="#" class="hover:bg-gray-200 p-1.5 inline-block rounded-full">
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                     </svg>
                                    </a>
                                    <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" uk-drop="mode: hover;pos: top-right">

                                        <ul class="space-y-1">
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 text-sm hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                  <ion-icon name="share-outline" class="mr-1 text-lg"></ion-icon> Share
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 text-sm hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                  <ion-icon name="star-outline" class="mr-1 text-lg"></ion-icon>  Add favorites
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 text-sm hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                  <ion-icon name="bookmark-outline" class="mr-1 text-lg"></ion-icon>   Add Bookmark
                                                </a>
                                            </li>
                                            <li>
                                              <hr class="-mx-2 my-2 dark:border-gray-800">
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 text-sm text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                                  <ion-icon name="heart-outline" class="mr-1 text-lg"></ion-icon>  Wishlist
                                                </a>
                                            </li> 
                                        </ul>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="flex md:space-x-6 space-x-3 md:p-5 p-2 relative">
                            <a href="course-intro-2.html" class="md:w-60 md:h-36 w-28 h-20 overflow-hidden rounded-lg relative shadow-sm">
                                <img src="public/assets/images/courses/img-4.jpg" alt=""  class="w-full h-full absolute inset-0 object-cover">
                                <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                            </a>
                            <div class="flex-1 md:space-y-2 space-y-1">
                                <a href="course-intro-2.html" class="md:text-xl font-semibold line-clamp-2">
                                     Learn Angular Fundamentals to Expert  </a>
                                <p class="leading-6 pr-4 line-clamp-2 md:block hidden"> Lorem ipsum dolor sit amet,
                                    consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                    magna . </p>
                                <a href="single-channel.html" class="md:font-semibold block text-sm"> Jesse Stevens </a>
                                <div class="flex items-center justify-between">
                                    <div class="flex space-x-2 items-center text-sm">
                                        <div> Advance levels  </div>
                                        <div class="md:block hidden">·</div>
                                        <div class="flex items-center"> 18 Hourse </div>
                                    </div>
                                    <a href="#" class="md:flex items-center justify-center h-9 px-8 rounded-md border -mt-3.5 hidden"> Enroll Now </a>
                                </div>

                                <div class="absolute top-1 right-3 md:flex hidden">
                                    <a href="#" class="hover:bg-gray-200 p-1.5 inline-block rounded-full">
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                     </svg>
                                    </a>
                                </div>
                            </div>
                        </div> 
                         <?php } ?>
                    </div>

                </div>
              
                <!-- Pagination -->
                <div class="flex justify-center mt-9 space-x-2 text-base font-semibold text-gray-400 items-center">
                    <a href="#" class="py-1 px-3 bg-gray-200 rounded text-gray-600"> 1</a>
                    <a href="#" class="py-1 px-2 bg-gray-200 rounded"> 2</a>
                    <a href="#" class="py-1 px-2 bg-gray-200 rounded"> 3</a>
                    <ion-icon name="ellipsis-horizontal" class="text-lg -mb-4"></ion-icon>
                    <a href="#" class="py-1 px-2 bg-gray-200 rounded"> 12</a>
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

    <!-- course-filter -->
    <div id="course-filter" uk-offcanvas="modee: reveal; overlay: true; flip: true">
        <div class="uk-offcanvas-bar bg-white lg:w-96 w-full overflow-hidden flex justify-between flex-col">

            <div class="px-5 py-2.5 flex items-center space-x-2 shadow-sm">
                <ion-icon name="arrow-back" data-tippy-placement="right" title="Close filter" class="text-xl uk-offcanvas-close relative inset-0 p-0 cursor-pointer"></ion-icon>
                <h3 class="font-semibold text-lg"> Filter </h3>
            </div>
            <div class="p-6 pt-3 flex-1 lg:h-1/6 mr-1" data-simplebar>

                <h3 class="font-semibold text-lg"> Skill Levels  </h3>
                <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sediam nibh </div>

                <ul class="ml-2 mb-4 mt-1 -space-y-2">
                    <li class="radio w-full">
                        <input id="radio-1" name="radio" type="radio" checked>
                        <label for="radio-1" class="flex justify-between p-2 hover:bg-gray-100 rounded-md" style="padding-left: 20px;">
                            Beginner <span class="radio-label" style="position: relative"></span>
                        </label>
                    </li>
                    <li class="radio w-full">
                        <input id="radio-2" name="radio" type="radio">
                        <label for="radio-2" class="flex justify-between p-2 hover:bg-gray-100 rounded-md" style="padding-left: 20px;">
                            Entermidate <span class="radio-label" style="position: relative"></span>
                        </label>
                    </li>
                    <li class="radio w-full">
                        <input id="radio-3" name="radio" type="radio">
                        <label for="radio-3" class="flex justify-between p-2 hover:bg-gray-100 rounded-md" style="padding-left: 20px;">
                            Expert <span class="radio-label" style="position: relative"></span>
                        </label>
                    </li>
                </ul>

                <h3 class="font-semibold text-lg"> Pricing  </h3>
                <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sediam nibh </div>

                <ul class="ml-2 mb-4 mt-2 -space-y-2">
                    <li class="radio w-full">
                        <input id="Paid-1" name="paid" type="radio" checked>
                        <label for="Paid-1" class="flex justify-between p-2 hover:bg-gray-100 rounded-md" style="padding-left: 20px;">
                            Paid <span class="radio-label" style="position: relative"></span>
                        </label>
                    </li>
                    <li class="radio w-full">
                        <input id="paid-2" name="paid" type="radio">
                        <label for="paid-2" class="flex justify-between p-2 hover:bg-gray-100 rounded-md" style="padding-left: 20px;">
                            Free <span class="radio-label" style="position: relative"></span>
                        </label>
                    </li>
                </ul>

                <h3 class="font-semibold text-lg"> Duration time  </h3>
                <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sediam nibh </div>

                <ul class="ml-2 mb-4 mt-2 -space-y-2">
                    <li class="radio w-full">
                        <input id="duration-1" name="duration" type="radio" checked>
                        <label for="duration-1" class="flex justify-between p-2 hover:bg-gray-100 rounded-md" style="padding-left: 20px;">
                            +5 Hourse <span class="radio-label" style="position: relative"></span>
                        </label>
                    </li>
                    <li class="radio w-full">
                        <input id="duration-2" name="duration" type="radio">
                        <label for="duration-2" class="flex justify-between p-2 hover:bg-gray-100 rounded-md" style="padding-left: 20px;">
                            +10 Hourse <span class="radio-label" style="position: relative"></span>
                        </label>
                    </li>
                    <li class="radio w-full">
                        <input id="duration-3" name="duration" type="radio">
                        <label for="duration-3" class="flex justify-between p-2 hover:bg-gray-100 rounded-md" style="padding-left: 20px;">
                            +25 Hourse <span class="radio-label" style="position: relative"></span>
                        </label>
                    </li>
                    <li class="radio w-full">
                        <input id="duration-4" name="duration" type="radio">
                        <label for="duration-4" class="flex justify-between p-2 hover:bg-gray-100 rounded-md" style="padding-left: 20px;">
                            +30 Hourse <span class="radio-label" style="position: relative"></span>
                        </label>
                    </li>
                </ul>

            </div>
            <div class="font-medium gap-2 grid grid-cols-2 text-center p-3 border-t">
                <div class="absolute w-full h-16 -mt-12 bg-gradient-to-b to-transparent from-white"></div>
                <a href="#" class="bg-gray-200 flex-1 py-2.5 rounded-md"> Reset</a>
                <a href="#" class="bg-blue-600 flex-1 py-2.5 rounded-md text-white"> Apply</a>
            </div>

        </div>
    </div>
 <?php include_once'inc/commonjs.php'; ?>


    <script src="public/assets/js/uikit.js"></script>
    <script src="public/assets/js/tippy.all.min.js"></script>
    <script src="public/assets/js/simplebar.js"></script>
    <script src="public/assets/js/custom.js"></script>
    <script src="public/assets/js/bootstrap-select.min.js"></script>
    
</body>


</html>
