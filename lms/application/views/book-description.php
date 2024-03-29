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
            <div class="container p-0">
 
                <div class="lg:flex lg:space-x-10 bg-white rounded-md shadow max-w-3x  mx-auto md:p-8 p-3">
                    <div class="lg:w-1/3 w-full">

                        <div uk-sticky="offset: 91;bottom: true">
                            <div uk-lightbox>
                                <a href="public/assets/images/book/book-description.jpg" data-caption="Image Caption">
                                    <img alt="" src="public/assets/images/book/book-description.jpg" class="shadow-lg rounded-md w-32 md:w-full" style="cursor: zoom-in; ">
                                </a> 
                            </div>
                            <div>
                                <ul class="my-5 text-sm space-y-2">
                                    <li> Visited 120 </li>                                         
                                    <li> Publish time 12/12/2018</li>
                                    <li> Downloaded 120 </li>
                                </ul>
                                <div class="grid grid-cols-2 gap-2">
                                    <a href="#" class="hover:text-gray-800 bg-gray-300 font-semibold inline-flex items-center justify-center px-4 py-2 rounded-md text-center w-full"> <i class="uil-book-open mr-1 md:block hidden"></i> Read </a>
                                    <a href="#" class="bg-gray-600 font-semibold hover:bg-gray-700 inline-flex items-center justify-center px-4 py-2 rounded-md text-center text-white w-full"> <i class="uil-shopping-basket mr-1 md:block hidden"></i> Buy </a>
                                </div>
                            </div>
    
                        </div>
                         
                    </div>
                    <div class="lg:w-2/3 flex-shrink-0 mt-10 lg:m-0"> 
                        
                        <div> 

                            <h2 class="font-semibold mb-3 text-xl lg:text-2xl">Learn The Basic Of VUE JS .</h2>
                            <hr class="mb-5">
                            <h4 class="font-semibold mb-2 text-base"> Description </h4>   
                            <div class="space-y-4">
  
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                    quis nostrud exerci tation ullamcorper</p>
                                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod
                                    mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing
                                    elit, sed diam nonummy nibh euismod quis nostrud exerci tation ullamcorper tincidunt ut
                                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                    exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                <p>mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing
                                    elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                    volutpat. Ut wisi enim ad minim veniam,suscipit lobortis nisl ut aliquip ex ea commodo
                                    consequat</p>
                                <p class="text-lg font-semibold"> Assum consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                                <p>Diam nonummy nibh euismod erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                    exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
                                <p>laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
                                <h4>Book Information</h4>
                                <p class="mb-0"><strong>Page Count</strong>: 118</p>
                                <p class="mt-0"><strong>Word Count</strong>: 15872</p>
                                
                            </div>
                              
                        </div>

                                       
                    </div>
                    
                </div> 

                <!--  books  -->
                <div class="sm:mt-10 mt-6 flex items-end justify-between px-2">
                    <h2 class="text-2xl font-semibold"> Related Books </h2>
                    <a href="#" class="text-blue-500 sm:block hidden"> See all </a>
                </div>
                <div class="relative px-3 md:p-0 mt-3" uk-slider="finite: true">
                    <div class="uk-slider-container px-1 py-3">
                        <ul
                            class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid text-sm font-medium text-center">
                            <li>
                                <div class="card">
                                    <a href="book-description.html">
                                        <img src="public/assets/images/book/book4.jpg" alt="" class="w-full h-52 object-cover">
                                        <div class="p-3 truncate">HTML Breaker</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="book-description.html">
                                        <img src="public/assets/images/book/book5.jpg" alt="" class="w-full h-52 object-cover">
                                        <div class="p-3 truncate"> CSS Master </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="book-description.html">
                                        <img src="public/assets/images/book/book1.jpg" alt="" class="w-full h-52 object-cover">
                                        <div class="p-3 truncate"> Vue.js Basics </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="book-description.html">
                                        <img src="public/assets/images/book/book2.jpg" alt="" class="w-full h-52 object-cover">
                                        <div class="p-3 truncate"> HTML5 & CSS3 </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="book-description.html">
                                        <img src="public/assets/images/book/book3.jpg" alt="" class="w-full h-52 object-cover">
                                        <div class="p-3 truncate"> Learn CSS </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="book-description.html">
                                        <img src="public/assets/images/book/book4.jpg" alt="" class="w-full h-52 object-cover">
                                        <div class="p-3 truncate">HTML Breaker</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="book-description.html">
                                        <img src="public/assets/images/book/book5.jpg" alt="" class="w-full h-52 object-cover">
                                        <div class="p-3 truncate"> CSS Master </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                
                        <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                            href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                        <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                            href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>
                
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

        <!-- sidebar -->
        <?php include_once'inc/sidebar.php'; ?>



    </div>

 
    <?php include_once'inc/commonjs.php'; ?>


</body>


</html>
