<!doctype html>

<?php include_once("inc/head.php"); ?>
<style>
    div.grid-practice-area * {
        word-wrap: break-word;
    }
</style>
  <link href="fancybox/source/jquery.fancybox.css" rel="stylesheet">

<body>
    <?php include_once("inc/header.php"); if(isset($row)){ 
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
   background-color: rgba(var(--theme-color), 1) !important;
    display: inline-block;
    padding: 1% 5%;
    font-size: 50px;
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
            <?php if(isset($row)){ 
               $mainContainer='col-xs-12 col-sm-12 col-md-12';
			   //$row->displaysidebar==
			if(1){
			    $mainContainer='col-xs-12 col-sm-8 col-md-8';
			$sidebarPosition=	$row->sidebar;
			if($sidebarPosition==0){
				$positionClass='pull-right';
				}
				
			?>
            <div class="row">
            <?php 
			if($sidebarPosition==1){
				$positionClass='pull-left';
				
			?>
            <aside class="col-xs-12 col-sm-4 col-md-4 <?=$positionClass?>">
            <?php
			//echo '===>'.$sidebarPosition;
			foreach($imgdata->result() as $sidebar){
			$src=base_url().'uploads/'.$sidebar->image;
			?>
            <div class="thumbnail">
          <a target="_blank" href="<?=$sidebar->url?>" class="fancybox">  <img src="<?=$src?>" class="img-responsive" alt="<?=$sidebar->title?>"></a>
            <div class="caption">
          <p><?=$sidebar->title?></p>
        </div>
            </div>
            
            <?php } ?>
            </aside>
           
            <div class="<?=$mainContainer?> ">

<?php if(isset($row)){ echo $row->post_description;} ?>
            </div>
            <?php } ?>

            <?php 
			if($sidebarPosition==0){
				$positionClass='pull-right';
			?>
            
            <div class="<?=$mainContainer?> ">

<?php if(isset($row)){ echo $row->post_description;} ?>
            </div>
            <aside class="col-xs-12 col-sm-4 col-md-4 <?=$positionClass?>">
            <?php
			//echo '===>'.$sidebarPosition;
			foreach($imgdata->result() as $sidebar){
			$src=base_url().'uploads/'.$sidebar->image;
			?>
            <div class="thumbnail">
          <a target="_blank" href="<?=$sidebar->url?>" class="fancybox">  <img src="<?=$src?>" class="img-responsive" alt="<?=$sidebar->title?>"></a>
            <div class="caption">
          <p><?=$sidebar->title?></p>
        </div>
            </div>
            
            <?php } ?>
            </aside>
            <?php } ?>
            </div>
             <?php } }?>
              </div>
    </div>

    <!-- PRACTICE AREA PART END -->
    <?php include_once("inc/commonjs.php"); ?>

</body>

</html>
