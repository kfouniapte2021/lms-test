<?php getHead();
$controller=$this->router->class;
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
       Questions Management
        
      </h1>
      <ol class="breadcrumb">
        <li > <a class="btn btn-info btn-xs" href="course_objectives/view/<?=$course_id?>/<?=$quiz_id?>"><i class='fa-arrow-left fa'></i>Back </a></li>
        
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
                     
           
                <div class="col-xs-12 col-md-6">
                    <label  >Question</label>
                    <textarea name="title" class="form-control"><?php if(isset($row)){ echo $row->title;} ?></textarea>
                </div>
              <div class="col-xs-6 col-md-3">
                     
                    <?php 
					$one='';
						$multiple='';
					if(isset($row)){
						
						if($row->type=='one'){
							$one='selected="selected"';
							}
						if($row->type=='multiple'){
							$multiple='selected="selected"';
							}
					} ?>
                        <label  > Select Type <i style="font-size: 18px; cursor:pointer;color: green;margin: 1px 0px 0 5px;" class="fa fa-info-circle" data-toggle="tooltip" title="" data-original-title="one mean user can select one answer, multiple mean they select multiple answers"></i></label>
                        <select  class="form-control" name="selection_type">
                        <option value=""> Choose answer type</option>
                        <option <?=$one?>  value="one"> one</option>
                        <option <?=$multiple?>  value="multiple"> multiple</option>
					    
                      </select>
                    </div>
              <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
                <div class="col-xs-12 col-md-6">
                    <label >Options /answers?</label>
                    <div >
                         
                    
                    </div>
                    <table class="table" border="1">
                    <thead>
                    <th>is True ?</th>
                    <th>Answer </th>
                    <th>&nbsp;  </th>
                    </thead>
                    <tbody id="education_fields">
                   <?php if(isset($row)){
					   foreach($option_list->result() as $option){
						   $yes='';
						   $no='';
						   if($option->is_true=='yes'){
							   $yes='selected="selected"';
							   }
							   if($option->is_true=='no'){
							   $no='selected="selected"';
							   }
					   ?>
					   
					    <tr>
                   <td> <select class="form-control" name="iftrue[]"><option <?php echo $no; ?>   value="no">No</option><option <?php echo $yes; ?> value="yes">Yes</option></select></td>
                   <td>
                   <input type="text" class="form-control" id="option_list" value="<?php echo  $option->answer ?>"   name="option_list[]" >
                   </td>
                   <td><button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button></td>
                   </tr>
						
						<?php }}else{ ?>
                    <tr>
                   <td> <select class="form-control" name="iftrue[]"><option  value="no">No</option><option value="yes">Yes</option></select></td>
                   <td>
                   <input type="text" class="form-control" id="option_list" value="<?php if(isset($row)){ echo $row->option_list;} ?>"   name="option_list[]" >
                   </td>
                   <td><button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button></td>
                   </tr>
                   <?php } ?>
                    </tbody>
                    </table>
                    
                <div class="clear"></div>
                
                </div>
      <div class="clearfix">&nbsp;</div>
                <div class="col-xs-12 col-md-6">    
                    <button type="submit" class="btn btn-info">Submit</button>
                    <input  type="hidden" id="id"  name="id" value="<?php if(isset($row)){ echo $row->id;} ?>">
                    <input type="hidden" id="quiz_id"  name="quiz_id" value="<?=$quiz_id?>">
                </div>
        </div>
                </form>
                 <?php include_once'edit_img_form.php' ?>
                 </div>
                <div class="clearfix">&nbsp;</div>
                  <div class="clearfix">&nbsp;</div>
               <script>
               function gettype(val){
					if(val=='video'){
						$('#upload_video_wrap').show();
						$('#video_wrap').hide();
						$('#add_images_wrap').hide();
						
					}else if(val=='image'){
						$('#add_images_wrap').show();
						$('#video_wrap').hide();
						$('#upload_video_wrap').hide();
					}
					else if(val=='embed url'){
						$('#video_wrap').show();
						$('#add_images_wrap').hide();
						$('#upload_video_wrap').hide();
					}
					else{
						$('#video_wrap').hide();
						$('#add_images_wrap').hide();
						$('#upload_video_wrap').hide();
					}
				}
               </script> 
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
		 
		 var inputFile = $('input#file');
		// var filesToUpload = inputFile[0].files;
	     
		 var formData = new FormData();
		// make sure there is file(s) to upload
	var other_data = $('#form_add_update').serializeArray();
    $.each(other_data,function(key,input){
        formData.append(input.name,input.value);
    });   
		
	// ajax start
		    $.ajax({
			type: "POST",
			url: "<?php echo base_url().$controller.'/save'; ?>",
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
				//window.location=data.redirect;
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
				window.location=data.redirect;
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
  
     $('#form_edit_image').on("submit",function(e) {
	  
	  e.preventDefault();
		var inputFile = $('input#edit_image');
		 var filesToUpload = inputFile[0].files;
		 var formData = new FormData();
		 
		// make sure there is file(s) to upload
		if (filesToUpload.length > 0) {
			// provide the form data
			// that would be sent to sever through ajax
			for (var i = 0; i < filesToUpload.length; i++) {
				var file = filesToUpload[i];
				formData.append("file[]", file, file.name);				
			}
		}
	var other_data = $('#form_edit_image').serializeArray();
      $.each(other_data,function(key,input)
	  {
        formData.append(input.name,input.value);
      });   
	
	// ajax start
		    $.ajax({
			type: "POST",
			url: "<?php echo base_url().$controller.'/update_image'; ?>",
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
				$('#form_sample .btn_au').removeClass('hidden');
				var obj = jQuery.parseJSON(data);
				if (obj.status == 1)
				{   
					var src  =obj.image;
					if (src!=0)
					{
					  var src ='<?php echo base_url()?>uploads/'+obj.image;
					  $("#img_"+obj.id).attr("src",src);
					}
					setTimeout(function(){
					$('#edit_image_wrap').hide('slow');
					$("#edit_small_image_div img").attr("src",src);
					},2000);
				}
				
				
			}
	 });

	//ajax end    
    });
   
   // delete include
   function deleteInclude(id,table){

	    
		 $.confirm({

    title: 'Confirmation!',

    content: 'Are you sure to delete!',

	animation: 'zoom',

    closeAnimation: 'scale',

	autoClose: 'cancel|5000',

	type: 'red',

	buttons: {

        deleteUser: {

            text : 'Yes',

			btnClass: 'btn-primary',

            action: function () {

                // if user click ok the row will be deleted by the following code

				//ajax call to delete	

				$.ajax({

				url: "<?php echo base_url().'crud/delete'; ?>",

				type: 'POST',

				data: {id:id,table:table},

				dataType: "json",

				success: function(response) {

					$(".ui-item").hide();

				if (response.status == 1)

				{   
					$(".removeclass"+id).hide('slow');
				}

				else if (response.status ==0)

				{  

				$.alert('Error',':You could not delete');

				}

				else  

				{  

				$.alert('Error',response);

				

				}

				}

				});





            }

        },

        cancel: function () {

			text : 'Yes'

        },

    }

   

	});  

	} 
   
   
   
  
  </script>
 

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
	//CKEDITOR.config.contentsLangDirection = 'rtl'; // This line will make right to left
    CKEDITOR.replace('editor1')
    
  })
  
  
  var room = 1;
  function education_fields() 
  
  {
		
		room++;
		
	//	var objTo = document.getElementById('')
		var rdiv = 'removeclass'+room;
		var html = '<tr class='+rdiv+'><td><select class="form-control" name="iftrue[]" ><option  value="no">No</option><option value="yes">Yes</option></select> </td><td><input type="text" class="form-control" id="educationDate"   name="option_list[]" ></td><td> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></td></tr>';
		
		$("#education_fields").append(html);
	}
   function remove_education_fields(rid) {
	   
     $('.removeclass'+rid).remove();
   }
  
</script>