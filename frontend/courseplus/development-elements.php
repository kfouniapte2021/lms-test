<!DOCTYPE html>
<html lang="en">

<head> 

<?php include_once'inc/head.php'; ?>

    <style>
        .docs-list a {
            color: #999;
            padding: 7px 0;
            display: block;
            text-transform: capitalize;
        }
    
        .docs-list a:hover,
        .docs-list a:active,
        .docs-list a:focus {
            color: #000 !important
        }
    
        .tab1c {
            display: flex;
            margin-bottom: 1.25rem; 
        }
    
        .tab1 a {
            background: #e5e7eb;
            padding: 5px 15px;
            color: #616161;
            border-radius: 2rem;
            margin-right: 7px;
            font-size: 16px;
        }
        
        .tab1 .uk-active a {
            background: #c9deff;
            color: #3b82f6;
        }
    
    </style>

</head>

<body>

    <div id="wrapper" class="is-verticle">

        <!--  Header  -->
     <?php include_once'inc/header.php'; ?>

        <!-- Main Contents -->
        <div class="main_content">
            <div class="container">

                <h1 class="text-2xl font-bold text-gray-900 leading-0 my-3"> Elements </h1>

                <nav class="cd-secondary-nav border-b md:m-0 -mx-4 nav-small">
                    <ul uk-switcher="connect: #elements-nav ;animation: uk-animation-fade ; toggle: > * ">
                        <li><a href="#" class="lg:px-2">Button</a></li>
                        <li><a href="#" class="lg:px-2">Card</a></li>
                        <li><a href="#" class="lg:px-2">Form</a></li>
                        <li><a href="#" class="lg:px-2">tabs</a></li>
                    </ul>
                </nav>

                <div class="uk-switcher my-12" id="elements-nav">
  
                    <!-- Button -->
                    <div>
                         
                       <div class="md:flex md:space-x-14">
                           <div class="md:w-3/4">
                               <h2 class="text-xl font-semibold mb-2" id="basic"> Button </h2>
                               <p class="text-base mb-10"> A standard button  </p>
                               
                               <button type="button" class="button gray">Button</button>
       
                               <br><br><br>
                               <h3 class="text-lg font-semibold mb-2" id="Multiple-open-item">Emphasis </h3>
                               <p class="text-base mb-10"> A button can be formatted to show different levels of emphasis </p>  
                               
                               <div class="bg-blue-50 border-blue-300 border px-4 py-2 rounded text-blue-900 text-sm mb-6">
                                Setting your brand colors to primary and secondary color variables in <span class="bg-blue-200 mr-1 p-0.5 px-2 rounded text-blue-600"> .variables.scss </span> will allow you to use your color theming for UI elements
                               </div>

                               <br>
                               <div class="flex space-x-2">
                                    <button type="button" class="button">Save</button>
                                    <button type="button" class="button gray">Discard</button>
                               </div>

                               <br><br><br>
                               <h3 class="text-lg font-semibold mb-2" id="Multiple-open-item"> </h3>
                               <p class="text-base mb-10">  </p>
                               
                               
                           </div>
                           <div class="w-1/4 md:block hidden">
                                <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                    <li> <a href="#basic" uk-scroll> basic </a></li>
                                    <li> <a href="#Emphasis" uk-scroll>Emphasis </a></li>
                                </ul>
                            </div>
                       </div>

                    </div>  
                    
                    <!-- Card -->
                    <div>
                        <div class="md:flex md:space-x-14">
                            <div class="md:w-3/4">
                                <h2 class="text-xl font-semibold mb-2" id="basic"> Card </h2>
                                <p class="text-base mb-10"> Create layout boxes with different styles.  </p>

                                <div class="lg:w-1/2">

                                    <div class="card p-5">
                                        <h3 class="text-xl font-semibold mb-2"> Default</h3>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>

                                </div>
        
                                <br><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Media-modifiers"> Media modifiers.</h3>
                                <p class="text-base mb-10"> To display an image inside a card without any spacing, add one of the following classes to a <code>&lt;div&gt;</code> around the <code>&lt;img&gt;</code> element. Mind that you need to modify the source order accordingly. </p>

                                <div class="lg:w-1/2">
                                    <div class="card uk-transition-toggle">
                                        <div class="card-media h-40">
                                            <div class="card-media-overly"></div>
                                            <img src="public/assets/images/demos/docs-demo/photo.jpg" alt="">
                                        </div>
                                        <div class="p-4">
                                            <h3 class="text-lg font-semibold mb-2"> Media Top</h3>
                                            <div> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. </div>
                                        </div>
                                    </div>
                                </div>
 
                                
                            </div>
                            <div class="w-1/4 md:block hidden">
                                 <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                     <li> <a href="#basic" uk-scroll> basic </a></li>
                                     <li> <a href="#Media-modifiers" uk-scroll>Media-modifiers </a></li>
                                 </ul>
                             </div>
                        </div>
                    </div>  
                     
                    <!-- Form -->
                    <div>
                        <div class="md:flex md:space-x-14">
                            <div class="md:w-3/4">
                                <h2 class="text-xl font-semibold mb-2" id="basic"> Form </h2>
                                <p class="text-base mb-10"> Easily create nice looking forms with different styles and layouts.  </p>
                                

                                <div class="space-y-4 lg:w-2/3">
                                    
                                    <input type="text" placeholder="Search">
     
                                    <div>
                                        <select class="uk-select">
                                            <option>Option 01</option>
                                            <option>Option 02</option>
                                        </select>
                                    </div>

                                    <div>
                                        <textarea class="uk-textarea p-4" rows="5" placeholder="Textarea"></textarea>
                                    </div>

                                    <div class="flex space-x-3">
                                        <label><input class="uk-radio" type="radio" name="radio2" checked> A</label>
                                        <label><input class="uk-radio" type="radio" name="radio2"> B</label>
                                    </div>
    
                                    <div class="flex space-x-3">
                                        <label><input class="uk-checkbox max-h-6" type="checkbox" checked> A</label>
                                        <label><input class="uk-checkbox max-h-6" type="checkbox"> B</label>
                                    </div>
    
                                    <div>
                                        <input class="uk-range" type="range" value="2" min="0" max="10" step="0.1">
                                    </div>

                                </div>
 
        
                                <br><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Multiple-open-item"> Input has border </h3>
                                <p class="text-base mb-10">  </p>
                                
                                <div class="space-y-4 lg:w-2/3">
                                    
                                    <input type="text" class="with-border" placeholder="Search">
                                    
                                </div> 
                                
                                
                                <br><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Multiple-open-item"> Input has border </h3>
                                <p class="text-base mb-10">  </p>

                                <div class="col-xl-4 col-md-4">
                                    <div class="section-headline margin-top-25 margin-bottom-12">
                                        <h5>Checkbox</h5>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="chekcbox1" checked>
                                        <label for="chekcbox1"><span class="checkbox-icon"></span> Checkbox</label>
                                    </div>
                                    <br>
                                    <div class="checkbox">
                                        <input type="checkbox" id="chekcbox2">
                                        <label for="chekcbox2"><span class="checkbox-icon"></span> Checkbox</label>
                                    </div>
                                </div>


                    <div class="col-xl-4 col-md-4">
                        <div class="section-headline margin-top-25 margin-bottom-12">
                            <h5>Radio Button</h5>
                        </div>
                        <div class="radio">
                            <input id="radio-1" name="radio" type="radio" checked>
                            <label for="radio-1"><span class="radio-label"></span> Radio Button</label>
                        </div>

                        <br>

                        <div class="radio">
                            <input id="radio-2" name="radio" type="radio">
                            <label for="radio-2"><span class="radio-label"></span> Radio Button</label>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-4">
                        <div class="section-headline margin-top-25 margin-bottom-12">
                            <h5>Switch Button</h5>
                        </div>
                        <div class="switches-list">
                            <div class="switch-container">
                                <label class="switch"><input type="checkbox" checked><span
                                        class="switch-button"></span> Switch Button</label>
                            </div>

                            <div class="switch-container">
                                <label class="switch"><input type="checkbox"><span class="switch-button"></span>
                                    Switch Button</label>
                            </div>
                        </div>
                    </div>

                                
                            </div>
                            <div class="w-1/4 md:block hidden">
                                 <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                     <li> <a href="#basic" uk-scroll> basic </a></li>
                                     <li> <a href="#Multiple-open-item" uk-scroll> </a></li>
                                 </ul>
                             </div>
                        </div>
                    </div>


                    <!-- Tabs -->
                    <div>
                        <div class="md:flex md:space-x-14">
                            <div class="md:w-3/4">
                                <h2 class="text-xl font-semibold mb-2" id="basic"> Tab </h2>
                                <p class="text-base mb-10"> Create a tabbed navigation with different styles.  </p>
                                 

                                <nav class="cd-secondary-nav border-b md:m-0 -mx-4 bg-gray-100">
                                    <ul uk-switcher="connect: #components-nav ;animation: uk-animation-fade ; toggle: > * ">
                                        <li class="active"><a href="#" class="lg:px-2">Button</a></li>
                                        <li><a href="#" class="lg:px-2">Card</a></li>
                                        <li><a href="#" class="lg:px-2">Conent list</a></li> 
                                    </ul>
                                </nav>

                                <br><br>

                                <div class="bg-blue-50 border-blue-300 border px-4 py-2 rounded text-blue-900 text-sm mb-7">
                                    Setting your brand colors to primary and secondary color variables in <span class="bg-blue-200 mr-1 p-0.5 px-2 rounded text-blue-600"> .variables.scss </span> will allow you to use your color theming for UI elements
                                </div>
                               

                                <nav class="cd-secondary-nav border-b md:m-0 -mx-4 nav-small bg-gray-100 ">
                                    <ul uk-switcher="connect: #components-nav ;animation: uk-animation-fade ; toggle: > * ">
                                        <li class="active"><a href="#" class="lg:px-2">Button</a></li>
                                        <li><a href="#" class="lg:px-2">Card</a></li>
                                        <li><a href="#" class="lg:px-2">Conent list</a></li> 
                                    </ul>
                                </nav>


                                <br><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Multiple-open-item"> Extanded </h3>
                                <p class="text-base mb-10">  </p>
                                
                                <nav class="cd-secondary-nav extanded uppercase nav-small">
                                    <ul class="space-x-3" uk-scrollspy-nav="closest: li; scroll: true">
                                        <li class="active"><a href="#" class="lg:px-2">Button</a></li>
                                        <li><a href="#" class="lg:px-2">Card</a></li>
                                        <li><a href="#" class="lg:px-2">Conent list</a></li>
                                    </ul>
                                </nav>

                                <br><br>

                                <nav class="cd-secondary-nav extanded uppercase nav-small">
                                    <ul class="space-x-3" uk-scrollspy-nav="closest: li; scroll: true">
                                        <li class="active"><a href="#videos"> <ion-icon name="film-outline" class="pr-2 text-2xl lg:block hidden"></ion-icon>Videos  <span>12</span></a></li>
                                        <li><a href="#channels"> <ion-icon name="person-circle-outline" class="pr-2 text-2xl lg:block hidden"></ion-icon> Channels </a></li>
                                        <li><a href="#articles"> <ion-icon name="newspaper-outline" class="pr-2 text-2xl lg:block hidden"></ion-icon>Articles</a></li> 
                                    </ul>
                                </nav>


                                <br><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Multiple-open-item"> Rounded tab </h3>
                                <p class="text-base mb-10">  </p>

                                <ul class="tab1">
                                    <li class="active"><a href="#">Item 1</a></li>
                                    <li><a href="#">Item 2</a></li>
                                    <li><a href="#">Item 3</a></li>
                                </ul>


                                <br><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Multiple-open-item"> Working tabs </h3>
                                <p class="text-base mb-10">  </p>

                                <ul class="tab1" uk-switcher>
                                    <li><a href="#">Item 1</a></li>
                                    <li><a href="#">Item 2</a></li>
                                    <li><a href="#">Item 3</a></li>
                                </ul> 
                                <ul class="uk-switcher">
                                    <li>Hello</li>
                                    <li>Hello again!</li>
                                    <li>Bazinga!</li>
                                </ul>

                                
                            </div>
                            <div class="w-1/4 md:block hidden">
                                 <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                     <li> <a href="#basic" uk-scroll> basic </a></li>
                                     <li> <a href="#Multiple-open-item" uk-scroll> </a></li>
                                 </ul>
                             </div>
                        </div>
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


