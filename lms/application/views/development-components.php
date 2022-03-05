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

                <h1 class="text-2xl font-bold text-gray-900 leading-0 my-3"> Components </h1>

                <nav class="cd-secondary-nav border-b md:m-0 -mx-4 nav-small">
                    <ul uk-switcher="connect: #components-nav ;animation: uk-animation-fade ; toggle: > * ">
                        <li><a href="#" class="lg:px-2">Accordion</a></li>
                        <li><a href="#" class="lg:px-2">Alert</a></li>
                        <li><a href="#" class="lg:px-2">Filter</a></li>
                        <li><a href="#" class="lg:px-2">Dropdown</a></li>
                        <li><a href="#" class="lg:px-2">Drop</a></li>
                        <li><a href="#" class="lg:px-2">Lightbox</a></li>
                        <li><a href="#" class="lg:px-2">Modal</a></li>
                        <li><a href="#" class="lg:px-2">Notification</a></li>
                        <li><a href="#" class="lg:px-2">Off canvas</a></li>
                        <li><a href="#" class="lg:px-2">Scrollspy</a></li>
                        <li><a href="#" class="lg:px-2">Sortable</a></li>
                        <li><a href="#" class="lg:px-2">Tooltip</a></li>
                        <li><a href="#" class="lg:px-2">slider</a></li>
                        <li><a href="#" class="lg:px-2">Slideshow</a></li>
                    </ul>
                </nav>

                <div class="uk-switcher my-12" id="components-nav">
 
                     
                    <!-- Accordion -->
                    <div>
                         
                       <div class="md:flex md:space-x-14">
                           <div class="md:w-3/4">
                               <h2 class="text-xl font-semibold mb-2" id="basic"> Accordion</h2>
                               <p class="text-base mb-10">  Create a list of items that can be shown individually by clicking an item's header. </p>
                               
                               <ul uk-accordion>
                                   <li class="uk-open">
                                       <a class="uk-accordion-title" href="#">Item 1</a>
                                       <div class="uk-accordion-content">
                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                       </div>
                                   </li>
                                   <li>
                                       <a class="uk-accordion-title" href="#">Item 2</a>
                                       <div class="uk-accordion-content">
                                           <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                       </div>
                                   </li>
                                   <li>
                                       <a class="uk-accordion-title" href="#">Item 3</a>
                                       <div class="uk-accordion-content">
                                           <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                                       </div>
                                   </li>
                               </ul>
       
                               <br><br><br>
                               <h3 class="text-lg font-semibold mb-2" id="Multiple-open-item"> Multiple open items</h3>
                               <p class="text-base mb-10">  To display multiple content sections at the same time without one collapsing when the other one is opened, add the <code>multiple: true</code> option to the <code>uk-accordion</code> attribute.</p>
                               
                               <ul uk-accordion="multiple: true">
                                   <li class="uk-open">
                                       <a class="uk-accordion-title" href="#">Item 1</a>
                                       <div class="uk-accordion-content">
                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                       </div>
                                   </li>
                                   <li>
                                       <a class="uk-accordion-title" href="#">Item 2</a>
                                       <div class="uk-accordion-content">
                                           <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                       </div>
                                   </li>
                                   <li>
                                       <a class="uk-accordion-title" href="#">Item 3</a>
                                       <div class="uk-accordion-content">
                                           <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                           <div class="w-1/4 md:block hidden">
                                <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                    <li> <a href="#basic" uk-scroll> basic </a></li>
                                    <li> <a href="#Multiple-open-item" uk-scroll> Multiple open items </a></li>
                                </ul>
                            </div>
                       </div>

                    </div>
                    
                    <!-- Alert -->
                    <div>

                        <div class="md:flex md:space-x-14">
                            <div class="md:w-3/4">
                                <h2 class="text-xl font-semibold mb-2" id="basic"> alert </h2>
                                <p class="text-base mb-10"> Display success, warning and error messages.  </p>
                          

                                <div class="bg-gray-100 border p-4 relative rounded-md uk-alert" uk-alert>
                                    <a class="uk-alert-close absolute right-0 top-0 m-5" uk-close></a>
                                    <h3 class="text-lg font-semibold">Notice</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
        
                                <br><hr><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Style-modifiers"> Style modifiers</h3>
                                <p class="text-base mb-10"> There are several style modifiers available. Just add one of the following classes to apply a different look. </p>

                                <div class="space-y-4">

                                    <div class="bg-blue-500 border p-4 relative rounded-md" uk-alert>
                                        <button class="uk-alert-close absolute bg-gray-100 bg-opacity-20 m-5 p-0.5 pb-0 right-0 rounded text-gray-200 text-xl top-0">
                                            <i class="icon-feather-x"></i>
                                        </button>
                                        <h3 class="text-lg font-semibold text-white">Notice</h3>
                                        <p class="text-white text-opacity-75">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
    
                                    <div class="bg-red-500 border p-4 relative rounded-md" uk-alert>
                                        <button class="uk-alert-close absolute bg-gray-100 bg-opacity-20 m-5 p-0.5 pb-0 right-0 rounded text-gray-200 text-xl top-0">
                                            <i class="icon-feather-x"></i>
                                        </button>
                                        <h3 class="text-lg font-semibold text-white">Notice</h3>
                                        <p class="text-white text-opacity-75">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
    
                                    <div class="bg-green-500 border p-4 relative rounded-md" uk-alert>
                                        <button class="uk-alert-close absolute bg-gray-100 bg-opacity-20 m-5 p-0.5 pb-0 right-0 rounded text-gray-200 text-xl top-0">
                                            <i class="icon-feather-x"></i>
                                        </button>
                                        <h3 class="text-lg font-semibold text-white">Notice</h3>
                                        <p class="text-white text-opacity-75">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>

                                </div>

                                <br><hr><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Custom"> Custom Style</h3>
                                <p class="text-base mb-10"> There are several style modifiers available. Just add one of the following classes to apply a different look. </p>

                                <div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
                                    <h3 class="text-lg font-semibold mt-1">Deactivate Account </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                
                                    <div class="flex space-x-2 items-center justify-end mt-2">
                                        <button type="button" class="uk-alert-close py-2 px-4 rounded-md font-semibold"> Cancle</button>
                                        <button type="button" class="bg-red-100 text-red-600 py-2 px-4 rounded-md font-semibold "> Deactivate </button>
                                    </div>
                                </div>
                              
                            </div>
                            <div class="w-1/4 md:block hidden">
                                 <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                     <li> <a href="#basic" uk-scroll> basic </a></li>
                                     <li> <a href="#Style-modifiers" uk-scroll>  Style modifiers </a></li>
                                     <li> <a href="#Custom" uk-scroll> Custom Style </a></li>
                                 </ul>
                             </div>
                        </div>

                    </div>

                    <!-- filter -->
                    <div>

                        <div class="md:flex md:space-x-14">
                            <div class="md:w-3/4">
                                <h2 class="text-xl font-semibold mb-2" id="basic"> Filter </h2>
                                <p class="text-base mb-10"> Filter or sort items in any given layout by meta data.  </p>

                                <div uk-filter="target: .js-filter">

                                    <ul class="tab1 flex mb-5">
                                        <li class="uk-active" uk-filter-control><a href="#">All</a></li>
                                        <li uk-filter-control=".data-color-green"><a href="#">Green</a></li>
                                        <li uk-filter-control=".data-color-blue"><a href="#">Blue</a></li>
                                        <li uk-filter-control=".data-color-red"><a href="#">Black</a></li>
                                    </ul>
                                
                                    <ul class="js-filter grid md:grid-cols-3 grid-cols-3 gap-5 text-lg capitalize">
                                        <li class="data-color-blue">
                                            <div class="text-white rounded-md flex items-center justify-center h-28 bg-blue-500">Item</div>
                                        </li>
                                        <li class="data-color-green">
                                            <div class="text-white rounded-md flex items-center justify-center h-28 bg-green-500">Item</div>
                                        </li>
                                        <li class="data-color-red">
                                            <div class="text-white rounded-md flex items-center justify-center h-28 bg-red-500">Item</div>
                                        </li>
                                        <li class="data-color-red">
                                            <div class="text-white rounded-md flex items-center justify-center h-28 bg-red-500">Item</div>
                                        </li>
                                        <li class="data-color-blue">
                                            <div class="text-white rounded-md flex items-center justify-center h-28 bg-blue-500">Item</div>
                                        </li>
                                        <li class="data-color-green">
                                            <div class="text-white rounded-md flex items-center justify-center h-28 bg-green-500">Item</div>
                                        </li>
                                    </ul>
                                
                                </div>
        
                                <br><br><hr><br>
                                <h3 class="text-lg font-semibold mb-2" id=""> Meta Data </h3>
                                <p class="text-base mb-10"> Items can have different meta data for filtering. You just need to define the HTML classes or <code>data</code> attributes and create the corresponding CSS selectors for the filter controls. This example uses <code>data</code> attributes for the filter instead of HTML classes </p>
                              
                                <div uk-filter="target: .js-filter">

                                    <ul class="tab1 flex mb-5">
                                        <li class="uk-active" uk-filter-control><a href="#">All</a></li>
                                        <li uk-filter-control=".data-color-green"><a href="#">Green</a></li>
                                        <li uk-filter-control=".data-color-blue"><a href="#">Blue</a></li>
                                        <li uk-filter-control=".data-color-red"><a href="#">Black</a></li>
                                        <li uk-filter-control=".tag-large"><a href="#">Green large</a></li>
                                    </ul>
                                
                                    <ul class="js-filter grid md:grid-cols-3 grid-cols-3 gap-5 text-lg capitalize">
                                        <li class="data-color-blue">
                                            <div class="text-white rounded-md flex items-center justify-center h-28 bg-blue-500">Item</div>
                                        </li>
                                        <li class="data-color-green">
                                            <div class="text-white rounded-md flex items-center justify-center h-28 bg-green-500">Item</div>
                                        </li>
                                        <li class="data-color-red">
                                            <div class="text-white rounded-md flex items-center justify-center h-28 bg-red-500">Item</div>
                                        </li>
                                        <li class="data-color-red">
                                            <div class="text-white rounded-md flex items-center justify-center h-28 bg-red-500">Item</div>
                                        </li>
                                        <li class="data-color-blue">
                                            <div class="text-white rounded-md flex items-center justify-center h-28 bg-blue-500">Item</div>
                                        </li>
                                        <li class="data-color-green">
                                            <div class="text-white rounded-md flex items-center justify-center h-28 bg-green-500">Item</div>
                                        </li>
                                        <li class="data-color-green tag-large">
                                            <div class="text-white rounded-md flex items-center justify-center h-36 bg-green-500">Item large</div>
                                        </li>
                                    </ul>
                                
                                </div>
  
                                <br><br><hr><br>
                                <h3 class="text-lg font-semibold mb-2" id=""> Multiple Filters </h3>
                                <p class="text-base mb-10"> Define different types of meta data and add any number of controls to filter them. The filter controls are exclusive, meaning just one criteria is filtered at a time. </p>

                                <div uk-filter="target: .js-filter">

                                    <div class="flex divide-x space-x-1">
                                        <ul class="tab1 flex mb-5">
                                            <li class="uk-active" uk-filter-control><a href="#">All</a></li> 
                                        </ul>
                                        <ul class="tab1 flex mb-5 pl-3">
                                            <li uk-filter-control=".data-color-green"><a href="#">Green</a></li>
                                            <li uk-filter-control=".data-color-blue"><a href="#">Blue</a></li>
                                            <li uk-filter-control=".data-color-red"><a href="#">Black</a></li>
                                        </ul>
                                        <ul class="tab1 flex mb-5 pl-3">
                                            <li uk-filter-control=".data-size-small"><a href="#">Small</a></li>
                                            <li uk-filter-control=".data-size-medium"><a href="#">Medium</a></li>
                                            <li uk-filter-control=".data-size-large"><a href="#">Large</a></li>
                                        </ul>
                                    </div>
                                
                                    <ul class="js-filter grid md:grid-cols-3 grid-cols-3 gap-5 text-lg capitalize">
                                       
                                        <li class="data-color-blue data-size-large">
                                            <div class="text-white rounded-md flex items-center justify-center h-36 bg-blue-500">Item</div>
                                        </li>
                                        <li class="data-color-green data-size-large">
                                            <div class="text-white rounded-md flex items-center justify-center h-36 bg-green-500">Item</div>
                                        </li>
                                        <li class="data-color-red data-size-large">
                                            <div class="text-white rounded-md flex items-center justify-center h-36 bg-red-500">Item</div>
                                        </li>

                                        <li class="data-color-blue data-size-medium">
                                            <div class="text-white rounded-md flex items-center justify-center h-28 bg-blue-500">Item</div>
                                        </li>
                                        <li class="data-color-green data-size-medium">
                                            <div class="text-white rounded-md flex items-center justify-center h-28 bg-green-500">Item</div>
                                        </li>
                                        <li class="data-color-red data-size-medium">
                                            <div class="text-white rounded-md flex items-center justify-center h-28 bg-red-500">Item</div>
                                        </li> 
                                        
                                        <li class="data-color-blue data-size-small">
                                            <div class="text-white rounded-md flex items-center justify-center h-20 bg-blue-500">Item</div>
                                        </li>
                                        <li class="data-color-green data-size-small">
                                            <div class="text-white rounded-md flex items-center justify-center h-20 bg-green-500">Item</div>
                                        </li>
                                        <li class="data-color-red data-size-small">
                                            <div class="text-white rounded-md flex items-center justify-center h-20 bg-red-500">Item</div>
                                        </li>

                                    </ul>
                                
                                </div>

                            </div>
                            <div class="w-1/4 md:block hidden">
                                 <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                     <li> <a href="#basic" uk-scroll> basic </a></li>
                                     <li> <a href="#" uk-scroll>   </a></li>
                                 </ul>
                             </div>
                        </div> 
                        
                    </div> 

                    <!-- drop -->
                    <div>
                    
                        <div class="md:flex md:space-x-14">
                            <div class="md:w-3/4">
                                <h2 class="text-xl font-semibold mb-2" id="basic"> Drop </h2>
                                <p class="text-base mb-10">Position any element in relation to another element. </p>
                      
                                <div class="flex space-x-2">
                    
                                    <button class="button gray" type="button"> Hover </button>
                                    <div uk-drop class="card p-4">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                    </div>
                    
                                    <button class="button gray" type="button"> click </button>
                                    <div uk-drop="mode: click" class="card p-4">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                    </div>
                    
                                </div>
                    
                    
                                <br><br><hr><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Style-modifiers"> Style modifiers</h3>
                                <p class="text-base mb-10"> You can place a grid from the <a href="grid.html">Grid component</a> inside a drop. Just wrap the content with a <code>&lt;div&gt;</code> element and add the <code>uk-grid</code> attribute. If the grid should stack automatically, whenever the drop no longer fits its container, just add the <code>.uk-drop-grid</code> class </p>
                                  
                                
                                <button class="button gray" type="button">Hover</button>

                                <div class="uk-width-large" uk-drop>
                                    <div class="card p-5">
                                        <div class="uk-drop-grid uk-child-width-1-2@m" uk-grid>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                            </div>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <br><br><hr><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Position"> Position </h3>
                                <p class="text-base mb-10">Add one of the following options to the <code>uk-drop</code> attribute to adjust the drop's alignment. </p>
                       
                                <pre class="p-2 rounded-md mb-6 border-l-4 border-red-400 pl-4 bg-white shadow"><code class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">uk-drop</span>=<span class="hljs-string">"pos: top-left"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
 
                                <div class="bg-white shadow p-3 space-x-1 space-y-1 rounded-md">
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">bottom-left</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">bottom-center</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">bottom-justify</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">top-left</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">top-center</code> 
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">top-right</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">top-justify</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">left-top</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">left-center</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">left-bottom</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">right-top</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">right-center</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">right-bottom</code>
                                </div>
                                <br> 
                                <div class="gap-4 grid grid-flow-col  p-4 rounded-md bg-gray-100 border ">

                                    <div>
                                        <button class="button gray w-full" type="button">Top Right</button>
                                        <div uk-drop="pos: top-right">
                                            <div class="card p-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
                                        </div>
                                    </div>
 
                                    <div>
                                        <button class="button gray w-full" type="button">Bottom Justify</button>
                                        <div uk-drop="pos: bottom-justify">
                                            <div class="card p-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <button class="button gray w-full" type="button">Right Center</button>
                                        <div uk-drop="pos: right-center">
                                            <div class="card p-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
                                        </div>
                                    </div>


                                </div>


                                <br><br><hr><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Offset"> Offset  </h3>
                                <p class="text-base mb-10"> To define a custom offset between the drop container and the toggle, add the <code>offset</code> option with a value for the offset, measured in pixels. </p>
                       
                                <pre class="p-2 rounded-md mb-6 border-l-4 border-red-400 pl-4 bg-white shadow"><code class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">uk-drop</span>=<span class="hljs-string">"offset: 80"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>

                                <br>

                                <button class="button gray" type="button"> Hover </button>
                                <div uk-drop="offset: 50;pos:right-center" class="card p-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                </div>

                            
                    
                            </div>
                            <div class="w-1/4 md:block hidden">
                                <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                    <li> <a href="#basic" uk-scroll> basic </a></li>
                                    <li> <a href="#Position" uk-scroll> Position   </a></li>
                                    <li> <a href="#Offset" uk-scroll> Offset   </a></li>
                                </ul>
                            </div>
                        </div>
                    
                    </div>

                    <!-- Dropdown -->
                    <div>
                    
                        <div class="md:flex md:space-x-14">
                            <div class="md:w-3/4">
                                <h2 class="text-xl font-semibold mb-2" id="basic"> Dropdown </h2>
                                <p class="text-base mb-10">Defines different styles for a toggleable dropdown. </p>
                    
                                <div class="flex space-x-3">
                                    <div>
                    
                                        <button class="button gray" type="button"> Hover </button>
                                        <div uk-dropdown class="card p-4 w-64">
                                            <div class="animate-pulse space-y-2">
                                                <div class="bg-gray-100 w-full h-5 rounded"></div>
                                                <div class="bg-gray-100 w-full h-5 rounded"></div>
                                                <div class="bg-gray-100 w-full h-5 rounded"></div>
                                                <hr>
                                                <div class="bg-red-100 w-full h-5 rounded"></div>
                                            </div>
                                        </div>
                    
                                    </div>
                                    <div>
                    
                                        <button class="button gray" type="button"> click </button>
                                        <div uk-dropdown="mode: click" class="card p-4 w-64">
                                            <div class="animate-pulse space-y-2">
                                                <div class="bg-gray-100 w-full h-5 rounded"></div>
                                                <div class="bg-gray-100 w-full h-5 rounded"></div>
                                                <div class="bg-gray-100 w-full h-5 rounded"></div>
                                                <hr>
                                                <div class="bg-red-100 w-full h-5 rounded"></div>
                                            </div>
                                        </div>
                    
                                    </div>
                                </div>

                                <br><br><hr><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Position"> Position </h3>
                                <p class="text-base mb-10">Add one of the following options to the <code>uk-dropdown</code> attribute to adjust the drop's alignment. </p>
                       
                                <pre class="p-2 rounded-md mb-6 border-l-4 border-red-400 pl-4 bg-white shadow"><code class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">uk-dropdown</span>=<span class="hljs-string">"pos: top-left"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
 
                                <div class="bg-white shadow p-3 space-x-1 space-y-1 rounded-md">
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">bottom-left</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">bottom-center</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">bottom-justify</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">top-left</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">top-center</code> 
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">top-right</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">top-justify</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">left-top</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">left-center</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">left-bottom</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">right-top</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">right-center</code>
                                    <code class="bg-red-50 border-l-2 border-red-500 p-2 rounded leading-10">right-bottom</code>
                                </div>
                                <br> 
                                <div class="gap-4 grid grid-flow-col  p-4 rounded-md bg-gray-100 border ">

                                    <div>
                                        <button class="button gray w-full" type="button">Top Right</button>
                                        <div uk-dropdown="pos: top-right" class="card p-4 w-64">
                                            <div class="animate-pulse space-y-2">
                                                <div class="bg-gray-100 w-full h-5 rounded"></div>
                                                <div class="bg-gray-100 w-full h-5 rounded"></div>
                                                <div class="bg-gray-100 w-full h-5 rounded"></div>
                                                <hr>
                                                <div class="bg-red-100 w-full h-5 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
 
                                    <div>
                                        <button class="button gray w-full" type="button">Bottom Justify</button>
                                        <div uk-dropdown="pos: bottom-justify" class="card p-4 w-64">
                                            <div class="animate-pulse space-y-2">
                                                <div class="bg-gray-100 w-full h-5 rounded"></div>
                                                <div class="bg-gray-100 w-full h-5 rounded"></div>
                                                <div class="bg-gray-100 w-full h-5 rounded"></div>
                                                <hr>
                                                <div class="bg-red-100 w-full h-5 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <button class="button gray w-full" type="button">Right Center</button>
                                        <div uk-dropdown="pos: right-center" class="card p-4 w-64">
                                            <div class="animate-pulse space-y-2">
                                                <div class="bg-gray-100 w-full h-5 rounded"></div>
                                                <div class="bg-gray-100 w-full h-5 rounded"></div>
                                                <div class="bg-gray-100 w-full h-5 rounded"></div>
                                                <hr>
                                                <div class="bg-red-100 w-full h-5 rounded"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <br><br><hr><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Offset"> Offset  </h3>
                                <p class="text-base mb-10"> To define a custom offset between the drop container and the toggle, add the <code>offset</code> option with a value for the offset, measured in pixels. </p>
                       
                                <pre class="p-2 rounded-md mb-6 border-l-4 border-red-400 pl-4 bg-white shadow"><code class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">uk-dropdown</span>=<span class="hljs-string">"offset: 80"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
                                <br>

                                <button class="button gray" type="button"> Hover </button>
                                <div uk-dropdown="offset: 50;pos:right-center" class="card p-4 w-64">
                                    <div class="animate-pulse space-y-2">
                                        <div class="bg-gray-100 w-full h-5 rounded"></div>
                                        <div class="bg-gray-100 w-full h-5 rounded"></div>
                                        <div class="bg-gray-100 w-full h-5 rounded"></div>
                                        <hr>
                                        <div class="bg-red-100 w-full h-5 rounded"></div>
                                    </div>
                                </div>

                              
                    
                            </div>
                            <div class="w-1/4 md:block hidden">
                                <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                    <li> <a href="#basic" uk-scroll> basic </a></li>
                                    <li> <a href="#Position" uk-scroll> Position   </a></li>
                                    <li> <a href="#Offset" uk-scroll> Offset   </a></li>
                                </ul>
                            </div>
                        </div>
                    
                    </div>

                    <!-- lightbox -->
                    <div>
                       
                        <div class="md:flex md:space-x-14">
                            <div class="md:w-3/4">
                                <h2 class="text-xl font-semibold mb-2" id="basic"> Lightbox  </h2>
                                <p class="text-base mb-3"> Create a responsive lightbox gallery with images and videos  </p>
                                <hr>
                                <p class="text-sm mt-3 mb-10"> The lightbox component is fully responsive and supports touch and swipe navigation, as well as mouse drag for desktops. When swiping between slides the animation literally sticks at your fingertip or mouse cursor. Clicking fast on the previous and next navigation, will make animations even accelerate to keep up with your pace. All animations are hardware accelerated for a smoother performance.</p>
    
    
                                <div uk-lightbox>
                                    <a class="button gray" href="public/assets/images/demos/docs-demo/photo.jpg">Open Lightbox</a>
                                </div>
        
                                <br><br><hr><br>
                                <h3 class="text-lg font-semibold mb-2" id="Caption">Caption </h3>
                                <p class="text-base mb-10"> To display a caption at the bottom of the lightbox, set the <code>data-caption</code> attribute on an anchor </p>
    
                                <div uk-lightbox>
                                    <a class="button gray" href="public/assets/images/demos/docs-demo/light.jpg" data-caption="Caption">Open Lightbox</a>
                                </div>
                               
                                <br><br><hr><br>
                                <h3 class="text-lg font-semibold mb-2" id="Animations"> Animations </h3>
                                <p class="text-base mb-10"> By default, the Lightbox gallery uses a slide animation. You can set the <code>animation</code> option to use a different one. Possible values are <code>slide</code>, <code>fade</code> and <code>scale</code>. </p>
    
                                <div class="text-lg font-semibold mb-2">Slide</div>
                                
                                <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
                                    <div>
                                        <a class="uk-inline" href="public/assets/images/demos/docs-demo/photo.jpg" data-caption="Caption 1">
                                            <img src="public/assets/images/demos/docs-demo/photo.jpg" alt="">
                                        </a>
                                    </div>
                                    <div>
                                        <a class="uk-inline" href="public/assets/images/demos/docs-demo/dark.jpg" data-caption="Caption 2">
                                            <img src="public/assets/images/demos/docs-demo/dark.jpg" alt="">
                                        </a>
                                    </div>
                                    <div>
                                        <a class="uk-inline" href="public/assets/images/demos/docs-demo/light.jpg" data-caption="Caption 3">
                                            <img src="public/assets/images/demos/docs-demo/light.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="text-lg font-semibold mb-2">Fade</div>
                                <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: fade">
                                    <div>
                                        <a class="uk-inline" href="public/assets/images/demos/docs-demo/photo.jpg" data-caption="Caption 1">
                                            <img src="public/assets/images/demos/docs-demo/photo.jpg" alt="">
                                        </a>
                                    </div>
                                    <div>
                                        <a class="uk-inline" href="public/assets/images/demos/docs-demo/dark.jpg" data-caption="Caption 2">
                                            <img src="public/assets/images/demos/docs-demo/dark.jpg" alt="">
                                        </a>
                                    </div>
                                    <div>
                                        <a class="uk-inline" href="public/assets/images/demos/docs-demo/light.jpg" data-caption="Caption 3">
                                            <img src="public/assets/images/demos/docs-demo/light.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="text-lg font-semibold mb-2">Scale</div>
                                <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: scale">
                                    <div>
                                        <a class="uk-inline" href="public/assets/images/demos/docs-demo/photo.jpg" data-caption="Caption 1">
                                            <img src="public/assets/images/demos/docs-demo/photo.jpg" alt="">
                                        </a>
                                    </div>
                                    <div>
                                        <a class="uk-inline" href="public/assets/images/demos/docs-demo/dark.jpg" data-caption="Caption 2">
                                            <img src="public/assets/images/demos/docs-demo/dark.jpg" alt="">
                                        </a>
                                    </div>
                                    <div>
                                        <a class="uk-inline" href="public/assets/images/demos/docs-demo/light.jpg" data-caption="Caption 3">
                                            <img src="public/assets/images/demos/docs-demo/light.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
    
    
                                <br><br><hr><br>
                                <h3 class="text-lg font-semibold mb-2" id="Content-sources">Content sources</h3>
                                <p class="text-base mb-10"> A lightbox is not restricted to images. Other media, like videos, can be displayed as well. The video will pause whenever it's not visible and resume once it becomes visible again. To display a poster image for a video, set the <code>data-poster</code> attribute. </p>
    
                                <div class="flex space-x-3" uk-lightbox>
                                    <a class="button gray" href="public/assets/images/demos/docs-demo/light.jpg" data-caption="Image">Image</a>
                                    <a class="button gray" href="https://yootheme.com/site/images/media/yootheme-pro.mp4" data-caption="Video">Video</a>
                                    <a class="button gray" href="https://www.youtube.com/watch?v=c2pz2mlSfXA" data-caption="YouTube">YouTube</a>
                                    <a class="button gray" href="https://vimeo.com/1084537" data-caption="Vimeo">Vimeo</a>
                                    <a class="button gray" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4740.819266853735!2d9.99008871708242!3d53.550454675412404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3f9d24afe84a0263!2sRathaus!5e0!3m2!1sde!2sde!4v1499675200938" data-caption="Google Maps" data-type="iframe">Google Maps</a>
                                </div>
                             
                                <br><br><hr><br>
                                <h3 class="text-lg font-semibold mb-2" id="Custom-attributes"> Custom Attributes  </h3>
                                <p class="text-base mb-10"> You can add custom attributes to lightbox content items by using the <code>data-attrs</code> attribute. The attributes are passed like the usual component options, e.g. <code>data-attrs="width: 1280; height: 720;"</code> </p>
    
    
                                <div uk-lightbox>
                                    <a class="button gray" href="https://www.youtube.com/watch?v=c2pz2mlSfXA" data-caption="YouTube" data-attrs="width: 1280; height: 720;">YouTube</a>
                                </div>
    
    
                                
                            </div>
                            <div class="w-1/4 md:block hidden">
                                 <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                     <li> <a href="#basic" uk-scroll> basic </a></li>
                                     <li> <a href="#Caption" uk-scroll>  Caption </a></li>
                                     <li> <a href="#Animations" uk-scroll>  Animations </a></li>
                                     <li> <a href="#Content-sources" uk-scroll>  Content sources </a></li> 
                                     <li> <a href="#Custom-attributes" uk-scroll> Custom Attributes </a></li> 
                                 </ul>
                             </div>
                        </div>  
                   
                    </div> 
                 
                    <!-- modal  -->
                    <div>
 
 
                         <div class="md:flex md:space-x-14">
                             <div class="md:w-3/4">
                                 <h2 class="text-xl font-semibold mb-2" id="basic"> modal </h2>
                                 <p class="text-base mb-10"> Create modal dialogs with different styles and transitions.  </p>
                            
                                 <div class="flex items-center space-x-3">
                                     <!-- This is a button toggling the modal -->
                                     <button class="button gray" type="button" uk-toggle="target: #modal-example">Open</button>
                                     <!-- This is an anchor toggling the modal -->
                                     <a href="#modal-example" uk-toggle>Open</a>
                                 </div>
                                 
                                 <!-- This is the modal -->
                                 <div id="modal-example" uk-modal>
                                     <div class="uk-modal-body uk-modal-dialog rounded-md shadow-2xl">
                                         <h2 class="mb-2 uk-modal-title">Headline</h2>
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                         <div class="uk-modal-footer text-right mt-6 px-0 space-x-1">
                                             <button class="button gray uk-modal-close" type="button">Cancel</button>
                                             <button class="button" type="button">Save</button>
                                         </div>
                                     </div>
                                 </div>
 
 
                                 <br><br><hr><br><br><br>
                                 <h3 class="text-lg font-semibold mb-2" id="Close-button"> Close button </h3>
                                 <p class="text-base mb-10">To create a close button, enable its functionality and add proper styling and positioning, add the <code>.uk-modal-close-default</code> class to an <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> element. To place the close button outside the modal, add the <code>.uk-modal-close-outside</code> class.</p>
 
                                 <!-- This is a button toggling the modal with the default close button -->
                                 <button class="button gray" type="button" uk-toggle="target: #modal-close-default">Default</button>
                                 
                                 <!-- This is the modal with the default close button -->
                                 <div id="modal-close-default" uk-modal>
                                     <div class="uk-modal-dialog uk-modal-body rounded-md shadow-2xl">
                                         <button class="uk-modal-close-default bg-gray-300 p-2 rounded-full m-3" type="button" uk-close></button>
                                         <h2 class="mb-2 uk-modal-title">Headline</h2>
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                     </div>
                                 </div>
                                 
                                 <!-- This is a button toggling the modal with the outside close button -->
                                 <button class="button gray" type="button" uk-toggle="target: #modal-close-outside">Outside</button>
                                 
                                 <!-- This is the modal with the outside close button -->
                                 <div id="modal-close-outside" uk-modal>
                                     <div class="uk-modal-dialog uk-modal-body rounded-md shadow-2xl">
                                         <button class="uk-modal-close-outside bg-gray-300 p-2 rounded-full" type="button" uk-close></button>
                                         <h2 class="mb-2 uk-modal-title">Headline</h2>
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                     </div>
                                 </div>
                                  
   
                                 <br><br><br><hr><br><br>
                                 <h3 class="text-lg font-semibold mb-2" id="Header-and-footer"> Header and footer </h3> 
                                 <p class="text-base mb-10">To divide the modal into different content sections, use the following classes..</p>
 
                                 <a class="button gray" href="#modal-sections" uk-toggle>Open</a>
                                 <div id="modal-sections" uk-modal>
                                     <div class="uk-modal-dialog">
                                         <button class="uk-modal-close-default m-3" type="button" uk-close></button>
                                         <div class="uk-modal-header">
                                             <h2 class="uk-modal-title">Modal Title</h2>
                                         </div>
                                         <div class="uk-modal-body">
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                         </div>
                                         <div class="uk-modal-footer text-right">
                                             <button class="button gray uk-modal-close" type="button">Cancel</button>
                                             <button class="button" type="button">Save</button>
                                         </div>
                                     </div>
                                 </div>            
                                 
                                 <br><br><br><hr><br><br>
                                 <h3 class="text-lg font-semibold mb-2" id="Overflow">Overflow </h3> 
                                 <p class="text-base mb-10">By default, the page will scroll with the modal, if its content exceeds the window height. To apply a scrollbar inside the modal, add the <code>overflow-auto</code>   to the modal body.</p>
                                 <a class="button gray" href="#modal-overflow" uk-toggle>Open</a>
 
                                 <div id="modal-overflow" uk-modal>
                                     <div class="uk-modal-dialog">
                                 
                                         <button class="uk-modal-close-default m-3" type="button" uk-close></button>
                                 
                                         <div class="uk-modal-header">
                                             <h2 class="uk-modal-title">Headline</h2>
                                         </div>
                                 
                                         <div class="uk-modal-body" uk-overflow-auto>
                                 
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                 
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                 
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                 
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                 
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                 
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                 
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                 
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                 
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                 
                                         </div>
                                         <div class="uk-modal-footer text-right">
                                             <button class="button gray uk-modal-close" type="button">Cancel</button>
                                             <button class="button" type="button">Save</button>
                                         </div>
                                 
                                     </div>
                                 </div>
 
 
                               
                             </div>
                             <div class="w-1/4 md:block hidden">
                                  <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                      <li> <a href="#basic" uk-scroll> basic </a></li>
                                      <li> <a href="#Close-button" uk-scroll> Close button  </a></li>
                                      <li> <a href="#Header-and-footer" uk-scroll>  Header and footer </a></li>
                                      <li> <a href="#Overflow" uk-scroll>  Overflow </a></li>
                                      <li> <a href="#" uk-scroll>  </a></li>
                                  </ul>
                              </div>
                         </div> 
  
 
                         
                    </div> 

                    <!-- notification  -->
                    <div>

                        <div class="md:flex md:space-x-14">
                            <div class="md:w-3/4">
                                <h2 class="text-xl font-semibold mb-2" id="basic"> Notification </h2>
                                <p class="text-base mb-10"> Create toggleable notifications that fade out automatically.  </p>
                          
                                <button class="button gray" type="button" onclick="UIkit.notification({message: 'Notification message'})">Click me</button>
                      
                                <br><br><br> <hr><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="HTML"> HTML message</h3>
                                <p class="text-base mb-10">  You can use HTML inside your notification message, like an icon from the Icon component. </p>
                       
                                <pre class="p-2 rounded-md mb-6 border-l-4 border-red-400 pl-4 bg-white shadow"><code class="lang-js hljs javascript">UIkit.notification(<span class="hljs-string">"&lt;span uk-icon='icon: check'&gt;&lt;/span&gt; Message"</span>);</code></pre>
                                
                                <button class="button gray demo" type="button" onclick="UIkit.notification({message: ' <div class=\'flex\'> <i class=\'icon-feather-check mr-2\'></i> <div class=\'text-red-600 mr-4\'>  Message </div> with an icon </div>'})">With icon</button>
                             
                                <br><br><br> <hr><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Position"> Position</h3>
                                <p class="text-base mb-10">  You can use HTML inside your notification message, like an icon from the Icon component. </p>
                          

                                <div class="grid lg:grid-cols-4 grid-cols-2 gap-3">
                                    <button class="button gray" type="button" onclick="UIkit.notification({message: 'Top Left...', pos: 'top-left'})">Top Left</button>
                                    <button class="button gray" type="button" onclick="UIkit.notification({message: 'Top Center...', pos: 'top-center'})">Top Center</button>
                                    <button class="button gray" type="button" onclick="UIkit.notification({message: 'Top Right...', pos: 'top-right'})">Top Right</button>
                                    <button class="button gray" type="button" onclick="UIkit.notification({message: 'Bottom Left...', pos: 'bottom-left'})">Bottom Left</button>
                                    <button class="button gray col-span-2" type="button" onclick="UIkit.notification({message: 'Bottom Center...', pos: 'bottom-center'})">Bottom Center</button>
                                    <button class="button gray col-span-2" type="button" onclick="UIkit.notification({message: 'Bottom Right...', pos: 'bottom-right'})">Bottom Right</button>
                                </div>


                            </div>
                            <div class="w-1/4 md:block hidden">
                                 <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                     <li> <a href="#basic" uk-scroll> basic </a></li>
                                     <li> <a href="#HTML" uk-scroll> HTML message </a></li>
                                     <li> <a href="#Position" uk-scroll> Position  </a></li>
                                 </ul>
                             </div>
                        </div> 

                    </div>
 
                    <!-- offcanvas  -->
                    <div>


                        <div class="md:flex md:space-x-14">
                            <div class="md:w-3/4">
                                <h2 class="text-xl font-semibold mb-2" id="basic"> Off-canvas </h2>
                                <p class="text-base mb-10"> Create an off-canvas sidebar that slides in and out of the page, which is perfect for creating mobile navigations.  </p>
                          
                                
                                <div class="flex items-center space-x-3">
                                      <button class="button gray" type="button" uk-toggle="target: #offcanvas-usage">Open</button>
                                      <a href="#offcanvas-usage" uk-toggle>Open</a>
                                </div>
                                
                                <div id="offcanvas-usage" uk-offcanvas>
                                    <div class="uk-offcanvas-bar bg-white p-7 shadow-2xl">
                                        <button class="uk-offcanvas-close m-2" type="button" uk-close></button>
                                
                                        <h3 class="font-medium mb-3 text-2xl">Title</h3>
                                
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                
                                    </div>
                                </div>


                                <br><br><br><hr><br>
                                <h3 class="text-lg font-semibold mb-2" id="Overlay">Overlay </h3>
                                <p class="text-base mb-10"> To add an overlay, blanking out the page, add the <code>overlay: true</code> parameter to the <code>uk-offcanvas</code> attribute. </p>
                                
                                <button class="button gray" type="button" uk-toggle="target: #offcanvas-overlay">Open</button>

                                <div id="offcanvas-overlay" uk-offcanvas="overlay: true">
                                    <div class="uk-offcanvas-bar bg-white p-7 shadow-2xl">
                                        <button class="uk-offcanvas-close m-2" type="button" uk-close></button>
                                
                                        <h3 class="font-medium mb-3 text-2xl">Title</h3>
                                
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                
                                    </div>
                                </div>


                                <br><br><br><hr><br>
                                <h3 class="text-lg font-semibold mb-2" id="Flip-modifier"> Flip modifier</h3>
                                <p class="text-base mb-10"> Add the <code>flip: true</code> parameter to the <code>uk-offcanvas</code> attribute to adjust its alignment, so that it slides in from the right. </p>

                                <button class="button gray" type="button" uk-toggle="target: #offcanvas-flip">Open</button>

                                <div id="offcanvas-flip" uk-offcanvas="overlay: true ; flip: true">
                                    <div class="uk-offcanvas-bar bg-white p-7 shadow-2xl">
                                        <button class="uk-offcanvas-close m-2" type="button" uk-close></button>
                                
                                        <h3 class="font-medium mb-3 text-2xl">Title</h3>
                                
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                
                                    </div>
                                </div>


                                <br><br><br><hr><br>
                                <h3 class="text-lg font-semibold mb-2" id="Animation-modes"> Animation modes</h3>
                                <p class="text-base mb-10">By default, the off-canvas slides in. But you can actually choose between different animation modes for the off-canvas' entrance. Just add one of the following attributes. </p>


                                <div class="flex space-x-4">
                                    <button class="button gray" type="button" uk-toggle="target: #offcanvas-slide">Slide</button>
                                    <button class="button gray" type="button" uk-toggle="target: #offcanvas-push">Push</button>
                                    <button class="button gray" type="button" uk-toggle="target: #offcanvas-reveal">Reveal</button>
                                    <button class="button gray" type="button" uk-toggle="target: #offcanvas-none">None</button>
                                </div>

                                <div id="offcanvas-slide" uk-offcanvas="overlay: true; flip: true">
                                    <div class="uk-offcanvas-bar bg-white p-7 shadow-2xl">
                                
                                        <button class="uk-offcanvas-close" type="button" uk-close></button>
                                
                                        <h3>Title</h3>
                                
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                
                                    </div>
                                </div>
                                
                                <div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true ; flip: true">
                                    <div class="uk-offcanvas-bar bg-white p-7 shadow-2xl">
                                
                                        <button class="uk-offcanvas-close" type="button" uk-close></button>
                                
                                        <h3>Title</h3>
                                
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                
                                    </div>
                                </div>
                                
                                <div id="offcanvas-reveal" uk-offcanvas="mode: reveal; overlay: true; flip: true">
                                    <div class="uk-offcanvas-bar bg-white p-7 shadow-2xl">
                                
                                        <button class="uk-offcanvas-close" type="button" uk-close></button>
                                
                                        <h3>Title</h3>
                                
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                
                                    </div>
                                </div>
                                
                                <div id="offcanvas-none" uk-offcanvas="mode: none; overlay: true; flip: true">
                                    <div class="uk-offcanvas-bar bg-white p-7 shadow-2xl">
                                
                                        <button class="uk-offcanvas-close" type="button" uk-close></button>
                                
                                        <h3>Title</h3>
                                
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                
                                    </div>
                                </div>



                            </div>
                            <div class="w-1/4 md:block hidden">
                                 <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                     <li> <a href="#basic" uk-scroll> basic </a></li>
                                     <li> <a href="#Overlay" uk-scroll> Overlay  </a></li>
                                     <li> <a href="#Flip-modifier" uk-sc☻roll> Flip modifier  </a></li>
                                     <li> <a href="#Animation-modesr" uk-sc☻roll>  Animation modes  </a></li>
                                 </ul>
                             </div>
                        </div>  

                        
                    </div> 

                    <!-- scrollspy  -->
                    <div>
                      
                        <div class="md:flex md:space-x-14">
                           <div class="md:w-3/4">
                               <h2 class="text-xl font-semibold mb-2" id="basic"> Scrollspy </h2>
                               <p class="text-base mb-10"> Trigger events and animations while scrolling your page.  </p>
                         
   
                               <div class="grid grid-cols-2 gap-5">
                                   <div>
                                       <div class="bg-white shadow p-5 rounded-md" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                                           <h3 class="text-lg font-semibold mb-2">Left</h3>
                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="bg-white shadow p-5 rounded-md" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                                           <h3 class="text-lg font-semibold mb-2">Right</h3>
                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                   </div>
                               </div>
   
   
                               <br>
   
                               <p class="text-sm">This example uses the <code>repeat: true</code> option. Scroll up and down to see the triggered animations. The layout is made with the <a href="card.html">Card component</a>.</p>
       
                               <br><br> <br> <hr> <br>
                               <h3 class="text-lg font-semibold mb-2" id="Groups"> Groups</h3>
                               <p class="text-base mb-10"> You can also group scrollspy elements, so you won't have to apply the attribute to each of them. Just add the <code>uk-scrollspy="target: SELECTOR"</code> attribute to a container element, targeting the selector of the items you want to animate inside the container. When using a delay, it will be applied cumulatively to the items that scroll into view. </p>
                               
                               <div class="uk-child-width-1-3@m" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .card; delay: 500; repeat: true">
                                   <div>
                                       <div class="card p-5">
                                           <h3 class="text-lg font-semibold mb-2">Fade</h3>
                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="card p-5">
                                           <h3 class="text-lg font-semibold mb-2">Fade</h3>
                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="card p-5">
                                           <h3 class="text-lg font-semibold mb-2">Fade</h3>
                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="card p-5">
                                           <h3 class="text-lg font-semibold mb-2">Fade</h3>
                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="card p-5">
                                           <h3 class="text-lg font-semibold mb-2">Fade</h3>
                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="card p-5">
                                           <h3 class="text-lg font-semibold mb-2">Fade</h3>
                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                   </div>
                               </div>
   
                               
                               <br><br> <br> <hr> <br>
                               <h3 class="text-lg font-semibold mb-2" id=""> Set <code>cls</code> option per target </h3>
                               <p class="text-base mb-10"> You can also give each target a separate <code>cls</code> option. Just add the <code>uk-scrollspy-class="CLASS"</code> attribute to a target element. It will override the <code>cls</code> option set on the component. </p>
   
                               <div class="uk-child-width-1-3@m" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: .card; delay: 300; repeat: true">
                                   <div>
                                       <div class="card p-5">
                                           <h3 class="text-lg font-semibold mb-2">Bottom</h3>
                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="card p-5" uk-scrollspy-class="uk-animation-slide-top">
                                           <h3 class="text-lg font-semibold mb-2">Top</h3>
                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="card p-5">
                                           <h3 class="text-lg font-semibold mb-2">Bottom</h3>
                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                   </div>
                               </div>
   
   
                             
                           </div>
                           <div class="w-1/4 md:block hidden">
                                <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                    <li> <a href="#basic" uk-scroll> basic </a></li>
                                    <li> <a href="#Groups" uk-scroll>  Groups </a></li>
                                    <li> <a href="#Set" uk-scroll>  Set class option</a></li>
                                </ul>
                            </div>
                        </div>  
                        
                    </div>  

                    <!-- sortable -->
                    <div>

                        <div class="md:flex md:space-x-14">
                            <div class="md:w-3/4">
                                <h2 class="text-xl font-semibold mb-2" id="basic"> Sortable </h2>
                                <p class="text-base"> Create sortable grids and lists to rearrange the order of its elements.  </p>
                          
                                <hr class="my-3">
                                <p class="text-sm mb-6">Drag and drop an element to a new location within the sortable grid, while the other items adjust to fit. This is great, if you want to sort items like gallery or menu items, for example.</p>

                                <ul class="grid lg:grid-cols-4 grid-cols-2 gap-3 bg-pink-100 p-4 rounded-md" uk-sortable="handle: .drag-me">
                                    <li>
                                        <div class="drag-me bg-pink-500 rounded py-4 text-center text-white">Item 1</div>
                                    </li>
                                    <li>
                                        <div class="drag-me bg-pink-500 rounded py-4 text-center text-white">Item 2</div>
                                    </li>
                                    <li>
                                        <div class="drag-me bg-pink-500 rounded py-4 text-center text-white">Item 3</div>
                                    </li>
                                    <li>
                                        <div class="drag-me bg-pink-500 rounded py-4 text-center text-white">Item 4</div>
                                    </li>
                                    <li>
                                        <div class="drag-me bg-pink-500 rounded py-4 text-center text-white">Item 5</div>
                                    </li>
                                    <li>
                                        <div class="drag-me bg-pink-500 rounded py-4 text-center text-white">Item 6</div>
                                    </li>
                                    <li>
                                        <div class="drag-me bg-pink-500 rounded py-4 text-center text-white">Item 7</div>
                                    </li>
                                    <li>
                                        <div class="drag-me bg-pink-500 rounded py-4 text-center text-white">Item 8</div>
                                    </li>
                                </ul>

                                <br><br><br><hr><br>
                                <h3 class="text-lg font-semibold mb-2" id="Handle"> Handle </h3>
                                <p class="text-base mb-10"> By default, the entire sortable element can be used for drag and drop sorting. To create a handle which will be used instead, just add the <code>handle: SELECTOR</code> option to the attribute and add the handle class to the element that you want to use as a handle </p>

                                <ul class="grid lg:grid-cols-3 grid-cols-2 gap-3 bg-green-100 p-4 rounded-md" uk-sortable="handle: .uk-sortable-handle" >
                                    <li>
                                        <div class="bg-green-500 rounded text-center text-white flex items-center">
                                            <span class="uk-sortable-handle rounded-l-md p-3 text-base bg-green-600 mr-5 text-white"> <i class="icon-feather-move"></i> </span>
                                            Item 1
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bg-green-500 rounded text-center text-white flex items-center">
                                            <span class="uk-sortable-handle rounded-l-md p-3 text-base bg-green-600 mr-5 text-white"> <i class="icon-feather-move"></i> </span>
                                            Item 2
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bg-green-500 rounded text-center text-white flex items-center">
                                            <span class="uk-sortable-handle rounded-l-md p-3 text-base bg-green-600 mr-5 text-white"> <i class="icon-feather-move"></i> </span>
                                            Item 3
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bg-green-500 rounded text-center text-white flex items-center">
                                            <span class="uk-sortable-handle rounded-l-md p-3 text-base bg-green-600 mr-5 text-white"> <i class="icon-feather-move"></i> </span>
                                            Item 4
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bg-green-500 rounded text-center text-white flex items-center">
                                            <span class="uk-sortable-handle rounded-l-md p-3 text-base bg-green-600 mr-5 text-white"> <i class="icon-feather-move"></i> </span>
                                            Item 5
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bg-green-500 rounded text-center text-white flex items-center">
                                            <span class="uk-sortable-handle rounded-l-md p-3 text-base bg-green-600 mr-5 text-white"> <i class="icon-feather-move"></i> </span>
                                            Item 6
                                        </div>
                                    </li>
                                    
                                </ul>


                                <br><br><br><hr><br>
                                <h3 class="text-lg font-semibold mb-2" id="Group"> Group</h3>
                                <p class="text-base mb-10"> To be able to sort items from one list to another, you can group them by adding the <code>group: GROUP-NAME</code> option to the <code>uk-sortable</code> attribute on each list. </p>

                                <div class="grid md:grid-cols-3 gap-2">

                                    <div class="bg-blue-200 rounded-md p-4 pb-10">
                                        <h4 class="-m-4 mb-4 border-b border-blue-300 font-semibold mb-2 px-3 py-2 text-lg text-blue-700">Group one</h4>
                                        <div uk-sortable="group: sortable-group">

                                            <div class="bg-blue-500 rounded text-center text-white flex items-center mb-2">
                                                <span class="uk-sortable-handle rounded-l-md p-3 text-base bg-blue-600 mr-5 text-white"> <i class="icon-feather-move"></i> </span>
                                                Item  
                                            </div>
                                            <div class="bg-blue-500 rounded text-center text-white flex items-center mb-2">
                                                <span class="uk-sortable-handle rounded-l-md p-3 text-base bg-blue-600 mr-5 text-white"> <i class="icon-feather-move"></i> </span>
                                                Item  
                                            </div>
                                            <div class="bg-blue-500 rounded text-center text-white flex items-center mb-2">
                                                <span class="uk-sortable-handle rounded-l-md p-3 text-base bg-blue-600 mr-5 text-white"> <i class="icon-feather-move"></i> </span>
                                                Item  
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="bg-green-200 rounded-md p-4 pb-10">
                                        <h4 class="-m-4 mb-4 border-b border-green-300 font-semibold mb-2 px-3 py-2 text-lg text-green-700">Group two</h4>
                                        <div uk-sortable="group: sortable-group">
                                             
                                            <div class="bg-green-500 rounded text-center text-white flex items-center mb-2">
                                                <span class="uk-sortable-handle rounded-l-md p-3 text-base bg-green-600 mr-5 text-white"> <i class="icon-feather-move"></i> </span>
                                                Item  
                                            </div>
                                            <div class="bg-green-500 rounded text-center text-white flex items-center mb-2">
                                                <span class="uk-sortable-handle rounded-l-md p-3 text-base bg-green-600 mr-5 text-white"> <i class="icon-feather-move"></i> </span>
                                                Item  
                                            </div>
                                            <div class="bg-green-500 rounded text-center text-white flex items-center mb-2">
                                                <span class="uk-sortable-handle rounded-l-md p-3 text-base bg-green-600 mr-5 text-white"> <i class="icon-feather-move"></i> </span>
                                                Item  
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="bg-pink-200 rounded-md p-4 pb-10">
                                        <h4 class="-m-4 mb-4 border-b border-pink-300 font-semibold mb-2 px-3 py-2 text-lg text-pink-700">Group three</h4>
                                        <div uk-sortable="group: sortable-group">
                                             
                                            <div class="bg-pink-500 rounded text-center text-white flex items-center mb-2">
                                                <span class="uk-sortable-handle rounded-l-md p-3 text-base bg-pink-600 mr-5 text-white"> <i class="icon-feather-move"></i> </span>
                                                Item 
                                            </div>
                                            <div class="bg-pink-500 rounded text-center text-white flex items-center mb-2">
                                                <span class="uk-sortable-handle rounded-l-md p-3 text-base bg-pink-600 mr-5 text-white"> <i class="icon-feather-move"></i> </span>
                                                Item 
                                            </div>
                                            <div class="bg-pink-500 rounded text-center text-white flex items-center mb-2">
                                                <span class="uk-sortable-handle rounded-l-md p-3 text-base bg-pink-600 mr-5 text-white"> <i class="icon-feather-move"></i> </span>
                                                Item 
                                            </div>
                                            
                                            
                                        </div>
                                    </div>


                                </div>


                                <br><br><br><hr><br>
                                <h3 class="text-lg font-semibold mb-2" id="Custom-class"> Custom class</h3>
                                <p class="text-base mb-10">  You can also apply one or more custom classes to items when they are being dragged. To do so, add the <code>cls-custom: MY-CLASS</code> option to the attribute. </p>

                                <div class="grid md:grid-cols-2 gap-4" uk-sortable="cls-custom: transform -rotate-6 shadow-2xl">

                                    <div class="bg-white rounded-lg shadow-md p-3 flex "> 
                                        <div class="bg-blue-600 rounded-lg w-1.5"></div>
                                        <div class="ml-4 flex-1">
                                            <div class="font-semibold text-lg"> General</div>
                                            <p class="text-sm"> Just simple test </p> 
                                            <div class="flex items-center space-x-1 text-red-400 text-xs mt-2"> <i class="icon-feather-calendar pr-1"></i> <div> 23 </div> <div> Dec </div>  <div> 2021 </div>  </div>
                                        </div>
                                        <i class="icon-feather-star text-xl"></i>
                                    </div>

                                    <div class="bg-white rounded-lg shadow-md p-3 flex"> 
                                        <div class="bg-green-600 rounded-lg w-1.5"></div>
                                        <div class="ml-4 flex-1">
                                            <div class="font-semibold text-lg"> Designs</div>
                                            <p class="text-sm"> Just simple test </p> 
                                            <div class="flex items-center space-x-1 text-red-400 text-xs mt-2"> <i class="icon-feather-calendar pr-1"></i> <div> 23 </div> <div> Dec </div>  <div> 2021 </div>  </div>
                                        </div>
                                        <i class="icon-feather-refresh-ccw text-xl"></i>
                                    </div>

                                    <div class="bg-white rounded-lg shadow-md p-3 flex "> 
                                        <div class="bg-pink-600 rounded-lg w-1.5"></div>
                                        <div class="ml-4 flex-1">
                                            <div class="font-semibold text-lg"> Markups</div>
                                            <p class="text-sm"> Just simple test </p> 
                                            <div class="flex items-center space-x-1 text-red-400 text-xs mt-2"> <i class="icon-feather-calendar pr-1"></i> <div> 23 </div> <div> Dec </div>  <div> 2021 </div>  </div>
                                        </div>
                                        <i class="icon-feather-refresh-ccw text-xl"></i>
                                    </div>

                                    <div class="bg-white rounded-lg shadow-md p-3 flex"> 
                                        <div class="bg-yellow-600 rounded-lg w-1.5"></div>
                                        <div class="ml-4 flex-1">
                                            <div class="font-semibold text-lg"> Comming soon</div>
                                            <p class="text-sm"> Just simple tast </p> 
                                            <div class="flex items-center space-x-1 text-red-400 text-xs mt-2"> <i class="icon-feather-calendar pr-1"></i> <div> 23 </div> <div> Dec </div>  <div> 2021 </div>  </div>
                                        </div>
                                        <i class="icon-feather-star text-xl"></i>
                                    </div>

                                </div>
 

                              
                            </div>
                            <div class="w-1/4 md:block hidden">
                                 <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                     <li> <a href="#basic" uk-scroll> basic </a></li>
                                     <li> <a href="#Handle" uk-scroll> Handle  </a></li>
                                     <li> <a href="#Group" uk-scroll> Group  </a></li>
                                     <li> <a href="#Custom-class" uk-scroll> Custom class  </a></li>
                                 </ul>
                             </div>
                        </div> 

 
                    </div>  

                    <!-- tooltip  -->
                    <div>
                        
                        <div class="md:flex md:space-x-14">
                            <div class="md:w-3/4">
                                <h2 class="text-xl font-semibold mb-2" id="basic"> Tooltip </h2>
                                <p class="text-base mb-10"> Easily create a nice looking tooltip. </p>
                          
                                <button class="button gray" uk-tooltip="Hello World">Hover</button>
        
                                <br><br><br>
                                <h3 class="text-lg font-semibold mb-2" id=""> Alignment </h3>
                                <p class="text-base mb-10"> Add one of the following options to the <code>uk-tooltip</code> attribute to adjust the tooltip's alignment. </p>

                                <pre class="bg-gray-200 p-3 mb-4 rounded-md"><code class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">uk-tooltip</span>=<span class="hljs-string">"title: Hello World; pos: top-left"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span></code></pre>
                              

                                <ul class="grid lg:grid-cols-4 grid-cols-2 gap-3 bg-purple-200 p-4 rounded-md">
                                    <li>
                                        <div class="bg-purple-500 rounded py-4 text-center text-white" uk-tooltip="Hello World">Top</div>
                                    </li>
                                    <li>
                                        <div class="bg-purple-500 rounded py-4 text-center text-white" uk-tooltip="title: Hello World; pos: top-left">Top Left</div>
                                    </li>
                                    <li>
                                        <div class="bg-purple-500 rounded py-4 text-center text-white" uk-tooltip="title: Hello World; pos: top-right">Top Right</div>
                                    </li>
                                    <li>
                                        <div class="bg-purple-500 rounded py-4 text-center text-white" uk-tooltip="title: Hello World; pos: bottom">Bottom</div>
                                    </li>
                                    <li>
                                        <div class="bg-purple-500 rounded py-4 text-center text-white" uk-tooltip="title: Hello World; pos: bottom-left">Bottom Left  </div>
                                    </li>
                                    <li>
                                        <div class="bg-purple-500 rounded py-4 text-center text-white" uk-tooltip="title: Hello World; pos: bottom-right">Bottom Right</div>
                                    </li>
                                    <li>
                                        <div class="bg-purple-500 rounded py-4 text-center text-white" uk-tooltip="title: Hello World; pos: left">Left</div>
                                    </li>
                                    <li>
                                        <div class="bg-purple-500 rounded py-4 text-center text-white" uk-tooltip="title: Hello World; pos: right">Right</div>
                                    </li>
                                </ul>
                                  
                                
                                <br><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Delay"> Delay </h3>
                                <p class="text-base mb-10"> If you want the tooltip to appear with a little delay, just add the <code>delay</code> option to the <code>uk-tooltip</code> attribute with your value in milliseconds. </p>
                                
                                <button class="button gray" uk-tooltip="title: Hello World; delay: 500">Hover</button>
  
                              
                            </div>
                            <div class="w-1/4 md:block hidden">
                                 <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                     <li> <a href="#basic" uk-scroll> basic </a></li>
                                     <li> <a href="#Delay" uk-scroll>  Delay </a></li>
                                 </ul>
                             </div>
                        </div> 
 
                        
                    </div>  
                   
                    <!-- slider  -->
                    <div>
                       
                        <div class="md:flex md:space-x-14">
                            <div class="md:w-3/4">
                                <h2 class="text-xl font-semibold mb-2" id="basic"> Slider </h2>
                                <p class="text-base mb-3"> Create a responsive carousel slider.  </p>
                                <hr class="my-3">
                                <p class="text-sm mb-10">The Slider component is fully responsive and supports touch and swipe navigation as well as mouse drag for desktops. It even accelerates to keep up with your pace when you click through previous and next navigation. All animations are hardware accelerated for a smoother performance.</p>
        
                                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
    
                                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                                        <li>
                                            <img src="public/assets/images/demos/docs-demo/slider1.jpg" alt="">
                                        </li>
                                        <li>
                                            <img src="public/assets/images/demos/docs-demo/slider2.jpg" alt="">
                                        </li>
                                        <li>
                                            <img src="public/assets/images/demos/docs-demo/slider3.jpg" alt="">
                                        </li>
                                        <li>
                                            <img src="public/assets/images/demos/docs-demo/slider4.jpg" alt="">
                                        </li>
                                        <li>
                                            <img src="public/assets/images/demos/docs-demo/slider1.jpg" alt="">
                                        </li>
                                       
                                    </ul>
                                
                                    <a class="uk-position-center-left uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                
                                </div>
                                
                                <br><br><br><hr><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Gap"> Gap </h3>
                                <p class="text-base mb-10"> <p>To apply a gap to the slider items, use the <a href="https://getuikit.com/docs/grid">Grid component</a> and add the <code>.uk-grid</code> class to the slider. The elements will then be spaced according to the grid gap. You can use the modifiers like <code>.uk-grid-small</code> to change the gap.</p> </p>
                                
    
                                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
    
                                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid uk-grid-small">
                                        <li>
                                            <img src="public/assets/images/demos/docs-demo/slider1.jpg" alt="" class="rounded-md">
                                        </li>
                                        <li>
                                            <img src="public/assets/images/demos/docs-demo/slider2.jpg" alt="" class="rounded-md">
                                        </li>
                                        <li>
                                            <img src="public/assets/images/demos/docs-demo/slider3.jpg" alt="" class="rounded-md">
                                        </li>
                                        <li>
                                            <img src="public/assets/images/demos/docs-demo/slider4.jpg" alt="" class="rounded-md">
                                        </li>
                                        <li>
                                            <img src="public/assets/images/demos/docs-demo/slider1.jpg" alt="" class="rounded-md">
                                        </li>
                                       
                                    </ul>
                                
                                    <a class="uk-position-center-left uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                
                                </div>
                                
                                <br><br><br><hr><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Center">Center </h3>
                                <p class="text-base mb-10">By default, items of the slider always are aligned to the left. To center the list items, just add <code>uk-slider="center: true"</code> to the attribute.  </p>
                                
                                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true">
    
                                    <ul class="uk-slider-items uk-grid">
                                        <li class="uk-width-3-4">
                                            <img src="public/assets/images/demos/docs-demo/slider1.jpg" alt="" class="w-full h-60 object-cover rounded-md">
                                        </li>
                                        <li class="uk-width-3-4">
                                            <img src="public/assets/images/demos/docs-demo/slider2.jpg" alt="" class="w-full h-60 object-cover rounded-md">
                                        </li class="uk-width-3-4"> 
                                        <li>
                                            <img src="public/assets/images/demos/docs-demo/slider3.jpg" alt="" class="w-full h-60 object-cover rounded-md">
                                        </li class="uk-width-3-4">
                                        <li>
                                            <img src="public/assets/images/demos/docs-demo/slider4.jpg" alt="" class="w-full h-60 object-cover rounded-md">
                                        </li> 
                                    </ul>
                                
                                    <a class="uk-position-center-left uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                
                                </div> 
                                
                                
                                <br><br><br><hr><br><br>
                                <h3 class="text-lg font-semibold mb-2" id="Navigation">Navigation </h3>
                                <p class="text-base mb-10"> To navigate through your slides, just use the <code>uk-slider-item</code> attribute. To target the slides, set the attribute of every nav item to the index number of the respective slider item. The elements with the <code>uk-slider-item</code> attribute need to be inside the <code>uk-slider</code> container. Setting the attribute to <code>next</code> and <code>previous</code> will switch to the adjacent slides. </p>
                                
                                <div uk-slider>
    
                                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                                
                                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid uk-grid-small">
                                            <li>
                                                <img src="public/assets/images/demos/docs-demo/slider1.jpg" alt="" class="rounded-md">
                                            </li>
                                            <li>
                                                <img src="public/assets/images/demos/docs-demo/slider2.jpg" alt="" class="rounded-md">
                                            </li>
                                            <li>
                                                <img src="public/assets/images/demos/docs-demo/slider3.jpg" alt="" class="rounded-md">
                                            </li>
                                            <li>
                                                <img src="public/assets/images/demos/docs-demo/slider4.jpg" alt="" class="rounded-md">
                                            </li>
                                            <li>
                                                <img src="public/assets/images/demos/docs-demo/slider1.jpg" alt="" class="rounded-md">
                                            </li>
                                        </ul>
                                
                                        <a class="uk-position-center-left uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                        <a class="uk-position-center-right uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                    
                                    </div>
                                
                                    <ul class="uk-slider-nav uk-dotnav uk-flex-center mt-5"></ul>
                                
                                </div>
     
    
                              
                            </div>
                            <div class="w-1/4 md:block hidden">
                                 <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                     <li> <a href="#basic" uk-scroll> basic </a></li>
                                     <li> <a href="#Gap" uk-scroll>  Gap </a></li>
                                     <li> <a href="#Center" uk-scroll>  Center </a></li>
                                     <li> <a href="#Navigation" uk-scroll>  Navigation </a></li>
                                 </ul>
                             </div>
                        </div> 
  
                    </div> 

                    <!-- slideshow  -->
                    <div>


                        <div class="md:flex md:space-x-14">
                            <div class="md:w-3/4">
                                <h2 class="text-xl font-semibold mb-2" id="basic"> Slideshow </h2>

                                <p class="text-base mb-3"> Create a responsive slideshow with images and videos.  </p>
                                <hr class="my-3">
                                <p class="text-sm mb-10">The Slideshow component is fully responsive and supports touch and swipe navigation as well as mouse drag for desktops. When swiping between slides, the animation literally sticks at your fingertips or mouse cursor. It even accelerates to keep up with your pace when you click through previous and next navigation. All animations are hardware accelerated for a smoother performance.</p>
 
                                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow>

                                    <ul class="uk-slideshow-items">
                                        <li>
                                            <img src="public/assets/images/demos/docs-demo/photo.jpg" alt="" uk-cover>
                                        </li>
                                        <li>
                                            <img src="public/assets/images/demos/docs-demo/light.jpg" alt="" uk-cover>
                                        </li>
                                        <li>
                                            <img src="public/assets/images/demos/docs-demo/dark.jpg" alt="" uk-cover>
                                        </li>
                                    </ul>
                                 
                                    <a class="uk-position-center-left uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                                </div>


                                <br><br> <br><hr>  <br>
                                <h3 class="text-lg font-semibold mb-2" id="Animations"> Animations</h3>
                                <p class="text-base mb-10"> By default, the slideshow uses a <code>slide</code> animation. You can set the <code>animation</code> option to use a different animation.  </p>

                                <div class="uk-child-width-1-2@m" uk-grid>
                                    <div>
                                
                                        <div class="text-lg font-semibold mb-2">Slide</div>
                                
                                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow>
                                
                                            <ul class="uk-slideshow-items">
                                                <li>
                                                    <img src="public/assets/images/demos/docs-demo/photo.jpg" alt="" uk-cover>
                                                </li>
                                                <li>
                                                    <img src="public/assets/images/demos/docs-demo/dark.jpg" alt="" uk-cover>
                                                </li>
                                                <li>
                                                    <img src="public/assets/images/demos/docs-demo/light.jpg" alt="" uk-cover>
                                                </li>
                                            </ul>
                                
                                            <a class="uk-position-center-left uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                            <a class="uk-position-center-right uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
        
                                        </div>
                                
                                    </div>
                                    <div>
                                
                                        <div class="text-lg font-semibold mb-2">Fade</div>
                                
                                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: fade">
                                
                                            <ul class="uk-slideshow-items">
                                                <li>
                                                    <img src="public/assets/images/demos/docs-demo/photo.jpg" alt="" uk-cover>
                                                </li>
                                                <li>
                                                    <img src="public/assets/images/demos/docs-demo/dark.jpg" alt="" uk-cover>
                                                </li>
                                                <li>
                                                    <img src="public/assets/images/demos/docs-demo/light.jpg" alt="" uk-cover>
                                                </li>
                                            </ul>
                                
                                            <a class="uk-position-center-left uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                            <a class="uk-position-center-right uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
        
                                        </div>
                                
                                    </div>
                                    <div>
                                
                                        <div class="text-lg font-semibold mb-2">Scale</div>
                                
                                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: scale">
                                
                                            <ul class="uk-slideshow-items">
                                                <li>
                                                    <img src="public/assets/images/demos/docs-demo/light.jpg" alt="" uk-cover>
                                                </li>
                                                <li>
                                                    <img src="public/assets/images/demos/docs-demo/dark.jpg" alt="" uk-cover>
                                                </li>
                                                <li>
                                                    <img src="public/assets/images/demos/docs-demo/photo.jpg" alt="" uk-cover>
                                                </li>
                                            </ul>
                                
                                            <a class="uk-position-center-left uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                            <a class="uk-position-center-right uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
        
                                        </div>
                                
                                    </div>
                                    <div>
                                
                                        <div class="text-lg font-semibold mb-2">Pull</div>
                                
                                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: pull">
                                
                                            <ul class="uk-slideshow-items">
                                                <li>
                                                    <img src="public/assets/images/demos/docs-demo/photo.jpg" alt="" uk-cover>
                                                </li>
                                                <li>
                                                    <img src="public/assets/images/demos/docs-demo/dark.jpg" alt="" uk-cover>
                                                </li>
                                                <li>
                                                    <img src="public/assets/images/demos/docs-demo/light.jpg" alt="" uk-cover>
                                                </li>
                                            </ul>
                                
                                            <a class="uk-position-center-left uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                            <a class="uk-position-center-right uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
        
                                        </div>
                                
                                    </div>
                                    <div>
                                
                                        <div class="text-lg font-semibold mb-2">Push</div>
                                
                                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push">
                                
                                            <ul class="uk-slideshow-items">
                                                <li>
                                                    <img src="public/assets/images/demos/docs-demo/dark.jpg" alt="" uk-cover>
                                                </li>
                                                <li>
                                                    <img src="public/assets/images/demos/docs-demo/photo.jpg" alt="" uk-cover>
                                                </li>
                                                <li>
                                                    <img src="public/assets/images/demos/docs-demo/light.jpg" alt="" uk-cover>
                                                </li>
                                            </ul>
                                
                                            <a class="uk-position-center-left uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                            <a class="uk-position-center-right uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
        
                                        </div>
                                
                                    </div>
                                </div>
                                
                                
                                <br><br> <br><hr>  <br>
                                <h3 class="text-lg font-semibold mb-2" id="Ken"> Ken Burns effect</h3>
                                <p class="text-base mb-10">To add a simple Ken Burns effect, wrap the image with a <code>div</code> and add the <code>.uk-position-cover</code> and <code>.uk-animation-kenburns</code> classes. You can also apply the <code>.uk-animation-reverse</code> or one of the <code>.uk-transform-origin-*</code> classes from the  >Utility component</a> to modify the effect.  </p>

                                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push">

                                    <ul class="uk-slideshow-items">
                                        <li>
                                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                                <img src="public/assets/images/demos/docs-demo/photo.jpg" alt="" uk-cover>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-top-right">
                                                <img src="public/assets/images/demos/docs-demo/dark.jpg" alt="" uk-cover>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-left">
                                                <img src="public/assets/images/demos/docs-demo/light.jpg" alt="" uk-cover>
                                            </div>
                                        </li>
                                    </ul>
                                
                                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                                
                                </div>


                                <br><br> <br><hr>  <br>
                                <h3 class="text-lg font-semibold mb-2" id="overlays"> Content overlays </h3>
                                <p class="text-base mb-10">Add content overlays using the Position component. It allows you to place the content anywhere inside the slide. </p>
 
                                <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="animation: push">

                                    <ul class="uk-slideshow-items">
                                        <li>
                                            <img src="public/assets/images/demos/docs-demo/photo.jpg" alt="" uk-cover>
                                            <div class="text-center uk-position-bottom p-5 backdrop-filter backdrop-blur-md">
                                                <h2 class="font-bold text-2xl text-white">Overlay Bottom</h2>
                                                <p class="text-lg text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="public/assets/images/demos/docs-demo/dark.jpg" alt="" uk-cover>
                                            <div class="uk-position-center text-center p-5">
                                                <h3 class="font-bold text-2xl text-white"> Center</h3>
                                                <p class="text-lg text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="public/assets/images/demos/docs-demo/dark.jpg" alt="" uk-cover>
                                            <div class="uk-position-bottom-right p-5">
                                                <h3 class="font-bold text-2xl text-white">Overlay Bottom Right</h3>
                                                <p class="text-lg text-white">Lorem ipsum dolor sit amet.</p>
                                            </div>
                                        </li>
                                    </ul>
                                
                                    <a class="uk-position-center-left uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small uk-hidden-hover text-white p-4" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                                
                                </div>

                              
                            </div>
                            <div class="w-1/4 md:block hidden">
                                 <ul class="docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:90;media : @m">
                                     <li> <a href="#basic" uk-scroll> basic </a></li>
                                     <li> <a href="#Animations" uk-scroll> Animations  </a></li>
                                     <li> <a href="#Ken" uk-scroll> Ken Burns effect  </a></li>
                                     <li> <a href="#overlays" uk-scroll> Content overlays  </a></li>
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


