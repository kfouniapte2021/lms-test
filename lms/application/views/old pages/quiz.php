 <?php include_once'includes/header.php'; ?>
<style>
.csbtn{padding: 5px 37px;}
.nav-pills li a{
    padding: 0 20px;
    margin: 0 18px 0 0px;
}
.nav-pills .active{
	padding: 0 20px;
    margin: 0 18px 0 0px;
}
.nav-pills li:hover {  color:#000}
.nav-pills li {
    
    border: 1px solid;
}
</style>
        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg4 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        
                    </ul>
                    <h2>Quiz</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start  Area -->
        <section class="pricing-area ptb-100">
        
            <div class="container">
            
            <?=$quiz_title?>
            <?php 
		//	pre($this->session->userdata());
           if($this->session->userdata('login')==true){

			
?>
            <ul class="nav nav-pills">
  <li class="active"><a data-toggle="pill"  class="active" href="#Objective">Objective</a></li>
  <li><a data-toggle="pill" href="#Subjective">Subjective</a></li>
</ul>

<div class="tab-content">
  <div id="Objective" class="tab-pane fade in active show">
  <p class="pull-right">  <?=$totalQuestion?></p>
  <br><br><br>
  <span id="result"></span>
                <?php 
				echo $html;
				?>
  </div>
  <div id="Subjective" class="tab-pane fade">
  <br><br>
    <?php
	if($course_subjectives->num_rows()){
		foreach($course_subjectives->result() as $row){
	?>
    
    <p><?=ucfirst($row->title)?></p>
    
    <?php }?>
    
    <?php
	$submittedMessage='';
	$consideredForMarks=true;
	$marksMessage='';
	if(isset($quize_attempted)){
		if($quize_attempted->pdffile!=''){
			$path=base_url().'uploads/'.$quize_attempted->pdffile;
			$submittedMessage='<p class=" alert-success" >You have submitted the file .<a href="'.$path.'" download><i class="bx bx-cloud-download"></i> click to download</a></p>';
			}
		if($quize_attempted->long_questions_marks!=NULL ){
			$consideredForMarks=false;
			$marksMessage='You Subjective marks are: '.$quize_attempted->long_questions_marks;
			}	
	}
	 ?>
	<div class="jumbotron">
    <?php echo $submittedMessage ?>
    <?php
	if($consideredForMarks){
	?>
    <form method="post" id="form_add_update">
          <div class="col-xs-12 col-md-6">
                      <label><b>  Submit your file in pdf for grades </b></label>
                   <input type="file" name="image" id="image" accept="application/pdf"  /><div class="clearfix">&nbsp;</div>
       <div class="col-xs-12 pad0">    
      <button type="submit" class="btn btn-info btn-block">Submit </button>
                     <div class="alert hidden"></div>
                      </div>
                      </div>

    </form>
    <?php }else { ?>
    <p class="alert-success" ><?php echo $marksMessage ?></p>
    <?php } ?>
    
	</div>
	<?php }else { ?>
    <p>Not available</p>
    <?php } ?>
  </div>
  
</div>
            <?php }else { ?>
            <div class="alert alert-danger">You need to <a href="user/login">Login</a> to continue!</div>
            <?php } ?>
            
            </div>
        </section>
        <!-- End  Area -->

         <?php include_once'includes/footer.php'; ?>
         <script>
		 /**********************************save************************************/
	 $('#form_add_update').on("submit",function(e) {
		e.preventDefault();
		
		 var formData = new FormData();
	var other_data = $('#form_add_update').serializeArray();
    $.each(other_data,function(key,input){
        formData.append(input.name,input.value);
    });   
	 if($('#image').val()!=''){
		formData.append("image", document.getElementById('image').files[0]);
		}
		
	// ajax start
		    $.ajax({
			type: "POST",
			url: "<?php echo base_url().'quiz/saveSubjective'; ?>",
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			dataType: 'JSON',
			beforeSend: function() {
			$('#loader').removeClass('hidden');
			},
			success: function(data) {
			$('#loader').addClass('hidden');
			 if (data.status == 1 || data.status == 2)
            {   
				$(".alert").addClass('alert-success');
				$(".alert").html(data.message);
				$(".alert").removeClass('hidden');
				setTimeout(function(){
				$(".alert").addClass('hidden');
				$('#form_add_update')[0].reset();
				//window.location=data.redirect;
				},2000);
            }
           else if (data.status ==0)
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

	//ajax end    
    });
 
		 function gonext(id){
			 
			 }
         $('.btnShow').click(function(){
			  var formData = new FormData();
			 var myId = $(this).attr('id');
			 $('.question_wrap').hide();
			 $('#question_wrap'+myId).show();
			 		formData.append("id", myId);

			 		    $.ajax({
			type: "POST",
			url: "<?php echo base_url().'quiz/saveResult'; ?>",
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			dataType: 'JSON',
			beforeSend: function() {
			$('#loader').removeClass('hidden');
			$('#some_div').html('');
			},
			success: function(data) {
				//alert(data.status);
				//alert(data.message);
					$('#loader').addClass('hidden');
					$('#result').html(data.message);
					
				}
	 });

			 });
         $('.btnNext').click(function(){
			  var formData = new FormData();
			 var myId = $(this).attr('id');
			 $('.question_wrap').hide();
			 $('#question_wrap'+myId).show();
			// 		formData.append("id", myId);
var checked = $('.question_'+myId+' input[type=radio]:checked').val();
//alert(checked);
formData.append("id", checked);
			 		    $.ajax({
			type: "POST",
			url: "<?php echo base_url().'quiz/saveme'; ?>",
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			dataType: 'JSON',
			beforeSend: function() {
			$('#loader').removeClass('hidden');
			},
			success: function(data) {
							$('#loader').addClass('hidden');

				}
	 });

			 });
			 
			 
/*			 var timeLeft = 30;
var elem = document.getElementById('some_div');
var timerId = setInterval(countdown, 1000);

function countdown() {
    if (timeLeft == -1) {
        clearTimeout(timerId);
        doSomething();
    } else {
        elem.innerHTML = timeLeft + ' seconds remaining';
        timeLeft--;
    }
}*/

/*function doSomething() {
    $('.btnNext').click();

}*/
         </script>
