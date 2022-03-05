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

                <h1 class="text-2xl font-bold text-gray-900 leading-0 my-3"> Plugins </h1>

                <nav class="cd-secondary-nav border-b md:m-0 -mx-4 nav-small">
                    <ul uk-switcher="connect: #components-nav ;animation: uk-animation-fade ; toggle: > * ">
                        <li><a href="#" class="lg:px-2">Keywords Input</a></li>
                        <li><a href="#" class="lg:px-2">Select</a></li>
                        <li><a href="#" class="lg:px-2">Tooltips</a></li> 
                        <li><a href="#" class="lg:px-2">Checkbox</a></li> 
                    </ul>
                </nav>

                <div class="uk-switcher my-12" id="components-nav">
  
                    <!-- Keywords Input -->
                    <div>
                        <div class="md:flex md:space-x-14">
                            <div class="md:w-3/4">
                                <h2 class="text-xl font-semibold mb-2" id="basic"> Keywords Input Tags </h2>
                                <p class="text-base mb-10"> Tags.js is an advanced, feature-rich tagging system used to manage (add, remove, validate) tags & tokens with an input field  </p>
                                
        
                                <div class="keywords-container max-w-lg flow-root">
                                    <div class="keyword-input-container">
                                        <input type="text" class="keyword-input" placeholder="Add Keywords"/>
                                        <button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
                                    </div>
                                    <div class="keywords-list">
                                        <!-- keywords go here -->
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <br><br><hr><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="with"> Keywords Input with border</h3>
                                <p class="text-base mb-10"> to add border just add <code>with-border</code> </p>

                                <div class="keywords-container max-w-lg flow-root">
                                    <div class="keyword-input-container">
                                        <input type="text" class="keyword-input with-border" placeholder="Add Keywords"/>
                                        <button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
                                    </div>
                                    <div class="keywords-list">
                                        <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">JavaScript</span></span>
                                        <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">React</span></span>
                                        <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Python</span></span>
                                        <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Angular</span></span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                
                            </div>
                            <div class="w-1/4 md:block hidden">
                                 <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                     <li> <a href="#basic" uk-scroll> basic </a></li>
                                     <li> <a href="#with" uk-scroll>with border </a></li>
                                 </ul>
                             </div>
                        </div>
                    </div>

                    <!-- Select  -->
                    <div>
                        <div class="md:flex md:space-x-14">
                            <div class="md:w-3/4">
                                <h2 class="text-xl font-semibold mb-2" id="basic"> Select  </h2>
                                <p class="text-base mb-10"> Select was designed to be a replacement for the standard <code>select</code> box that is displayed by the browser. By default it supports all options and operations that are available in a standard select box, but with added flexibility.  </p>
                                
                                <div class="row">

                                    <div class="col-xl-6 col-md-6 mb-4">
                                        <div class="mb-3 font-medium">
                                            <h5>Standard select boxes</h5>
                                        </div>
                            
                                        <select class="selectpicker">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                            
                                    <div class="col-xl-6 col-md-6 mb-4">
                                        <div class="mb-3 font-medium">
                                            <h5>Multiple select boxes</h5>
                                        </div>
                            
                                        <select class="selectpicker" multiple>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                            
                                    <div class="col-xl-6 col-md-6 mb-4">
                                        <div class="mb-3 font-medium">
                                            <h5>Select boxes with optgroups</h5>
                                        </div>
                                        <select class="selectpicker">
                                            <optgroup label="Group 1">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </optgroup>
                                            <optgroup label="Group 2">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </optgroup>
                                        </select>
                                    </div>
                            
                                    <div class="col-xl-6 col-md-6 mb-4">
                                        <div class="mb-3 font-medium">
                                            <h5>Limit the number of selections</h5>
                                        </div>
                            
                                        <select class="selectpicker" multiple data-max-options="2">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                            
                                    <div class="col-xl-6 col-md-6 mb-4">
                                        <div class="mb-3 font-medium">
                                            <h5>Custom button text</h5>
                                        </div>
                            
                                        <select class="selectpicker" multiple title="Choose one of the following...">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                            
                                    <div class="col-xl-6 col-md-6 mb-4">
                                        <div class="mb-3 font-medium">
                                            <h5>Selected text format</h5>
                                        </div>
                            
                                        <select class="selectpicker" multiple data-selected-text-format="count > 1">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                            
                                    <div class="col-xl-6 col-md-6 mb-4">
                                        <div class="mb-3 font-medium">
                                            <h5>Select boxes with icons</h5>
                                        </div>
                            
                                        <select class="selectpicker" multiple data-selected-text-format="count > 1">
                                            <option data-icon="uil-bell" selected>Notifications</option>
                                            <option data-icon="uil-cog">Setting</option>
                                            <option data-icon="uil-user-circle">Account</option>
                                            <option data-icon="uil-sign-out-alt">Sign-out</option>
                                        </select>
                                    </div>
                            
                                    <div class="col-xl-6 col-md-6 mb-4">
                                        <div class="mb-3 font-medium">
                                            <h5>Disabled options</h5>
                                        </div>
                            
                                        <select class="selectpicker">
                                            <option>Option 1</option>
                                            <option disabled>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                            
                                    <div class="col-xl-6 col-md-6 mb-4">
                                        <div class="mb-3 font-medium">
                                            <h5>All above select boxes are also available with border</h5>
                                        </div>
                            
                                        <select class="selectpicker with-border" multiple>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                            <option>Option 5</option>
                                            <option>Option 6</option>
                                        </select>
                                    </div>
                                    
                                </div>
                             

        
                                <br><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Multiple-open-item"> </h3>
                                <p class="text-base mb-10">  </p>
                                
                                
                            </div>
                            <div class="w-1/4 md:block hidden">
                                 <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                     <li> <a href="#basic" uk-scroll> basic </a></li>
                                     <li> <a href="#Multiple-open-item" uk-scroll> </a></li>
                                 </ul>
                             </div>
                        </div>
                    </div>

                    <!-- Tooltips -->
                    <div>
                        <div class="md:flex md:space-x-14">
                            <div class="md:w-3/4">
                                <h2 class="text-xl font-semibold mb-2" id="basic">  Tooltips </h2>
                                <p class="text-base mb-10"> Easily create a nice looking tooltip. </p>

                                <div class="bg-blue-50 border-blue-300 border px-4 py-2 rounded text-blue-900 text-sm mb-10">
                                    Tooltips are powered by powerful <span class="bg-blue-200 mr-1 p-0.5 px-2 rounded text-blue-600">tippy.js </span> tooltip library. More examples at
                                    <a href="https://atomiks.github.io/tippyjs/">https://atomiks.github.io/tippyjs/</a>
                                </div>
                                 
                                <div class="grid grid-flow-col gap-2">
                                    <button class="button gray" data-tippy-placement="top" title="Tooltip">Top</button>
                                    <button class="button gray" data-tippy-placement="bottom" title="Tooltip">Bottom</button>
                                    <button class="button gray" data-tippy-placement="left" title="Tooltip">Left</button>
                                    <button class="button gray" data-tippy-placement="right" title="Tooltip">Right</button>
                                </div>

                                <br><br><br><hr><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Light">Light Tooltips </h3>
                                <p class="text-base mb-10">  </p>
                                
                                <div class="grid grid-flow-col gap-2">
                                    <button class="button gray" data-tippy-placement="top" title="Tooltip" data-tippy-theme="light">Top</button>
                                    <button class="button gray" data-tippy-placement="bottom" title="Tooltip" data-tippy-theme="light">Bottom</button>
                                    <button class="button gray" data-tippy-placement="left" title="Tooltip" data-tippy-theme="light">Left</button>
                                    <button class="button gray" data-tippy-placement="right" title="Tooltip" data-tippy-theme="light">Right</button>
                                </div>

                                
                            </div>
                            <div class="w-1/4 md:block hidden">
                                 <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                     <li> <a href="#basic" uk-scroll> basic </a></li>
                                     <li> <a href="#Light" uk-scroll> Light </a></li>
                                 </ul>
                             </div>
                        </div>
                    </div>

                    <!-- Checkbox -->
                    <div>
                        <div class="md:flex md:space-x-14">
                            <div class="md:w-3/4">
                                <h2 class="text-xl font-semibold mb-7" id="Checkbox"> Checkbox </h2>

                                <div class="bg-white rounded-md shadow py-4 px-6 max-w-md flex flex-col">

                                    <div class="text-lg font-semibold mb-3">  Featured topics </div>

                                    <div class="checkbox">
                                        <input type="checkbox" id="chekcbox1" checked>
                                        <label for="chekcbox1"><span class="checkbox-icon"></span> Web Development </label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="chekcbox2">
                                        <label for="chekcbox2"><span class="checkbox-icon"></span> Mobile Apps</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="chekcbox2">
                                        <label for="chekcbox3"><span class="checkbox-icon"></span> Marketing</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="chekcbox2">
                                        <label for="chekcbox4"><span class="checkbox-icon"></span>  Financial Analysis</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="chekcbox2">
                                        <label for="chekcbox5"><span class="checkbox-icon"></span>  Cyber Security </label>
                                    </div>
                                    
                                </div>

                                <br><br>

                                <h2 class="text-xl font-semibold mb-7" id="Radio"> Radio Button </h2>


                                <div class="bg-white rounded-md shadow py-4 px-6 max-w-md">

                                    <div class="text-lg font-semibold mb-3">  Skill Levels </div>

                                    <div class="radio">
                                        <input id="radio-1" name="radio" type="radio">
                                        <label for="radio-1"><span class="radio-label"></span>  Beginner </label>
                                    </div>
            
                                    <br>
            
                                    <div class="radio">
                                        <input id="radio-2" name="radio" type="radio" checked>
                                        <label for="radio-2"><span class="radio-label"></span> Entermidate </label>
                                    </div>

                                    <br>

                                    <div class="radio">
                                        <input id="radio-3" name="radio" type="radio">
                                        <label for="radio-3"><span class="radio-label"></span> Advance </label>
                                    </div>
            
                                    <br>
            
                                    <div class="radio">
                                        <input id="radio-4" name="radio" type="radio">
                                        <label for="radio-4"><span class="radio-label"></span> Expert</label>
                                    </div>


                                </div>

                                <br><br><hr><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Switch"> Switch Button </h3>
                                <p class="text-base mb-10">  </p>

                                <div class="bg-white rounded-md shadow p-4 max-w-md">

                                    <div class="switches-list">
                                        <div class="switch-container">
                                            <label class="switch"><input type="checkbox" checked>
                                            <span class="switch-button"></span> Toggle Dark Mode </label>
                                        </div>
                                    </div>
                                    

                                </div>

 
                                <br><br><hr><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Multiple-open-item"> Sample Switch</h3>
                                <p class="text-base mb-10">  </p>

                                <div class="bg-white rounded-md shadow p-6 max-w-md">

                                    <div class="space-y-3">
                                        <div class="flex justify-between items-center">
                                            <div class="bg-gray-100 w-full h-5 rounded lg:mr-32"></div>
                                            <div class="switches-list -mt-8 is-large">
                                                <div class="switch-container">
                                                    <label class="switch"><input type="checkbox"><span class="switch-button"></span> </label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="flex justify-between items-center">
                                            <div class="bg-gray-100 w-full h-5 rounded lg:mr-20"></div>
                                            <div class="switches-list -mt-8 is-large">
                                                <div class="switch-container">
                                                    <label class="switch"><input type="checkbox" checked><span class="switch-button"></span> </label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="flex justify-between items-center">
                                            <div class="bg-gray-100 w-full h-5 rounded lg:mr-44"></div>
                                            <div class="switches-list -mt-8 is-large">
                                                <div class="switch-container">
                                                    <label class="switch"><input type="checkbox"><span class="switch-button"></span> </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Multiple-open-item"> </h3>
                                <p class="text-base mb-10">  </p>
                                
                                
                            </div>
                            <div class="w-1/4 md:block hidden">
                                 <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                     <li> <a href="#Checkbox" uk-scroll> Checkbox Button </a></li>
                                     <li> <a href="#MRadio" uk-scroll> Radio Button</a></li>
                                     <li> <a href="#Switch" uk-scroll> Switch Button</a></li>
                                     <li> <a href="#Sample" uk-scroll> Sample Switch </a></li>
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


