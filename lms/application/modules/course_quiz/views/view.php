<?php getHead(); ?>
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
       Quiz Management
        
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
        <th>Course title </th>
        <th>Quiz title </th>
        <th>Attempted  </th>
        <th>Manage </th>
        <th>Status </th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
	if(!empty($data->result())){
		$morethanoneactive=false;
		$active=0;
	foreach ($data->result() as $row){
		
		?>
		<tr id="row_<?php echo$row->id;?>">
        <td><?php echo $row->course_title;?></td>
        <td><?php echo $row->quiz_title;?></td>
        <td><a href="<?=$this->router->fetch_class()?>/attempted_student/index/<?php echo $row->id;?>" class="btn btn-xs btn-info"><i class="fa fa-list"></i> Students (<?php echo count_where('quize_attempted',array('quiz_id'=>$row->id)) ?>)</a></td>
        <td>
			<a href="course_objectives/view/<?=$row->course_id?>/<?=$row->id?>" class="btn btn-xs btn-success"><i class="fa fa-list"></i> Manage objective </a>
			<a href="course_subjectives/view/<?=$row->course_id?>/<?=$row->id?>" class="btn btn-xs btn-success"><i class="fa fa-list"></i> Manage subjective </a>
			</td>
        <td class="center">
        <?PHP if($row->status==0){
        $class="label-danger";
        $text='Inactive';
        }else{
			$active++;
        $class="label-success";
        $text='Active';
        } 
        ?> 
        <span id="div_status_<?PHP echo $row->id;?>">
        <a id="anchor_<?PHP echo $row->id;?>" href="javascript:void(0);"  
        onclick="changeStatus('<?PHP echo $row->id;?>','<?PHP echo $row->status;?>','<?=$this->router->fetch_class()?>');" >
        <span class="label <?PHP echo $class;?>"><?PHP echo $text;?></span>
        </a>
        </span>   
        </td>
       
         
        <td class="center">
            <a data-toggle="tooltip" title=" <?php echo ucwords(this_lang('Edit'));?>" class="btn btn-xs btn-info" href="<?=$this->router->fetch_class()?>/edit/<?php echo $row->id;?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a data-toggle="tooltip" title=" <?php echo ucwords(this_lang('Delete'));?>" class="btn btn-xs btn-danger" href="javascript:void(0)" onClick="deleteRecord('<?php echo$row->id;?>','<?=$this->router->fetch_class()?>');">
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
<?php 
if($active>1){
?>
alert('Only one quiz could be active at one time,Please inactive a quiz');
<?php } ?>

</script>
  
  
  
  