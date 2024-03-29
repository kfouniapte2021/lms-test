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


  <div id="wrapper" class="flex flex-col justify-between h-screen">

      <!-- header-->
      <div class="bg-white py-4 shadow dark:bg-gray-800">
          <div class="max-w-6xl mx-auto">


              <div class="flex items-center lg:justify-between justify-around">

                  <a href="index.html">
                      <img src="public/assets/images/logo.png" alt="" class="w-32">
                  </a>

                  <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                      <a href="form-login.html" class="py-3 px-4">Login</a>
                      <a href="form-register.html" class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white">Register</a>
                  </div>

              </div>
          </div>
      </div>

      <!-- Content-->
      <div>
          <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
              <form class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md">
                  <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Register </h1>

                  <div class="grid lg:grid-cols-2 gap-3">
                      <div>
                          <label class="mb-0" for="first-name"> First Name </label>
                          <input type="text" placeholder="Your Name"  id="first-name" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                      </div>
                      <div>
                          <label class="mb-0" for="last-name"> Last  Name </label>
                          <input type="text" placeholder="Last  Name"  id="last-name" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                      </div>
                  </div>
                  <div>
                      <label class="mb-0" for="username"> Username </label>
                      <input type="text" placeholder="Username" id="username" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                  </div>
                  <div>
                      <label class="mb-0" for="email"> Email Address </label>
                      <input type="email" placeholder="Info@example.com" id="email" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                  </div>
                  <div>
                      <label class="mb-0" for="password"> Password </label>
                      <input type="password" placeholder="******" id="password" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                  </div>
                  <div class="grid lg:grid-cols-2 gap-3">
                      <div>
                          <label class="mb-0"> Gender </label>
                          <select class="selectpicker mt-2">
                              <option>Male</option>
                              <option>Female</option>
                          </select>

                      </div>
                      <div>
                          <label class="mb-0"> Phone: optional  </label>
                          <input type="text" placeholder="+543 5445 0543" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                      </div>
                  </div>

                  <div class="checkbox">
                      <input type="checkbox" id="chekcbox1" checked="">
                      <label for="chekcbox1"><span class="checkbox-icon"></span> I agree to the <a href="pages-terms.html" target="_blank" class="uk-text-bold uk-text-small uk-link-reset"> Terms and Conditions </a>
                      </label>
                  </div>

                  <div>
                      <button type="button" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                          Get Started</button>
                  </div>
              </form>


          </div>
      </div>
      
      <!-- Footer -->

      <div class="lg:mb-5 py-3 uk-link-reset">
          <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
              <div class="flex space-x-2 text-gray-700 uppercase">
                  <a href="#"> About</a>
                  <a href="#"> Help</a>
                  <a href="#"> Terms</a>
                  <a href="#"> Privacy</a>
              </div>
              <p class="capitalize"> © copyright 2021 by Courseplus</p>
          </div>
      </div>

  </div>

<?php include_once'inc/commonjs.php'; ?>



</body>

</html>