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
            <div class="container">
                
                <div class="text-2xl font-semibold mb-3 text-black"> Browse categories </div>

                <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 gap-4 mt-3">

                    <a href="#" class="rounded-md overflow-hidden relative w-full lg:h-48 h-40">
                        <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                        </div>
                        <img src="../assets/images/category/design.jpg" class="absolute w-full h-full object-cover" alt="">
                        <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold text-lg"> Design </div>
                    </a>
                    <a href="#" class="rounded-md overflow-hidden relative w-full lg:h-48 h-40">
                        <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                        </div>
                        <img src="../assets/images/category/development.jpg" class="absolute w-full h-full object-cover" alt="">
                        <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold text-lg"> Development </div>
                    </a>
                    <a href="#" class="rounded-md overflow-hidden relative w-full lg:h-48 h-40">
                        <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                        </div>
                        <img src="../assets/images/category/it-and-software.jpg" class="absolute w-full h-full object-cover" alt="">
                        <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold text-lg"> it-and-software </div>
                    </a>
                    <a href="#" class="rounded-md overflow-hidden relative w-full lg:h-full h-40 lg:row-span-2">
                        <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                        </div>
                        <img src="../assets/images/category/marketing.jpg" class="absolute w-full h-full object-cover" alt="">
                        <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold text-lg"> Marketing </div>
                    </a>
                    <a href="#" class="rounded-md overflow-hidden relative w-full lg:h-48 h-40 lg:col-span-2">
                        <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                        </div>
                        <img src="../assets/images/category/music.jpg" class="absolute w-full h-full object-cover" alt="">
                        <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold text-lg"> Music </div>
                    </a>
                    <a href="#" class="rounded-md overflow-hidden relative w-full lg:h-48 h-40">
                        <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                        </div>
                        <img src="../assets/images/category/photography.jpg" class="absolute w-full h-full object-cover" alt="">
                        <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold text-lg">photography </div>
                    </a>

                </div> 
                
                <div class="md:p-7 p-5 bg-white rounded-md shadow lg:mt-10 mt-6">

                    <h3 class="md:text-2xl text-xl mt-4 mb-1 font-bold"> Featured topics </h3>
                    <p class="mb-8"> Choose Your Favorite Topic</p>
        
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 md:gap-4 gap-2 -m-3">
                        <a href="#">
                            <div class="hover:bg-gray-100 flex items-start px-3 py-2 rounded-lg space-x-3">
                                <ion-icon name="logo-angular" class="text-3xl text-white from-red-600 to-red-400 bg-gradient-to-tl p-2 rounded-md"></ion-icon>
                                <div>
                                    <h3 class="font-semibold text-lg">Web Development</h3>
                                    <div class="flex space-x-2 items-center text-sm pt-0.5">
                                        <div> 12 Courses </div>
                                        <div>·</div>
                                        <div> 156 Students</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="hover:bg-gray-100 flex items-start px-3 py-2 rounded-lg space-x-3">
                                <ion-icon name="briefcase" class="text-3xl text-white from-blue-600 to-blue-400 bg-gradient-to-tl p-2 rounded-md"></ion-icon>
                                <div>
                                    <h3 class="font-semibold text-lg"> Financial Analysis</h3>
                                    <div class="flex space-x-2 items-center text-sm pt-0.5">
                                        <div> 16 Courses </div>
                                        <div>·</div>
                                        <div> 523 Students</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="hover:bg-gray-100 flex items-start px-3 py-2 rounded-lg space-x-3">
                                <ion-icon name="color-wand" class="text-3xl text-white from-purple-600 to-purple-400 bg-gradient-to-tl p-2 rounded-md"></ion-icon>
                                <div>
                                    <h3 class="font-semibold text-lg"> Graphic Design</h3>
                                    <div class="flex space-x-2 items-center text-sm pt-0.5">
                                        <div> 23 Courses </div>
                                        <div>·</div>
                                        <div> 356  Students</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="hover:bg-gray-100 flex items-start px-3 py-2 rounded-lg space-x-3">
                                <ion-icon name="shield-checkmark" class="text-3xl text-white from-yellow-600 to-yellow-400 bg-gradient-to-tl p-2 rounded-md"></ion-icon>
                                <div>
                                    <h3 class="font-semibold text-lg"> Ethical Hacking</h3>
                                    <div class="flex space-x-2 items-center text-sm pt-0.5">
                                        <div> 12 Courses </div>
                                        <div>·</div>
                                        <div> 256 Students</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="hover:bg-gray-100 flex items-start px-3 py-2 rounded-lg space-x-3">
                                <ion-icon name="leaf" class="text-3xl text-white from-green-600 to-green-400 bg-gradient-to-tl p-2 rounded-md"></ion-icon>
                                <div>
                                    <h3 class="font-semibold text-lg"> Cyber Security</h3>
                                    <div class="flex space-x-2 items-center text-sm pt-0.5">
                                        <div> 34 Courses </div>
                                        <div>·</div>
                                        <div> 420 Students</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="hover:bg-gray-100 flex items-start px-3 py-2 rounded-lg space-x-3">
                                <ion-icon name="logo-figma" class="text-3xl text-white from-pink-600 to-pink-400 bg-gradient-to-tl p-2 rounded-md"></ion-icon>
                                <div>
                                    <h3 class="font-semibold text-lg"> Adobe Target</h3>
                                    <div class="flex space-x-2 items-center text-sm pt-0.5">
                                        <div> 14 Courses </div>
                                        <div>·</div>
                                        <div> 259K Students</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-4 -m-3 mt-7">
                        
                        <a href="#">
                            <div class="hover:bg-gray-100 flex items-start px-3 py-2 rounded-lg space-x-3">
                                <ion-icon name="briefcase" class="text-3xl text-white from-blue-600 to-blue-400 bg-gradient-to-tl p-2 rounded-md"></ion-icon>
                                <div>
                                    <h3 class="font-semibold text-lg"> Financial Analysis</h3>
                                    <div class="flex space-x-2 items-center text-sm pt-0.5">
                                        <div> 16 Courses </div>
                                        <div>·</div>
                                        <div> 523 Students</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="hover:bg-gray-100 flex items-start px-3 py-2 rounded-lg space-x-3">
                                <ion-icon name="color-wand" class="text-3xl text-white from-purple-600 to-purple-400 bg-gradient-to-tl p-2 rounded-md"></ion-icon>
                                <div>
                                    <h3 class="font-semibold text-lg"> Graphic Design</h3>
                                    <div class="flex space-x-2 items-center text-sm pt-0.5">
                                        <div> 23 Courses </div>
                                        <div>·</div>
                                        <div> 356  Students</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="hover:bg-gray-100 flex items-start px-3 py-2 rounded-lg space-x-3">
                                <ion-icon name="shield-checkmark" class="text-3xl text-white from-yellow-600 to-yellow-400 bg-gradient-to-tl p-2 rounded-md"></ion-icon>
                                <div>
                                    <h3 class="font-semibold text-lg"> Ethical Hacking</h3>
                                    <div class="flex space-x-2 items-center text-sm pt-0.5">
                                        <div> 12 Courses </div>
                                        <div>·</div>
                                        <div> 256 Students</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="hover:bg-gray-100 flex items-start px-3 py-2 rounded-lg space-x-3">
                                <ion-icon name="logo-angular" class="text-3xl text-white from-red-600 to-red-400 bg-gradient-to-tl p-2 rounded-md"></ion-icon>
                                <div>
                                    <h3 class="font-semibold text-lg">Web Development</h3>
                                    <div class="flex space-x-2 items-center text-sm pt-0.5">
                                        <div> 12 Courses </div>
                                        <div>·</div>
                                        <div> 156 Students</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="hover:bg-gray-100 flex items-start px-3 py-2 rounded-lg space-x-3">
                                <ion-icon name="leaf" class="text-3xl text-white from-green-600 to-green-400 bg-gradient-to-tl p-2 rounded-md"></ion-icon>
                                <div>
                                    <h3 class="font-semibold text-lg"> Cyber Security</h3>
                                    <div class="flex space-x-2 items-center text-sm pt-0.5">
                                        <div> 34 Courses </div>
                                        <div>·</div>
                                        <div> 420 Students</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="hover:bg-gray-100 flex items-start px-3 py-2 rounded-lg space-x-3">
                                <ion-icon name="logo-figma" class="text-3xl text-white from-pink-600 to-pink-400 bg-gradient-to-tl p-2 rounded-md"></ion-icon>
                                <div>
                                    <h3 class="font-semibold text-lg"> Adobe Target</h3>
                                    <div class="flex space-x-2 items-center text-sm pt-0.5">
                                        <div> 14 Courses </div>
                                        <div>·</div>
                                        <div> 259K Students</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="flex justify-center mt-9">
                        <a href="#" class="bg-gray-50 border hover:bg-gray-100 px-4 py-1.5 rounded-full text-sm"> More Topics ..</a>
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
