<?php getHead();

 ?>
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

   </style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin  Management
              </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li > <a href="admins">view admins</a> </li>
        <li > <a href="view_users">view users</a> </li>
        <li > <a href="<?php echo $this->uri->segment(1); ?>/create_user">Add Admin</a> </li>
      </ol>
    </section>

        
<section class="content">
      <div class="row">


    <div class="row">

    <div class="box col-md-12">

    <div class="box-inner">

    

    <div class="box-content">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">

  

            <form id="form-register"  method="post" class="form-horizontal">

                <div id="infoMessage" class="alert  hidden"></div>



                 <div class="form-group">
<?php
$lasturi=lasturi();
 if($lasturi=='profile'){
	echo '<input type="hidden" name="user_type" value="'.get_session('user_type').'" >';	
	 
}
if(isset($row)){
echo '<input type="hidden" name="user_type" value="'.$row->user_type.'" >';	
}
if($lasturi=='create_user'){
	
	
?>
        <div class="col-xs-12 col-md-4 col-sm-4">
                          <label> <?php echo ucwords(this_lang('Select Account Type')); ?></label>
                           <select class="form-control" onchange="getFileds(this.value)" name="user_type" >
                           <!-- -->   
                               
                           <option value="0"> <?php echo ucwords(this_lang('USER TYPE')); ?></option>
                           <?php 
						   $data = get_tbl_users_rights(); ?>
                           
                           <?php $c=0; 
						   foreach ($data->result() as $user):
						   $c++;
						      $string = $user->group_title;
						      
					if(get_session('user_type')!=SUPER_ADMIN){
						/*if($c==2){
							continue;
							}*/
						
						}
						if(isset($row)){
						   ?>                      
                           <option <?php if($row->user_type == $user->id) echo "selected='selected'" ?> value="<?php echo  $user->id?>">
                           <?php echo  $string?>
                           </option>
                           <?php } else{?>
                            <option  value="<?php echo  $user->id?>">
                           <?php echo  $string?>
                           </option>
                           <?php } ?>
                           
                           <?php endforeach;?>
                           </select>
                        </div>
                        <div class="clearfix">&nbsp;</div> 
                        
                        
                    
        <?php
}
?>
	 <div class="clearfix">&nbsp;</div> 
<div class="col-xs-12 col-md-4 col-sm-4">

    <label><?php echo ucwords(this_lang('Name')); ?></label>

    <input id="name" name="name" class="form-control" value="<?php if(isset($row)){ echo $row->name;} ?>" placeholder="John" type="text" required>

</div>
                    <div class="col-xs-12 col-md-4">

                        <label> Email</label>

                        <input type="text" id="email" value="<?php if(isset($row)){ echo $row->email;} ?>" name="email" class="form-control" placeholder="xyz@gmail.com" required>

                    </div>

                        <div class="clearfix">&nbsp;</div> 
<div class="clearfix">&nbsp;</div> 
                     <div class="col-xs-12 col-md-4">

                     
                            <label> <?php echo ucwords(this_lang('Password')); ?></label>

                            <input autocomplete="off" type="password" id="password" name="password" class="form-control" placeholder="Password" required   value="">

                        </div>

                   <div class="col-xs-12 col-md-4">

                        <label>  <?php echo ucwords(this_lang('Verify Password')); ?></label>

                        <input autocomplete="off" type="password" id="register-password-verify" name="password_confirm" value=""  class="form-control" placeholder="Verify Password" autocomplete="off">

                    </div><div class="clearfix">&nbsp;</div> 
                    <div id="staffFields" style="display:none;">
                        <div class="clearfix">&nbsp;</div> 
                        <div class="col-xs-6 col-md-4 "> 
                        <label> <?php echo ucwords(this_lang('Phone')); ?></label>

                            <input autocomplete="off" type="text" id="phone" name="phone" class="form-control" placeholder="phone"    value="<?php if(isset($row)){ echo $row->phone;} ?>">

                        
                        
                        
                    </div>
                    
                    <div class="col-xs-6 col-md-4" id="subjectDiv"> 
                        
                        
                        
                        
                    </div>
                    <div class="clearfix">&nbsp;</div> 
                    </div>
                    <?php

 if($lasturi=='profile'){?>
                    <div class="clearfix">&nbsp;</div> 
 <div class="col-xs-12 col-md-4">
<label> <?php echo ucwords(this_lang('Phone')); ?></label>

                            <input autocomplete="off" type="text" id="phone" name="phone" class="form-control" placeholder="phone"    value="<?php if(isset($row)){ echo $row->phone;} ?>">

                        </div>
                     <div class="col-xs-12 col-md-4">
<label> <?php echo ucwords(this_lang('Address')); ?></label>

                            <input autocomplete="off" type="text" id="address" name="address" class="form-control" placeholder="address"    value="<?php if(isset($row)){ echo $row->address;} ?>">

                        </div>
                        <div class="clearfix">&nbsp;</div> 
                        <div class="clearfix">&nbsp;</div> 
                    <div class="col-xs-12 col-md-4">
<label> <?php echo ucwords(this_lang('Designation')); ?></label>

                            <input autocomplete="off" type="text" id="designation" name="designation" class="form-control" placeholder="PHP developer"    value="<?php if(isset($row)){ echo $row->designation;} ?>">

                        </div>
                        <div class="clearfix">&nbsp;</div> 
                        <div class="clearfix">&nbsp;</div> 
                        
<div class="col-xs-12 col-md-12">
                      <label>   About</label>
                        
                        <textarea class="form-control" id="editor1"  placeholder="Lorem ipsum post" name="description"><?php if(isset($row)){ echo $row->description;} ?></textarea>

                    </div>
                    <?php } ?>
                    </div>
<div class="clearfix">&nbsp;</div> 
                    
                          <div class="col-xs-12 col-md-6" style=" padding-left:0">

                        <label>  <?php echo ucwords(this_lang('Profile Pic')); ?></label>

                     <input type="file" name="file[]" class=" file"  id="file" accept=".png,.PNG,.JPG,.jpg,.jpeg,.JPEG,.gif"  >

                        </div>

                        <div class="clearfix">&nbsp;</div> 

         

                           
                   

                    </div>  

                    

                    <div class="col-xs-12" >

                     <span style="margin:0 !important; display:inline-block" >

                     <?php

				   if(isset($row->image)){ 

				    $image =  $row->image;

				   if(strpos($image, 'jpg') !== false){

					   $res = explode('.',$image);

		$name = $res[0];

		$ext = $res[1];

		$image = base_url().'uploads/'.$name.'.'.$ext;

		//$thumb = $name.'_thumb.'.$ext;

					    $src  = base_url().'uploads/'.$row->image;

					   echo '<img  src="'.$src.'" alt="img" width="150" height="150">';

					   }

				   }

				

				   ?>

                   </span>

                    </div>

                    <div class="form-group form-actions">

                        <div class="col-xs-6" style="padding-top: 28px;">

                            

                           
<input type="hidden" id="id"  name="id" value="<?php if(isset($row)){ echo $row->id;} ?>">
                         
                            <button type="button" onclick="create_user();" class="btn btn-effect-ripple btn-success" name="create_user_submit_btn"><i class="fa fa-save"></i>  <?php echo ucwords(this_lang('Save')); ?></button>
 <div class="clearfix">&nbsp;</div> 
                        </div>

                        

                    </div>

                </form>
                 <div class="clearfix">&nbsp;</div> 
                  <div class="clearfix">&nbsp;</div> 

    </div>
    </div>
    </div>
    </div>

    </div>

    </div>

   



    </div>

</div>
</section>

 



  <?php  getFooter(); ?>
  <?php 
  if(get_session('user_type')==STAFF){
  ?>
  <script src="assets/bower_components/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    
  })
</script>
<?php } ?>
  <script type="text/javascript">
  $(document).ready(function(){
	  <?php 
	  
	  if(isset($row)){ 
	  // do no thing
	  }else {
	  
	  ?>
	 setTimeout(function(){
		 $('#password').val('');
		 $('#email').val('');
				},350);  
  <?php } ?>
  });
  function getFileds(type){
	  if(type=='<?=STAFF?>'){
		  $('#staffFields').show();
		  }
		  else{
			  $('#staffFields').hide();
			  }
	  
	  }
		 
</script>

  

  

  

  