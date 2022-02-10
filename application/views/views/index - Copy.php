<?php include_once'includes/header.php'; ?>

        <!-- Start Main Banner -->
        <section class="banner-wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="wrapper-content">
                            <h1>A better future starts here</h1>
                            <p>Raque supports students by introducing collaborators outside R, internships and research experience abroad.</p>

                            <form class="hidden">
                                <input type="text" class="input-search" placeholder="What do you want to learn?">
                                <button type="button">Search</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="banner-courses-category">
                            <ul>
                             <?php
	if($subjects->result()){
	foreach ($subjects->result() as $row){
		
		?>
                                <li>
                                    <a href="#">
                                        <i class='bx <?=$row->icon_class?>'></i>
                                        <?=$row->title?>
                                    </a>
                                </li>
<?php }
	}
		
	?>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Main Banner -->
        <!-- Start Courses Area -->
        <section class="courses-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-left">
                    <span class="sub-title">Discover Courses</span>
                    <h2>Trending Courses</h2>
                    <a href="page/coursesList" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span class="label">View More</span><i class="bx bx-show-alt icon-arrow after"></i></a>
                </div>

                <div class="row cyphersol">
                                <div class="team-slides owl-carousel owl-theme">

                <?php
	if($courses->result()){
	foreach ($courses->result() as $row){
		$coursesDetailLink=	'page/coursesDetail/'.base64_encode($row->course_id);
	$thumbnail=base_url().'uploads/'.$row->thumbnail;
	
		?>
                              
                        <div class="single-courses-box mb-30">
                            <div class="courses-image">
                                <a href="<?=$coursesDetailLink?>" class="d-block"><img class="img-responsive" src="<?=$thumbnail?>" alt="image"></a>

                                <div class="courses-tag">
                                <?php 
								if($this->session->userdata('userlogin')==1){
								?>
                                    <a href="<?=$coursesDetailLink?>" class="d-block"><?=$row->class_name?></a>
                                    
                                    <?php }?>
                                </div>
                            </div>

                            <div class="courses-content">
                                <div class="course-author d-flex align-items-center">
                                    <img src="<?php echo base_url().'uploads/'.$row->trainerImage?>" class="rounded-circle mr-2" alt="image">
                                    <span><?=$row->trainerName?></span>
                                </div>

                                <h3><?php 
								if($this->session->userdata('userlogin')==1){
								?><a href="<?=$coursesDetailLink?>" class="d-inline-block"><?=$row->courseTitle?></a>
                                 <?php }else {?>
                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal" class="d-inline-block"><?=$row->courseTitle?></a>
                                 <?php } ?>
                                </h3>

                                <div class="courses-rating hidden">
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

                            <div class="courses-box-footer hidden">
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
                    <?php }
	}
		
	?>
                   
                </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login Please!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        You need to login to see the courses details and acccess other features of LMS
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="user/login" class="btn btn-primary">Login</a>
      </div>
    </div>
  </div>
</div>
        <!-- End Courses Area -->

        <!-- Start Courses Area -->
        
        <!-- End Courses Area -->

        <!-- Start Courses Area -->
        
        <!-- End Courses Area -->

        <!-- Start How It Works Area -->
        
        <!-- End How It Works Area -->

        <!-- Start Team Area -->
        <section class="team-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Make Connections</span>
                    <h2>Team of Instructors</h2>
                    
                </div>

                <div class="team-slides owl-carousel owl-theme">
                 <?php
	if($trainer->result()){
	foreach ($trainer->result() as $row){
		
		?>
                    <div class="single-instructor-box mb-30">
                        <div class="image">
                            <img height="300px" src="<?php echo base_url().'uploads/'.$row->image; ?>" alt="image">

                            <ul class="social">
                                <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3><a href="user/instructor/<?php echo $row->id ?>"><?=ucfirst($row->name)?></a></h3>
                            <span><?=ucfirst($row->designation)?></span>
                        </div>
                    </div>
  <?php }
	}
		else{
	?>
                    <div class="single-instructor-box mb-30">
                        <div class="image">
                            <img src="public/img/team/2.jpg" alt="image">
                            
                            <ul class="social">
                                <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3><a href="single-instructor.php">Sarah Taylor</a></h3>
                            <span>UX/UI Designer</span>
                        </div>
                    </div>

                    <div class="single-instructor-box mb-30">
                        <div class="image">
                            <img src="public/img/team/3.jpg" alt="image">
                            
                            <ul class="social">
                                <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3><a href="single-instructor.php">Lee Munroe</a></h3>
                            <span>Web Developer</span>
                        </div>
                    </div>

                    <div class="single-instructor-box mb-30">
                        <div class="image">
                            <img src="public/img/team/4.jpg" alt="image">
                            
                            <ul class="social">
                                <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3><a href="single-instructor.php">Jonkin Jullinor</a></h3>
                            <span>OOP Developer</span>
                        </div>
                    </div>
                    <div class="single-instructor-box mb-30">
                        <div class="image">
                            <img src="public/img/team/1.jpg" alt="image">

                            <ul class="social">
                                <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3><a href="single-instructor.php">Alex Maxwel</a></h3>
                            <span>CEO & Founder</span>
                        </div>
                    </div>

                    <div class="single-instructor-box mb-30">
                        <div class="image">
                            <img src="public/img/team/2.jpg" alt="image">
                            
                            <ul class="social">
                                <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3><a href="single-instructor.php">Sarah Taylor</a></h3>
                            <span>UX/UI Designer</span>
                        </div>
                    </div>

                    <div class="single-instructor-box mb-30">
                        <div class="image">
                            <img src="public/img/team/3.jpg" alt="image">
                            
                            <ul class="social">
                                <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3><a href="single-instructor.php">Lee Munroe</a></h3>
                            <span>Web Developer</span>
                        </div>
                    </div>

                    <div class="single-instructor-box mb-30">
                        <div class="image">
                            <img src="public/img/team/4.jpg" alt="image">
                            
                            <ul class="social">
                                <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3><a href="single-instructor.php">Jonkin Jullinor</a></h3>
                            <span>OOP Developer</span>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            
            <div id="particles-js-circle-bubble-3"></div>
        </section>
        <!-- End Team Area -->

        <!-- Start Feedback Area -->
        <section class="feedback-area ptb-100">
            <div class="container">
                <div class="feedback-slides owl-carousel owl-theme">
                 <?php
	if($testimonial->result()){
	foreach ($testimonial->result() as $row){
		
		?>
                    <div class="single-feedback-item">
                        <p>“<?=ucfirst($row->description)?>.”</p>

                        <div class="info">
                            <h3><?=ucfirst($row->text)?></h3>
                            <!--<span>Switzerland</span>-->
                            <img src="<?php echo base_url().'uploads/'.$row->image; ?>" class="shadow rounded-circle" alt="image">
                        </div>
                    </div>
 <?php }}else{ ?>
                    <div class="single-feedback-item">
                        <p>“The difference between school and life? In school, you're taught a lesson and then given a test. In life, you're given a test that teaches you a lesson.”</p>

                        <div class="info">
                            <h3>Lina D'Souza</h3>
                            <span>Switzerland</span>
                            <img src="public/img/user2.jpg" class="shadow rounded-circle" alt="image">
                        </div>
                    </div>

                    <div class="single-feedback-item">
                        <p>“If a man empties his purse into his head, no man can take it away from him. An investment in knowledge always pays the best interest.”</p>

                        <div class="info">
                            <h3>David Warner</h3>
                            <span>Switzerland</span>
                            <img src="public/img/user3.jpg" class="shadow rounded-circle" alt="image">
                        </div>
                    </div>
                     <?php } ?>
                </div>
            </div>
        </section>
        <!-- End Feedback Area -->

        <!-- Start Partner Area -->
        <section class="partner-area ptb-70 hidden">
            <div class="container">
                <div class="partner-slides owl-carousel owl-theme">
                    <div class="single-partner-item">
                        <a href="#" class="d-block">
                            <img src="public/img/partner/7.png" alt="image">
                        </a>
                    </div>

                    <div class="single-partner-item">
                        <a href="#" class="d-block">
                            <img src="public/img/partner/8.png" alt="image">
                        </a>
                    </div>

                    <div class="single-partner-item">
                        <a href="#" class="d-block">
                            <img src="public/img/partner/9.png" alt="image">
                        </a>
                    </div>

                    <div class="single-partner-item">
                        <a href="#" class="d-block">
                            <img src="public/img/partner/10.png" alt="image">
                        </a>
                    </div>

                    <div class="single-partner-item">
                        <a href="#" class="d-block">
                            <img src="public/img/partner/11.png" alt="image">
                        </a>
                    </div>

                    <div class="single-partner-item">
                        <a href="#" class="d-block">
                            <img src="public/img/partner/12.png" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Partner Area -->

        
<?php include_once"includes/footer.php" ?>