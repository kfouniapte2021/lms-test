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
        Subjects
        <?php 
		if(isset($class_name)){
			echo 'for '.$class_name;
			}
		?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li > <a href="<?=$this->router->class?>">View  categories</a></li>
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
                     <?php  
					   if(isset($class_id)  || isset($_GET['class_id']) ){
						   if(isset($_GET['class_id'])){
							  $class_id= $_GET['class_id'];
							   }
						   ?>
						   <input type="hidden" id="class_id"  name="class_id" value="<?=$class_id;?>">
						   <?php }else{
				   
				  ?> 
                    <div class="col-xs-6 col-md-3"> 
                        <label  >Class / Grade</label>
                        
                        
                        
                        
                        <select class="form-control" name="class_id">
                        <option value=""> Choose Class</option>
						<?php 
						if($classes->result()){
						 foreach ($classes->result() as $class){
						?>  
                           
                             
                            <option value="<?php echo $class->id;?>" 
							<?php if(isset($row) && $row->class_id == $class->id){ echo 'selected="selected"';} ?>
                            ><?php echo $class->class_name;?></option>
                            
                       <?php 
					       }
					   }?>     
                      </select>
                    </div>
                    <?php } ?>
                     <div class="col-xs-12 col-md-3">
                                             <label > Subject</label>
                       <input type="text" value="<?php if(isset($row)){ echo $row->title;} ?>" class="form-control" name="title">

                     </div>
                    
					 <div class="clearfix">&nbsp;</div>
					 <div class="clearfix">&nbsp;</div>
      <div class="col-xs-12 col-md-6">
                      <label>  Image</label>
                   <input type="file" name="image" id="image"  /><div class="clearfix">&nbsp;</div>
                    <div class="clearfix">&nbsp;</div>
                   <?php if(isset($row)){ 
				   echo '<img src="'.base_url().'uploads/'.$row->file.'" width="50">';
				   }?> </div> 
                    
                    <div class="clearfix">&nbsp;</div>
                    
                    
					
                    
           </div> 
     
      <div class="clearfix">&nbsp;</div>
       <div class="col-xs-12 col-md-6">    
                     <button type="submit" class="btn btn-info">Submit</button>
                        <input type="hidden" id="id"  name="id" value="<?php if(isset($row)){ echo $row->id;} ?>">
                      
                      </div>
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
	
	// ajax start
		    $.ajax({
			type: "POST",
			url: "<?php echo base_url().$this->router->class.'/save'; ?>",
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
				//$('#form_add_update')[0].reset();
				//window.location='faqs';
				window.location=data.redirect;
				},2000);
            }
           else if (data.status ==0)
            {  
			$(".alert").addClass('alert-danger');
				$(".alert").html(data.message);
				$(".alert").removeClass('hidden');
				setTimeout(function(){
				$(".alert").addClass('hidden');
				window.location=data.redirect;
				},2000);
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
  