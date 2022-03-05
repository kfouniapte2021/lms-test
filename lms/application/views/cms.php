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
                      <img src="public/assets/images/logo.png" alt="" >
                  </a>

                  <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                      <a href="user/login" class="py-3 px-4">Login</a>
                      <a href="user/register" class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white">Register</a>
                  </div>

              </div>
          </div>
      </div>

      <!-- Content-->
      <div>
              <?php  if(isset($row)){ 
 $sectionshow='';
$post_banner=base_url().'uploads/'.$row->post_banner;
    
    if($row->short_heading!=''){
        $sectionshow='';
    }else{
        $sectionshow='hidden';
    }
}

?>
<style>
.caption>p{ 
    font-weight: bold;
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
}
#sub-header {
   padding: 40px 0;
    margin-bottom: 40px;
}
#title{
   background-color: #8B5CF6 !important;
    display: inline-block;
    padding: 1% 5%;
    font-size: 30px;
    color: #fff;
}
</style>
 <section id="sub-header" class="<?=$sectionshow?>" style="background:url(<?=$post_banner?>);background-size: 100%;background-position: 50%; background-color: #fbfbfb;">
        <div id="tintBG">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 id="title"><?php if(isset($row)){ echo $row->short_heading;} ?>
</h1>


</div>
            </div><!-- End row -->
        </div><!-- End container -->
        </div>
      </section>
    <div class="practice-area">
        <div class="container">

<?php if(isset($row)){ echo $row->post_description;} ?>
            </div>
    </div>
      </div>
      
      <!-- Footer -->

      <?php include_once'copyright.php'; ?>


  </div>

<?php include_once'inc/commonjs.php'; ?>



</body>

</html>