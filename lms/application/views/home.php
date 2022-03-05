<html lang="en">


<head>
<?php include_once'inc/head.php'; ?>

  <style>
    input , .bootstrap-select.btn-group button{
        background-color: #f3f4f6  !important;
        height: 44px  !important;
        box-shadow: none  !important; 
    }
  </style>

</head>
<body>
<div class="alert" style="display:none"></div>

  <div id="wrapper" class="flex flex-col justify-between h-screen">

      <!-- header-->
      <div class="bg-white py-4 shadow dark:bg-gray-800">
          <div class="max-w-6xl mx-auto">


              <div class="flex items-center lg:justify-between justify-around">

                  <a href="index.html">
                      <img src="public/assets/images/logo.png" alt="" class="w-32">
                  </a>

                  <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                             <?php
						
							
							if($this->session->userdata('userlogin')==1){
								
							?>
                                                <a class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white" href="user/dashboard">Dashboard</a>
                                                <a class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white" href="auth/userlogout">Logout</a>
                                                <?php }else{ ?>
                      <a href="user/login" class="py-3 px-4">Login</a>
                      <a href="user/register" class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white">Register</a>
                      <?php } ?>
                  </div>

              </div>


          </div>
      </div>

      <!-- Content-->
      <div>

        <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
         <?php
						
							
							if($this->session->userdata('userlogin')==1){
								
							?>
                                   
         <?php
		 $aname=explode(' ',$u['name']);
		 ?> <div class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md">
	 <h1 class="lg:text-2xl text-xl font-semibold mb-6">	 welcome <?=$aname[0]?>!  click to see your <a href="page/explore">Dashboard</a></h1>
		 
                             </div>
                                   <?php } else { ?>
            <form id="form_user_loggedin" class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md">
                <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Login </h1>

               
                <div>
                    <label class="mb-0" for="email"> Email Address </label>
                    <input type="email" id="identity" name="identity" placeholder="Info@example.com" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                </div>
                <div>
                    <label class="mb-0" for="password"> Password </label>
                    <input type="password" id="password" name="password" placeholder="******" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                </div>

                <div>
                    <button type="button" onClick="loggedin_user()" class="bg-blue-600 font-semibold p-2.5 mt-5 rounded-md text-center text-white w-full">
                        Get Started</button>
                </div>


                </div>
             



            </form>
<?php } ?>
        </div>
    
      </div>
      <!-- Footer -->
      

  </div>
       
<?php include_once'copyright.php'; ?>


<?php include_once'inc/commonjs.php'; ?>
<?php include_once'includes/js/user.php'; ?>


</body>


</html>