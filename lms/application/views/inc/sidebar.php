 <!-- sidebar -->
        <div class="sidebar">
            <div class="sidebar_inner" data-simplebar>
                
                <ul class="side-colored">
                    <li class=" <?=getActive('explore')?>"><a href="explore">
                            <ion-icon name="compass" class="bg-gradient-to-br from-purple-300 p-1 rounded-md side-icon text-opacity-80 text-white to-blue-500">
                            </ion-icon>
                            <span> Explore</span>
                        </a>
                    </li>
                    <li class="<?=getActive('courses')?>" ><a href="courses">
                            <ion-icon name="play-circle" class="bg-gradient-to-br from-yellow-300 p-1 rounded-md side-icon text-opacity-80 text-white to-red-500">
                            </ion-icon>
                            <span> Courses</span>
                        </a>
                    </li>
                    <li class="<?=getActive('myassignments')?>" ><a href="myassignments">
                            <ion-icon name="albums"  class="bg-gradient-to-br from-green-300 p-1 rounded-md side-icon text-opacity-80 text-white to-green-500">
                            </ion-icon>
                            <span> Assignments </span>
                        </a>
                    </li>
                    
                    <li class="<?=getActive('books')?>"><a href="books">
                            <ion-icon name="book" class="bg-gradient-to-br from-yellow-300 p-1 rounded-md side-icon text-opacity-80 text-white to-red-500">
                            </ion-icon>
                            <span> Books </span>
                        </a>
                    </li>
                    <li class="<?=getActive('class_schedules')?>"><a href="class_schedules">
                            <ion-icon name="newspaper" class="bg-gradient-to-br from-purple-300 p-1 rounded-md side-icon text-opacity-80 text-white to-blue-500">
                            </ion-icon>
                            <span> class schedules</span>
                        </a>
                    </li>
                    <li class="<?=getActive('zukulee_events')?>"><a href="zukulee_events">
                            <ion-icon name="newspaper" class="bg-gradient-to-br from-purple-300 p-1 rounded-md side-icon text-opacity-80 text-white to-blue-500">
                            </ion-icon>
                            <span> Events</span>
                        </a>
                    </li>
                    
                    <li class="hidden <?=getActive('articles')?>"><a href="articles">
                            <ion-icon name="newspaper" class="bg-gradient-to-br from-purple-300 p-1 rounded-md side-icon text-opacity-80 text-white to-blue-500">
                            </ion-icon>
                            <span> Articles</span>
                        </a>
                    </li>
                    
                    <li ><a href="auth/userlogout">
                            <ion-icon name="newspaper" class="bg-gradient-to-br from-purple-300 p-1 rounded-md side-icon text-opacity-80 text-white to-blue-500">
                            </ion-icon>
                            <span> Logout</span>
                        </a>
                    </li>
                    
                    
                </ul>

                <ul class="side_links hidden" data-sub-title="Pages">
                    <li><a href="page-pricing"> <ion-icon name="card-outline" class="side-icon"></ion-icon> Pricing  </a></li>
                    <li><a href="page-help"> <ion-icon name="information-circle-outline" class="side-icon"></ion-icon> Help </a></li>
                    <li><a href="page-faq"> <ion-icon name="albums-outline" class="side-icon"></ion-icon> Faq </a></li>
                    <li><a href="page-forum"> <ion-icon name="chatbubble-ellipses-outline" class="side-icon"></ion-icon> Forum <span class="soon">new</span> </a></li>
                    <li><a href="pages-cart"> <ion-icon name="receipt-outline" class="side-icon"></ion-icon> Cart list </a></li>
                    <li><a href="pages-account-info"> <ion-icon name="reader-outline" class="side-icon"></ion-icon> Billing </a></li>
                    <li><a href="pages-payment-info"> <ion-icon name="wallet-outline" class="side-icon"></ion-icon> Payments</a></li>
                    <li><a href="page-term"> <ion-icon name="document-outline" class="side-icon"></ion-icon> Term </a></li>
                    <li><a href="page-privacy"> <ion-icon name="document-text-outline" class="side-icon"></ion-icon> Privacy </a></li> 
                    <li><a href="page-setting"> <ion-icon name="settings-outline" class="side-icon"></ion-icon> Setting </a></li> 
                    <li><a href="#"> Development  </a> 
                        <ul>
                            <li><a href="development-elements"> Elements  </a></li>
                            <li><a href="development-components"> Compounents </a></li>
                            <li><a href="development-plugins"> Plugins </a></li>
                            <li><a href="development-icons"> Icons </a></li>
                        </ul>
                    </li>
                    <li><a href="#"> Authentication  </a> 
                        <ul>
                            <li><a href="form-login">form login </a></li>
                            <li><a href="form-register">form register</a></li> 
                        </ul>
                    </li>
                </ul>

                <div class="side_foot_links hidden">
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