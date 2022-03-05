<?php getHead(); ?>
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
       Library Management
        
      </h1>
      <ol class="breadcrumb">
     <a class="btn btn-info fff pull-right" href="librarymanagement/add" class="btn btn-sm btn-su"> <i class="fa fa-plus"></i> Add Book</a>
          </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <?php
			if(get_session('user_type')==ADMIN){
			 ?>
              <div class="col-xs-6 col-md-3"> 
                        <label  >Filter Books uploaded by teachers</label>
                        
                        
                        
                        
                        <select onchange="redirect(this.value)" class="form-control" name="user_id" >
                        <option value="librarymanagement"> Choose Staff</option>
						<?php 
						if($staff->result()){
						 foreach ($staff->result() as $teacher){
							 if(isset($_GET['teacher_id'])  and $_GET['teacher_id']!=''){
			if($teacher->id==$_GET['teacher_id']){
				$selected='selected="selected"';
				}else{
					$selected='';
					}
		}
							 
						?>  
                           
                             
                            <option <?=$selected?> value="<?php echo base_url().'librarymanagement?teacher_id='.$teacher->id;?>" 
							<?php if(isset($row) && $row->user_id == $teacher->id){ echo 'selected="selected"';} ?>
                            ><?php echo $teacher->name. ' |'.$teacher->email;?></option>
                            
                       <?php 
					       }
					   }?>     
                      </select>
                    </div>
                    <?PHP } ?>
            </div>
            <!-- /.box-header -->
                        <div class="box-body">
<!--  <center>  <p class="pagination"><?php echo $links; ?></p>
-->            
                <table id="post_table"  class="table table-striped table-bordered   responsive">
    <thead>
    <tr>
        <th>Title </th>
         <th>Category </th>
       
        <th>Subject </th>
        <th>Status  </th>
        <th>Book cover</th>
        <th>Book file </th>
        
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
	if(!empty($data->result())){
	foreach ($data->result() as $row){
		
		?>
		<tr id="row_<?php echo$row->id;?>">
        <td><?php echo $row->title;?></td>
        <td><?php echo $row->category;?></td>
        <td><?php echo $row->subject;?></td>
        <td class="center">
        <?PHP if($row->status==0){
        $class="label-danger";
        $text='Inactive';
        }else{
        $class="label-success";
        $text='Active';
        } 
        ?> 
        <span id="div_status_<?PHP echo $row->id;?>">
        <a id="anchor_<?PHP echo $row->id;?>" href="javascript:void(0);"  
        onclick="changeStatus('<?PHP echo $row->id;?>','<?PHP echo $row->status;?>','library_management');" >
        <span class="label <?PHP echo $class;?>"><?PHP echo $text;?></span>
        </a>
        </span>   
        </td>
       <td class="center ">
		<?php 
		$src=$row->image;
						$bookimageArr= explode('cover/',$src);
				$base =$bookimageArr[0];
				$imageName =$bookimageArr[1];
				$arr=explode('.',$imageName);
				$src=$base.'cover/'.$arr[0].'_thumb.'.$arr[1];

		if(empty($row->image)){
		$src=base_url().'uploads/noimg.png';
		
		}
				echo '<a class="fancybox" href="'.$src.'"><img  src="'.$src.'" width="50" ></a>';
			
		 ?>
         
         </td>
         <td class="center ">
		<?php 
		$bookfile=$row->bookfile;
		if(is_file($bookfile)){
		 echo '<a href="'.$bookfile.'" >DOWNLOAD</a>';	
		}
		 ?>
         
         </td>
        <td class="center">
            <a data-toggle="tooltip" title=" <?php echo ucwords(this_lang('Edit'));?>" class="btn btn-info" href="librarymanagement/edit/<?php echo $row->id;?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
             <?php
			if(get_session('user_type')==ADMIN){
			 ?>
            <a data-toggle="tooltip" title=" <?php echo ucwords(this_lang('Delete'));?>" class="btn btn-danger" href="javascript:void(0)" onClick="deleteRecord('<?php echo$row->id;?>','library_management');">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
            <?php } ?>
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
  
  
  
  