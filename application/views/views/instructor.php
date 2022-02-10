<?php 

include_once'includes/header.php'; ?>

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Instructors</li>
                    </ul>
                    <h2>Team of Instructors</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Team Area -->
        <section class="team-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                <?php 
				if($instructors->num_rows()>0){
					foreach($instructors->result() as $row){
						//print_r($row);
				?>
                    <div class="col-lg-3 col-md-63 col-sm-6 col-xs-6">
                        <div class="single-instructor-member mb-30">
                            <div class="member-image">
                                <img src="<?=$row->image?>" height="300" width="300" alt="images">
                            </div>

                            <div class="member-content">
                                <h3 align="left"><a href="user/instructor/<?=$row->id?>"><?=$row->name?></a></h3>
                                <span class="pull-left"><?=$row->designation?></span>
                                <span class="pull-left">Class / <?=$row->assignedSubject?></span>
                                <p style="margin-bottom: 0;"><a style="padding:10px" class=" btn-info" href="user/instructor/<?=$row->id?>">View Detail</a></p>
                                <ul class="social hidden">
                                    <li><a href="#" class="facebook" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href="#" class="twitter" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href="#" class="instagram" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="#" class="linkedin" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
<?php } }  else{?>
                   
                    <?php /*?><div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-instructor-member mb-30">
                            <div class="member-image">
                                <img src="public/img/team/6.jpg" alt="images">
                            </div>

                            <div class="member-content">
                                <h3><a href="single-instructor.php">Sakira Lucy</a></h3>
                                <span>Software Developer</span>

                                <ul class="social">
                                    <li><a href="#" class="facebook" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href="#" class="twitter" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href="#" class="instagram" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="#" class="linkedin" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><?php */?>
                    <?php } ?>
                </div>
            </div>

            <div id="particles-js-circle-bubble-3"></div>
        </section>
        <!-- End Team Area -->

        <?php include_once'includes/footer.php'; ?>
