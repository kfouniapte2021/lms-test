<?php getHead(); ?>
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
       Assignments Management
        
      </h1>
      <ol class="breadcrumb">
     
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

                <table id="post_table" class="table table-striped table-bordered   responsive">
    <thead>
    <tr>
        <th>Student </th>
        <th>File </th>
        <th>Submitted on </th>
        <th>Marks  </th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
	if(!empty($data->result())){
	foreach ($data->result() as $row){
		
		?>
		<tr id="row_<?php echo$row->id;?>">
        <td><a href="<?php echo get_thumbnail($row->image);?>" class="fancybox"><img src="<?php echo get_thumbnail($row->image);?>" width="25"></a> <?php echo $row->name;?></td>

        <td class="center"><?php echo '<a class="btn btn-xs btn-info" href="'.base_url('uploads/'.$row->file).'" download><i class="fa fa-download"></i> Download File</a>'; ?>
        
        <?php
		$arr=explode('.',$row->file);
		 echo '<a class="btn btn-xs btn-warning" href="pdfreader/index/'.$arr[0].'" ><i class="fa fa-book"></i> Read File</a>'; ?>
        </td>
                         <td><?php echo $row->submit_time;?></td>

       
         <td>
         <input type="number" class="form-control" id="marks_<?php echo $row->id;?>" onblur="updateMarks('<?php echo $row->id;?>')" value="<?php echo $row->marks;?>"/>
         </td>
         
        <td class="center">
            
            <a data-toggle="tooltip" title=" <?php echo ucwords(this_lang('Delete'));?>" class="btn btn-xs btn-danger" href="javascript:void(0)" onClick="deleteRecord('<?php echo$row->id;?>','assignment');">
                <i class="glyphicon glyphicon-trash icon-white"></i>               
            </a>
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

function updateMarks(id){
	
		 var formData = new FormData();
	formData.append("id", id);
	formData.append("marks", $('#marks_'+id).val());
	// ajax start
		    $.ajax({
			type: "POST",
			url: "<?php echo base_url().'assignment_submitted/updateMarks'; ?>",
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

	//ajax end 
	}
</script>
  
  
  
  