<!DOCTYPE html>
<html lang="en">

<head> 

<?php include_once'inc/head.php'; ?>
  
</head>

<body>

    <div id="wrapper" class="is-verticle">

        <!--  Header  -->
     <?php include_once'inc/header.php'; ?>

  
        <!-- Main Contents -->
        <div class="main_content">
            <div class="container">

                <div class="text-2xl font-semibold"> Articles </div>
                

                <div class="lg:flex lg:space-x-4 lg:-mx-4 mt-6">
            
                    <div class="lg:w-10/12">
                        <div class="divide-y tube-card px-6 md:m-0 -mx-5 py-2">
                                    <?php
	if(!empty($data->result())){
		
	foreach ($data->result() as $row){
		$src='public/assets/images/blog/img-4.jpg';
		if(is_file(FCPATH.'uploads/event/'.$row->post_banner)){
		$src=base_url().'uploads/event/'.$row->post_banner;
			}
			
		?>
                            <div class="md:flex md:space-x-6 py-5">
                                <a href="blog-read.html">
                                    <div class="md:w-56 w-full h-36 overflow-hidden rounded-lg relative shadow-sm"> 
                                         <img src="<?=$src?>" alt="" class="w-full h-full absolute inset-0 object-cover">
                                         <div class="absolute bg-blue-100 font-semibold px-2.5 py-1 rounded-full text-blue-500 text-xs top-2.5 left-2.5">
                                            <?php echo $row->on_date ?>
                                         </div>
                                    </div>
                                </a>
                                <div class="flex-1 md:pt-0 pt-4"> 
                                     
                                    <a href="evenDetail/" class="text-lg font-semibold line-clamp-2 leading-8">  <?php echo $row->title ?></a>
                                    <p class="line-clamp-2"><?php echo $row->short_heading ?></p>
                                    
                                    <div class="flex items-center pt-2 text-sm">
                                        <div class="flex items-center">  <ion-icon name="thumbs-up-outline" class="text-xl mr-2"></ion-icon> Date - <?php echo $row->on_date ?> </div>
                                        <div class="flex items-center mx-4"> 
                                            <ion-icon name="chatbubble-ellipses-outline" class="text-lg mr-2"></ion-icon>  Location - <?php echo $row->location ?> 
                                        </div>
                                        <div class="flex items-center"> <ion-icon name="bookmark-outline" class="text-xl mr-2"></ion-icon>  </div>
                                    </div>
        
                                </div>
                            </div>
        <?php } 
	}else
	{
		?>
        <h2>No data found to show !</h2>
        <?php 
	}
		?>
                        
                        </div>
                    </div>
                    <!--  Sidebar  -->
                    <div class="lg:w-80 w-full">
    
                        <div class="space-y-5" uk-sticky="offset:22; bottom:true ; top:30 ; animation: uk-animation-slide-top-small">
    
                            <div class="tube-card p-6">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <h4 class="text-lg -mb-0.5 font-semibold"> Recently Posted </h4>
                                    </div>
                                    <a href="#" class="text-blue-600"> <ion-icon name="refresh" class="-mt-0.5 -mr-2 hover:bg-gray-100 p-1.5 rounded-full text-lg md hydrated" role="img" aria-label="refresh"></ion-icon> </a>
                                </div>
                                <ul> 
                                <?php
	if(!empty($recentdata->result())){
		
	foreach ($recentdata->result() as $row){
		?>
                                    <li>
                                        <a href="blog-read.html" class="hover:bg-gray-50 rounded-md p-2 -mx-2 block">
                                            <h3 class="font-medium line-clamp-2">   <?=$row->title?> </h3>
                                            <div class="flex items-center my-auto text-xs space-x-1.5 mt-1.5">
                                              <div> <?=$row->on_date?></div> <div class="pb-1"> . </div> 
                                              <ion-icon name="chatbox-ellipses-outline"></ion-icon> <div> 23</div>
                                           </div> 
                                        </a>
                                    </li>
									<?php }}else{ ?>
                                    <li>No recent data</li>
                                    <?php } ?>
                                    
                                </ul>
                                
                            </div>
                            
                            
    
                        </div>
                        
                    </div>
    
                </div>
                

            </div>

            <!-- footer -->
      <?php include_once'copyright.php'; ?>
        </div>

        <!-- sidebar -->
      <?php include_once'inc/sidebar.php'; ?>

        
    </div>

          
 <?php include_once'inc/commonjs.php'; ?>

</body>

</html>
<div id="modal-example" uk-modal>
                                     <div class="uk-modal-body uk-modal-dialog rounded-md shadow-2xl">
                                     <div class="alert hidden"></div>
                                         <h2 class="mb-2 uk-modal-title">Assignment submition</h2>
                                                      <form id="form_add_update" name="form_add_update" role="form">

                                         <p>
                                         <label>Select Pdf file</label>
                                         <input type="file" name="file" id="file" accept="application/pdf"></p>
                                         <div class="uk-modal-footer text-right mt-6 px-0 space-x-1">
                                         <input type="hidden" name="assignment_id" id="assignment_id">
                                             <button class="button gray uk-modal-close" type="button">Cancel</button>
                                             <button class="button" type="submit">Save</button>
                                             </form>
                                         </div>
                                     </div>
                                 </div>

<script>
function openmodel (id){
	$('#assignment_id').val(id);
	}
	
	 $('#form_add_update').on("submit",function(e) {
		e.preventDefault();
		
		 var formData = new FormData();
	var other_data = $('#form_add_update').serializeArray();
    $.each(other_data,function(key,input){
        formData.append(input.name,input.value);
    });   
	 if($('#file').val()!=''){
		formData.append("file", document.getElementById('file').files[0]);
		}
		
	// ajax start
		    $.ajax({
			type: "POST",
			url: "<?php echo base_url().'zukuleeapi/submitAssignment'; ?>",
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
			var message= data.message;
			 if (data.status == 200)
            {   
				$('#form_add_update')[0].reset();
				$('#form_add_update .uk-modal-close').click();
				setTimeout(function(){
				UIkit.notification("<span uk-icon='icon: check'></span>"+message );
				},2000);
            }
			else 
            {   
			UIkit.notification("<span uk-icon='icon: check'></span>"+message );
           
            }
			
           }
	 });

	//ajax end    
    });
	
</script>

