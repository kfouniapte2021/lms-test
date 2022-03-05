<?php getHead();
$controller=$this->router->class;
$Heading=$controller;
if(isset($module_heading) and $module_heading!=''){
$Heading=	$module_heading;
	}
 ?>
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
      <?=$Heading?>
        
      </h1>
      <ol class="breadcrumb">
        
        <li > <a href="<?=$controller?>/add" class="btn btn-sm btn-success text-white"><i class="fa fa-plus"></i> Add New Record</a></li>
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
        <?php
		if(count($tableColmns)>0){
			foreach($tableColmns as $key=>$heading){
				
				if(strpos($heading, '_') !== false){
  $heading=str_replace('_',' ',$heading );
} 
		?>
        <th><?=ucfirst($heading)?> </th>
        
        <?php } }?>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
	
	if($data!=''){
	foreach ($data->result() as $row){
		
		?>
		<tr id="row_<?php echo$row->id;?>">
        <?php
		if(count($tableColmns)>0){
			foreach($tableColmns as $key=>$heading){
		?>
        <td><?=$row->$heading;
		
		?> </td>
        <?php } } ?>
        <td class="center">
                    	<?PHP 
                        if($row->status==0)
                        {
                            $class="label-danger";
                            $text='Inactive';
                        }
                        else
                        {
                            $class="label-success";
                            $text='Active';
                        } 
                        
                        ?> 
                        
                        <span id="div_status_<?PHP echo $row->id;?>">
                            <a id="anchor_<?PHP echo $row->id;?>" href="javascript:void(0);"  
                            onclick="changeStatus('<?PHP echo $row->id;?>','<?PHP echo $row->status;?>','<?=$tbl?>');" >
                            	<span class="label <?PHP echo $class;?>"><?PHP echo $text;?></span>
                            </a>
                        </span>   
                    </td>
    <td class="center">
            <a data-toggle="tooltip" title=" <?php echo ucwords(this_lang('Edit'));?>" class="btn btn-info" href="<?=$controller?>/edit/<?php echo $row->id;?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Vie/Edit
            </a>
            <a data-toggle="tooltip" title=" <?php echo ucwords(this_lang('Delete'));?>" class="btn btn-danger" href="javascript:void(0)" onClick="deleteRecord('<?php echo $row->id;?>','<?=$tbl?>');">
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
  
  
  
  