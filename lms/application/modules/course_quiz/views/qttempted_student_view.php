<?php getHead(); ?>
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
       Studen list who attempted the quiz
        
      </h1>
      <ol class="breadcrumb">
     <a class="btn btn-info fff pull-right" href="<?=$this->router->fetch_class()?>/add" class="btn btn-sm btn-su"> <i class="fa fa-plus"></i> Add Quiz</a>
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
<!--  <center>  <p class="pagination"><?php echo $links; ?></p>
-->            
                <table id="post_table"  class="table table-striped table-bordered   responsive">
    <thead>
    <tr>
        <th>Name </th>
        <th>Objective marks  </th>
        <th>Subjective marks  </th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
	if(!empty($data->result())){
	foreach ($data->result() as $row){
		
		?>
		<tr id="row_<?php echo$row->id;?>">
        <td><?php echo $row->name;?></td>
       <td><?php echo $row->objective_marks;?></td>
        <td><?php echo '<span class="pull-left">'.$row->long_questions_marks.'</span>';
		if($row->pdffile!=''){
			$path=base_url().'uploads/'.$row->pdffile;
			echo $submittedMessage='<span class=" label label-success pull-right" >.<a class="" href="'.$path.'" download><i class="glyphicon glyphicon-download icon-white "></i> Download Pdf</a></span>';
			}
		?>
        
        </td>
        
       
         
        <td class="center">
            <a data-toggle="tooltip" title=" <?php echo ucwords(this_lang('Edit'));?>" class="btn btn-xs btn-info" href="course_quiz/<?=$this->router->fetch_class()?>/edit/<?php echo $row->id;?>/<?php echo $quiz_id;?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a data-toggle="tooltip" title=" <?php echo ucwords(this_lang('Delete'));?>" class="btn btn-xs btn-danger" href="javascript:void(0)" onClick="deleteRecord('<?php echo$row->id;?>','quize_attempted');">
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
  
  
  
  