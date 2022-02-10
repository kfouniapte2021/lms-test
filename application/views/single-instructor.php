<?php include_once'includes/header.php'; ?>
        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Profile</li>
                    </ul>
                    <h2>Profile</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Instructor Details Area -->
        <section class="instructor-details-area pt-100 pb-70">
            <div class="container">
                <div class="instructor-details-desc">
                <?php 
				if($trainer->num_rows()>0){ 
				$trainer=$trainer->row();
				?>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="instructor-details-sidebar">
                                <img src="<?php echo base_url().'uploads/'.$trainer->image; ?>" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8">
                            <div class="instructor-details">
                                <h3><?=ucfirst($trainer->name)?>, <italic><?=ucfirst($trainer->address)?></italic></h3>
                                
                                <p ><span class="sub-title"> <i class="bx bx-briefcase"></i> What i teach : <?=ucfirst($trainer->designation)?></span> <i class="bx bx-envelope"></i> <?=ucfirst($trainer->email)?> </p>
                            
                             <h2>About Me</h2>   
                             
                              <?php 
							  if($trainer->description!=''){
							 echo  ucfirst($trainer->description);
							  }else{
								  echo ' Career professionals outside of education that are aspiring educators with a desire to make a difference. No formal experience in a classroom is necessary.';
							  }
							  ?>
                                
                               
                                
                            </div>
                        </div>
                    </div>
					
					<?php } ?>
                </div>

                

                
            </div>
        </section>
        <!-- End Instructor Details Area -->

   <?php include_once'includes/footer.php'; ?>