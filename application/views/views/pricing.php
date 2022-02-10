 <?php include_once'includes/header.php'; ?>

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg4 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Pricing</li>
                    </ul>
                    <h2>Transparent Pricing</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Pricing Area -->
        <section class="pricing-area ptb-100">
            <div class="container">
                <div class="pricing-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Packages</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                         <?php
	if($data->num_rows()>0){
	foreach ($data->result() as $row){
		
		?>
                            <tr>
                                <td><?php echo ucfirst($row->title); ?></td>
                                <td><?php echo ucfirst($row->description); ?></td>
                                <td><?php echo CURRENCY_SYMBOL.' '. ucfirst($row->price); ?></td>
                                <td><a class="btn btn-info" href="stripe/index/<?=$row->id?>">Subscribe</a></td>
                            </tr>
                            	<?php }
	}
		
	?>
                            
                        </tbody>
                    </table>
                    
                    
                   
                </div>
            </div>
        </section>
        <!-- End Pricing Area -->

        <!-- Start Become Instructor & Partner Area -->
        <section class="become-instructor-partner-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="become-instructor-partner-content bg-color">
                            <h2>Become an Instructor</h2>
                            <p>Choose from hundreds of free courses, or get a degree or certificate at a breakthrough price. Learn at your own pace.</p>
                            <a href="login.php" class="default-btn"><i class='bx bx-plus-circle icon-arrow before'></i><span class="label">Apply Now</span><i class="bx bx-plus-circle icon-arrow after"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="become-instructor-partner-image bg-image1 jarallax" data-jarallax='{"speed": 0.3}'>
                            <img src="public/img/become-instructor.jpg" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="become-instructor-partner-image bg-image2 jarallax" data-jarallax='{"speed": 0.3}'>
                            <img src="public/img/become-partner.jpg" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="become-instructor-partner-content">
                            <h2>Become a Partner</h2>
                            <p>Choose from hundreds of free courses, or get a degree or certificate at a breakthrough price. Learn at your own pace.</p>
                            <a href="login.php" class="default-btn"><i class='bx bx-plus-circle icon-arrow before'></i><span class="label">Contact Us</span><i class="bx bx-plus-circle icon-arrow after"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Become Instructor & Partner Area -->

         <?php include_once'includes/footer.php'; ?>
         
