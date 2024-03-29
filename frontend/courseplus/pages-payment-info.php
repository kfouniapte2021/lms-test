<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/default/pages-payment-info.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Feb 2022 05:23:02 GMT -->
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

                
                <div class="max-w-3xl mx-auto">
 
                    <h1 class="font-semibold mb-4 text-lg"> Choose payment method </h1>

                    <div class="bg-white rounded-md shadow-md">
                       
                        <ul class=" space-y-0 rounded-md" uk-accordion>
                            <li class="uk-open">
                                <a class="uk-accordion-title border-b py-4 px-6" href="#"> <div class="flex items-center text-base font-semibold"> <ion-icon name="card-outline" class="mr-2"></ion-icon> Pay with Credit Card</div> </a>
                                <div class="uk-accordion-content py-6 px-8 mt-0 border-b">
                                    
                                    <p class="">We accept following credit cards:&nbsp;&nbsp;<img class="inline-block" src="../assets/images/cards.png" style="width: 187px;" alt="Cerdit Cards"></p>
        
                                    <form class="grid sm:grid-cols-4 gap-4 mt-3">
                                        <div class="col-span-2">
                                            <input type="text" name="number" placeholder="Card Number" class="with-border">
                                        </div>
                                        <div class="col-span-2">
                                            <input type="text" name="name" placeholder="Full Name" class="with-border">
                                        </div>
                                        <div> 
                                            <input type="text" name="expiry" placeholder="MM/YY" class="with-border">
                                        </div>
                                        <div>    
                                            <input type="text" name="cvc" placeholder="CVC" class="with-border">
                                        </div>
                                        <div class="col-span-2 border rounded-md border-blue-500">
                                            <button class="w-full py-3 font-semibold rounded text-blue-600 text-base block" type="submit">Submit</button>
                                        </div>
                                    </form>
        
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title border-b py-4 px-6" href="#"> <div class="flex items-center text-base font-semibold"> <ion-icon name="logo-paypal" class="mr-2"></ion-icon> Pay with PayPal</div> </a>
                                <div class="uk-accordion-content py-6 px-8 mt-0 border-b">
                                    
                                    <p><span class="font-semibold">PayPal</span> - the safer, easier way to pay</p> 
                                    <form class="grid sm:grid-cols-2 gap-4 mt-3">
                                        <div>
                                            <input type="text" name="email" placeholder="E-mail" class="with-border">
                                        </div>
                                        <div>
                                            <input type="Password" name="Password" placeholder="Password" class="with-border">
                                        </div>
                                    </form>
        
                                    <div class="flex flex-wrap items-center justify-between py-2 mt-3">
                                        <a class="font-medium text-sm text-blue-600 hover:underline" href="#">Forgot password?</a>
                                        <button class="button" type="submit">Log In</button>
                                    </div>
        
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title border-b py-4 px-6" href="#"> <div class="flex items-center text-base font-semibold"> <ion-icon name="gift-outline" class="mr-2"></ion-icon> Redeem Reward Points</div> </a>
                                <div class="uk-accordion-content py-6 px-8 mt-0 border-b">
                                    
                                    <p>You currently have<span class="font-semibold">&nbsp;562</span>&nbsp;Reward Points to spend.</p>
                                    
                                    <div class="checkbox mt-3">
                                        <input type="checkbox" id="use_points_check" checked>
                                        <label for="use_points_check"><span class="checkbox-icon"></span>  Use my Reward Points to pay for this order</label>
                                    </div>
        
                                </div>
                            </li>
                        </ul>
        
                    </div>

                    <div class="grid grid-cols-2 md:gap-6 gap-3 md:mt-10 mt-5">
                        <a class="bg-gray-200 flex font-medium items-center justify-center py-3 rounded-md" href="pages-cart.html">
                            <i class="icon-feather-chevron-left mr-1"></i>
                            <span class="md:block hidden">Back to Cart</span><span class="md:hidden block">Back</span>
                        </a>
                        <a class="bg-blue-600 text-white flex font-medium items-center justify-center py-3 rounded-md hover:text-white" href="pages-account-info.html">
                            <span class="md:block hidden">Billing address </span><span class="md:hidden block">Review</span>
                            <i class="icon-feather-chevron-right ml-1"></i>
                        </a>
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
