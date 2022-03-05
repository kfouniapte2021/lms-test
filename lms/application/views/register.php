<html lang="en">
<head>
<?php include_once'inc/head.php'; ?>

  <style>
    input , .bootstrap-select.btn-group button{
        background-color: #f3f4f6  !important;
        height: 44px  !important;
        box-shadow: none  !important; 
    }
  </style>

</head>

<body>


  <div id="wrapper" class="flex flex-col justify-between h-screen">
<div class="alert" style="display:none"></div>
      <!-- header-->
      <div class="bg-white py-4 shadow dark:bg-gray-800">
          <div class="max-w-6xl mx-auto">


              <div class="flex items-center lg:justify-between justify-around">

                  <a href="index.php">
                      <img src="public/assets/images/logo.png" alt="" >
                  </a>

                  <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                   <?php
						
							
							if($this->session->userdata('userlogin')==1){
								
							?>
                                               <a class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white" href="user/dashboard">Dashboard</a>
                                                <a class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white" href="auth/userlogout">Logout</a>
                                                <?php }else{ ?>
                      <a href="user/login" class="py-3 px-4">Login</a>
                      <a href="user/register" class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white">Register</a>
                      <?php } ?>
                  </div>

              </div>
          </div>
      </div>

      <!-- Content-->
      <div>
          <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
              <form id="payment-form" method="post" class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md">
                  <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Register </h1>

                  <div class="grid lg:grid-cols-2 gap-3">
                      <div>
                          <label class="mb-0" for="first-name">First  Name </label>
                          <input type="text" required placeholder="First Name" name="fname"   id="fname" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                      </div>
                      <div>
                          <label class="mb-0" for="first-name">Last  Name </label>
                          <input type="text" required placeholder="Last Name" name="lname"   id="lname" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                      </div>
                      
                  </div>
                  
                  <div>
                      <label class="mb-0" for="email"> Email Address </label>
                      <input type="email" name="email" required placeholder="Info@example.com" id="email" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                  </div>
                  <div>
                      <label class="mb-0" for="password"> Password </label>
                      <input type="password" required placeholder="******" name="password" id="password" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                  </div>
                  <div class="grid lg:grid-cols-2 gap-3">
                      <div>
                          <label class="mb-0" for="first-name">  Phone </label>
                          <input type="text" required placeholder="Your Phone" name="phone"   id="phone" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                      </div>
                      
                      <div>
                          <label class="mb-0" for="age">  Age (in years) </label>
                          <input type="number"   name="age"   id="age" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                      </div>
                  </div>
                  
                  <div class="grid lg:grid-cols-2 gap-3">
                      <div>
                      <?php 
					  $referred_by='';
					  if(isset($_GET['ref'])){
						  if(ifvalidref($_GET['ref'])){
							  $referred_by=$_GET['ref'];
							  }
						  }
					  ?>
                          <label class="mb-0" for="first-name">  Refrel code </label>
                          <input type="text" value="<?=$referred_by?>"   name="referred_by"   id="referred_by" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                      </div>
                      <div>
                          <label class="mb-0" for="first-name">  Sponsor </label>
                          <input type="text"   name="sponsor"   id="sponsor" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                      </div>
                  </div>
                   
                  
                  <div class="grid lg:grid-cols-2 gap-3">
                   <div>
                          <label class="mb-0" for="first-name">  Country </label>
                          <input type="text"   name="country"   id="Country" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                      </div>
                      <div>
                          <label class="mb-0" for="first-name">  City of Residency </label>
                          <input type="text"   name="city"   id="city" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                      </div>
                      
                  </div>
                  
                  <div class="grid lg:grid-cols-1 gap-3">
                      <div>
                          <label class="mb-0"> Choose class </label>
                          
                          <select required class="selectpicker mt-2" name="class_id" >
                        <option value="" > Choose Class</option>
						<?php 
						if($classes->result()){
						 foreach ($classes->result() as $class){
						?>  
                           
                             
                            <option value="<?php echo $class->id;?>" >
							<?php echo $class->class_name;?>
                            </option>
                            
                       <?php 
					       }
					   }?>     
                      </select>

                      </div>
                      
                  </div>
                  <div class="grid lg:grid-cols-2 gap-3">
                  <div>
                          <label class="mb-0" for="first-name">  Level </label>
                                          
                                          <select required class="selectpicker mt-2" name="terms" >
                                          <option value="Beginner">Beginner</option>
                                          <option  value="Intermediate">Intermediat</option>
                                          <option  value="Advanced">Advance</option>
                                          
                      </select>

                      </div>
                      <div>
                          <label class="mb-0" for="first-name">  Language </label>
                                          
                                          <select required class="selectpicker mt-2" name="language" >
                                          <option value="French">French</option>
                                          <option  value="English">English</option>
                                          
                      </select>

                      </div>
                      
                      
                      
                  </div>
                  <hr>
                  
<div class="stripe">
<div >
  <div class="form-row">
    <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display Element errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

</div>
<script src="https://js.stripe.com/v3/"></script>
<script>
// Set your publishable key: remember to change this to your live publishable key in production
// See your keys here: https://dashboard.stripe.com/apikeys
var stripe = Stripe('<?php echo STRIPE_PUBLISH_KEY_TEST; ?>');
var elements = stripe.elements();


// Custom styling can be passed to options when creating an Element.
var style = {
  base: {
    // Add your base input styles here. For example:
    fontSize: '16px',
    color: '#32325d',
  },
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');
/*********** create a token *********/

// Create a token or display an error when the form is submitted.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the customer that there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});
/*********** submit a token *********/
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);
create_user();
  // Submit the form
  //form.submit();
}
</script>
</div>
<hr>
                  <div class="checkbox">
                      <input type="checkbox" id="chekcbox1" checked="">
                      <label for="chekcbox1"><span class="checkbox-icon"></span> I agree to the <a href="terms" target="_blank" class="uk-text-bold uk-text-small uk-link-reset"> Terms and Conditions </a>
                      </label>
                      
                  </div>

                  <div>
                      <button id="btnSubmit" type="submit" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                       <i class="fa fa-user"></i>   Pay & continue $780</button>
                  </div>
              </form>


          </div>
      </div>
      
      <!-- Footer -->

<?php include_once'copyright.php'; ?>

  </div>

<?php include_once'inc/commonjs.php'; ?>
<?php include_once'includes/js/user.php'; ?>



</body>

</html>