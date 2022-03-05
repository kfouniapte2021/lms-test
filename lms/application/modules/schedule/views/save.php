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
  Add    Schedule  : <?php echo getClassBatch($_GET['class_id']) ?> > <?php echo getClassTitle($_GET['class_id']) ?>  
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li > <a href="schedule?class_id=<?=$class_id?>">View schedule </a></li>
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
             <div class="alert hidden"></div>
                    <div class="form-group wrap_form">
                    <div class="col-xs-12 col-md-3">
                    <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>From Time</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker" id="from_time"   name="from_time" value="<?php if(isset($row)){ echo $row->from_time;} ?>">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>
                        
                    </div>
                    <div class="col-xs-12 col-md-3">
            
<div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>To time</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker" id="to_time"   name="to_time" value="<?php if(isset($row)){ echo $row->to_time;} ?>">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>
                    </div>
                    <div class="clearfix">&nbsp;</div>
                    <div class="col-xs-12 col-md-3 ">
                      <label  > Day </label>
                      <?php 
					$weekDays=  array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
					  ?>
                      
                        <select class="form-control" name="day">
                      <?php 
					  foreach($weekDays as $key=>$val){
						  $selected='';
						  if(isset($row)){
							  if($row->day==$val){
								  $selected='selected="selected"';
								  }
							  }
					  ?>  
                      <option <?=$selected?> value="<?=$val?>"><?=$val?></option>
                      <?php } ?>
                        </select>
                    </div>
                    
                    <div class="col-xs-6 col-md-3"> 
                        <label  >Teacher</label>
                        <select class="form-control" name="teacher_id" >
                        <option value=""> Choose Staff</option>
						<?php 
						if($staff->result()){
						 foreach ($staff->result() as $teacher){
						?>  
                            <option value="<?php echo $teacher->id;?>" 
							<?php if(isset($row) && $row->teacher_id == $teacher->id){ echo 'selected="selected"';} ?>
                            ><?php echo $teacher->name. ' |'.$teacher->email;?></option>
                            
                       <?php 
					       }
					   }?>     
                      </select>
                    </div>
                    
                    <div class="col-xs-6 col-md-3"> 
                        <label  >Course</label>
                        <select class="form-control" name="course_id" >
                        <option value=""> Choose course</option>
						<?php 
						if($courses->result()){
						 foreach ($courses->result() as $course){
						?>  
                            <option value="<?php echo $course->course_id;?>" 
							<?php if(isset($row) && $row->course_id == $course->course_id){ echo 'selected="selected"';} ?>
                            ><?php echo $course->post_title;?></option>
                            
                       <?php 
					       }
					   }?>     
                      </select>
                    </div>
                   <div class="clearfix">&nbsp;</div>
				   
				
            </div>
            <div class="clearfix">&nbsp;</div>
             <div class="col-xs-12 col-md-12">
                           <button type="submit" class="btn btn-info">Submit</button>
                        <input type="hidden" id="id"  name="id" value="<?php if(isset($row)){ echo $row->id;} ?>"><input type="hidden" id="class_id"  name="class_id" value="<?=$class_id?>">
                   </div>
           </div> 

                    
                       <div class="clearfix">&nbsp;</div>
                    
                </form>
                
                 </div>
               
              
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
  
  
 <script src="assets/bower_components/plugins/timepicker/bootstrap-timepicker.min.js"></script>
 <script type="text/javascript">

  $('.timepicker').timepicker({});
</script>
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
			url: "<?php echo base_url().'schedule/save'; ?>",
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
				},3000);
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
				//window.location='schedule';
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
 
  /******************************/

$("#post_title").keyup(function(){
        var Text = $(this).val();
        Text = Text.toLowerCase();
        var regExp = /\s+/g;
        Text = Text.replace(regExp,'-');
        $("#slug").val(Text);        
});
  
  </script>

  
