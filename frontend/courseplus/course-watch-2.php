
<!DOCTYPE html>
<html lang="en">

<head> 

   <?php include_once'inc/head.php'; ?>

</head>


<body class="bg-white">

    <div id="wrapper" class="course-watch">  
        
        <?php include_once'inc/sidebar.php'; ?>


        <!-- Main Contents -->
        <div class="main_content">

            <div class="relative">

                <ul class="uk-switcher relative z-10" id="video_tabs">

                    <li>
                        <!-- to autoplay video uk-video="automute: true" -->
                        <div class="embed-video">
                            <iframe src="https://www.youtube.com/embed/9gTw2EDkaDQ" frameborder="0"
                                uk-video="automute: true" allowfullscreen uk-responsive></iframe>
                        </div>

                    </li>
                    <li>
                        <div class="embed-video">
                            <iframe src="https://www.youtube.com/embed/dDn9uw7N9Xg" frameborder="0" allowfullscreen
                                uk-responsive></iframe>
                        </div>
                    </li>
                    <li>
                        <div class="embed-video">
                            <iframe src="https://www.youtube.com/embed/CGSdK7FI9MY" frameborder="0" allowfullscreen
                                uk-responsive></iframe>
                        </div>
                    </li>
                    <li>
                        <div class="embed-video">
                            <iframe src="https://www.youtube.com/embed/4I1WgJz_lmA" frameborder="0" allowfullscreen
                                uk-responsive></iframe>
                        </div>
                    </li>
                    <li>
                        <div class="embed-video">
                            <iframe src="https://www.youtube.com/embed/dDn9uw7N9Xg" frameborder="0" allowfullscreen
                                uk-responsive></iframe>
                        </div>
                    </li>
                    <li>
                        <div class="embed-video">
                            <iframe src="https://www.youtube.com/embed/CPcS4HtrUEU" frameborder="0" allowfullscreen
                                uk-responsive></iframe>
                        </div>
                    </li>

                </ul>
 
                <div class="bg-gray-200 w-full h-full absolute inset-0 animate-pulse"></div>

            </div>
           
            <nav class="cd-secondary-nav border-b md:p-0 lg:px-6 bg-white " uk-sticky="cls-active:shadow-sm ; media: @s">
                <ul uk-switcher="connect: #course-tabs; animation: uk-animation-fade">
                    <li><a href="#" class="lg:px-2">   Overview </a></li>
                    <li><a href="#" class="lg:px-2"> Announcements  </a></li>
                    <li><a href="#" class="lg:px-2"> Faq  </a></li> 
                </ul>
            </nav>
            
            <div class="container">
            
                <div class="max-w-2xl lg:py-6 mx-auto uk-switcher" id="course-tabs">
            
                    <!--  Overview -->
                    <div>
                    
                        <h4 class="text-2xl font-semibold"> About this course </h4>
                    
                        <p> Learn Web Development Without Writing Much Code </p>
                    
                        <hr class="my-5">
                    
                        <div class="grid lg:grid-cols-3 mt-8 gap-8">
                            <div>
                                <h3 class="text-lg font-semibold"> Description </h3>
                            </div>
                            <div class="col-span-2">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut
                                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore magna
                                    aliquam erat
                                    volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                    lobortis
                                    nisl ut aliquip ex ea commodo consequat
                    
                                    <br>
                                    <a href="#" class="text-blue-500">Read more .</a>
                                </p>
                            </div>
                    
                            <div>
                                <h3 class="text-lg font-semibold"> What You’ll Learn </h3>
                            </div>
                            <div class="col-span-2">
                                <ul>
                                    <li> <i class="uil-check text-xl font-bold mr-2"></i>Setting up the environment</li>
                                    <li> <i class="uil-check text-xl font-bold mr-2"></i>Advanced HTML Practices</li>
                                    <li> <i class="uil-check text-xl font-bold mr-2"></i>Build a portfolio website</li>
                                    <li> <i class="uil-check text-xl font-bold mr-2"></i>Responsive Designs</li>
                                    <li> <i class="uil-check text-xl font-bold mr-2"></i>Understand HTML Programming</li>
                                    <li> <i class="uil-check text-xl font-bold mr-2"></i>Code HTML</li>
                                    <li> <i class="uil-check text-xl font-bold mr-2"></i>Start building beautiful websites</li>
                                </ul>
                            </div>
                    
                            <div>
                                <h3 class="text-lg font-semibold"> Requirements </h3>
                            </div>
                            <div class="col-span-2">
                                <ul class="list-disc ml-5 space-y-1">
                                    <li>Any computer will work: Windows, macOS or Linux</li>
                                    <li>Basic programming HTML and CSS.</li>
                                    <li>Basic/Minimal understanding of JavaScript</li>
                                </ul>
                            </div>
                    
                        </div>
                    
                    
                    </div>

                    <!--  Announcements -->
                    <div>
                        <h3 class="text-xl font-semibold mb-3"> Announcement </h3>
                        
                        <div class="flex items-center gap-x-4 mb-5">
                            <img src="../assets/images/avatars/avatar-4.jpg" alt="" class="rounded-full shadow w-12 h-12">
                            <div>
                                <h4 class="-mb-1 text-base"> Stella Johnson</h4>
                                <span class="text-sm"> Instructor <span class="text-gray-500"> 1 year ago </span> </span>
                            </div>
                        </div>
                    
                        <h4 class="leading-8 text-xl"> Nam liber tempor cum soluta nobis eleifend option congue imperdiet
                            doming id quod mazim placerat facer possim assum.</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam
                            liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim
                            placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                            minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                            commodo consequat.</p>
                    
                    </div>

                    <!-- faq -->
                    <div>
                        <h3 class="text-xl font-semibold mb-3"> Course Faq </h3>
                        <ul uk-accordion="multiple: true" class="divide-y space-y-3 space-y-6">
                            <li class="uk-open">
                                <a class="uk-accordion-title font-semibold text-xl mt-4" href="#"> Html Introduction </a>
                                <div class="uk-accordion-content mt-3">
                                    <p> The primary goal of this quick start guide is to introduce you to
                                        Unreal
                                        Engine 4`s (UE4) development environment. By the end of this guide,
                                        you`ll
                                        know how to set up and develop C++ Projects in UE4. This guide shows
                                        you
                                        how
                                        to create a new Unreal Engine project, add a new C++ class to it,
                                        compile
                                        the project, and add an instance of a new class to your level. By
                                        the
                                        time
                                        you reach the end of this guide, you`ll be able to see your
                                        programmed
                                        Actor
                                        floating above a table in the level. </p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title font-semibold text-xl mt-4" href="#"> Your First webpage</a>
                                <div class="uk-accordion-content mt-3">
                                    <p> The primary goal of this quick start guide is to introduce you to
                                        Unreal
                                        Engine 4`s (UE4) development environment. By the end of this guide,
                                        you`ll
                                        know how to set up and develop C++ Projects in UE4. This guide shows
                                        you
                                        how
                                        to create a new Unreal Engine project, add a new C++ class to it,
                                        compile
                                        the project, and add an instance of a new class to your level. By
                                        the
                                        time
                                        you reach the end of this guide, you`ll be able to see your
                                        programmed
                                        Actor
                                        floating above a table in the level. </p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title font-semibold text-xl mt-4" href="#"> Some Special Tags </a>
                                <div class="uk-accordion-content mt-3">
                                    <p> The primary goal of this quick start guide is to introduce you to
                                        Unreal
                                        Engine 4`s (UE4) development environment. By the end of this guide,
                                        you`ll
                                        know how to set up and develop C++ Projects in UE4. This guide shows
                                        you
                                        how
                                        to create a new Unreal Engine project, add a new C++ class to it,
                                        compile
                                        the project, and add an instance of a new class to your level. By
                                        the
                                        time
                                        you reach the end of this guide, you`ll be able to see your
                                        programmed
                                        Actor
                                        floating above a table in the level. </p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title font-semibold text-xl mt-4" href="#"> Html Introduction </a>
                                <div class="uk-accordion-content mt-3">
                                    <p> The primary goal of this quick start guide is to introduce you to
                                        Unreal
                                        Engine 4`s (UE4) development environment. By the end of this guide,
                                        you`ll
                                        know how to set up and develop C++ Projects in UE4. This guide shows
                                        you
                                        how
                                        to create a new Unreal Engine project, add a new C++ class to it,
                                        compile
                                        the project, and add an instance of a new class to your level. By
                                        the
                                        time
                                        you reach the end of this guide, you`ll be able to see your
                                        programmed
                                        Actor
                                        floating above a table in the level. </p>
                                </div>
                            </li>
                        </ul>
                    </div>



                </div>
            </div>

 
        </div>

        <!-- This is the modal -->
        <div id="modal-example" class="lg:ml-80" uk-modal>
            <div class="uk-modal-dialog uk-modal-body rounded-md shadow-xl">
                 
                <button class="absolute block top-0 right-0 m-6 rounded-full bg-gray-100 leading-4 p-1 text-2xl uk-modal-close" type="button">
                    <i class="icon-feather-x"></i>
                </button>

                <div class="text-sm mb-2">  Section 2  </div>
                <h2 class="mb-5 font-semibold text-2xl">  Your First webpage  </h2>
                <p class="text-base">Do You want to skip the rest of this chapter and chumb to next chapter.</p>
        
                <div class="text-right  pt-3 mt-3">
                    <a href="#" class="py-2 inline-block px-8 rounded-md hover:bg-gray-200 uk-modal-close"> Stay </a>
                    <a href="#" class="button"> Continue </a>
                </div>
            </div>
        </div>  

        
    </div>

          
<?php include_once'inc/commonjs.php'; ?>


</body>


</html>


