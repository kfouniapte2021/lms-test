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
        Library management  
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li > <a href="librarymanagement">View Library </a></li>
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
                    
                    
                  <div class="col-xs-6 col-md-6"> 
                        <label > Book category</label>
                        
                        
                        
                        
                        <select class="form-control" name="cat_id">
                        <option value=""> Choose Category</option>
						<?php 
						if($catogories->result()){
						 foreach ($catogories->result() as $cat){
						?>  
                           
                             
                            <option value="<?php echo $cat->id;?>" 
							<?php if(isset($row) && $row->cat_id == $cat->id){ echo 'selected="selected"';} ?>
                            ><?php echo $cat->title;?></option>
                            
                       <?php 
					       }
					   }?>     
                      </select>
                    </div>
                    
                    
                     <div class="clearfix">&nbsp;</div>
 <div class="clearfix">&nbsp;</div>
                         <div class="col-xs-12 col-md-6">
                      <label for="exampleInputEmail1"> Title </label>
                       
<input  class="form-control" id="title"  placeholder="Title" value="<?php if(isset($row)){ echo $row->title;} ?>" name="title">
                    </div>
                    <div class="col-xs-12 col-md-6">
                      <label for="exampleInputEmail1"> Language </label>
                       
<input  class="form-control" id="language"  placeholder="english,french" value="<?php if(isset($row)){ echo $row->language;} ?>" name="language">
                    </div>
                   <div class="col-xs-6 col-md-6"> 
                        <label  > Subject</label>
                        
                        
                        
                        
                        <select class="form-control" name="course_category_id">
                        <option value=""> Choose Subject</option>
						<?php 
						if($course_catogories->result()){
						 foreach ($course_catogories->result() as $course_cat){
						?>  
                           
                             
                            <option value="<?php echo $course_cat->id;?>" 
							<?php if(isset($row) && $row->course_category_id == $course_cat->id){ echo 'selected="selected"';} ?>
                            ><?php echo $course_cat->title;?></option>
                            
                       <?php 
					       }
					   }?>     
                      </select>
                    </div>
           </div> 
      <div class="clearfix">&nbsp;</div>
                  
                 
      <div class="col-xs-12 col-md-6">
                      <label>  Image</label>
                   <input accept=".png,.jpg.,jpeg" type="file" name="image" id="image"  /><div class="clearfix">&nbsp;</div>
                    <div class="clearfix">&nbsp;</div>
                   <?php if(isset($row)){ 
				   echo '<img src="'.$row->image.'" width="150">';
				   }?> </div>
                   
                   <div class="col-xs-12 col-md-6">
                      <label>  Book File (pdf,zip,ppt)</label>
                   <input accept=".pdf,.ppt,.zip" type="file" name="bookfile" id="bookfile"  /><div class="clearfix">&nbsp;</div>
                    <div class="clearfix">&nbsp;</div>
                   <?php if(isset($row)){ 
				   echo '<a href="'.$row->bookfile.'" >DOWNLOAD</a>';
				   }?> </div> 
                    
                    <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
       <div class="col-xs-12 col-md-6">    
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
	
	 if($('#image').val()!=''){
		formData.append("image", document.getElementById('image').files[0]);
		}
		<?php if(!isset($row)) {?>
	 if($('#bookfile').val()==''){
		alert('You must have to attach a book to upload');
		return false;
		}
		<?php } ?>
		if($('#bookfile').val()!=''){
		formData.append("bookfile", document.getElementById('bookfile').files[0]);
		}
		/*description = CKEDITOR.instances.editor1.getData();
		formData.append("description", description);*/
	// ajax start
		    $.ajax({
			type: "POST",
			url: "<?php echo base_url().'librarymanagement/save'; ?>",
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
				window.location='librarymanagement';
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
				window.location='librarymanagement';
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
  