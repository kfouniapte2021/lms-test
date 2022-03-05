<?php getHead(); ?>


<style type="text/css">





.rowEnd{ 

clear: both;

    border-bottom: 1px solid #dad4d4;

    margin: 6px 0 6px 0;

}

#course_added_videos ul {

    list-style: none;

    padding: 0;

  

    .inner {

        padding-left: 1em;

        overflow: hidden;

        display: none;

      

        &.show {

          /*display: block;*/

        }

    }

  

#course_added_videos li {

        margin: .5em 0;

      

        a.toggle {

            width: 100%;

            display: block;

            background: rgba(0,0,0,0.78);

            color: #fefefe;

            padding: .75em;

            border-radius: 0.15em;

            transition: background .3s ease;

          

            &:hover {

                background: rgba(0, 0, 0, 0.9);

            }

        }

    }

}

  

  

</style>

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

<section class="content-header">

      <h1 class="pull-left">

        Course objective  
>  <?=$course_title?>
      </h1>

     <a  href="course_objectives/add/<?=$course_id?>/<?=$quiz_id?>" class="btn btn-sm btn-success pull-right">Add Questions</a><br>
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

        <th>Title</th>

         

        <th>Actions</th>

    </tr>

    </thead>

    <tbody>

    <?php if(!empty($data->result())){
	foreach ($data->result() as $row){
?>
<tr id="row_<?php echo $row->id;?>">
        <td><?php echo $row->title;?></td>
    <td class="center">

    
            <button type="button" onclick="getOption('<?php echo $row->id;?>')" class="btn btn-success btn-xs" id="btn_seeoptions">See Options</button>

            <a data-toggle="tooltip" title=" <?php echo ucwords(this_lang('Edit'));?>" class="btn btn-xs btn-info" href="<?=$this->router->class?>/edit/<?php echo $row->id;?>">

                <i class="glyphicon glyphicon-edit icon-white"></i>

                Edit

            </a>

            <a data-toggle="tooltip" title=" <?php echo ucwords(this_lang('Delete'));?>" class="btn btn-xs btn-danger" href="javascript:void(0)" onClick="deleteRecord('<?php echo$row->id;?>','course_objectives');">

                <i class="glyphicon glyphicon-trash icon-white"></i>

                Delete

            </a>

        </td>

    </tr>

    

	

	<?php 

	  }

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


   

        <!-- .courses video modal -->

        <div id="course_added_videos" class="modal fade" role="dialog">

            <div class="modal-dialog">

            

            <!-- Modal content-->

            <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Options</h4>

            </div>

            <div class="modal-body" >

               

            </div>

                <div class="modal-footer">

                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>

            </div>

            

            </div>

        </div>

	    <!-- .courses video modal --> 

   <div class="modal fade" id="video_preview" role="dialog">

    <div class="modal-dialog">

    	<div class="modal-content">

        	

          <div class="modal-body">

            <p>Some text in the modal.</p>

          </div>

      </div>

    </div>

    </div>    

  <?php  getFooter(); ?>

  <style type="text/css">

    .uploaded-files{margin-top: 20px;}

  </style>

<script>

$('#post_table').dataTable( {

  "ordering": false

} );




function getOption(question_id){
	var formData = new FormData();
		 formData.append("question_id",question_id);		
		   jQuery.ajax({
				method:"POST",    
				url : "<?php echo base_url().$this->router->class.'/getOptionbyQuestionId'; ?>",
				data:formData,
cache: false,
			contentType: false,
			processData: false,
			dataType: "json",
			beforeSend: function() {
			$('#loader').removeClass('hidden');
			},
				success: function(response){
					
					$('#loader').addClass('hidden');
$('#course_added_videos .modal-body').html(response.data);	
$('#course_added_videos').modal('show');	

		  }

		});	 

	}


</script>

  

  

  

  