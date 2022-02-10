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
      Training Course Management
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li > <a href="trainings">View  </a></li>
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
      <!--      title 	short_heading 	post_banner 	description 	start_at 	end_at 	all_day 	location 	on_date-->
            <div class="box-body">
             <form id="form_add_update" name="form_add_update" role="form">
             <div class="alert hidden"></div>
                    <div class="form-group wrap_form">
                    
                    
                    <div class="col-xs-12 col-md-6">
                      <label for="exampleInputEmail1">Course ID</label>
                        <input type="text" class="form-control" id="course_id"  placeholder="CG0019" name="course_id" value="<?php if(isset($row)){ echo $row->course_id;} ?>">

                    </div>
                     <div class="clearfix">&nbsp;</div>
                      <div class="clearfix">&nbsp;</div>
                    <div class="col-xs-12 col-md-6">
                      <label for="exampleInputEmail1"> Training Title</label>
                        <input type="text" class="form-control" id="title"  placeholder="Title" name="title" value="<?php if(isset($row)){ echo $row->title;} ?>">

                    </div>
                    <!--<div class="clearfix">&nbsp;</div>
         <div class="clearfix">&nbsp;</div>
                    <div class="col-xs-12 col-md-6">
                      <label for="exampleInputEmail1"> Short Heading</label>
                        <input type="text" class="form-control" id="short_heading"  placeholder="Title" name="short_heading" value="<?php //if(isset($row)){ echo $row->short_heading;} ?>">

                    </div>-->
                  

         <div class="clearfix">&nbsp;</div>
         <div class="clearfix">&nbsp;</div>
              
                   <div class="col-xs-12 col-md-3">
                      <label for="exampleInputEmail1"> Registration Start</label>
                        <input type="time" class="form-control" id="start_at"  placeholder="00:00PM" name="start_at" value="<?php if(isset($row)){ echo $row->start_at;} ?>">

                    </div>
                    
                    <div class="col-xs-12 col-md-3">
                      <label for="exampleInputEmail1"> Registration Closed</label>
                        <input type="time" class="form-control" id="end_at"  placeholder="00:00PM" name="end_at" value="<?php if(isset($row)){ echo $row->end_at;} ?>">

                    </div>
                   <!-- <div class="col-xs-12 col-md-1"> OR</div>
                    <div class="col-xs-12 col-md-3">
                      <label for="exampleInputEmail1"> All Day</label>
                        <input type="text" class="form-control" id="all_day"  placeholder="All Day" name="all_day" value="<?php if(isset($row)){ echo $row->all_day ;} ?>">

                    </div>-->
                       
                     <div class="clearfix">&nbsp;</div> <div class="clearfix">&nbsp;</div>  
                      <div class="col-xs-12 col-md-3">
                      <label for="exampleInputEmail1">Training Start Date</label>
                        <input type="date" class="form-control" id="on_date"  placeholder="09-02-2020" name="on_date" value="<?php if(isset($row)){ echo $row->on_date;} ?>">

                    </div>
                    <div class="col-xs-12 col-md-3">
                      <label for="exampleInputEmail1">Training End Date</label>
                        <input type="date" class="form-control" id="end_date"  placeholder="09-02-2020" name="end_date" value="<?php if(isset($row)){ echo $row->end_date;} ?>">

                    </div>
                      <div class="clearfix">&nbsp;</div> <div class="clearfix">&nbsp;</div>  
                      <div class="col-xs-12 col-md-4">
                      <label for="exampleInputEmail1">Location</label>
                        <input type="text" class="form-control"   placeholder="location" name="location" value="<?php if(isset($row)){ echo $row->location;} ?>">

                    </div>
                    <div class="col-xs-12 col-md-4">
                      <label for="exampleInputEmail1">Fees</label>
                        <input type="text" class="form-control"   placeholder="fees" name="fees" value="<?php if(isset($row)){ echo $row->fees;} ?>">

                    </div> 


                    
                    <div class="clearfix">&nbsp;</div> <div class="clearfix">&nbsp;</div>
                  <div class="col-xs-12 col-md-12">
                      <label> Course  Description</label>
                        
<textarea class="form-control" rows="10" id="editor1" name="description"><?php if(isset($row)){ echo $row->description;} ?></textarea>

                    </div>
					   <div class="clearfix">&nbsp;</div>
                    <div class="col-xs-12 col-md-6">
                      <label for="exampleInputEmail1"> Course  Banner</label>
                   <input type="file" name="image" id="image"  /><div class="clearfix">&nbsp;</div>
                   
                   <?php if(isset($row)){ 
				   echo '<img src="'.base_url().'uploads/event/'.$row->post_banner.'" style="width:50%">';
				   }?> </div> 
            </div>
            
             <div class="clearfix">&nbsp;</div>
             <div class="clearfix">&nbsp;</div>
             <div class="col-xs-12 col-md-12">
                           <button type="submit" class="btn btn-info">Submit</button>
                        <input type="hidden" id="id"  name="id" value="<?php if(isset($row)){ echo $row->id;} ?>">
                   </div>
           </div> 

                    
                       <div class="clearfix">&nbsp;</div>
                    
                </form>
                 <?php //include_once'edit_img_form.php' ?>
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
  
  
 <script src="assets/bower_components/ckeditor/ckeditor.js"></script>
 <script type="text/javascript">

  $(function () {
    CKEDITOR.replace('editor1');
 
  
});
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
		post_description = CKEDITOR.instances.editor1.getData();

			formData.append("description", post_description);

if($('#image').val()!=''){
		formData.append("image", document.getElementById('image').files[0]);
		}
	// ajax start
		    $.ajax({
			type: "POST",
			url: "<?php echo base_url().'trainings/save'; ?>",
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
				window.location='trainings';
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
				window.location='trainings';
				},1000);
            }
			else if (data.status == "validation_error")
            {  // alert(data.status);
			$(".alert").addClass('alert-warning');
				$(".alert").html(data.message);
				$(".alert").removeClass('hidden');
				
            }
			
           }
	 });

	//ajax end    
    });
 
  /******************************/


  
  </script>

  
