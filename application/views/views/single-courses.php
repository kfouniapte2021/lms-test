 <?php include_once'includes/header.php'; ?>

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:void(0)">Courses</a></li>
                        <li><?=ucfirst($row->courseTitle); ?></li>
                    </ul>
                    <h2>Courses</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->
<?php if(isset($row)){?>
        <!-- Start Courses Details Area -->
        <section class="courses-details-area pt-100 pb-70">
            <div class="container">
                <div class="courses-details-header">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="courses-title">
                                <h2><?=ucfirst($row->courseTitle); ?></h2>
                                <p><?=ucfirst($row->short_description)?></p>
                            </div>

                            <div class="courses-meta">
                                <ul>
                                    <li>
                                        <i class='bx bx-folder-open'></i>
                                        <span>Course for</span>
                                        <a href="#"><?=ucfirst($row->class_name)?> > <?=ucfirst($row->subjects)?> ><?=ucfirst($row->terms)?> </a>
                                    </li>
                                    <li>
                                        <i class='bx bx-group'></i>
                                        <span>Students Enrolled</span>
                                        <a href="#">813,454</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="courses-price">
                                <div class="courses-review">
                                    <div class="review-stars">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <span class="reviews-total d-inline-block">(2 reviews)</span>
                                </div>

                                
                                <a href="subscriber/pricing" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Buy Subscription</span><i class="bx bx-paper-plane icon-arrow after"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="courses-details-image text-center">
                        <?php 
						if($row->video_url!=''){
							$video_url=base_url().'uploads/'.$row->video_url;
							$thumbnail=base_url().'uploads/'.$row->thumbnail;
						?>
                        <video poster="<?=$thumbnail?>" style="width: 100%;" controls >
                                                    <source src="<?=$video_url?>" type="video/mp4">
                                                </video>
                        <?php } else { ?>
                       <video style="width: 100%;" controls >
                                                    <source src="public/video.mp4" type="video/mp4">
                                                </video>
                                                <?php } ?>
                                                </div>
<?php
								if($lectures->num_rows()>0){
								?>
                        <div class="courses-details-desc">
                            <h3>What you'll learn</h3>

                            <div class="why-you-learn">
                                <ul>
                                <?php
								foreach($lectures->num_rows() as $lec){
								 ?>
                                    <li>
                                        <span>
                                            <i class='bx bx-check'></i>
                                            <?php echo ucfirst($lec->title); ?>
                                        </span>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
<?php } ?>
                            <h3>ABOUT COURSE</h3>

                          <?=ucfirst($row->post_description)?>

                            <h3>Meet your instructors</h3>

                            <div class="courses-author">
                                <div class="author-profile-header"></div>
                                <div class="author-profile">
                                    <div class="author-profile-title">
                                        <img src="<?php echo base_url().'uploads/'.$row->trainerImage ?>" class="shadow-sm rounded-circle" alt="image">

                                        <div class="author-profile-title-details d-flex justify-content-between">
                                            <div class="author-profile-details">
                                                <h4><?=ucfirst($row->trainerName)?></h4>
                                                <span class="d-block"><?=ucfirst($row->trainerDesignation)?></span>
                                            </div>

                                            <div class="author-profile-raque-profile hidden">
                                                <a href="single-instructor.php" class="d-inline-block">View Profile on Raque</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?=ucfirst($row->trainerDescription)?>
                                </div>
                            </div>

                            
                        </div>

                        
                    </div>

                    <div class="col-lg-4">
                        <div class="courses-sidebar-information">
                            <ul>
                                <li>
                                    <span><i class='bx bx-group'></i> Students:</span>
                                    10
                                </li>
                                <li>
                                    <span><i class='bx bx-time'></i> Length:</span>
                                    1 Weeks
                                </li>
                                <li>
                                    <span><i class='bx bx-tachometer'></i> Effort:</span>
                                    2–5 hours per week
                                </li>
                               
                                <li>
                                    <span><i class='bx bxs-graduation'></i> Subject:</span>
                                    <?=ucfirst($row->subjects)?>
                                </li>
                                <li>
                                    <span><i class='bx bx-atom'></i> Quizzes:</span>
                                    Yes
                                </li>
                                <li>
                                    <span><i class='bx bxs-badge-check'></i> Level:</span>
                                    Introductory
                                </li>
                                <li>
                                    <span><i class='bx bx-support'></i> Language:</span>
                                    English
                                </li>
                                <li>
                                    <span><i class='bx bx-text'></i> Video Subtitle:</span>
                                    English
                                </li>
                                <li>
                                    <span><i class='bx bx-certification'></i> Certificate:</span>
                                    Yes
                                </li>
                            </ul>
                        </div>
<?php 

if($this->session->userdata('userlogin')==1){
							?>
                        <div class="courses-sidebar-syllabus">
                        <span> Start your quize for grade   : </span> <a href="quiz/index/<?=base64_encode($row->course_id)?>" class="btn btn-info"> Give Quiz</a>
                             </div>
                            <?php } ?>
                        <div class="courses-sidebar-syllabus">
                            <h3>Course videos</h3>
                           
                            <div class="courses-list">
                                <?=$lecturevideos?>
                            </div>

                           
                        </div>

                        <div class="courses-purchase-info hidden">
                            <h4>Interested in this course for your Business or Team?</h4>
                            <p>Train your employees in the most in-demand topics, with edX for Business.</p>

                            <a href="#" class="d-inline-block">Purchase now</a>
                            <a href="#" class="d-inline-block">Request Information</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Courses Details Area -->
<?php } ?>
    <?php include_once'includes/footer.php'; ?>
    <div class="modal fade" id="video_preview" role="dialog">

    <div class="modal-dialog">

    	<div class="modal-content">

        	

          <div class="modal-body">

            <p>Some text in the modal.</p>

          </div>

      </div>

    </div>

    </div>
    <script>
    
function preview_video(id){

			

			accessvideo = $("#cvideo_"+id).html();

			var url  = '<?php echo base_url();?>uploads/lectures/'+accessvideo;

			var makevideo ='<a href="javascript:void(0);" data-dismiss="modal" style="color: cadetblue;margin: 0;position: absolute;right: -7px;top: -4px;border: 2px solid;padding: 2px 8px;border-radius: 16px;background: white;"><strong>X</strong></a><div>&nbsp;</div>';

		makevideo += '<video id="my-video" controls preload="auto" width="450px"  style="margin: 0 0 0 12px"   data-setup="{}"> <source src="'+url+'" type="video/mp4"> </video>';

			

			

			$('#video_preview').modal('show');

			$("#video_preview .modal-body").html(makevideo);

			return false;

		}

    </script>
