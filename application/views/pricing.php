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
                             <td><a class="btn btn-info" href="javascript:void(0)" onclick="payWithPaystack(<?=$row->id?>,<?=$row->price?>)" >Subscribe</a></td>
                            </tr>
                            	<?php }
	}
		
	?>
                            
                        </tbody>
                    </table>
                    
                    
                      <div id="paystack-element" >
<script src="https://js.paystack.co/v1/inline.js"></script>

                    

						
                       
                           
                        

                        </div>

                        

                    </div>
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
                            <a href="contact" class="default-btn"><i class='bx bx-plus-circle icon-arrow before'></i><span class="label">Apply Now</span><i class="bx bx-plus-circle icon-arrow after"></i></a>
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
                            <a href="contact" class="default-btn"><i class='bx bx-plus-circle icon-arrow before'></i><span class="label">Contact Us</span><i class="bx bx-plus-circle icon-arrow after"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Become Instructor & Partner Area -->

         <?php include_once'includes/footer.php'; ?>\
         <script>
           function payWithPaystack(package_id,amount){

    var handler = PaystackPop.setup({

      key: 'pk_test_f577a3172066ea782fd4c191299f6ba98cc2940a',

      email: '<?php echo get_session('email') ?>',

      amount: amount*100 ,

      currency: "NGN",

      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you

      firstname: '<?php echo get_session('name') ?>',

      

      // label: "Optional string that replaces customer email"

      metadata: {

         custom_fields: [

            {

                
                value: "<?php echo get_session('phone') ?>"

            }

         ]

      },

      callback: function(response){
		  if(response.status=='success'){
			   var formData = new FormData();
	formData.append('trxref',response.trxref);
	formData.append('trans',response.trans);
	formData.append('reference',response.reference);
	formData.append('status',response.status);
	formData.append('package_id',package_id);
	formData.append('amount',amount);

			$.ajax({
			type: "POST",
			url: "<?php echo base_url().'paystack/charge'; ?>",
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			dataType: 'JSON',
			beforeSend: function() {
			$('#loader').removeClass('hidden');

			},
			success: function(data) {
				if(data.status==200){

					alert(data.message);
					window.location='page/coursesList';
					}

				}

			 });



			  }

          

		  

      },

      onClose: function(){

          alert('window closed');

      }

    });

    handler.openIframe();

  }

         </script>
         
