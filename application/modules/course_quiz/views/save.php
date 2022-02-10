<?php getHead();

 ?>
   <style>
    .box-primary {
	margin:5px 2px;	
		}
    .box-primary img{
		min-width:200px;
		min-height: 200px;
	
	}
	div.center{
background-color: #fff;
    border-radius: 5px;
    box-shadow: -2px 2px 7px 1px;
    left: 0;
    margin-left: -100px;
    padding: 11px;
    position: absolute;
    top: 10%;
    width: 50%;
}

   </style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quiz  
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li > <a href="course_quiz">View course quiz </a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <form id="form_add_update" name="form_add_update" role="form">
             <div class="col-xs-12"><div class="alert hidden"></div></div>
                    <div class="form-group wrap_form">
                    
                    
                  
                    
                    
                    <div class="col-xs-12 col-md-6">
                      <label for="exampleInputEmail1">Quiz Title </label>
                       
<input  class="form-control" id="quiz_title"  placeholder="Title" value="<?php if(isset($row)){ echo $row->quiz_title;} ?>" name="quiz_title">
                    </div>
                    <div class="col-xs-6 col-md-3 hidden">
                     
                    <?php 
					$subjective='';
						$objective='';
					if(isset($row)){
						
						if($row->type=='subjective'){
							$subjective='selected="selected"';
							}
						if($row->type=='objective'){
							$objective='selected="selected"';
							}
					} ?>
                        <label  > Quiz Type <i style="font-size: 18px; cursor:pointer;color: green;margin: 1px 0px 0 5px;" class="fa fa-info-circle" data-toggle="tooltip" title="" data-original-title="Objective is multiple choice, subjective is long answers and user will submit a pdf/docx file "></i></label>
                        <select onchange="return checkType(this.value)" class="form-control" name="type">
                        <option value=""> Choose Course</option>
                        <option <?=$subjective?>  value="subjective"> Subjective</option>
                        <option <?=$objective?>  value="objective"> Objective</option>
					    
                      </select>
                    </div>
                    
                    <div class="col-xs-6 col-md-3 ">
                     
                    <?php 
					$active='';
						$inactive='';
					if(isset($row)){
						
						if($row->status==1){
							$active='selected="selected"';
							}
						if($row->status==0){
							$inactive='selected="selected"';
							}
					} ?>
                        <label  > Quiz Status </label>
                        <select class="form-control" name="status">
                        <option value=""> Choose Status</option>
                        <option <?=$active?>  value="1"> active</option>
                        <option <?=$inactive?>  value="0"> Inactive</option>
					    
                      </select>
                    </div>
                   <div class="col-xs-6 col-md-3"> 
                        <label  > Course</label>
                        
                        
                        
                        
                        <select class="form-control" name="course_id">
                        <option value=""> Choose Course</option>
						<?php 
						if($courses->result()){
						 foreach ($courses->result() as $course){
						?>  
                           
                             
                            <option value="<?php echo $course->id;?>" 
							<?php if(isset($row) && $row->course_id == $course->id){ echo 'selected="selected"';} ?>
                            ><?php echo $course->title;?></option>
                            
                       <?php 
					       }
					   }?>     
                      </select>
                    </div>
                    
           </div> 
      <div class="clearfix">&nbsp;</div>
                  
              <div id="subjective_section" style="display:none">
              <div class="col-xs-12 col-md-12">
                      <label for="exampleInputEmail1">Question ?</label>
                       
<input  class="form-control" id="question"  placeholder="question" value="<?php if(isset($row)){ echo $row->question;} ?>" name="question">
                    </div>
              </div>   
              <div id="objective_section" style="display:none">
              
              </div>   
      
                   
                    
                  <div class="clearfix">&nbsp;</div>
                  <div class="clearfix">&nbsp;</div>
                
       <div class="col-xs-12 col-md-12">    
                     <button type="submit" class="btn btn-info">Submit</button>
                        <input type="hidden" id="id"  name="id" value="<?php if(isset($row)){ echo $row->id;} ?>">
                      </div>    
                </form>
                 </div>
                <div class="clearfix">&nbsp;</div>
                  <div class="clearfix">&nbsp;</div>
                
            </div>
          </div>
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
   

  <?php  getFooter(); ?>

  <script>

  /**********************************save************************************/
	 $('#form_add_update').on("submit",function(e) {
		e.preventDefault();
		
		 var formData = new FormData();
	var other_data = $('#form_add_update').serializeArray();
    $.each(other_data,function(key,input){
        formData.append(input.name,input.value);
    });   
	 
		
	// ajax start
		    $.ajax({
			type: "POST",
			url: "<?php echo base_url().$this->router->fetch_class().'/save'; ?>",
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			dataType: 'JSON',
			beforeSend: function() {
			$('#loader').removeClass('hidden');
		//	$('#form_add_update .btn_au').addClass('hidden');
			},
			success: function(data) {
			$('#loader').addClass('hidden');
			$('#form_add_update .btn_au').removeClass('hidden');
			//alert(data.status);
			//var obj = jQuery.parseJSON(data);
            if (data.status == 1)
            {   
				$(".alert").addClass('alert-success');
				$(".alert").html(data.message);
				$(".alert").removeClass('hidden');
				setTimeout(function(){
				$(".alert").addClass('hidden');
				$('#form_add_update')[0].reset();
				window.location='<?=$this->router->fetch_class()?>';
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
			else if (data.status == 2)
            {   
			$(".alert").addClass('alert-success');
				$(".alert").html(data.message);
				$(".alert").removeClass('hidden');
				setTimeout(function(){
				window.location='<?=$this->router->fetch_class()?>';
				},1000);
            }
			else if (data.status == "validation_error")
            {   
			$(".alert").addClass('alert-warning');
				$(".alert").html(data.message);
				$(".alert").removeClass('hidden');
				
            }
			
           }
	 });

	//ajax end    
    });
 
 function checkType(type){
	 if(type=='subjective'){
		 $('#subjective_section').show();
		 $('#objective_section').hide();
		 }
	 if(type=='objective'){
		 $('#subjective_section').hide();
		 $('#objective_section').show();
		 }
	 }
 
  </script>
  