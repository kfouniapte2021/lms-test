<?php include_once'includes/header.php'; ?>

        <!-- Start Contact Info Area -->
        <section class="contact-info-area pt-100 pb-70 mtop8" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-info-box mb-30">
                            <div class="icon">
                                <i class='bx bx-envelope'></i>
                            </div>

                            <h3>Email Here</h3>
                            <p><a href="mailto:<?php echo $setting->email ?>"><?php echo $setting->email ?></a></p>
                          
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-info-box mb-30">
                            <div class="icon">
                                <i class='bx bx-map'></i>
                            </div>

                            <h3>Location Here</h3>
                            <p><a  target="_blank"><?php echo $setting->address ?></a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                        <div class="contact-info-box mb-30">
                            <div class="icon">
                                <i class='bx bx-phone-call'></i>
                            </div>

                            <h3>Call Here</h3>
                            <p><a href="tel:1234567890"><?php echo $setting->phone ?></a></p>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div id="particles-js-circle-bubble-2"></div>
        </section>
        <!-- End Contact Info Area -->

        <!-- Start Contact Area -->
        <section class="contact-area pb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Contact Us</span>
                    <h2>Drop us Message for any Query</h2>
                    <p>We are available 24/7 One of our representative approach you in a while upon request.</p>
                </div>

                <div class="contact-form">
                <?php
				if(isset($status)){
				
					echo '<div class="alert alert-'.$status['type'].'">'.$status['msg'].'</div>';
					}
				?>
                    <form  method="post" action="contact">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn" name="contactsubmit"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Send Message</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div id="particles-js-circle-bubble-3"></div>
            <div class="contact-bg-image"><img src="public/img/map.png" alt="image"></div>
        </section>
        <!-- End Contact Area -->

      
<?php include_once'includes/footer.php'; ?>