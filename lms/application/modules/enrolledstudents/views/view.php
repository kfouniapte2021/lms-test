<?php getHead(); ?>
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Enrolled students 
        
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
              <div class="col-xs-6 col-md-3"> 
                        <label  >Filter by Class</label>
                        <select class="form-control" name="class_id" id="class_id" onChange="getByclass(this.value)">
                        <option value=""> Choose Class</option>
						<?php 
						if($classes->result()){
						 foreach ($classes->result() as $class){
						?>  
                           
                             
                            <option value="<?php echo $class->class_id;?>"><?php echo $class->class_name;?></option>
                            
                       <?php 
					       }
					   }?>     
                      </select>
                      <script>
					 
                      function getByclass(class){
	alert(class);
	window.location.href='<?=base_url()?>enrolledstudents?class_id='+class;
	}

                      </script>
                    </div>
            </div>
            <!-- /.box-header -->
                        <div class="box-body">

                <table id="post_table" class="table table-striped table-bordered   ">
    <thead>
     <tr >

                            <th><?php echo ucwords(this_lang('NAME'))?></th>

                            <th style="width: 3%;"><?php echo ucwords(this_lang('EMAIL'));?></th>

                            <th><?php echo ucwords(this_lang('Phone No'));?></th>
                            <th><?php echo ucwords(this_lang('Address'));?></th>

                            <th><?php echo ucwords(this_lang('Image'));?></th>

                            <th><?php echo ucwords(this_lang('action'));?></th>

                        </tr>

    </thead>
    <tbody>
    <?php
	if($data->result()){
	foreach ($data->result() as $user){
		/*
			id
			post_title
			post_date
			post_type
			video_url
		*/
		?>
		<tr id="row_<?php echo$user->id;?>">
        <td><?php echo htmlspecialchars($user->name,ENT_QUOTES,'UTF-8')?>
                    <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8')?>
                    <td><?php echo htmlspecialchars($user->phone,ENT_QUOTES,'UTF-8')?>
                                        <td><?php echo htmlspecialchars($user->address,ENT_QUOTES,'UTF-8')?>
<td  class="center">

						<?php

                        $img = $user->image;
					  
                        if(!empty($img) and $img!='noimg.png')
						{
                         $image = base_url().'uploads/users/'.get_thumbnail($img);
						//{
						?>

                            <span style="margin:0 !important; display:inline-block" class="thumbnail">
    
                            <a title="img" href="<?php echo $image; ?>">
    
                            <img width="50" height="50" src="<?php echo $image; ?>" alt="img">
    
                            </a>
    
                            </span>

                        <?php 
						//}

                        } else{

                        echo '<img width="50" height="50" src="'.base_url().'assets/noimg.png">';

                        }

                        ?> 

                    </td>
        <td class="center">
           -
            
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
  
  
  
  