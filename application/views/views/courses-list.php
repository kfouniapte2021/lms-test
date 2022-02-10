<?php include_once'includes/header.php'; ?>
        <!-- Start Page Title Area -->
        <div class="page-title-area page-title-style-two item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Courses</li>
                    </ul>
                    <h2>Courses List</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Courses Area -->
        <section class="courses-area ptb-100">
            <div class="container">
                <div class="courses-topbar">
                    <div class="row align-items-center hidden">
                        <div class="col-lg-4 col-md-4">
                            <div class="topbar-result-count">
                                <p>Showing 1 – 6 of 54</p>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8">
                            <div class="topbar-ordering-and-search">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-md-5 offset-lg-4 offset-md-1 col-sm-6">
                                        <div class="topbar-ordering">
                                            <select>
                                                <option>Sort by popularity</option>
                                                <option>Sort by latest</option>
                                                <option>Default sorting</option>
                                                <option>Sort by rating</option>
                                                <option>Sort by new</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 col-md-6 col-sm-6">
                                        <div class="topbar-search">
                                            <form>
                                                <label><i class="bx bx-search"></i></label>
                                                <input type="text" class="input-search" placeholder="Search here...">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row cyphersol">
                   
                              <?php
	if($courses->result()){
	foreach ($courses->result() as $row){
	$coursesDetailLink=	'page/coursesDetail/'.base64_encode($row->course_id);
	$thumbnail=base_url().'uploads/'.$row->thumbnail;
		?>
                       <div class="col-lg-4 col-md-6">        
                        <div class="single-courses-box mb-30">
                            <div class="courses-image">
                                <a href="<?=$coursesDetailLink?>" class="d-block"><img class="img-responsive" src="<?=$thumbnail?>" alt="image"></a>

                                <div class="courses-tag">
                                    <a href="#" class="d-block"><?=$row->class_name?></a>
                                </div>
                            </div>

                            <div class="courses-content">
                                <div class="course-author d-flex align-items-center">
                                    <img src="<?php echo base_url().'uploads/'.$row->trainerImage?>" class="rounded-circle mr-2" alt="image">
                                    <span><?=$row->trainerName?></span>
                                </div>

                                <h3><a href="<?=$coursesDetailLink?>" class="d-inline-block"><?=$row->courseTitle?></a></h3>

                                <div class="courses-rating">
                                    <div class="review-stars-rated">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>

                                    <div class="rating-total">
                                        5.0 (1 rating)
                                    </div>
                                </div>
                            </div>

                            <div class="courses-box-footer">
                                <ul>
                                    <li class="students-number">
                                        <i class='bx bx-user'></i> 10 students
                                    </li>

                                    <li class="courses-lesson">
                                        <i class='bx bx-book-open'></i> 6 lessons
                                    </li>

                                    <li class="courses-price hidden">
                                        <?=$row->price?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                         </div>
                    <?php }
	}
		
	?>
                   

                         <div class="col-lg-12 col-md-12 col-sm-12 hidden">
                        <div class="pagination-area text-center">
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="page-numbers">5</a>
                            <a href="#" class="next page-numbers"><i class='bx bx-chevron-right'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Courses Area -->
<?php include_once'includes/footer.php'; ?>