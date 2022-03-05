<?php getHead(); ?>
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
       Assignments Management
        
      </h1>
      <ol class="breadcrumb">
     <a class="btn btn-info fff pull-right" href="assignments/add?course_id=<?=$course_id?>" class="btn btn-sm btn-su"> <i class="fa fa-plus"></i> Add Assignments</a>
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
        <th>Topic </th>
        <th>Description </th>
        <th>Last date  </th>
        <th>Submissions  </th>
        
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
	if(!empty($data->result())){
	foreach ($data->result() as $row){
		
		?>
		<tr id="row_<?php echo$row->id;?>">
        <td><?php echo $row->topic;?></td>
        <td class="center"><?php echo html_cut($row->description,10); ?></td>
        
       
         <td><?php echo $row->last_date;?></td>
         <td>
         <?php
		$total= count_where('assignment_submitted',array('assignment_id'=>$row->id));
		if($total>0){
			echo '<a class="badge" href="assignment_submitted?assignment_id='.$row->id.'"> Sumissions '.$total.'</a>';
			}else{
							echo '<span > No submission</span>';

				}
		  ?>
       
         </td>
        <td class="center">
            <a data-toggle="tooltip" title=" <?php echo ucwords(this_lang('Edit'));?>" class="btn btn-info" href="assignments/edit/<?php echo $row->id;?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a data-toggle="tooltip" title=" <?php echo ucwords(this_lang('Delete'));?>" class="btn btn-danger" href="javascript:void(0)" onClick="deleteRecord('<?php echo$row->id;?>','assignment');">
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
  
  
  
  