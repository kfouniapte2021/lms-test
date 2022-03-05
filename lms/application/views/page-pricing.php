<!DOCTYPE html>
<html lang="en">

<head> 

<?php include_once'inc/head.php'; ?>

    <style>
        .pricing-swicher  .uk-active a {background-color: white; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);} 
    </style>
    
</head>

<body>

    <div id="wrapper" class="is-verticle">

        <!--  Header  -->
    <?php include_once'inc/header.php'; ?>

 
        <!-- Main Contents -->
        <div class="main_content">
            <div class="container">
                <div class="flex flex-col items-center lg:py-6 text-center">
                    <h3 class="mt-2 mb-2.5 font-semibold text-2xl lg:text-3xl"> Pricing Plans </h3>
                    <p> Our plans are simple, Start Learning To Day To Became Expart Web Developments And User Interface Desinger.</p>
                    <ul class="bg-gray-100 font-medium inline-flex my-4 px-1.5 py-2.5 pricing-swicher rounded-md space-x-1 mt-6" 
                    uk-switcher="connect: .change-plan ;animation: uk-animation-slide-top-medium, uk-animation-scale-up">
                        <li class="uk-active"><a class="py-2 px-8 rounded-md whitespace-nowrap" href="#">Monthly billing</a></li>
                        <li class=""><a class="py-2 px-8 rounded-md whitespace-nowrap relative" href="#">
                            <span class="-right-4 -top-4 absolute bg-yellow-100 border border-yellow-200 font-semibold hidden md:block px-1.5 py-0.5 rotate-3 rounded-full shadow-sm text-xs text-yellow-400 transform"> 30%</span> Yearly billing</a>
                        </li>
                    </ul>
                </div>
                 
                <div class="grid lg:grid-cols-3 lg:mt-20 mt-4 lg:gap-y-0 gap-y-5">

                    <!-- card-1 -->
                    <div class="bg-white p-8 rounded-l-lg shadow space-y-2">
    
                        <h4 class="font-semibold text-lg sm:text-2xl text-purple-900"> Basic Plan</h4>
                        <p> To start your learning to day you will get free 10 Course .</p>
    
                        <div class="bg-gray-100 p-3 rounded space-x-1.5"> 
                            <ul class="uk-switcher change-plan">
                                <li class="flex items-end justify-center">
                                    <div class="font-semibold text-3xl"> $20 </div>
                                    <div class="font-medium text-lg uk-animation-slide-left-small"> / monthly </div>
                                </li>
                                <li class="flex items-end justify-center">
                                    <div class="font-semibold text-3xl"> 100 </div>
                                    <div class="font-medium text-lg"> / Yearly </div>
                                </li>
                            </ul>  
                        </div>
    
                        <ul class="py-3 space-y-1 text-gray-500">
                            <li> Features of Basic Plan </li>
                            <li>    Exercise files </li>
                            <li> Interactive tools </li>
                            <li>  On-demand learning </li>
                        </ul>
                        <a href="#" class="block border p-3 rounded-md space-x-1.5 text-center text-purple-900 text-sm">Get Started </a>
                    </div>
                     
                    <!-- card-2 -->
                    <div class="bg-white pt-16 lg:pt-8 p-8 shadow-xl space-y-2 relative -my-3 rounded-b-md"> 
      
                        <div class="lg:-top-10 top-0 absolute bg-blue-600 left-0 p-3 rounded-t-md text-center text-white w-full font-semibold"> Recommended </div>
    
                        <h4 class="font-semibold text-lg sm:text-2xl text-purple-900"> Pro Plan</h4>
                        <p> To start your learning to day you will get free 10 Course .</p>
    
                        <div class="bg-gray-100 p-3 rounded space-x-1.5"> 
                            <ul class="uk-switcher change-plan">
                                <li class="flex items-end justify-center">
                                    <div class="font-semibold text-3xl"> $49 </div>
                                    <div class="font-medium text-lg uk-animation-slide-left-small"> / monthly </div>
                                </li>
                                <li class="flex items-end justify-center">
                                    <div class="font-semibold text-3xl"> $189 </div>
                                    <div class="font-medium text-lg"> / Yearly </div>
                                </li>
                            </ul>  
                        </div>
    
                        <ul class="py-3 space-y-1 text-gray-500">
                            <li> Features of Pro Plan </li>
                            <li> Exercise files </li>
                            <li> Access entire course library </li>
                            <li> 99+ High Quality Video Courses </li>
                        </ul>
                        <br>
                        <a href="#" class="bg-blue-600 block p-3 rounded-md space-x-1.5 text-center text-sm text-white">Get Started </a>
    
                    </div>
    
                    <!-- card-3 -->
                    <div class="bg-white p-8 rounded-r-lg shadow space-y-2">
    
    
                        <h4 class="font-semibold text-lg sm:text-2xl text-purple-900"> For Teams</h4>
                        <p> To start your learning to day you will get free 10 Course .</p>
    
                        <div class="bg-gray-100 p-3 rounded space-x-1.5"> 
                            <ul class="uk-switcher change-plan">
                                <li class="flex items-end justify-center">
                                    <div class="font-semibold text-3xl"> $69 </div>
                                    <div class="font-medium text-lg uk-animation-slide-left-small"> / monthly </div>
                                </li>
                                <li class="flex items-end justify-center">
                                    <div class="font-semibold text-3xl"> $249 </div>
                                    <div class="font-medium text-lg"> / Yearly </div>
                                </li>
                            </ul>  
                        </div>
    
                        <ul class="py-3 space-y-1 text-gray-500">
                            <li> Features For Teams </li>
                            <li>  Certification exams </li>
                            <li> Dedicated success team </li>
                            <li>  1000+ High Quality Video Courses </li>
                        </ul>
                        <a href="#" class="block border p-3 rounded-md space-x-1.5 text-center text-purple-900 text-sm">Get Started </a>
                    </div>

                </div>

                <div class="my-20">
                    
                    <div class="lg:text-center my-2">
                        <div> Faq </div>
                        <div class="mb-6 font-semibold lg:text-2xl text-lg"> Frequently Asked Question :</div>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-5">

                        <div> 
                            <div class="text-lg font-medium mb-2"> How To Get Started With Courseplus?</div>
                            <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.  </div>
                        </div>
                        <div> 
                            <div class="text-lg font-medium mb-2"> Can I Cancel My Subscription?</div>
                            <div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam ut laoreet dolore magna aliquam erat volutpat. </div>
                        </div>
                        <div>
                            <div class="text-lg font-medium mb-2"> How Can I Create New Course? </div>
                            <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                        </div>
                        <div>
                            <div class="text-lg font-medium mb-2"> Can I Cancel At Anytime? </div>
                            <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                        </div>
                        <div>
                            <div class="text-lg font-medium mb-2"> How To Choose A Plan First? </div>
                            <div> Lorem ipsum dolor sit amet, consectetue aoreet dolore magna aliquam erat volutpat. </div>
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


