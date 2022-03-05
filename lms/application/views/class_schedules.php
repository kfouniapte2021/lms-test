<!DOCTYPE html>
<html lang="en">

<head> 

<?php include_once'inc/head.php'; ?>
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

</head>

<body>

    <div id="wrapper" class="is-verticle">

        <!--  Header  -->
     <?php include_once'inc/header.php'; ?>

  
        <!-- Main Contents -->
        <div class="main_content">
            
            

            <div class="py-12">
                <div class="container lg:w-10/12"> 
              
                    <h1 class="text-2xl font-semibold mb-4"> Schedule</h1>
                    <table id="post_table" class="table table-striped table-bordered   responsive">
    <thead>
    <tr>
        <th>Day  </th>
        <th>Time </th>
        <th>Course </th>
        <th>Class   </th>
        <th>Teacher  </th>
        
    </tr>
    </thead>
    <tbody>
    <?php
	if(!empty($data->result())){
		
	foreach ($data->result() as $row){
		
		?>
		<tr id="row_<?php echo$row->id;?>">
       <td><?php echo $row->day;?></td>

        <td><?php echo $row->from_time. ' - '.$row->to_time;?></td>
         <td><?php echo $row->courseName;?></td>
         <td><?php echo $row->class_name;?></td>
         <td><?php echo $row->instructor;?></td>
         
    </tr>
    
		<?php }
	}
		
	?>
    
    </tbody>
    </table>
                  </div>
            </div>
             
            <!-- footer -->
                  <?php include_once'copyright.php'; ?>


        </div>

        <!-- sidebar -->
      <?php include_once'inc/sidebar.php'; ?>

        
    </div>

          
 <?php include_once'inc/commonjs.php'; ?>

</body>

</html>
<div id="modal-example" uk-modal>
                                     <div class="uk-modal-body uk-modal-dialog rounded-md shadow-2xl">
                                     <div class="alert hidden"></div>
                                         <h2 class="mb-2 uk-modal-title">Assignment submition</h2>
                                                      <form id="form_add_update" name="form_add_update" role="form">

                                         <p>
                                         <label>Select Pdf file</label>
                                         <input type="file" name="file" id="file" accept="application/pdf"></p>
                                         <div class="uk-modal-footer text-right mt-6 px-0 space-x-1">
                                         <input type="hidden" name="assignment_id" id="assignment_id">
                                             <button class="button gray uk-modal-close" type="button">Cancel</button>
                                             <button class="button" type="submit">Save</button>
                                             </form>
                                         </div>
                                     </div>
                                 </div>

<script>
function openmodel (id){
	$('#assignment_id').val(id);
	}
	
	 $('#form_add_update').on("submit",function(e) {
		e.preventDefault();
		
		 var formData = new FormData();
	var other_data = $('#form_add_update').serializeArray();
    $.each(other_data,function(key,input){
        formData.append(input.name,input.value);
    });   
	 if($('#file').val()!=''){
		formData.append("file", document.getElementById('file').files[0]);
		}
		
	// ajax start
		    $.ajax({
			type: "POST",
			url: "<?php echo base_url().'zukuleeapi/submitAssignment'; ?>",
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
			var message= data.message;
			 if (data.status == 200)
            {   
				$('#form_add_update')[0].reset();
				$('#form_add_update .uk-modal-close').click();
				setTimeout(function(){
				UIkit.notification("<span uk-icon='icon: check'></span>"+message );
				},2000);
            }
			else 
            {   
			UIkit.notification("<span uk-icon='icon: check'></span>"+message );
           
            }
			
           }
	 });

	//ajax end    
    });
	
</script>
