  <!-- Basic Page Needs
    ================================================== -->
    <title>Zukulee</title>
    <base href="<?=base_url()?>" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus is - Professional A unique and beautiful collection of UI elements">

  <!-- Favicon -->
    <link href="public/assets/images/favicon.png" rel="icon" type="image/png">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="public/assets/css/icons.css">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="public/assets/css/uikit.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <link href="public/assets/unpkg/tailwind.min.css" rel="stylesheet">
    <style>
    
    .alert{
    position: fixed;
    z-index: 2;
    width: 100%;
    text-align: center;
    background-color: #f3f4f6;
    padding: 36px 0;
}
.alert-success{
		background-color:#060;color:#fff;
		}
    .Success{
		background-color:#060;color:#fff;
		}
    .alert-danger{
		background-color:#ef4444;color:#fff;
		}
    .Error{
		background-color:#F30;color:#fff;
		}
    .alert-warning{
		background-color:#ef4444;color:#fff;
		}
		
		.centered {

  position: fixed;

  top: 50%;

  left: 50%; z-index: 9999;

  /* bring your own prefixes */

  transform: translate(-50%, -50%);

}
    </style>
    <div id="loader" class="hidden">

    <div id="loading-img" class="centered"> 

    

    <img src="<?php echo base_url(); ?>assets/loader.gif">

    </div>

    </div>