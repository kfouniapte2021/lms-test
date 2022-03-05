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
            <div class="container -mt-7 lg:mt-0">


                <div class="tube-card p-6 md:m-0 -mx-5">
                    
                    <div class="embed-video rounded -mx-6 -mt-6 lg:m-0">
                        <iframe src="https://www.youtube.com/embed/pQN-pnXPaVg" frameborder="0" uk-video="automute: true" allowfullscreen="" uk-responsive="" class="uk-responsive-width"></iframe>
                    </div>

                    <div class="py-5 space-y-4">

                        <div>
                            <h1 class="lg:text-2xl text-lg font-semibold line-clamp-1"> HTML Full Course - Build A Website Tutorial </h1>
                            <p> 60,723,169 views </p>
                        </div>
                        
                        <div class="md:flex items-center justify-between">
                            <a href="#" class="flex items-center space-x-3">
                                <img src="public/assets/images/avatars/avatar-2.jpg" alt="" class="w-10 rounded-full">
                                <div class="">
                                    <div class="text-base font-semibold"> Stella Johnson </div>
                                    <div class="text-xs"> Published on Feb 22, 2021 </div>
                                </div>
                            </a>
                            <div class="md:flex items-center space-x-1 md:pt-0 pt-2 hidden">
                                <a href="#">  <ion-icon name="logo-twitter" class="bg-blue-600 text-white text-2xl p-2 rounded-full"></ion-icon> </a>
                                <a href="#">  <ion-icon name="logo-youtube" class="bg-red-600 text-white text-2xl p-2 rounded-full"></ion-icon> </a>
                                <a href="#">  <ion-icon name="logo-github" class="bg-gray-600 text-white text-2xl p-2 rounded-full"></ion-icon> </a>
                             </div>
                        </div>
                        
                        <div class="text-lg font-semibold pt-2"> Description </div>
                        <p id="more-veiw" class=" line-clamp-2"> Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna, 
                            consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                            aliqua. consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.
                        </p>
                        <a href="#" class="text-blue-600" uk-toggle="target: #more-veiw; cls: line-clamp-2; animation: uk-animation-fade"> 
                            Read More  
                        </a>

                        <hr>

                        <!-- Comments-->
                        <div class="text-lg font-semibold pt-2"> Comments ( 5210 )</div>

                        <div class="space-y-4 my-5">
                        
                            <div class="bg-gray-50 border flex gap-x-4 p-4 relative rounded-md">
                                <img src="public/assets/images/avatars/avatar-4.jpg" alt="" class="rounded-full shadow w-12 h-12">
                                <div class="flex justify-center items-center absolute right-5 top-6 space-x-1 text-yellow-500">
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                </div>
                                <div>
                                    <h4 class="text-base m-0 font-semibold"> Stella Johnson</h4>
                                    <span class="text-gray-700 text-sm"> 14th, April 2021 </span>
                                    <p class="mt-3 md:ml-0 -ml-16">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam ut laoreet dolore
                                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                        ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                    </p>
                        
                        
                        
                                </div>
                            </div>
                        
                            <div class="bg-gray-50 border flex gap-x-4 p-4 relative rounded-md">
                                <div class="flex justify-center items-center absolute right-5 top-6 space-x-1 text-yellow-500">
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" class="text-gray-300 md hydrated" role="img" aria-label="star"></ion-icon>
                                </div>
                                <img src="public/assets/images/avatars/avatar-2.jpg" alt="" class="rounded-full shadow w-12 h-12">
                                <div>
                                    <h4 class="text-base m-0 font-semibold"> Alex Dolgove</h4>
                                    <span class="text-gray-700 text-sm"> 16th, May 2021 </span>
                                    <p class="mt-3 md:ml-0 -ml-16">
                                        elit, sed diam ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim ipsum dolor sit
                                        amet, consectetuer adipiscing elit, sed diam ut laoreet dolore
                                    </p>
                                </div>
                            </div>

                            <div class="bg-gray-50 border flex gap-x-4 p-4 relative rounded-md lg:ml-16">
                                <div class="flex justify-center items-center absolute right-5 top-6 space-x-1 text-yellow-500">
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" class="text-gray-300 md hydrated" role="img" aria-label="star"></ion-icon>
                                </div>
                                <img src="public/assets/images/avatars/avatar-3.jpg" alt="" class="rounded-full shadow w-12 h-12">
                                <div>
                                    <h4 class="text-base m-0 font-semibold"> Trap Nation</h4>
                                    <span class="text-gray-700 text-sm"> 16th, May 2021 </span>
                                    <p class="mt-3 md:ml-0 -ml-16">
                                        elit, sed diam ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim ipsum dolor sit
                                        amet, consectetuer adipiscing elit, sed diam ut laoreet dolore
                                    </p>
                                </div>
                            </div>
                        
                        </div>

                        <div class="flex justify-center mt-9">
                            <a href="#" class="bg-gray-50 border hover:bg-gray-100 px-4 py-1.5 rounded-full text-sm">More Comments ..</a>
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
        
        <!-- sidebar -->
        <?php include_once'inc/sidebar.php'; ?>

        
    </div>

 <?php include_once'inc/commonjs.php'; ?>

</body>


</html>
