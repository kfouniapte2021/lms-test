<?php getHead(); ?>
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
      		Schedule  Management : <?php echo getClassBatch($_GET['class_id']) ?> > <?php echo getClassTitle($_GET['class_id']) ?>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>classes"><i class="fa fa-dashboard"></i> Classes</a></li>
        <li > <a href="schedule/add?class_id=<?=$_GET['class_id']?>" class="btn btn-sm btn-su">Add Schedule</a></li>
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
        <th>Teacher </th>
        <th>Duration </th>
        <th>Day </th>
        <th>Course Title </th>
        
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
	if(!empty($data)){
	foreach ($data->result() as $row){
		
		?>
		<tr id="row_<?php echo$row->id;?>">
        <td><?php echo $row->name;?></td>
        <td><?php echo $row->from_time.' -'.$row->to_time;?></td>
        <td><?php echo $row->day;?></td>
        <td><?php echo $row->course_title;?></td>
       
    <td class="center">
            <a data-toggle="tooltip" title=" <?php echo ucwords(this_lang('Edit'));?>" class="btn btn-info btn-xs" href="schedule/edit/<?php echo $row->id;?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                View/Edit
            </a>
            <a data-toggle="tooltip" title=" <?php echo ucwords(this_lang('Delete'));?>" class="btn btn-danger btn-xs" href="javascript:void(0)" onClick="deleteRecord('<?php echo $row->id;?>','tbl_schedule');">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
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
</script>
  
  
  
  