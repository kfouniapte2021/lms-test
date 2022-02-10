<?php getHead(); ?>
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Attendance Management
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li > <a href="attendance/add" class="btn btn-sm btn-su">Add attendance</a></li>
      </ol>
    </section> 
    <!-- Main content -->
<div class="alert hidden"></div>
    <section class="content">
      <div class="row">
      <div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">View Attendance</a></li>
              <li><a href="#tab_2-2" data-toggle="tab">Add Attendance</a></li>
             
              <li class="pull-left header"><i class="fa fa-th"></i> Attendance Management</li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
              <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <div class="col-xs-12 col-md-6 pad0">
                <label>Select date to view attendance for that specific date </label>
            <input class="form-control" type="date" id="datetoview" value="<?php echo date('Y-m-d'); ?>" name="date"/> 
            </div>
            <div class="col-xs-12  col-md-3">
             <input type="button" style="margin-top:24px" onclick="getAttendance()" class="btn btn-info" value="View Attendance"> 
             </div>
             </div>
             </div>
             </div>
             <div class="cleafix">&nbsp;</div>
             

             <div id="attendanceDetail">
             
             </div>
             <div class="cleafix">&nbsp;</div>
             
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
                               <form id="form_add"  name="form_add" role="form">

               <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <div class="col-xs-12 col-md-3 pad0">
            <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>" name="date"/> 
            </div>
            <div class="col-xs-12  col-md-3">
             <input type="button" onclick="saveAttendance()" class="btn btn-info" value="Save Attendance"> 
             </div>
            </div>
            <!-- /.box-header -->
                        <div class="box-body">

                <table id="post_table" class="table table-striped table-bordered   responsive">
    <thead>
    <tr>
        <th>Name</th>
        <th>If Present</th>
        <th>Notes</th>
    </tr>
    </thead>
    <tbody>
    <?php
	if($data->result()){
	foreach ($data->result() as $row){
		?>
		<tr id="row_<?php echo$row->id;?>">
        
        <td><?php echo $row->name;?></td>
        <td><input type="radio" checked="checked" value="yes" name="ifpresent[<?php echo$row->id;?>]" /> Yes 
        
        <input type="radio" value="no" name="ifpresent[<?php echo$row->id;?>]" />
        No
        </td>
        <td><input type="text" name="comments[]" placeholder="Optional" class="form-control" /></td>
       
        <td class="center">
            
        </td>
    </tr>
    
		<?php }
	}
		
	?>
    
    </tbody>
    </table>
                </div>
          
          </div>
          
          <!-- /.box -->
        </div>
        </form>
        <div class="clearfix">&nbsp;</div>
              </div>
              <!-- /.tab-pane -->
              
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    
    <!-- /.content -->
  </div>
   

  <?php  getFooter(); ?>
<script>
$('#post_table').dataTable( {
  "ordering": false
} );

function getAttendance(){
	var formData = new FormData();
	var date = $('#datetoview').val();
	formData.append('date',date);  
	formData.append('course_id',<?=$_GET['course_id']?>);  
	formData.append('class_id',<?=$_GET['class_id']?>);  
		// ajax start
		    $.ajax({
			type: "POST",
			url: "<?php echo base_url().'attendance/getAttendance'; ?>",
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			dataType: 'JSON',
			beforeSend: function() {
			$('#loader').removeClass('hidden');
		//	$('#form_add .btn_au').addClass('hidden');
			},
			success: function(data) {
				$('#loader').addClass('hidden');
				if (data.status == 200){   
				$('#attendanceDetail').html(data.html);
            	}
				
				
				}
	 });

	//ajax end    

	}
function saveAttendance(){
		 var formData = new FormData();
	var other_data = $('#form_add').serializeArray();
    $.each(other_data,function(key,input){
        formData.append(input.name,input.value);
    });   
			formData.append('course_id',<?=$_GET['course_id']?>);  
	formData.append('class_id',<?=$_GET['class_id']?>);  

	// ajax start
		    $.ajax({
			type: "POST",
			url: "<?php echo base_url().'attendance/saveAttendance'; ?>",
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			dataType: 'JSON',
			beforeSend: function() {
			$('#loader').removeClass('hidden');
		//	$('#form_add .btn_au').addClass('hidden');
			},
			success: function(data) {
				$('#loader').addClass('hidden');
				if (data.status == 200){   
				$(".alert").addClass('alert-success');
				$(".alert").html(data.message);
				$(".alert").removeClass('hidden');
				setTimeout(function(){
				$(".alert").addClass('hidden');
				$('#form_add')[0].reset();
				},3000);
            }else{
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
    
	}	

$(document).ready(function(e) {
	
			$("#checkAll").click(function(){
			$('.checkItem:checkbox').not(this).prop('checked', this.checked);
			
		});

		

 });

</script>
  
  
  
  