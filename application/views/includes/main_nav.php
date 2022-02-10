<div class="navbar-area  ">
                <div class="raque-responsive-nav">
                    <div class="container">
                        <div class="raque-responsive-menu">
                            <div class="logo">
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="raque-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="index.php">
                                <?php
							   $logo=base_url().'uploads/'.$setting->image; 
							  
								   echo '<img class="logo" src="'.$logo.'" alt="zenith learning ">';
								   
							   ?>
                            </a>

                            <div class="collapse navbar-collapse mean-menu">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a href="index.php" class="nav-link active">Home </a>
                                        
                                    </li>

                                    <li class="nav-item"><a href="#" class="nav-link">About <i class='bx bx-chevron-down'></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="page/about" class="nav-link">About Us</a>
                                                
                                            </li>
                                            
                                            <li class="nav-item"><a href="page/instructors" class="nav-link">Instructors </a>
                                                
                                            </li>

                                         

                                            
                                        </ul>
                                    </li>

                                    

                                 <?php 

if($this->session->userdata('userlogin')==1){
							?>
<li class="nav-item"><a href="page/coursesList" class="nav-link">Courses </a>
<?php } ?>
                                        
                                    </li>
<li class="nav-item"><a href="page/bookcategories" class="nav-link">Library </a>
                                        
                                    </li>
                                    <li class="nav-item"><a href="page/contact" class="nav-link">Contact</a></li>
                                    
                                    <?php 
									if($this->session->userdata('userlogin')==1)
									{
							?>
                                     <li class="nav-item"><a href="javascript:void(0)" class="nav-link"><i class='bx bx-user'></i><?=$u['name']?> <i class='bx bx-chevron-down'></i></a>
                                        <ul class="dropdown-menu">
                                            
                                            <li class="nav-item"><a href="auth/userlogout" class="nav-link">Logout </a>
                                                
                                            </li>

                                         <?php } ?>

                                            
                                        </ul>
                                    </li>
                                    
                                </ul>

                                <div class="others-option hidden">
                                    <div class="dropdown language-switcher d-inline-block">
                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="assets/img/us-flag.jpg" class="shadow" alt="image">
                                            <span>Eng <i class='bx bx-chevron-down'></i></span>
                                        </button>

                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img src="assets/img/germany-flag.jpg" class="shadow-sm" alt="flag">
                                                <span>Ger</span>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img src="assets/img/france-flag.jpg" class="shadow-sm" alt="flag">
                                                <span>Fre</span>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img src="assets/img/spain-flag.jpg" class="shadow-sm" alt="flag">
                                                <span>Spa</span>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img src="assets/img/russia-flag.jpg" class="shadow-sm" alt="flag">
                                                <span>Rus</span>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img src="assets/img/italy-flag.jpg" class="shadow-sm" alt="flag">
                                                <span>Ita</span>
                                            </a>
                                        </div>
                                    </div>

                                    <a href="cart.php" class="cart-wrapper-btn d-inline-block">
                                        <i class='bx bx-cart-alt'></i>
                                        <span>01</span>
                                    </a>

                                    <div class="search-box d-inline-block">
                                        <i class='bx bx-search'></i>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        
                    </div>
                </div>
            </div>
           