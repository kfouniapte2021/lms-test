<?php getHead(); ?>
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
       Assignments  Management
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li > <a href="assignments?course_id=<?=$course_id?>">View Assignments </a></li>
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
                      <label for="exampleInputEmail1"> Topic </label>
                       
<input  class="form-control" id="Topic"  placeholder="Topic" value="<?php if(isset($row)){ echo $row->topic;} ?>" name="topic">
                    </div>
                    <div class="col-xs-12 col-md-6">
                      <label for="exampleInputEmail1"> Last submission date </label>
                       
<input type="date"  class="form-control" id="last_date"  placeholder="Last date" value="<?php if(isset($row)){ echo $row->last_date;} ?>" name="last_date">
                    </div>
                    
                    <div class="col-xs-12 col-md-12">
                      <label for="exampleInputEmail1"> Description </label>
                       <textarea class="form-control" id="editor1"  placeholder="description" name="description"><?php if(isset($row)){ echo $row->description;} ?></textarea>

                    </div>
                   
                            
           </div> 
      <div class="clearfix">&nbsp;</div>
                     <div class="clearfix">&nbsp;</div>
                
                    
                    <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
       <div class="col-xs-12 col-md-6">    
                     <button type="submit" class="btn btn-info">Submit</button>
                        <input type="hidden" id="id"  name="id" value="<?php if(isset($row)){ echo $row->id;} ?>"><input type="hidden" id="course_id"  name="course_id" value="<?php if(isset($course_id)){ echo $course_id;} ?>">
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
    <script src="bower_components/ckeditor/ckeditor.js"></script>

  <script>
    $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    
  })
////////////



	
  /**********************************save************************************/
	 $('#form_add_update').on("submit",function(e) {
		e.preventDefault();
		
		 var formData = new FormData();
	var other_data = $('#form_add_update').serializeArray();
    $.each(other_data,function(key,input){
        formData.append(input.name,input.value);
    });   
	 
		
		description = CKEDITOR.instances.editor1.getData();
		formData.append("description", description);
	// ajax start
		    $.ajax({
			type: "POST",
			url: "<?php echo base_url().'assignments/save'; ?>",
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
				window.location='assignments?course_id=<?=$course_id?>';
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
				window.location='assignments?course_id=<?=$course_id?>';
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
 
  </script>
  