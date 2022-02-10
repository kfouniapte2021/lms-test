<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
      
<head>
<base href="<?php echo base_url() ?>">    

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Stripe paymeny</title>
<style>
/**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
  box-sizing: border-box;

  height: 40px;

  padding: 10px 12px;

  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;

  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;}
  .container{
	 padding: 5% 20%;
    background-color: #a9a9a926; 
	  }
	  .jubmbo{ border: 1px solid;
    background-color: #fff;
    border-radius: 5px;
    padding: 54px 54px;}
	.myButton {
	box-shadow:inset 0px 1px 0px 0px #54a3f7;
	background:linear-gradient(to bottom, #007dc1 5%, #0061a7 100%);
	background-color:#007dc1;
	border-radius:3px;
	border:1px solid #124d77;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #154682;
}
.myButton:hover {
	background:linear-gradient(to bottom, #0061a7 5%, #007dc1 100%);
	background-color:#0061a7;
}
.myButton:active {
	position:relative;
	top:1px;
}
.centered {

  position: fixed;

  top: 50%;

  left: 50%; z-index: 9999;

  /* bring your own prefixes */

  transform: translate(-50%, -50%);

}
   .hidden{ display:none;}     
   .alert-success{ background-color:#6C9; border-radius:10px; padding:10px;}
   .alert-danger{ background-color:#F99; border-radius:10px; padding:10px;}
</style>
</head>

<body>
<div id="loader" class="hidden">

    <div id="loading-img" class="centered"> 

    

    <img src="<?php echo base_url(); ?>assets/loader.gif">

    </div>

    </div>
         <script src="https://js.stripe.com/v3/"></script>
         <div class="container">
         <div class="jubmbo">
<?php
if(isset($row)){
?>
<p><b>Package Title </b><?php echo $row->title ?></p>
<p><b>Amount to be payed </b><?php echo $row->price; ?></p>
<?php } ?>
<form  method="post" id="payment-form">
<div class="alert"></div>
  <div class="form-row">
    <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>
<br>
  <button class="myButton">Submit Payment</button>
</form>
</div>
</div>
</body>
</html>
        <script src="public/js/jquery.min.js"></script>

<script>
         // Create a Stripe client.
var stripe = Stripe('<?=STRIPE_PUBLISH_KEY_TEST?>');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');
// Handle real-time validation errors from the card Element.
card.on('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  
   var formData = new FormData();
			formData.append("stripeToken", token.id);
	
  //form.appendChild(hiddenInput);

  // Submit the form
  //form.submit();
  // run ajax call and save data into databae after deducting the payment
  		    $.ajax({
			type: "POST",
			url: "<?php echo base_url().'stripe/stripePayment'; ?>",
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			beforeSend: function() {
			$('#loader').removeClass('hidden');
			//$('#form_sample .btn_au').addClass('hidden');
			},
				success: function(data) {
					
			$('#loader').addClass('hidden');
			var data = jQuery.parseJSON(data);
			if (data.status == 200)
            {   
				alert('Subscribed successfully!');
				window.location='<?php echo base_url() ?>';
            }
           else if (data.status ==204)
            {  
			$(".alert").addClass('alert-danger');
				$(".alert").html(data.message);
				$(".alert").removeClass('hidden');
				setTimeout(function(){
				$(".alert").addClass('hidden');
				},3000);
            }
			
		}
	 });

  
}
         </script>