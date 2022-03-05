<?php getHead(); ?>
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
       My Classes
        
      </h1>
      <ol class="breadcrumb">
       <!--<li > <a href="classes/add" class="btn btn-sm btn-su">Add Class</a></li>-->
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

                <table id="post_table" class="table table-striped table-bordered   ">
    <thead>
     <tr >

                            <th><?php echo ucwords(this_lang('NAME'))?></th>
                            <th>Actions</th>

                           
                        </tr>

    </thead>
    <tbody>
    <?php
	if($data->result()){
	foreach ($data->result() as $row){
		
		?>
		<tr>
        
        <td><?php echo htmlspecialchars($row->class_name,ENT_QUOTES,'UTF-8')?>
</td>
<td><a data-toggle="tooltip" title="Attendance Management" class="btn btn-sm btn-info" href="attendance/index?class_id=<?php echo $row->class_id;?>">
                <i class="glyphicon glyphicon-user icon-white"></i>
                Attendance 
            </a></td>
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
  
  
  
  