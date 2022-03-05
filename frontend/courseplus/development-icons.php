<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/default/development-icons.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Feb 2022 05:23:46 GMT -->
<head> 

    <!-- Basic Page Needs
    ================================================== -->
    <title>Courseplus Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus is - Professional A unique and beautiful collection of UI elements">

    <!-- Favicon -->
    <link href="../assets/images/favicon.png" rel="icon" type="image/png">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="../assets/css/icons.css">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="../assets/css/uikit.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../../../unpkg.com/tailwindcss%402.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper" class="is-verticle">

        <!--  Header  -->
        <header uk-sticky> 
            <div class="header_inner">
                <div class="left-side">
    
                    <!-- Logo -->
                    <div id="logo">
                        <a href="explore.html">
                            <img src="../assets/images/logo.png" alt="">
                            <img src="../assets/images/logo-light.png" class="logo_inverse" alt="">
                            <img src="../assets/images/logo-mobile.png" class="logo_mobile" alt="">
                        </a>
                    </div>
     
                    <!-- icon menu for mobile -->
                    <div class="triger" uk-toggle="target: #wrapper ; cls: is-active">
                    </div>
    
                </div>
                <div class="right-side">
     
                    <!-- Header search box  -->
                    <div class="header_search"><i class="uil-search-alt"></i> 
                        <input value="" type="text" class="form-control" placeholder=" Quick search for anything.." autocomplete="off">
                        <div uk-drop="mode: click;offset:10" class="header_search_dropdown">
                               
                            <h4 class="search_title"> Recently </h4>
                            <ul>
                                <li> 
                                    <a href="#">  
                                        <img src="../assets/images/avatars/avatar-1.jpg" alt="" class="list-avatar">
                                        <div class="list-name">  Erica Jones </div>
                                    </a> 
                                </li> 
                                <li> 
                                    <a href="#">  
                                        <img src="../assets/images/avatars/avatar-2.jpg" alt="" class="list-avatar">
                                        <div class="list-name">  Coffee  Addicts </div>
                                    </a> 
                                </li>
                                <li> 
                                    <a href="#">  
                                        <img src="../assets/images/avatars/avatar-3.jpg" alt="" class="list-avatar">
                                        <div class="list-name"> Mountain Riders </div>
                                    </a> 
                                </li>
                                <li> 
                                    <a href="#">  
                                        <img src="../assets/images/avatars/avatar-4.jpg" alt="" class="list-avatar">
                                        <div class="list-name"> Property Rent And Sale  </div>
                                    </a> 
                                </li>
                                <li> 
                                    <a href="#">  
                                        <img src="../assets/images/avatars/avatar-5.jpg" alt="" class="list-avatar">
                                        <div class="list-name">  Erica Jones </div>
                                    </a> 
                                </li>
                            </ul>
    
                        </div>
                    </div>

                    <div>

                        <!-- cart -->
                        <a href="#" class="header_widgets">
                            <ion-icon name="cart-outline" class="is-icon"></ion-icon>
                        </a>
                        <div uk-drop="mode: click" class="dropdown_cart">
                            <div class="cart-headline"> My Cart 
                            <a href="#" class="checkout">Checkout</a>
                        </div>
                            <ul class="dropdown_cart_scrollbar" data-simplebar>
                                <li>
                                    <div class="cart_avatar">
                                        <img src="../assets/images/courses/img-1.jpg" alt="">
                                    </div>
                                    <div class="cart_text">
                                        <h4> Learn Angular Beginner to Advanced Fundamentals </h4>
                                    </div>
                                    <div class="cart_price">
                                        <span> $12.99 </span>
                                        <button class="type"> Remove</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart_avatar">
                                        <img src="../assets/images/courses/img-1.jpg" alt="">
                                    </div>
                                    <div class="cart_text">
                                        <h4>  Become a Web Developer from Scratch to Advanced </h4>
                                    </div>
                                    <div class="cart_price">
                                        <span> $19.99 </span>
                                        <button class="type"> Remove</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart_avatar">
                                        <img src="../assets/images/courses/img-2.jpg" alt="">
                                    </div>
                                    <div class="cart_text">
                                        <h4> Angular Fundamentals for Beginner to advance </h4>
                                    </div>
                                    <div class="cart_price">
                                        <span> $12.99 </span>
                                        <button class="type"> Remove</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart_avatar">
                                        <img src="../assets/images/courses/img-3.jpg" alt="">
                                    </div>
                                    <div class="cart_text">
                                        <h4> Ultimate Web Developer Course for Beginners 2020</h4>
                                    </div>
                                    <div class="cart_price">
                                        <span> $14.99 </span>
                                        <button class="type"> Remove</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart_avatar">
                                        <img src="../assets/images/courses/img-4.jpg" alt="">
                                    </div>
                                    <div class="cart_text">
                                        <h4> The Complete JavaScript From beginning to advance </h4>
                                    </div>
                                    <div class="cart_price">
                                        <span> $16.99 </span>
                                        <button class="type"> Remove</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart_avatar">
                                        <img src="../assets/images/courses/img-5.jpg" alt="">
                                    </div>
                                    <div class="cart_text">
                                        <h4> Become a Web Developer from Scratch to Advanced</h4>
                                    </div>
                                    <div class="cart_price">
                                        <span> $12.99 </span>
                                        <button class="type"> Remove</button>
                                    </div>
                                </li>
                            </ul>
        
                            <div class="cart_footer">
                                <p> Subtotal : $ 320 </p>
                                <h1> Total :  <strong> $ 320</strong> </h1>
                            </div>
                        </div>
        
                        <!-- notification -->
                        <a href="#" class="header_widgets">
                            <ion-icon name="mail-outline" class="is-icon"></ion-icon>
                        </a>
                        <div uk-drop="mode: click" class="header_dropdown"> 
                            <div class="drop_headline">
                                <h4>Notifications </h4>
                                <div class="btn_action">
                                    <div class="btn_action">
                                        <a href="#">
                                            <ion-icon name="settings-outline" uk-tooltip="title: Notifications settings ; pos: left"></ion-icon>
                                        </a>
                                        <a href="#">
                                            <ion-icon name="checkbox-outline" uk-tooltip="title: Mark as read all ; pos: left"></ion-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
        
                            <ul class="dropdown_scrollbar" data-simplebar>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-1.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <p> <strong>Adrian Mohani</strong> Like Your Comment On Course
                                                <span class="text-link">Javascript Introduction </span>
                                            </p>
                                            <span class="time-ago"> 2 hours ago </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <p>
                                                <strong>Stella Johnson</strong> Replay Your Comments in
                                                <span class="text-link">Programming for Games</span>
                                            </p>
                                            <span class="time-ago"> 9 hours ago </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-3.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <p>
                                                <strong>Alex Dolgove</strong> Added New Review In Course
                                                <span class="text-link">Full Stack PHP Developer</span>
                                            </p>
                                            <span class="time-ago"> 12 hours ago </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-1.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <p>
                                                <strong>Jonathan Madano</strong> Shared Your Discussion On Course
                                                <span class="text-link">Css Flex Box </span>
                                            </p>
                                            <span class="time-ago"> Yesterday </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="see-all">See all</a>
                        </div>
        
                        <!-- messages -->
                        <a href="#" class="header_widgets">
                            <ion-icon name="notifications-outline" class="is-icon"></ion-icon>
                            <span> 2 </span>
                        </a>
                        <div uk-drop="mode: click" class="header_dropdown">
                            <div class="drop_headline">
                                <h4>Messages </h4>
                                <div class="btn_action">
                                    <a href="#">
                                        <ion-icon name="settings-outline" uk-tooltip="title: Message settings ; pos: left"></ion-icon>
                                    </a>
                                    <a href="#">
                                        <ion-icon name="checkbox-outline" uk-tooltip="title: Mark as read all ; pos: left"></ion-icon>
                                    </a>
                                </div>
                            </div>
                            <ul class="dropdown_scrollbar" data-simplebar>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-1.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> John menathon </strong> <span class="time"> 6:43 PM</span>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> Zara Ali </strong> <span class="time">12:43 PM</span>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-3.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> Mohamed Ali </strong> <span class="time"> Wed</span>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-1.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> John menathon </strong> <span class="time"> Sun </span>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> Zara Ali </strong> <span class="time"> Fri </span>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-3.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> Mohamed Ali </strong> <span class="time">1 Week ago</span>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="see-all">See all</a>
                        </div>
        
                         <!-- profile -->
                        <a href="#">
                            <img src="../assets/images/avatars/placeholder.png" class="header_widgets_avatar" alt="">
                        </a>
                        <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">
                            <ul>   
                                <li>
                                    <a href="#" class="user">
                                        <div class="user_avatar">
                                            <img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="user_name">
                                            <div> Stella Johnson </div>
                                            <span> @Johnson </span>
                                        </div>
                                    </a>
                                </li>
                                <li> 
                                    <hr>
                                </li>
                                <li> 
                                    <a href="#" class="is-link">
                                        <ion-icon name="rocket-outline" class="is-icon"></ion-icon> <span>  Upgrade Membership  </span>
                                    </a>
                                </li> 
                                <li> 
                                    <hr>
                                </li>
                                <li> 
                                    <a href="#">
                                        <ion-icon name="person-circle-outline" class="is-icon"></ion-icon>
                                         My Account 
                                    </a>
                                </li>
                                <li> 
                                    <a href="#">
                                        <ion-icon name="card-outline" class="is-icon"></ion-icon>
                                        Subscriptions
                                    </a>
                                </li>
                                <li> 
                                    <a href="#">
                                        <ion-icon name="color-wand-outline" class="is-icon"></ion-icon>
                                        My Billing 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <ion-icon name="settings-outline" class="is-icon"></ion-icon>
                                        Account Settings  
                                    </a>
                                </li>
                                <li> 
                                    <hr>
                                </li>
                                <li> 
                                    <a href="#" id="night-mode" class="btn-night-mode" onclick="UIkit.notification({ message: 'Hmm...  <strong> Night mode </strong> feature is not available yet. ' , pos: 'bottom-right'  })">
                                        <ion-icon name="moon-outline" class="is-icon"></ion-icon>
                                         Night mode
                                        <span class="btn-night-mode-switch">
                                            <span class="uk-switch-button"></span>
                                        </span>
                                    </a>
                                </li>
                                <li> 
                                    <a href="#">
                                        <ion-icon name="log-out-outline" class="is-icon"></ion-icon>
                                        Log Out 
                                    </a>
                                </li>
                            </ul>
                        </div> 

                    </div>
    
                </div>
            </div>
        </header>
   
        <!-- Main Contents -->
        <div class="main_content">
            <div class="container">

                <h1 class="text-2xl font-bold text-gray-900 leading-0 my-3"> Icons </h1>

                <nav class="cd-secondary-nav border-b md:m-0 -mx-4 nav-small">
                    <ul uk-switcher="connect: #components-nav ;animation: uk-animation-fade ; toggle: > * ">
                        <li><a href="#" class="lg:px-2">Material icons</a></li>
                        <li><a href="#" class="lg:px-2">Feather icons</a></li>
                        <li><a href="#" class="lg:px-2">Brand Icons </a></li> 
                        <!--<li><a href="#" class="lg:px-2">Ionicons </a></li>--> 
                    </ul>
                </nav>

                <div class="uk-switcher my-12" id="components-nav">
                     
                    <!-- Material icons -->
                    <div>

                        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-4 icon-set-container">
                            <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-dashboard">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-dashboard</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-arrow-back">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-arrow-back</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-arrow-forward">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-arrow-forward</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-arrow-right-alt">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-arrow-right-alt</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-gavel">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-gavel</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-baseline-mail-outline">
                                     
                                     </span>
                                     <span class="mls"> icon-material-baseline-mail-outline</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-baseline-notifications-none">
                                     
                                     </span>
                                     <span class="mls"> icon-material-baseline-notifications-none</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-baseline-star-border">
                                     
                                     </span>
                                     <span class="mls"> icon-material-baseline-star-border</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-access-alarm">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-access-alarm</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-access-time">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-access-time</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-account-balance-wallet">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-account-balance-wallet</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-account-balance">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-account-balance</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-account-circle">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-account-circle</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-add-a-photo">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-add-a-photo</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-add-circle-outline">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-add-circle-outline</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-add-location">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-add-location</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-add-photo-alternate">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-add-photo-alternate</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-add-shopping-cart">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-add-shopping-cart</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-add">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-add</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-alarm-add">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-alarm-add</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-alarm-off">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-alarm-off</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-alarm-on">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-alarm-on</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-alarm">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-alarm</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-announcement">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-announcement</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-archive">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-archive</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-arrow-drop-down">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-arrow-drop-down</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-arrow-drop-up">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-arrow-drop-up</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-arrow-left">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-arrow-left</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-arrow-right">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-arrow-right</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-assessment">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-assessment</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-assignment">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-assignment</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-attach-file">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-attach-file</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-autorenew">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-autorenew</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-battery-charging-full">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-battery-charging-full</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-beach-access">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-beach-access</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-book">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-book</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-bookmark-border">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-bookmark-border</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-bookmarks">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-bookmarks</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-broken-image">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-broken-image</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-brush">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-brush</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-bug-report">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-bug-report</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-business-center">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-business-center</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-business">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-business</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-cake">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-cake</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-check-circle">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-check-circle</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-check">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-check</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-cloud">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-cloud</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-code">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-code</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-compare-arrows">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-compare-arrows</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-computer">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-computer</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-contact-support">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-contact-support</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-credit-card">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-credit-card</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-crop-original">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-crop-original</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-date-range">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-date-range</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-delete">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-delete</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-description">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-description</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-desktop-mac">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-desktop-mac</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-desktop-windows">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-desktop-windows</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-directions-car">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-directions-car</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-dns">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-dns</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-drafts">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-drafts</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-email">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-email</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-explore">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-explore</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-extension">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-extension</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-face">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-face</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-favorite-border">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-favorite-border</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-favorite">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-favorite</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-feedback">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-feedback</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-file-copy">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-file-copy</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-filter-none">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-filter-none</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-find-in-page">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-find-in-page</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-fingerprint">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-fingerprint</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-flight">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-flight</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-flip-to-back">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-flip-to-back</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-flip-to-front">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-flip-to-front</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-folder-shared">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-folder-shared</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-folder">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-folder</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-format-quote">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-format-quote</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-format-shapes">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-format-shapes</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-forum">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-forum</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-free-breakfast">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-free-breakfast</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-gps-fixed">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-gps-fixed</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-group">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-group</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-help-outline">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-help-outline</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-highlight-off">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-highlight-off</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-history">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-history</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-home">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-home</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-hotel">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-hotel</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-https">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-https</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-info">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-info</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-input">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-input</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-insert-photo">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-insert-photo</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-keyboard-arrow-down">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-keyboard-arrow-down</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-keyboard-arrow-left">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-keyboard-arrow-left</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-keyboard-arrow-right">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-keyboard-arrow-right</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-keyboard-arrow-up">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-keyboard-arrow-up</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-language">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-language</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-launch">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-launch</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-layers">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-layers</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-library-add">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-library-add</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-library-books">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-library-books</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-local-atm">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-local-atm</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-local-offer">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-local-offer</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-location-city">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-location-city</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-location-off">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-location-off</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-location-on">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-location-on</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-lock-open">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-lock-open</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-lock">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-lock</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-loyalty">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-loyalty</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-map">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-map</span>
                                 </div>
                                 
                                 
                             </div>
                     
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-monetization-on">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-monetization-on</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-money">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-money</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-mouse">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-mouse</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-movie">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-movie</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-my-location">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-my-location</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-note-add">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-note-add</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-notifications-active">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-notifications-active</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-notifications-off">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-notifications-off</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-notifications">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-notifications</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-outlined-flag">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-outlined-flag</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-person-pin">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-person-pin</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-photo-library">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-photo-library</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-photo-size-select-actual">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-photo-size-select-actual</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-picture-as-pdf">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-picture-as-pdf</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-power-settings-new">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-power-settings-new</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-print">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-print</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-question-answer">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-question-answer</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-rate-review">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-rate-review</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-redo">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-redo</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-reorder">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-reorder</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-restaurant">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-restaurant</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-room">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-room</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-save-alt">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-save-alt</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-school">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-school</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-search">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-search</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-settings-input-component">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-settings-input-component</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-settings">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-settings</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-shopping-cart">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-shopping-cart</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-speaker-notes">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-speaker-notes</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-star-border">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-star-border</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-star">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-star</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-supervisor-account">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-supervisor-account</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-text-fields">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-text-fields</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-textsms">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-textsms</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-thumb-down">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-thumb-down</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-thumb-up">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-thumb-up</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-undo">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-undo</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-visibility">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-visibility</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-watch">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-watch</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-wb-incandescent">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-wb-incandescent</span>
                                 </div>
                                 
                                 
                             </div>
                             <div class="glyph fs1">
                                 <div class="clearfix bshadow0 pbs">
                                     <span class="icon-material-outline-where-to-vote">
                                     
                                     </span>
                                     <span class="mls"> icon-material-outline-where-to-vote</span>
                                 </div>
                                 
                                 
                             </div>
                          
                        </div>

                    </div>

                    <!-- feather-icons -->
                    <div>

                        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-4 icon-set-container">

                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-activity">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-activity</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-airplay">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-airplay</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-alert-circle">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-alert-circle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-alert-octagon">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-alert-octagon</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-alert-triangle">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-alert-triangle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-align-center">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-align-center</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-align-justify">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-align-justify</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-align-left">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-align-left</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-align-right">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-align-right</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-anchor">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-anchor</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-aperture">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-aperture</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-archive">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-archive</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-arrow-down">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-arrow-down</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-arrow-down-circle">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-arrow-down-circle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-arrow-down-left">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-arrow-down-left</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-arrow-down-right">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-arrow-down-right</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-arrow-left">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-arrow-left</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-arrow-left-circle">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-arrow-left-circle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-arrow-right">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-arrow-right</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-arrow-right-circle">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-arrow-right-circle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-arrow-up">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-arrow-up</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-arrow-up-circle">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-arrow-up-circle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-arrow-up-left">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-arrow-up-left</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-arrow-up-right">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-arrow-up-right</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-at-sign">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-at-sign</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-award">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-award</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-bar-chart">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-bar-chart</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-bar-chart-2">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-bar-chart-2</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-battery">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-battery</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-battery-charging">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-battery-charging</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-bell">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-bell</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-bell-off">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-bell-off</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-bluetooth">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-bluetooth</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-bold">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-bold</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-book">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-book</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-book-open">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-book-open</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-bookmark">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-bookmark</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-box">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-box</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-briefcase">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-briefcase</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-calendar">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-calendar</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-camera">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-camera</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-camera-off">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-camera-off</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-cast">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-cast</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-check">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-check</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-check-circle">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-check-circle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-check-square">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-check-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-chevron-down">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-chevron-down</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-chevron-left">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-chevron-left</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-chevron-right">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-chevron-right</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-chevron-up">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-chevron-up</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-chevrons-down">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-chevrons-down</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-chevrons-left">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-chevrons-left</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-chevrons-right">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-chevrons-right</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-chevrons-up">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-chevrons-up</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-chrome">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-chrome</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-circle">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-circle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-clipboard">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-clipboard</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-clock">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-clock</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-cloud">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-cloud</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-cloud-drizzle">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-cloud-drizzle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-cloud-lightning">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-cloud-lightning</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-cloud-off">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-cloud-off</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-cloud-rain">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-cloud-rain</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-cloud-snow">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-cloud-snow</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-code">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-code</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-codepen">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-codepen</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-command">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-command</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-compass">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-compass</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-copy">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-copy</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-corner-down-left">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-corner-down-left</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-corner-down-right">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-corner-down-right</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-corner-left-down">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-corner-left-down</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-corner-left-up">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-corner-left-up</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-corner-right-down">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-corner-right-down</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-corner-right-up">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-corner-right-up</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-corner-up-left">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-corner-up-left</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-corner-up-right">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-corner-up-right</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-cpu">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-cpu</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-credit-card">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-credit-card</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-crop">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-crop</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-crosshair">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-crosshair</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-database">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-database</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-delete">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-delete</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-disc">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-disc</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-dollar-sign">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-dollar-sign</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-download">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-download</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-download-cloud">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-download-cloud</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-droplet">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-droplet</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-edit">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-edit</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-edit-2">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-edit-2</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-edit-3">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-edit-3</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-external-link">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-external-link</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-eye">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-eye</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-eye-off">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-eye-off</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-facebook">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-facebook</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-fast-forward">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-fast-forward</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-feather">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-feather</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-file">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-file</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-file-minus">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-file-minus</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-file-plus">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-file-plus</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-file-text">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-file-text</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-film">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-film</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-filter">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-filter</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-flag">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-flag</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-folder">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-folder</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-folder-minus">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-folder-minus</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-folder-plus">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-folder-plus</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-gift">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-gift</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-git-branch">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-git-branch</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-git-commit">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-git-commit</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-git-merge">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-git-merge</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-git-pull-request">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-git-pull-request</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-github">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-github</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-gitlab">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-gitlab</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-globe">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-globe</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-grid">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-grid</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-hard-drive">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-hard-drive</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-hash">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-hash</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-headphones">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-headphones</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-heart">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-heart</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-help-circle">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-help-circle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-home">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-home</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-image">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-image</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-inbox">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-inbox</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-info">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-info</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-instagram">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-instagram</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-italic">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-italic</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-layers">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-layers</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-layout">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-layout</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-life-buoy">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-life-buoy</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-link">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-link</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-link-2">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-link-2</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-linkedin">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-linkedin</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-list">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-list</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-loader">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-loader</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-lock">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-lock</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-log-in">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-log-in</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-log-out">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-log-out</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-mail">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-mail</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-map">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-map</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-map-pin">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-map-pin</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-maximize">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-maximize</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-maximize-2">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-maximize-2</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-menu">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-menu</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-message-circle">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-message-circle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-message-square">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-message-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-mic">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-mic</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-mic-off">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-mic-off</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-minimize">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-minimize</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-minimize-2">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-minimize-2</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-minus">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-minus</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-minus-circle">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-minus-circle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-minus-square">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-minus-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-monitor">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-monitor</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-moon">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-moon</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-more-horizontal">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-more-horizontal</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-more-vertical">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-more-vertical</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-move">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-move</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-music">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-music</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-navigation">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-navigation</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-navigation-2">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-navigation-2</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-octagon">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-octagon</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-package">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-package</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-paperclip">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-paperclip</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-pause">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-pause</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-pause-circle">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-pause-circle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-percent">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-percent</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-phone">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-phone</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-phone-call">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-phone-call</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-phone-forwarded">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-phone-forwarded</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-phone-incoming">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-phone-incoming</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-phone-missed">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-phone-missed</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-phone-off">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-phone-off</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-phone-outgoing">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-phone-outgoing</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-pie-chart">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-pie-chart</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-play">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-play</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-play-circle">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-play-circle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-plus">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-plus</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-plus-circle">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-plus-circle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-plus-square">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-plus-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-pocket">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-pocket</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-power">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-power</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-printer">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-printer</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-radio">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-radio</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-refresh-ccw">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-refresh-ccw</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-refresh-cw">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-refresh-cw</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-repeat">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-repeat</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-rewind">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-rewind</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-rotate-ccw">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-rotate-ccw</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-rotate-cw">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-rotate-cw</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-rss">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-rss</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-save">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-save</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-scissors">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-scissors</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-search">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-search</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-send">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-send</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-server">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-server</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-settings">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-settings</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-share">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-share</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-share-2">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-share-2</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-shield">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-shield</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-shield-off">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-shield-off</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-shopping-bag">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-shopping-bag</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-shopping-cart">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-shopping-cart</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-shuffle">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-shuffle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-sidebar">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-sidebar</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-skip-back">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-skip-back</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-skip-forward">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-skip-forward</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-slack">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-slack</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-slash">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-slash</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-sliders">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-sliders</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-smartphone">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-smartphone</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-speaker">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-speaker</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-square">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-star">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-star</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-stop-circle">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-stop-circle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-sun">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-sun</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-sunrise">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-sunrise</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-sunset">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-sunset</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-tablet">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-tablet</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-tag">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-tag</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-target">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-target</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-terminal">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-terminal</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-thermometer">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-thermometer</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-thumbs-down">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-thumbs-down</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-thumbs-up">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-thumbs-up</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-toggle-left">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-toggle-left</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-toggle-right">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-toggle-right</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-trash">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-trash</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-trash-2">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-trash-2</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-trending-down">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-trending-down</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-trending-up">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-trending-up</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-triangle">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-triangle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-truck">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-truck</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-tv">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-tv</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-twitter">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-twitter</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-type">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-type</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-umbrella">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-umbrella</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-underline">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-underline</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-unlock">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-unlock</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-upload">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-upload</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-upload-cloud">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-upload-cloud</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-user">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-user</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-user-check">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-user-check</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-user-minus">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-user-minus</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-user-plus">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-user-plus</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-user-x">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-user-x</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-users">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-users</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-video">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-video</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-video-off">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-video-off</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-voicemail">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-voicemail</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-volume">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-volume</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-volume-1">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-volume-1</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-volume-2">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-volume-2</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-volume-x">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-volume-x</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-watch">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-watch</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-wifi">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-wifi</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-wifi-off">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-wifi-off</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-wind">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-wind</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-x">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-x</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-x-circle">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-x-circle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-x-square">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-x-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-youtube">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-youtube</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-zap">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-zap</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-zap-off">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-zap-off</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-zoom-in">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-zoom-in</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-feather-zoom-out">
                                    
                                    </span>
                                    <span class="mls"> icon-feather-zoom-out</span>
                                </div>
                                
                                
                            </div>
                    
                        </div>

                    </div> 

                    <!-- Brand Icons -->
                    <div>

                        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-4 icon-set-container">

                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-accessible-icon">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-accessible-icon</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-accusoft">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-accusoft</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-adn">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-adn</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-adversal">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-adversal</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-affiliatetheme">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-affiliatetheme</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-algolia">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-algolia</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-amazon">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-amazon</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-amazon-pay">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-amazon-pay</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-amilia">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-amilia</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-android">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-android</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-angellist">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-angellist</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-angrycreative">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-angrycreative</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-angular">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-angular</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-apper">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-apper</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-apple">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-apple</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-apple-pay">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-apple-pay</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-app-store">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-app-store</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-app-store-ios">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-app-store-ios</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-asymmetrik">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-asymmetrik</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-audible">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-audible</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-autoprefixer">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-autoprefixer</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-avianex">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-avianex</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-aviato">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-aviato</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-aws">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-aws</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-bandcamp">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-bandcamp</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-behance">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-behance</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-behance-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-behance-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-bimobject">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-bimobject</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-bitbucket">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-bitbucket</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-bitcoin">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-bitcoin</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-bity">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-bity</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-blackberry">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-blackberry</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-black-tie">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-black-tie</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-blogger">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-blogger</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-blogger-b">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-blogger-b</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-bluetooth">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-bluetooth</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-bluetooth-b">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-bluetooth-b</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-btc">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-btc</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-buromobelexperte">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-buromobelexperte</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-buysellads">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-buysellads</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-cc-amazon-pay">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-cc-amazon-pay</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-cc-amex">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-cc-amex</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-cc-apple-pay">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-cc-apple-pay</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-cc-diners-club">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-cc-diners-club</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-cc-discover">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-cc-discover</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-cc-jcb">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-cc-jcb</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-cc-mastercard">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-cc-mastercard</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-cc-paypal">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-cc-paypal</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-cc-stripe">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-cc-stripe</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-cc-visa">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-cc-visa</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-centercode">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-centercode</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-chrome">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-chrome</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-cloudscale">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-cloudscale</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-cloudsmith">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-cloudsmith</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-cloudversify">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-cloudversify</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-codepen">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-codepen</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-codiepie">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-codiepie</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-connectdevelop">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-connectdevelop</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-contao">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-contao</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-cpanel">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-cpanel</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-creative-commons">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-creative-commons</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-creative-commons-by">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-creative-commons-by</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-creative-commons-nc">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-creative-commons-nc</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-creative-commons-nc-eu">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-creative-commons-nc-eu</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-creative-commons-nc-jp">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-creative-commons-nc-jp</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-creative-commons-nd">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-creative-commons-nd</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-creative-commons-pd">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-creative-commons-pd</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-creative-commons-pd-alt">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-creative-commons-pd-alt</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-creative-commons-remix">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-creative-commons-remix</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-creative-commons-sa">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-creative-commons-sa</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-creative-commons-sampling">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-creative-commons-sampling</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-creative-commons-sampling-plus">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-creative-commons-sampling-plus</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-creative-commons-share">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-creative-commons-share</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-css3">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-css3</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-css3-alt">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-css3-alt</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-cuttlefish">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-cuttlefish</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-d-and-d">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-d-and-d</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-dashcube">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-dashcube</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-delicious">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-delicious</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-deploydog">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-deploydog</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-deskpro">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-deskpro</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-deviantart">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-deviantart</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-digg">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-digg</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-digital-ocean">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-digital-ocean</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-discord">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-discord</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-discourse">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-discourse</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-dochub">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-dochub</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-docker">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-docker</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-draft2digital">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-draft2digital</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-dribbble">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-dribbble</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-dribbble-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-dribbble-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-dropbox">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-dropbox</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-drupal">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-drupal</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-dyalog">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-dyalog</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-earlybirds">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-earlybirds</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-ebay">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-ebay</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-edge">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-edge</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-elementor">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-elementor</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-ember">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-ember</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-empire">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-empire</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-envira">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-envira</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-erlang">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-erlang</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-ethereum">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-ethereum</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-etsy">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-etsy</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-expeditedssl">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-expeditedssl</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-facebook">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-facebook</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-facebook-f">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-facebook-f</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-facebook-messenger">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-facebook-messenger</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-facebook-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-facebook-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-firefox">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-firefox</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-firstdraft">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-firstdraft</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-first-order">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-first-order</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-first-order-alt">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-first-order-alt</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-flickr">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-flickr</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-flipboard">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-flipboard</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-fly">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-fly</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-font-awesome">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-font-awesome</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-font-awesome-alt">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-font-awesome-alt</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-font-awesome-flag">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-font-awesome-flag</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-fonticons">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-fonticons</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-fonticons-fi">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-fonticons-fi</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-fort-awesome">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-fort-awesome</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-fort-awesome-alt">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-fort-awesome-alt</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-forumbee">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-forumbee</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-foursquare">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-foursquare</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-freebsd">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-freebsd</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-free-code-camp">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-free-code-camp</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-fulcrum">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-fulcrum</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-galactic-republic">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-galactic-republic</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-galactic-senate">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-galactic-senate</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-get-pocket">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-get-pocket</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-gg">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-gg</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-gg-circle">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-gg-circle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-git">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-git</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-github">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-github</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-github-alt">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-github-alt</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-github-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-github-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-gitkraken">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-gitkraken</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-gitlab">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-gitlab</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-git-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-git-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-gitter">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-gitter</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-glide">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-glide</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-glide-g">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-glide-g</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-gofore">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-gofore</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-goodreads">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-goodreads</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-goodreads-g">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-goodreads-g</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-google">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-google</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-google-drive">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-google-drive</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-google-play">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-google-play</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-google-plus">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-google-plus</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-google-plus-g">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-google-plus-g</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-google-plus-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-google-plus-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-google-wallet">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-google-wallet</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-gratipay">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-gratipay</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-grav">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-grav</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-gripfire">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-gripfire</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-grunt">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-grunt</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-gulp">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-gulp</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-hacker-news">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-hacker-news</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-hacker-news-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-hacker-news-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-hips">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-hips</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-hire-a-helper">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-hire-a-helper</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-hooli">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-hooli</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-hotjar">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-hotjar</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-houzz">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-houzz</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-html5">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-html5</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-hubspot">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-hubspot</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-imdb">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-imdb</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-instagram">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-instagram</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-internet-explorer">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-internet-explorer</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-ioxhost">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-ioxhost</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-itunes">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-itunes</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-itunes-note">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-itunes-note</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-java">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-java</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-jedi-order">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-jedi-order</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-jenkins">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-jenkins</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-joget">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-joget</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-joomla">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-joomla</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-js">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-js</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-jsfiddle">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-jsfiddle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-js-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-js-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-keybase">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-keybase</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-keycdn">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-keycdn</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-kickstarter">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-kickstarter</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-kickstarter-k">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-kickstarter-k</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-korvue">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-korvue</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-laravel">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-laravel</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-lastfm">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-lastfm</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-lastfm-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-lastfm-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-leanpub">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-leanpub</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-less">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-less</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-line">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-line</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-linkedin">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-linkedin</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-linkedin-in">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-linkedin-in</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-linode">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-linode</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-linux">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-linux</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-lyft">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-lyft</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-magento">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-magento</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-mandalorian">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-mandalorian</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-mastodon">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-mastodon</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-maxcdn">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-maxcdn</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-medapps">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-medapps</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-medium">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-medium</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-medium-m">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-medium-m</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-medrt">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-medrt</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-meetup">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-meetup</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-microsoft">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-microsoft</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-mix">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-mix</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-mixcloud">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-mixcloud</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-mizuni">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-mizuni</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-modx">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-modx</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-monero">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-monero</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-napster">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-napster</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-nintendo-switch">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-nintendo-switch</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-node">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-node</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-node-js">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-node-js</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-npm">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-npm</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-ns8">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-ns8</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-nutritionix">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-nutritionix</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-odnoklassniki">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-odnoklassniki</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-odnoklassniki-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-odnoklassniki-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-old-republic">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-old-republic</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-opencart">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-opencart</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-openid">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-openid</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-opera">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-opera</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-optin-monster">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-optin-monster</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-osi">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-osi</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-page4">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-page4</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-pagelines">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-pagelines</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-palfed">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-palfed</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-patreon">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-patreon</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-paypal">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-paypal</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-periscope">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-periscope</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-phabricator">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-phabricator</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-phoenix-framework">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-phoenix-framework</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-phoenix-squadron">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-phoenix-squadron</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-php">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-php</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-pied-piper">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-pied-piper</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-pied-piper-alt">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-pied-piper-alt</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-pied-piper-hat">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-pied-piper-hat</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-pied-piper-pp">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-pied-piper-pp</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-pinterest">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-pinterest</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-pinterest-p">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-pinterest-p</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-pinterest-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-pinterest-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-playstation">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-playstation</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-product-hunt">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-product-hunt</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-pushed">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-pushed</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-python">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-python</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-qq">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-qq</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-quinscape">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-quinscape</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-quora">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-quora</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-ravelry">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-ravelry</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-react">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-react</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-readme">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-readme</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-rebel">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-rebel</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-reddit">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-reddit</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-reddit-alien">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-reddit-alien</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-reddit-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-reddit-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-red-river">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-red-river</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-rendact">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-rendact</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-renren">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-renren</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-replyd">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-replyd</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-researchgate">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-researchgate</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-resolving">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-resolving</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-rocketchat">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-rocketchat</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-rockrms">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-rockrms</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-r-project">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-r-project</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-safari">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-safari</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-sass">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-sass</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-schlix">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-schlix</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-scribd">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-scribd</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-searchengin">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-searchengin</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-sellcast">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-sellcast</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-sellsy">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-sellsy</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-servicestack">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-servicestack</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-shirtsinbulk">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-shirtsinbulk</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-simplybuilt">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-simplybuilt</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-sistrix">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-sistrix</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-sith">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-sith</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-skyatlas">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-skyatlas</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-skype">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-skype</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-slack">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-slack</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-slack-hash">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-slack-hash</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-slideshare">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-slideshare</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-snapchat">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-snapchat</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-snapchat-ghost">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-snapchat-ghost</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-snapchat-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-snapchat-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-soundcloud">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-soundcloud</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-speakap">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-speakap</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-spotify">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-spotify</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-stack-exchange">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-stack-exchange</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-stack-overflow">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-stack-overflow</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-staylinked">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-staylinked</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-steam">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-steam</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-steam-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-steam-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-steam-symbol">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-steam-symbol</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-sticker-mule">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-sticker-mule</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-strava">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-strava</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-stripe">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-stripe</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-stripe-s">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-stripe-s</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-studiovinari">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-studiovinari</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-stumbleupon">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-stumbleupon</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-stumbleupon-circle">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-stumbleupon-circle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-superpowers">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-superpowers</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-supple">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-supple</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-teamspeak">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-teamspeak</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-telegram">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-telegram</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-telegram-plane">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-telegram-plane</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-tencent-weibo">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-tencent-weibo</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-themeisle">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-themeisle</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-trade-federation">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-trade-federation</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-trello">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-trello</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-tripadvisor">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-tripadvisor</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-tumblr">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-tumblr</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-tumblr-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-tumblr-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-twitch">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-twitch</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-twitter">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-twitter</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-twitter-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-twitter-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-typo3">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-typo3</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-uber">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-uber</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-uikit">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-uikit</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-uniregistry">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-uniregistry</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-untappd">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-untappd</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-usb">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-usb</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-ussunnah">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-ussunnah</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-vaadin">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-vaadin</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-viacoin">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-viacoin</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-viadeo">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-viadeo</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-viadeo-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-viadeo-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-viber">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-viber</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-vimeo">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-vimeo</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-vimeo-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-vimeo-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-vimeo-v">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-vimeo-v</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-vine">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-vine</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-vk">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-vk</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-vnv">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-vnv</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-vuejs">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-vuejs</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-weibo">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-weibo</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-weixin">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-weixin</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-whatsapp">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-whatsapp</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-whatsapp-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-whatsapp-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-whmcs">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-whmcs</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-wikipedia-w">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-wikipedia-w</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-windows">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-windows</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-wolf-pack-battalion">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-wolf-pack-battalion</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-wordpress">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-wordpress</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-wordpress-simple">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-wordpress-simple</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-wpbeginner">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-wpbeginner</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-wpexplorer">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-wpexplorer</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-wpforms">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-wpforms</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-xbox">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-xbox</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-xing">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-xing</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-xing-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-xing-square</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-yahoo">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-yahoo</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-yandex">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-yandex</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-yandex-international">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-yandex-international</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-y-combinator">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-y-combinator</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-yelp">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-yelp</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-yoast">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-yoast</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-youtube">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-youtube</span>
                                </div>
                                
                                
                            </div>
                            <div class="glyph fs1">
                                <div class="clearfix bshadow0 pbs">
                                    <span class="icon-brand-youtube-square">
                                    
                                    </span>
                                    <span class="mls"> icon-brand-youtube-square</span>
                                </div>
                                
                                
                            </div>
                    
                        </div>

                    </div>
     
                    <!-- Ioniocns -->  
                    <div>

                        <div class="">



                        </div>

                        <div class="py-24 px-4">
                            <div class="container mx-auto font-semibold">
                              <div class="lg:flex items-center space-y-12">
                                <div class="lg:w-6/12 lg:p-0 px-6">
                                  <h1 class="text-4xl leading-10">
                                    Ionicons
                                  </h1>
                         
                                  <p class="text-xl my-6">Premium designed icons for use in web, iOS, Android, and desktop apps. Support for SVG and web font. Completely open source, MIT licensed and built by <a href="https://ionic.io/">Ionic</a>.</p>

                                  <a href="#" class="py-3 px-5 bg-blue-500 text-white rounded-md text-md inline-block mr-3"> View all pages </a>
                                  <a href="#" class="py-3 px-5 bg-blue-100 text-blue-500 rounded-md text-md inline-block"> View all pages </a>
                                </div>
                                <div class="lg:w-6/12 w-3/4 mx-auto">
                                  <img src="../assets/images/demos/ionicons.html" alt="" class="shadow rounded">
                                </div>
                              </div>
                            </div>
                        </div>   

                         

                    </div>

                </div>

            </div>
        </div>
        
        <!-- sidebar -->
        <div class="sidebar">
            <div class="sidebar_inner" data-simplebar>
                
                <ul class="side-colored">
                    <li><a href="explore.html">
                            <ion-icon name="compass" class="side-icon"> </ion-icon>
                            <span> Explore</span>
                        </a>
                    </li>
                    <li><a href="courses.html">
                            <ion-icon name="play-circle" class="side-icon"> </ion-icon>
                            <span> Courses</span>
                        </a>
                    </li>
                    <li><a href="categories.html">
                            <ion-icon name="albums" class="side-icon"> </ion-icon>
                            <span> Categories </span>
                        </a>
                    </li>
                    <li><a href="episodes.html">
                            <ion-icon name="film" class="side-icon">  </ion-icon>
                            <span> Episodes </span>
                        </a>
                    </li>
                    <li><a href="books.html">
                            <ion-icon name="book" class="side-icon"> </ion-icon>
                            <span> Books </span>
                        </a>
                    </li>
                    <li><a href="blogs.html">
                            <ion-icon name="newspaper" class="side-icon">  </ion-icon>
                            <span> Articles</span>
                        </a>
                    </li>
                </ul>

                <ul class="side_links" data-sub-title="Pages">
                    <li><a href="page-pricing.html"> <ion-icon name="card-outline" class="side-icon"></ion-icon> Pricing  </a></li>
                    <li><a href="page-help.html"> <ion-icon name="information-circle-outline" class="side-icon"></ion-icon> Help </a></li>
                    <li><a href="page-faq.html"> <ion-icon name="albums-outline" class="side-icon"></ion-icon> Faq </a></li>
                    <li><a href="page-forum.html"> <ion-icon name="chatbubble-ellipses-outline" class="side-icon"></ion-icon> Forum <span class="soon">new</span> </a></li>
                    <li><a href="pages-cart.html"> <ion-icon name="receipt-outline" class="side-icon"></ion-icon> Cart list </a></li>
                    <li><a href="pages-account-info.html"> <ion-icon name="reader-outline" class="side-icon"></ion-icon> Billing </a></li>
                    <li><a href="pages-payment-info.html"> <ion-icon name="wallet-outline" class="side-icon"></ion-icon> Payments</a></li>
                    <li><a href="page-term.html"> <ion-icon name="document-outline" class="side-icon"></ion-icon> Term </a></li>
                    <li><a href="page-privacy.html"> <ion-icon name="document-text-outline" class="side-icon"></ion-icon> Privacy </a></li> 
                    <li><a href="page-setting.html"> <ion-icon name="settings-outline" class="side-icon"></ion-icon> Setting </a></li> 
                    <li><a href="#"> Development  </a> 
                        <ul>
                            <li><a href="development-elements.html"> Elements  </a></li>
                            <li><a href="development-components.html"> Compounents </a></li>
                            <li><a href="development-plugins.html"> Plugins </a></li>
                            <li class="active"><a href="development-icons.html"> Icons </a></li>
                        </ul>
                    </li>
                    <li><a href="#"> Authentication  </a> 
                        <ul>
                            <li><a href="form-login.html">form login </a></li>
                            <li><a href="form-register.html">form register</a></li> 
                        </ul>
                    </li>
                </ul>

                <div class="side_foot_links">
                    <a href="#">About</a>
                    <a href="#">Blog </a>
                    <a href="#">Careers</a>
                    <a href="#">Support</a>
                    <a href="#">Contact Us </a>
                    <a href="#">Developer</a>
                    <a href="#">Terms of service</a>
                </div>

            </div>

            <div class="side_overly" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></div>
        </div>
        
    </div>


    <!-- Javascript
    ================================================== -->
    <script src="../../../code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../../../cdn.jsdelivr.net/npm/uikit%403.7.6/dist/js/uikit.min.js"></script>
    <script src="../assets/js/uikit.js"></script>
    <script src="../assets/js/tippy.all.min.js"></script>
    <script src="../assets/js/simplebar.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/bootstrap-select.min.js"></script>
    <script src="../../../unpkg.com/ionicons%405.2.3/dist/ionicons.js"></script>

</body>


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/default/development-icons.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Feb 2022 05:23:46 GMT -->
</html>

