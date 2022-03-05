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

            <!-- course preview details -->
            <div class="bg-gradient-to-tr from-pink-500 to-red-500 text-white">
                <div class="container p-0">
                    <div class="lg:flex items-center lg:space-x-12 lg:py-10 p-4">
    
                        <div class="lg:w-4/12">
                            <div class="w-full h-44 overflow-hidden rounded-lg relative lg:mb-0 mb-4">
                                <img src="../assets/images/courses/img-1.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                <a href="#trailer-modal" class="uk-position-center" uk-toggle>
                                    <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/icon-play.svg" class="w-16 h-16" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="lg:w-8/12">
                             
                            <h1 class="lg:leading-10 lg:text-2xl text-white text-xl leading-8 font-semibold">The Complete JavaScript For Beginners</h1>
                            <p class="line-clamp-2 mt-3 md:block hidden"> Master JavaScript with the most complete Projects Excellent course. we explain the core concepts in javascript 
                                that are usually glossed over in other.. </p>
            
                            <ul class="flex text-gray-100 gap-4 mt-4 mb-1">
                                <li class="flex items-center">
                                    <span class="avg bg-yellow-500 mr-2 px-2 rounded text-white font-semiold"> 4.9 </span>
                                    <div class="star-rating text-yellow-200">
                                        <ion-icon name="star"></ion-icon> <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon> <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-half"></ion-icon>
                                    </div>
                                </li>
                                <li class="opacity-90"> <ion-icon name="people-circle-outline"></ion-icon> 1200 Enerolled </li>
                            </ul>
                            <ul class="lg:flex items-center text-gray-100 mt-3 opacity-90">
                                <li> Created by <a href="#" class="text-white fond-bold hover:underline hover:text-white"> Stella Johnson </a> </li>
                                <span class="lg:block hidden mx-3 text-2xl">·</span>
                                <li> Last updated 10/2019</li>
                            </ul>

                        </div>
    
                    </div>
                </div>
            </div>

            <!--  course tabs -->
            <div class="bg-white border-b z-20 mb-4 overflow-hidden" uk-sticky="media: 992; offset:70">
                <div class="mcontainer py-0 lg:px-20 flex justify-between items-center"> 

                    <nav class="cd-secondary-nav nav-smal l flex-1">
                        <ul class="space-x-3" uk-scrollspy-nav="closest: li; scroll: true">
                            <li><a href="#Overview" uk-scroll>Overview</a></li>
                            <li><a href="#curriculum" uk-scroll>Curriculum</a></li> 
                            <li><a href="#faq" uk-scroll>FAQ</a></li>
                            <li><a href="#announcement">Announcement</a></li>
                            <li><a href="#reviews">Reviews</a></li>
                        </ul>
                    </nav>

                    <div class="flex space-x-3">
                        <a href="#" class="flex items-center justify-center h-9 px-6 rounded-md bg-gray-100"> Add to Wishlist </a>
                        <a href="course-watch.html" class="flex items-center justify-center h-9 px-6 rounded-md bg-blue-600 text-white"> Enroll Now </a>
                    </div>
                     
                </div>
            </div>

            <div class="container p-0">

                <div class="space-y-5 lg:w-9/12 mx-auto">
                        
                    <!-- course description -->
                    <div class="tube-card p-5 lg:p-8" id="Overview">
    
                        <div class="space-y-6">
                            <div>
                                <h3 class="text-lg font-semibold mb-3"> Description </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut
                                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore magna
                                    aliquam erat
                                    volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                    lobortis
                                    nisl ut aliquip ex ea commodo consequat
                                </p>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-1"> What You’ll Learn </h3>
                                <ul class="grid md:grid-cols-2">
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
                                <h3 class="text-lg font-semibold mb-1"> Requirements</h3>
                                <ul class="list-disc ml-5 space-y-1">
                                    <li>Any computer will work: Windows, macOS or Linux</li>
                                    <li>Basic programming HTML and CSS.</li>
                                    <li>Basic/Minimal understanding of JavaScript</li>
                                </ul>
                            </div>
                            <div>
                                <h3> Here is exactly what we cover in this course: </h3>
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                    nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                    Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod
                                    mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                    wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                    aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
    
                    </div>
    
                    <!-- course Curriculum -->
                    <div id="curriculum">
                        <h3 class="mb-4 text-xl font-semibold lg:mb-5"> Course Curriculum </h3>
                        <ul uk-accordion="multiple: true" class="tube-card p-4 divide-y space-y-3">
    
                            <li class="uk-open">
                                <a class="uk-accordion-title text-md mx-2 font-semibold" href="#">  <div class="mb-1 text-sm font-medium"> Section 1 </div> Html Introduction </a>
                                <div class="uk-accordion-content mt-3 text-base">
        
                                    <ul class="course-curriculum-list font-medium">
                                        <li class=" hover:bg-gray-100 p-2 flex rounded-md">
                                            <ion-icon name="play-circle" class="text-2xl mr-2"></ion-icon> Introduction <span class="text-sm ml-auto"> 4 min </span>
                                        </li>
                                        <li class=" hover:bg-gray-100 p-2 flex rounded-md">
                                            <ion-icon name="play-circle" class="text-2xl mr-2"></ion-icon> What is HTML <span class="text-sm ml-auto"> 5 min </span>
                                        </li>
                                        <li class=" hover:bg-gray-100 p-2 flex rounded-md">
                                            <ion-icon name="play-circle" class="text-2xl mr-2"></ion-icon>
                                            What is a Web page? <span class="text-sm ml-auto"> 8 min </span>
                                        </li>
                                        <li class=" hover:bg-gray-100 p-2 flex rounded-md">
                                            <ion-icon name="play-circle" class="text-2xl mr-2"></ion-icon>
                                            Your First Web Page  
                                            <a href="#trailer-modal" class="bg-gray-200 ml-4 px-2 py-1 rounded-full text-xs" uk-toggle=""> Preview </a>
                                            <span class="text-sm ml-auto"> 4 min </span>
                                        </li>
                                        <li class=" hover:bg-gray-100 p-2 flex rounded-md">
                                            <ion-icon name="play-circle" class="text-2xl mr-2"></ion-icon>
                                            Brain Streak <span class="text-sm ml-auto"> 5 min </span>
                                        </li>
                                    </ul>
        
                                </div>
                            </li>
                            <li class="pt-2">
                                <a class="uk-accordion-title text-md mx-2 font-semibold" href="#"> <div class="mb-1 text-sm font-medium"> Section 2 </div> Your First webpage  </a>
                                <div class="uk-accordion-content mt-3 text-base">
        
                                    <ul class="course-curriculum-list font-medium">
                                        <li class=" hover:bg-gray-100 p-2 flex rounded-md">
                                            <ion-icon name="play-circle" class="text-2xl mr-2"></ion-icon> Headings
                                            <span class="text-sm ml-auto"> 4 min </span>
                                        </li>
                                        <li class=" hover:bg-gray-100 p-2 flex rounded-md">
                                            <ion-icon name="play-circle" class="text-2xl mr-2"></ion-icon> Paragraphs
                                            <span class="text-sm ml-auto"> 5 min </span>
                                        </li>
                                        <li class=" hover:bg-gray-100 p-2 flex rounded-md">
                                            <ion-icon name="play-circle" class="text-2xl mr-2"></ion-icon>
                                            Emphasis and Strong Tag 
                                            <span class="text-sm ml-auto"> 8 min </span>
                                        </li>
                                        <li class=" hover:bg-gray-100 p-2 flex rounded-md">
                                            <ion-icon name="play-circle" class="text-2xl mr-2"></ion-icon>
                                            Brain Streak 
                                            <a href="#trailer-modal" class="bg-gray-200 ml-4 px-2 py-1 rounded-full text-xs" uk-toggle=""> Preview </a>
                                            <span class="text-sm ml-auto"> 4 min </span>
                                        </li>
                                        <li class=" hover:bg-gray-100 p-2 flex rounded-md">
                                            <ion-icon name="play-circle" class="text-2xl mr-2"></ion-icon>
                                            Live Preview Feature
                                            <span class="text-sm ml-auto"> 5 min </span>
                                        </li>
                                    </ul>
        
                                </div>
                            </li>
                            <li class="pt-2">
                                <a class="uk-accordion-title text-md mx-2 font-semibold" href="#"> <div class="mb-1 text-sm font-medium"> Section 3 </div> Build Complete Webste  </a>
                                <div class="uk-accordion-content mt-3 text-base">
        
                                    <ul class="course-curriculum-list font-medium">
                                        <li class=" hover:bg-gray-100 p-2 flex rounded-md">
                                            <ion-icon name="play-circle" class="text-2xl mr-2"></ion-icon> The paragraph tag
                                            <span class="text-sm ml-auto"> 4 min </span>
                                        </li>
                                        <li class=" hover:bg-gray-100 p-2 flex rounded-md">
                                            <ion-icon name="play-circle" class="text-2xl mr-2"></ion-icon> The break tag
                                            <span class="text-sm ml-auto"> 5 min </span>
                                        </li>
                                        <li class=" hover:bg-gray-100 p-2 flex rounded-md">
                                            <ion-icon name="play-circle" class="text-2xl mr-2"></ion-icon>
                                            Headings in HTML
                                            <span class="text-sm ml-auto"> 8 min </span>
                                        </li>
                                        <li class=" hover:bg-gray-100 p-2 flex rounded-md">
                                            <ion-icon name="play-circle" class="text-2xl mr-2"></ion-icon>
                                            Bold, Italics Underline 
                                            <a href="#trailer-modal" class="bg-gray-200 ml-4 px-2 py-1 rounded-full text-xs" uk-toggle=""> Preview </a>
                                            <span class="text-sm ml-auto"> 4 min </span>
                                        </li>
                                    </ul>
        
                                </div>
                            </li>
                        </ul>
                    </div>
    
                    <!-- course Faq --> 
                    <div class="tube-card p-5 lg:p-8" id="faq">
                            
                        <h3 class="text-lg font-semibold mb-3 lg:mb-5"> Course Faq </h3>
                        
                        <ul uk-accordion="multiple: true" class="divide-y space-y-3">
                            <li class="bg-gray-100 px-4 py-3 rounded-md uk-open">
                                <a class="uk-accordion-title font-semibold text-base" href="#"> Html Introduction </a>
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
                            <li class="bg-gray-100 px-4 py-3 rounded-md">
                                <a class="uk-accordion-title font-semibold text-base" href="#"> Your First webpage</a>
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
                            <li class="bg-gray-100 px-4 py-3 rounded-md">
                                <a class="uk-accordion-title font-semibold text-base" href="#"> Some Special Tags </a>
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
                            <li class="bg-gray-100 px-4 py-3 rounded-md">
                                <a class="uk-accordion-title font-semibold text-base" href="#"> Html Introduction </a>
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
    
                    <!-- course Announcement -->
                    <div  id="announcement" class="tube-card p-5 lg:p-8">
                        <h3 class="text-xl font-semibold lg:mb-5"> Announcement </h3>
                        
                        <div class="flex items-center gap-x-4 mb-5">
                            <img src="../assets/images/avatars/avatar-4.jpg" alt="" class="rounded-full shadow w-12 h-12">
                            <div>
                                <h4 class="-mb-1 text-base  font-semibold"> Stella Johnson</h4>
                                <span class="text-sm"> Instructor <span class="text-gray-500"> 1 year ago </span> </span>
                            </div>
                        </div>
        
                        <h4 class="font-medium mb-2 text-lg"> Nam liber tempor cum soluta nobis eleifend option congue imperdiet
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
                 
                     
                    <!-- course Reviews -->
                    <div  id="reviews" class="tube-card p-5">
                        <h3 class="text-lg font-semibold mb-3"> Reviews (4610) </h3>
                        
                        <div class="flex space-x-5 mb-8">
                            <div class="lg:w-1/4 w-full">
                                <div class="bg-blue-100 p-6 rounded-md border border-blue-200 text-center shadow-xs">
                                    <h1 class="leading-none text-6xl"> 4.8</h1>
                                    <div class="flex justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-gray-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    </div>
                                    <h5 class="text-lg mb-0 mt-2 text-blue-800"> Course Rating</h5>
                                </div>
                            </div>
                            <div class="w-2/4 hidden lg:flex flex-col justify-center">
        
                                <div class="space-y-5">
                                    <div class="w-full h-3 rounded-lg bg-gray-300 shadow-xs relative">
                                        <div class="w-11/12 h-3 rounded-lg bg-gray-800"> </div>
                                    </div>
                                    <div class="w-full h-3 rounded-lg bg-gray-300 shadow-xs relative">
                                        <div class="w-4/5 h-3 rounded-lg bg-gray-800"> </div>
                                    </div>
                                    <div class="w-full h-3 rounded-lg bg-gray-300 shadow-xs relative">
                                        <div class="w-3/5 h-3 rounded-lg bg-gray-800"> </div>
                                    </div>
                                    <div class="w-full h-3 rounded-lg bg-gray-300 shadow-xs relative">
                                        <div class="w-3/6 h-3 rounded-lg bg-gray-800"> </div>
                                    </div>
                                    <div class="w-full h-3 rounded-lg bg-gray-300 shadow-xs relative">
                                        <div class="w-1/3 h-3 rounded-lg bg-gray-800"> </div>
                                    </div>
                                </div>
        
                            </div>
                            <div class="w-1/4 hidden lg:flex flex-col justify-center">
                                <div class="space-y-1">
                                    <div class="flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <span class="ml-2"> 95 %</span>
                                    </div>
                                    <div class="flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-gray-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <span class="ml-2"> 85 %</span>
                                    </div>
                                    <div class="flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-gray-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <span class="ml-2"> 60 %</span>
                                    </div>
                                    <div class="flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-gray-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <span class="ml-2"> 50 %</span>
                                    </div>
                                    <div class="flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-orange-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-gray-400">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <span class="ml-2"> 35 %</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-4 my-5">
                
                            <div class="bg-gray-50 border flex gap-x-4 p-4 relative rounded-md">
                                <img src="../assets/images/avatars/avatar-4.jpg" alt="" class="rounded-full shadow w-12 h-12">
                                <div class="flex justify-center items-center absolute right-5 top-6 space-x-1 text-yellow-500">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>
                                <div>
                                    <h4 class="text-base m-0 font-semibold"> Stella Johnson</h4>
                                    <span class="text-gray-700 text-sm"> 14th, April 2021 </span>
                                    <p class="mt-3 md:ml-0 -ml-16">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam ut laoreet dolore
                                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                    </p>
                                </div>
                            </div>
                        
                            <div class="bg-gray-50 border flex gap-x-4 p-4 relative rounded-md">
                                <div class="flex justify-center items-center absolute right-5 top-6 space-x-1 text-yellow-500">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star" class="text-gray-300"></ion-icon>
                                </div>
                                <img src="../assets/images/avatars/avatar-2.jpg" alt="" class="rounded-full shadow w-12 h-12">
                                <div>
                                    <h4 class="text-base m-0 font-semibold"> Alex Dolgove</h4>
                                    <span class="text-gray-700 text-sm"> 16th, May 2021 </span>
                                    <p class="mt-3 md:ml-0 -ml-16">
                                        elit, sed diam ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim ipsum dolor sit
                                        amet, consectetuer adipiscing elit, 
                                    </p>
                                </div>
                            </div>

                            <div class="bg-gray-50 border flex gap-x-4 p-4 relative rounded-md lg:ml-16">
                                <div class="flex justify-center items-center absolute right-5 top-6 space-x-1 text-yellow-500">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star" class="text-gray-300"></ion-icon>
                                </div>
                                <img src="../assets/images/avatars/avatar-3.jpg" alt="" class="rounded-full shadow w-12 h-12">
                                <div>
                                    <h4 class="text-base m-0 font-semibold"> Trap Nation</h4>
                                    <span class="text-gray-700 text-sm"> 16th, May 2021 </span>
                                    <p class="mt-3 md:ml-0 -ml-16">
                                        elit, sed diam ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim ipsum dolor sit
                                        amet, consectetuer adipiscing elit, 
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

 
    <!-- video demo model -->
    <div id="trailer-modal" uk-modal>
        <div class="uk-modal-dialog shadow-lg rounded-md">
            <button class="uk-modal-close-default m-2.5" type="button" uk-close></button>
            <div class="uk-modal-header  rounded-t-md">
                <h4 class="text-lg font-semibold mb-2"> Trailer video </h4>
            </div>
          
            <div class="embed-video">
                <iframe src="https://www.youtube.com/embed/nOCXXHGMezU" class="w-full"
                uk-video="automute: true" frameborder="0" allowfullscreen uk-responsive></iframe>
            </div>


            <div class="uk-modal-body">
                <h3 class="text-lg font-semibold mb-2">Build Responsive Websites </h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore
                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident,
                    sunt
                    in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>

    
<?php include_once'inc/commonjs.php'; ?>


</body>


</html>
