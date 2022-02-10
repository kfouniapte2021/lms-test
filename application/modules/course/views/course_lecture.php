<?php getHead(); ?>
   <style>
	.box-primary {
		margin:5px 2px;	
	}
	.box-primary img{
		min-width:200px;
		min-height: 200px;
	}
	div.center{
		background-color: #fff;
		border-radius: 5px;
		box-shadow: -2px 2px 7px 1px;
		left: 0;
		margin-left: -100px;
		padding: 11px;
		position: absolute;
		top: 10%;
		width: 50%;
	}
	.imgResponsive{width: 100%;}
	#upload_video_wrap{margin: 0 0 8px 0;
    padding: 11px 0 10px 0;
    border-radius: 5px;
    background-color: #f9f9f9;}
   </style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <?php
	   print_r($course_title[0]['post_title']);
	   ?>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li > <a href="course">View & Add New Lecture </a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <button onclick="newlecture()" class="btn btn-info">Create New Topic</button>
            </div>
            
            
            <input type="hidden"  name="course_id" id="course_id" value="<?php echo $course_title[0]['id'] ?>"/>
            <?php
			//print_r($lecture_ids[0]);
			$total_lecture = count($lecture_ids);
			if($total_lecture==0)
			{
			?>
            <p>List of Lectures is Empty</p>
            <?php	
			}
			else
			{
				if(empty($course_lectures))
				{
					echo "List of Video is Empty";
				}
			//echo  "Total lecture :".$total_lecture;
			for($i=0 ; $i<$total_lecture; $i++)
			{
			$j = $i;
			$j++;
			
            
?>
            <div class="container pt-3 my-3">
            
            <div class="col">  <h3 class="font-weight-bolder"><?php  echo $j.".".$lecture_ids[$i]['title']  ?></h3></div>
            <div class="col"> <button type="button"  onclick="addlecture('<?php echo $lecture_ids[$i]['id'];  ?>','<?php echo $lecture_ids[$i]['title'] ?>')" class="btn btn-primary" >Upload videos for <?php  echo $lecture_ids[$i]['title']  ?></button> </div>
           
               
            
            <hr>
            
            <?php
				
			foreach($course_lectures as $al)
			{	
				 
			if($al['course_lectures_id']==$lecture_ids[$i]['id'])
			{
				
			?>
            
            <div class="col-sm-4">
             
            <video class="vedio-responsive"  style="width:200px; height: 150px;"  controls>
  <source src="<?php echo base_url().'uploads/'.$al['video']; ?>" type='video/mp4'>
</video>
            <p>Lecture Title :<?php echo $al['title']; ?></p>
            <button onclick="deletelecturevedio('<?php echo $al['id'];   ?>')" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
            </div>
            
            <?php
			}
			}
			
			?>
            
  
            </div>
            <?php
			}
			}
			?>            
            
           
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
   <!-- .courses video modal -->

        <div id="course_videos" class="modal fade" role="dialog">

            <div class="modal-dialog">

            

            <!-- Modal content-->

            <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Enter New Topic for the course</h4>

            </div>

            <div class="modal-body" >

            <span id="mes_wrap"></span>

                <form name="addlecture_form" method="post"  id="addlecture_form" role="form">

                    <div class="col-xs-12 col-md-6" >

                        <label for="exampleInputEmail1">Topic Title</label>

                        <input type="text" class="form-control" id="lec_title" placeholder="Enter Lecture Title" name="lec_title" value="">
                        <div style="color:red; font-size: 15px;" id="validate"></div>
                    </div>
                    
                          
                  

                

                </form>

                

                <div style="clear:both;">&nbsp;</div>

           
                

                <div class="uploaded-files"></div>

            </div>

            <div class="modal-footer">

           

              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

               <button type="submit" class="btn btn-success" id="savevideos">Save</button>

               

              

            </div>

            </div>

            

            </div>

        </div>

	    <!-- .courses video modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel"></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <form id="frmlecturedetails" name="frmlecturedetails" method="post" enctype="multipart/form-data">
      <div class="alert alert-hidden"></div>
        <input type="hidden" id="video_duration" name="video_duration" />
        <input type="hidden" name="lecture_id" id="lecture_id" />
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" class="form-control" placeholder="Video Title" id="title" name="title">
          </div>
          <div class="form-group">
            <label for="message-text"  class="col-form-label">Video</label>
            <input class="form-control" type="file" id="fileUp" name="fileUpload"  onchange="getvedioduration()" />
            <div style="color:red;" id="infos"></div>
          
          </div>
          <div class="form-group">
          <label for="message-text" class="col-form-label">thumbnail</label>
            <input type="file" class="form-control" name="image" id="image" />
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="newlecturesubmit"  class="btn btn-primary">Upload Lecture</button>
      </div>
    </div>
  </div>
</div>

  <?php  getFooter(); ?>
  
<script src="assets/bower_components/ckeditor/ckeditor.js"></script>
  <script>

var myVideos = [];
window.URL = window.URL || window.webkitURL;

document.getElementById('fileUp').onchange = setFileInfo;

function setFileInfo() {
  var files = this.files;
  myVideos.pop(files[0]);
  myVideos.push(files[0]);
  var video = document.createElement('video');
  video.preload = 'metadata';

  video.onloadedmetadata = function() {
    window.URL.revokeObjectURL(video.src);
    var duration = video.duration;
    myVideos[myVideos.length - 1].duration = duration;
     total_second = 0;
  for (var i = 0; i < myVideos.length; i++) {
    total_second = total_second+myVideos[i].duration;
  }
  min=total_second/60;
  document.getElementById('video_duration').value = min;
  document.getElementById('infos').innerHTML = "Vedio Duration :"+min;
  }

  video.src = URL.createObjectURL(files[0]);
}

</script>
  <script>
 $('#newlecturesubmit').on("click",function(e) {
   
    e.preventDefault(); 
     var formData = new FormData();
  var other_data = $('#frmlecturedetails').serializeArray();
    $.each(other_data,function(key,input){
        formData.append(input.name,input.value);
    });
	course_id = document.getElementById('course_id').value;
	formData.append('course_id',course_id);
	if($('#image').val()=='' || $('#fileUp').val()=='' || $('#title').val()=='' )
	{
	alert('Please Provide All required Feild...');
	return false;	
	}
    if($('#image').val()!='')
      {
        formData.append("image", document.getElementById('image').files[0]); 
      }
    if($('#fileUp').val()!='')
	  {
		formData.append("vedio", document.getElementById('fileUp').files[0]);
	  }
  // ajax start
        $.ajax({
      type: "POST",
      url: "<?php echo base_url().'course/insertlecturedetails'; ?>",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'JSON',
   beforeSend:function(){
                document.getElementById('newlecturesubmit').innerHTML = 'Uploading...';
            },
      success: function(data) {
        if(data.status==200)
        {
            document.getElementById('newlecturesubmit').innerHTML = 'Upload Lecture';
    swal({
   title: "Uploaded",
  text: "Uploaded Successfully",
  icon: "success",
  button: "OK",
}); 
location.reload();
        }
        else
        {
           document.getElementById('newlecturesubmit').innerHTML = 'Upload Lecture';
        $('.alert').addClass('alert-danger');
        $('.alert').removeClass('hidden');
    $('.alert').html(data.message); 
        }
            }
      });

  //ajax end    
    });
 
  /******************************/
  /**********************************save************************************/
	 $('#form_add_update').on("submit",function(e) {
		e.preventDefault();
		 
		 var inputFile = $('input#file');
		// var filesToUpload = inputFile[0].files;
	     
		 var formData = new FormData();
		// make sure there is file(s) to upload
		
		/*	if (filesToUpload.length > 0) {
				for (var i = 0; i < filesToUpload.length; i++) {
					var file = filesToUpload[i];
					formData.append("file[]", file, file.name);				
				}
			}*/
			
			if($('#post_type').val()=='video'){
				if($('#upload_video').val()!='')
				{
					formData.append("upload_video", document.getElementById('upload_video').files[0]);
				}
				if($('#thumbnail').val()!='')
				{
					formData.append("thumbnail", document.getElementById('thumbnail').files[0]);
				}
			}
	
	
	var other_data = $('#form_add_update').serializeArray();
    $.each(other_data,function(key,input){
        formData.append(input.name,input.value);
    });   
		post_description = CKEDITOR.instances.editor1.getData();
		formData.append("post_description", post_description);

	// ajax start
		    $.ajax({
			type: "POST",
			url: "<?php echo base_url().'course/save'; ?>",
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			dataType: 'JSON',
			beforeSend: function() {
			$('#loader').removeClass('hidden');
		//	$('#form_add_update .btn_au').addClass('hidden');
			},
			success: function(data) {
			$('#loader').addClass('hidden');
			$('#form_add_update .btn_au').removeClass('hidden');
			//alert(data.status);
			//var obj = jQuery.parseJSON(data);
            if (data.status == 1)
            {   
				$(".alert").addClass('alert-success');
				$(".alert").html(data.message);
				$(".alert").removeClass('hidden');
				setTimeout(function(){
				$(".alert").addClass('hidden');
				$('#form_add_update')[0].reset();
				},5000);
            }
           else if (data.status ==0)
            {  
			$(".alert").addClass('alert-danger');
				$(".alert").html(data.message);
				$(".alert").removeClass('hidden');
				setTimeout(function(){
				$(".alert").addClass('hidden');
				},5000);
            }
			else if (data.status == 2)
            {   
			$(".alert").addClass('alert-success');
				$(".alert").html(data.message);
				$(".alert").removeClass('hidden');
				setTimeout(function(){
				window.location='course';
				},5000);
            }
			else if (data.status == "validation_error")
            {  // alert(data.status);
			$(".alert").addClass('alert-warning');
				$(".alert").html(data.message);
				$(".alert").removeClass('hidden');
				
            }
			
           }
	 });

	//ajax end    
    });
 
  /******************************/
  
     $('#form_edit_image').on("submit",function(e) {
	  
	  e.preventDefault();
		var inputFile = $('input#edit_image');
		 var filesToUpload = inputFile[0].files;
		 var formData = new FormData();
		 
		// make sure there is file(s) to upload
		if (filesToUpload.length > 0) {
			// provide the form data
			// that would be sent to sever through ajax
			for (var i = 0; i < filesToUpload.length; i++) {
				var file = filesToUpload[i];
				formData.append("file[]", file, file.name);				
			}
		}
	var other_data = $('#form_edit_image').serializeArray();
      $.each(other_data,function(key,input)
	  {
        formData.append(input.name,input.value);
      });   
	
	// ajax start
		    $.ajax({
			type: "POST",
			url: "<?php echo base_url().'course/update_image'; ?>",
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			beforeSend: function() {
			$('#loader').removeClass('hidden');
			//$('#form_sample .btn_au').addClass('hidden');
			},
				success: function(data) {
				$('#loader').addClass('hidden');
				$('#form_sample .btn_au').removeClass('hidden');
				var obj = jQuery.parseJSON(data);
				if (obj.status == 1)
				{   
					var src  =obj.image;
					if (src!=0)
					{
					  var src ='<?php echo base_url()?>uploads/'+obj.image;
					  $("#img_"+obj.id).attr("src",src);
					}
					setTimeout(function(){
					$('#edit_image_wrap').hide('slow');
					$("#edit_small_image_div img").attr("src",src);
					},2000);
				}
				
				
			}
	 });

	//ajax end    
    });
   
   // delete include
   function deleteInclude(id,table){

	    
		 $.confirm({

    title: 'Confirmation!',

    content: 'Are you sure to delete!',

	animation: 'zoom',

    closeAnimation: 'scale',

	autoClose: 'cancel|5000',

	type: 'red',

	buttons: {

        deleteUser: {

            text : 'Yes',

			btnClass: 'btn-primary',

            action: function () {

                // if user click ok the row will be deleted by the following code

				//ajax call to delete	

				$.ajax({

				url: "<?php echo base_url().'crud/delete'; ?>",

				type: 'POST',

				data: {id:id,table:table},

				dataType: "json",

				success: function(response) {

					$(".ui-item").hide();

				if (response.status == 1)

				{   
					$(".removeclass"+id).hide('slow');
				}

				else if (response.status ==0)

				{  

				$.alert('Error',':You could not delete');

				}

				else  

				{  

				$.alert('Error',response);

				

				}

				}

				});





            }

        },

        cancel: function () {

			text : 'Yes'

        },

    }

   

	});  

	} 
   
   
   
  
  </script>
 

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
	//CKEDITOR.config.contentsLangDirection = 'rtl'; // This line will make right to left
    CKEDITOR.replace('editor1')
    
  })
  
  
  var room = 1;
  function education_fields() 
  
  {
		
		room++;
		var objTo = document.getElementById('education_fields')
		var divtest = document.createElement("div");
		divtest.setAttribute("class", "form-group removeclass"+room);
		var rdiv = 'removeclass'+room;
		divtest.innerHTML = '<div class="col-sm-12 pad0"><div class="form-group"><div class="input-group"> <input type="text" class="form-control" id="educationDate"   name="include_list[]" ><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div>';
		
		objTo.appendChild(divtest)
	}
   function remove_education_fields(rid) {
     $('.removeclass'+rid).remove();
   }
  
  function addlecture(id,title)
  {
	  
	 // $('#mymodal').toggle();
	 document.getElementById('exampleModalLabel').innerHTML = "Add New "+title+" Lecture Vedio";
	 $('#lecture_id').val(id);
	$('#exampleModal').modal('show');  
  }
  
  
  function newlecture()
  {
	  
	$('#course_videos').modal('show');
	  ///alert('course_videos');
  }
    $('#savevideos').on("click",function(e) {
    e.preventDefault(); 
     var formData = new FormData();
  var other_data = $('#addlecture_form').serializeArray();
    $.each(other_data,function(key,input){
        formData.append(input.name,input.value);
    });
	lec_title = document.getElementById('lec_title').value;
	if(lec_title=='')
	{
		document.getElementById('validate').innerHTML='Please Provide Lecture Title';
		return false;
	}
	course_id = document.getElementById('course_id').value;
	////alert(course_id);
	formData.append('course_id',course_id);
        $.ajax({
      type: "POST",
      url: "<?php echo base_url().'course/addcourselecture'; ?>",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'JSON',
	  beforeSend:function(){
		  document.getElementById('savevideos').innerHTML = 'Saving...';
            },
      success: function(data) {
           
		   if(data.status==200)
		   {
		 
			document.getElementById('savevideos').innerHTML = 'Save'; 
			swal({
   title: "Uploaded",
  text: "Uploaded Successfully",
  icon: "success",
  button: "OK",
}); 
		   }
		   if(data.status==100)
		   {
			document.getElementById('validate').innerHTML='Try Again Error in Saving'; 
			document.getElementById('savevideos').innerHTML = 'Save';   
		   }
            }
      });

  //ajax end    
    });
 
  /******************************/
  function deletelecturevedio(id)
  {
	  var formData = new FormData();

	////alert(course_id);
	formData.append('id',id);
	  $.ajax({
      type: "POST",
      url: "<?php echo base_url().'course/deletecourselecture'; ?>",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'JSON',
      success: function(data) {
           
         if(data.status==200)
		 {
			 location.reload();
		 }
		 else
		 {
			 alert('Unable to delete Try Again');
		 }
            }
      });
  }
   

</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>