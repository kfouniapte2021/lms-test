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

                <h3 class="text-2xl font-medium mb-5"> General Setting </h3>

                <nav class="cd-secondary-nav border-b md:m-0 -mx-4 nav-small">
                    <ul>
                        <li class="active"><a href="#" class="lg:px-2">General </a></li>
                        <li><a href="#" class="lg:px-2"> Profile </a></li>
                        <li><a href="#" class="lg:px-2"> Privacy </a></li>
                        <li><a href="#" class="lg:px-2"> Notification </a></li>
                        <li><a href="#" class="lg:px-2"> Social links </a></li>
                        <li><a href="#" class="lg:px-2"> Billing </a></li>
                        <li><a href="#" class="lg:px-2"> Security </a></li>
                    </ul>
                </nav>
                
                <!-- Basic information -->
                <div class="grid lg:grid-cols-3 gap-8 md:mt-12">
                    <div>
                        <div uk-sticky="offset:100;bottom:true;media:992">
                            <h3 class="text-lg mb-2 font-semibold"> Basic</h3>
                            <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-md lg:shadow-md shadow col-span-2">

                        <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">
                            <div>
                                <label for="first-name"> First name</label>
                                <input type="text" placeholder="" id="first-name" class="shadow-none with-border">
                            </div>
                            <div>
                                <label for="last-name"> Last name</label>
                                <input type="text" placeholder="" id="last-name" class="shadow-none with-border">
                            </div>
                            <div class="col-span-2">
                                <label for="email"> Email <span class="text-red-600">*</span></label>
                                <input type="text" placeholder="" id="email" class="shadow-none with-border">
                            </div>
                            <div class="col-span-2">
                                <label for="about">About me</label>  
                                <textarea id="about" name="about" rows="3"  class="with-border"></textarea>
                            </div> 
                             
                            <!-- Website logo  -->
                            <label for="system_info" class="font-medium">Photo  </label>
                            <div class="col-span-2 flex py-2 space-x-5">
                                <img src="../assets/images/avatars/placeholder.png" alt="" class="h-12 rounded-full w-12">
                                <a href="#" class="border font-medium px-3 py-1.5 rounded-md self-center shadow-sm text-center text-sm">Change</a>
                            </div>

                            <div class="col-span-2">
                                <label for="Location"> Location</label>
                                <input type="text" placeholder="" id="location" class="shadow-none with-border">
                            </div>
                            <div>
                               <label for="working"> Working at</label>
                               <input type="text" placeholder="" id="working" class="shadow-none with-border">
                            </div> 
                            <div>
                                <label for="level"> Level </label>
                                <select id="level" name="relationship" class="shadow-none selectpicker with-border ">
                                    <option value="0">Beginner</option>
                                    <option value="1">Intermediate</option>
                                    <option value="2">Advance</option>
                                    <option value="3">Expert</option>
                                </select>
                            </div>
                        </div> 
                        
                    </div>
                </div>

                <!-- Change Password -->
                <div class="grid lg:grid-cols-3 gap-8 md:mt-12">
                    <div>
                        <div uk-sticky="offset:100;bottom:true;media:992">
                            <h3 class="text-lg mb-2 font-semibold"> Password</h3>
                            <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-md lg:shadow-md shadow col-span-2">
                        
                        <div class="lg:p-6 p-4 space-y-4">
                            <div>
                                <label for="current_password"> Current password</label>
                                <input type="text" placeholder="" id="current_password" class="shadow-none with-border">
                            </div>
                            <div>
                                <label for="new_password"> New password</label>
                                <input type="text" placeholder="" id="new_password" class="shadow-none with-border">
                            </div>
                            <div>
                                <label for="confirm_new_password"> Confirm new password</label>
                                <input type="text" placeholder="" id="confirm_new_password" class="shadow-none with-border">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Links-->
                <div class="grid lg:grid-cols-3 gap-8 md:mt-12">
                    <div>
                        <div uk-sticky="offset:100;bottom:true;media:992">
                            <h3 class="text-lg mb-2 font-semibold"> Social Links</h3>
                            <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-md lg:shadow-md shadow col-span-2">
                        
                        <div class="lg:p-6 p-4 space-y-4">
                            <div>
                                <label for="facebook_link">Facebook link</label>
                                <input type="text" placeholder="" id="facebook_link" class="shadow-none with-border">
                            </div>
                            <div>
                                <label for="twitter_link"> Twitter link </label>
                                <input type="text" placeholder="" id="twitter_link" class="shadow-none with-border">
                            </div>
                            <div>
                                <label for="linkedin_link"> Linkedin link </label>
                                <input type="text" placeholder="" id="linkedin_link" class="shadow-none with-border">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- notification-->
                <div class="grid lg:grid-cols-3 gap-8 md:mt-12">
                    <div>
                        <div uk-sticky="offset:100;bottom:true;media:992">
                            <h3 class="text-lg mb-2 font-semibold"> Notifications </h3>
                            <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-md lg:shadow-md shadow col-span-2">
                        
                        <div class="lg:p-6 p-4 space-y-6">
                            <div>
                                <h4 class="text-base mb-1 font-semibold">By Email</h4>
                                <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>

                                <div class="space-y-3 mt-5">

                                    <div class="checkbox">
                                        <input type="checkbox" id="chekcbox1" checked>
                                        <label for="chekcbox1" class="ml-4">
                                            <span class="checkbox-icon mt-1 -ml-4"></span> <span class="font-semibold text-base"> Comments </span>
                                            <p class="text-gray-400 text-sm mt-1.5"> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>
                                        </label> 
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="chekcbox2">
                                        <label for="chekcbox2" class="ml-4">
                                            <span class="checkbox-icon mt-1 -ml-4"></span> <span class="font-semibold text-base"> Review </span> 
                                            <p  class="text-gray-400 text-sm mt-1.5"> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p> 
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="chekcbox3">
                                        <label for="chekcbox3" class="ml-4">
                                            <span class="checkbox-icon mt-1 -ml-4"></span> <span class="font-semibold text-base"> Comments </span> 
                                            <p  class="text-gray-400 text-sm mt-1.5"> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p> 
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="chekcbox4" checked>
                                        <label for="chekcbox4" class="ml-4">
                                            <span class="checkbox-icon mt-1 -ml-4"></span> <span class="font-semibold text-base"> Comments </span> 
                                            <p  class="text-gray-400 text-sm mt-1.5"> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p> 
                                        </label>
                                    </div>
                                </div>
                                 
                            </div> 
                            <hr class="">
                            <div>
                                <h4 class="text-base mb-1 font-semibold">Push Notifications</h4>
                                <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>

                                <div class="space-y-1 mt-5">

                                    <div class="radio">
                                        <input id="radio-1" name="radio" type="radio" checked>
                                        <label for="radio-1"><span class="radio-label"></span> Everything</label>
                                    </div>
                                    <br>
                                    <div class="radio">
                                        <input id="radio-2" name="radio" type="radio">
                                        <label for="radio-2"><span class="radio-label"></span> important Emails</label>
                                    </div>
                                    <br>
                                    <div class="radio">
                                        <input id="radio-3" name="radio" type="radio">
                                        <label for="radio-3"><span class="radio-label"></span> Not Anymore</label>
                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- Download-->
                <div class="grid lg:grid-cols-3 gap-8 md:mt-12">
                    <div>
                        <div uk-sticky="offset:100;bottom:true;media:992">
                            <h3 class="text-lg mb-2 font-semibold"> Downloads </h3>
                            <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit </p>
                        </div>
                    </div>
                    <div class="bg-white rounded-md lg:shadow-md shadow col-span-2">
                        
                        <div class="lg:p-6 p-4 space-y-6">

                            <div>
                                <label for="video_quality" class="text-sm"> Video download quality </label>
                                <select id="video_quality" name="video_quality" class="shadow-none selectpicker with-border ">
                                    <option value="auto">auto</option> 
                                    <option value="">360p ( smallest file size )</option> 
                                    <option value="480p">480p</option> 
                                    <option value="720p">720p</option> 
                                    <option value="1080p" selected> 1080p ( best video quality)</option> 
                                </select>

                            </div> 
                            <div class="flex justify-between items-center space-x-2">
                                <div>
                                    <h4 class="font-semibold mb-2"> Download over Wi-Fi only</h4>
                                    <div class="text-sm"> Reduce data usage and download only Wi-Fi.  </div>
                                </div>
                                <div class="switches-list -mt-8 is-large">
                                    <div class="switch-container">
                                        <label class="switch"><input type="checkbox"><span class="switch-button"></span> </label>
                                    </div>
                                </div>
                            </div>   
                            <div class="flex justify-between items-center space-x-2">
                                <div>
                                    <h4 class="font-semibold mb-2">Ask before Downloading large lecture </h4>
                                    <div class="text-sm"> downloading large lecture resource </div>
                                </div>
                                <div class="switches-list -mt-8 is-large">
                                    <div class="switch-container">
                                        <label class="switch"><input type="checkbox"><span class="switch-button"></span> </label>
                                    </div>
                                </div>
                            </div>  
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


