<?php getHead(); ?>
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
       Send notifications
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div class="col-xs-6 col-md-3"> 
                        
                        <select onchange="redirect(this.value)" class="form-control" name="teacher_id" >
                        <option value=""> Filter By Class</option>
						<?php 
						if(count($activeSessionClasses)>0){
						 foreach ($activeSessionClasses->result() as $d){
						?>  
                            <option value="<?php echo $d->id;?>" 
							
                            ><?php echo $d->class_name;?></option>
                            
                       <?php 
					       }
					   }else{?>
                       <option>No class found in Active Session </option>
                       <?php }?>     
                      </select>
                    </div>
                    <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              
            </div>
            <!-- /.box-header -->
                        <div class="box-body">

                <table id="post_table" class="table table-striped table-bordered   responsive email_templating">
    <thead>
    <tr>
        <th><input type="checkbox" id="checkAll" value="2222"></th>
        <th>Student Name</th>
        
    </tr>
    </thead>
    <tbody>
    <?php
	if($data->result()){
	foreach ($data->result() as $row){
		/*
			id
			post_title
			post_date
			post_type
			video_url
		*/
		?>
		<tr id="row_<?php echo$row->id;?>">
        <td class="center">
        	<input type="checkbox" class="checkItem" name="idss[]" value="<?php echo $row->id; ?>">
        </td>
        <td><?php echo $row->name.' | '. $row->email;?></td>
       
       
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
function redirect(id){
	window.location.href="send_notifications?class_id="+id;
	}
</script>
  
  
  
  