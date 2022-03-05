<?php getHead();
 ?>
   <link rel="stylesheet" href="assets/css/boxicons.min.css">
<style>
.iconCustom {
   font-size: 30px;
    float: left;
    margin: 0px 4px 0 0px; 
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
       
        <?php
		if($batchClass!=''){
		echo 'Batch: '.$batchClass->batch_id; 
		}
		if(isset($class_name)){
			echo ' > '.$class_name;
			}
			
		?>
      </h1>
      <ol class="breadcrumb">
        <li>
        <a href="<?php echo base_url() ?>classes"> Classes</a></li>
         <li >
        <a class="active" href="javscript:void(0)"> Subjects</a></li>
          <?php
		if(isset($_GET['class_id']) and $_GET['class_id']!=''){
		?>
        <li > <a href="<?=$this->router->class?>/add?class_id=<?php echo $_GET['class_id']?>" class="btn btn-sm btn-su">Add Subject</a></li>
        <?php }else{ ?>
        <li > <a href="<?=$this->router->class?>/add" class="btn btn-sm btn-su">Add </a></li>
            <?php } ?>
        
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
        <!--<th>Category </th>-->
        <?php
		if(!isset($_GET['class_id']) and $_GET['class_id']!=''){
		?>
        <th>Class</th>
        <?php } ?>
        
        <th>Subject</th>
        <th>Image</th>
       
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
	if($data->result()){
	foreach ($data->result() as $row){
		
		?>
		<tr id="row_<?php echo$row->id;?>">
       
        <td> <?php echo  $row->title;?>
           
        <td> 
        <?php 
		$src=base_url().'uploads/'.$row->file;
		if(empty($row->file)){
		$src=base_url().'uploads/noimg.png';
		
		}
				echo '<a class="fancybox" href="'.$src.'"><img  src="'.$src.'" width="50" ></a>';
			
		 ?>
         
        </td>
                
       
        <td class="center">
            
             <?php
		if(isset($_GET['class_id']) and $_GET['class_id']!=''){
		?>
        <a data-toggle="tooltip" title=" <?php echo ucwords(this_lang('Edit'));?>" class="btn btn-info" href="<?=$this->router->class?>/edit/<?php echo $row->id.'/'.$_GET['class_id'];?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
        <?php }else{ ?>
        <a data-toggle="tooltip" title=" <?php echo ucwords(this_lang('Edit'));?>" class="btn btn-info" href="<?=$this->router->class?>/edit/<?php echo $row->id;?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <?php } ?>
        
            
            <a data-toggle="tooltip" title=" <?php echo ucwords(this_lang('Delete'));?>" class="btn  btn-danger" href="javascript:void(0)" onClick="deleteRecord('<?php echo$row->id;?>','<?=$table?>');">
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
  
  
  
  