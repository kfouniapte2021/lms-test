<script type="text/javascript">
	 
	    function subscribe()
   {
	
	    $("#sbcriber_id").removeClass('br_red');
	  if($("#sbcriber_id").val() =='')
	  {
		$("#sbcriber_id").addClass('br_red');
		return false;  
	  }
	  $(".sbcms").hide();
	  	  $(".sbcms").html('');

	   var sbcriber_id = $("#sbcriber_id").val();
	   
       $('#loader').removeClass('hidden');
		jQuery.ajax({
			method:"POST",    
			url :'<?php echo base_url().'Subscriber' ?>',
			data:{'sbcriber':sbcriber_id},
			success: function(response)
			{
				$('#loader').addClass('hidden');
				if(response!='')
				{ 
					$(".sbcms").show();
					$(".sbcms").append(response);
					setTimeout(function(){
						$("#sbcriber_id").val('');
						$(".sbcms").hide('slow');
						},4000);
				}
				
			}
		});	
	}
          

	 function loggedin_user(){


	
		var formData = new FormData();

		var other_data = $('#form_user_loggedin').serializeArray();

		

		$.each(other_data,function(key,input){

		

			formData.append(input.name,input.value);

		});   

       

	    $.ajax({

		url: "<?php echo base_url().'auth/userlogin'; ?>",

		type: 'POST',

		data: formData,

		dataType: "json",

		processData: false,

		contentType: false,

		beforeSend: function() {

			$('#loader').removeClass('hidden');

		},

		success: function(response) {

		$('#loader').addClass('hidden');

         if (response.status == 1)

			{   

			   showAlert(response.message,'alert-success');

			   setTimeout(function(){

				window.location="<?php echo base_url() ?>";

				

				},2000);

			}

			else if (response.status ==0)

            {  

				 showAlert(response.message,'alert-danger');
			}else

			{

			   showAlert(response.message,'alert-danger');

			}

           }

       });

     }  


	function create_user(){

		var formData = new FormData();
		var other_data = $('#payment-form').serializeArray();
		$.each(other_data,function(key,input)
		{
			formData.append(input.name,input.value);
		}); 
		$.ajax({
        url: "<?php echo base_url().'auth/createaccount'; ?>",
		type: 'POST',
		data: formData,
		dataType: "json",
		processData: false,
		contentType: false,
        beforeSend: function() {
			$('#loader').removeClass('hidden');
			},
        success: function(response) {
			$('#loader').addClass('hidden');
			if (response.status == 1)
			{   
			    showAlert(response.message,'alert-success')
				setTimeout(function(){

				  window.location="<?php base_url() ?>user/login";

				},3000);
			}
			else if (response.status ==2)

            {  
				showAlert(response.message,'alert-danger');
				setTimeout(function(){

				  window.location="<?php base_url() ?>user/login";

				},5000);

			}
           else if (response.status ==0)



            {  

              showAlert(response.message,title='Error','red');
			  setTimeout(function(){

				$('.alert').hide('slow');

				},5000);

			}

			else  

			{   

				

				showAlert(response.message,'alert-danger');

				
 setTimeout(function(){

				$('.alert').hide('slow');

				},4000);
			}

		 }

       });

     }                             

function showAlert(message,type){
	$('.alert').show('slow');
	$('.alert').html(message);
	$('.alert').removeClass('alert-warning');
	$('.alert').removeClass('alert-danger');
	$('.alert').removeClass('alert-success');
	$('.alert').addClass(type);
	
	
	}
</script>