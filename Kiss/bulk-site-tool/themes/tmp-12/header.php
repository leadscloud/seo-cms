<!DOCTYPE html>
<html dir="<?=$dir1?>" lang="<?=$language?>">
<head>

    <link rel="icon" href="<?=$curdir?>/images/favicon.ico">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title><?=$post['title']?></title>

    <link rel="stylesheet" href="<?=$curdir?>/css/style.css" media="screen" />
    <link rel="stylesheet" href="<?=$curdir?>/css/boxed.css" media="screen" id="layout" />
    <link rel="stylesheet" href="<?=$curdir?>/css/colors/color-yellow.css" media="screen" id="colors" />
    <link rel="stylesheet" href="<?=$curdir?>/css/flexslider.css" media="screen" />
    <link rel="stylesheet" href="<?=$curdir?>/css/fancybox.css" media="screen" />
    <link rel="stylesheet" href="<?=$curdir?>/css/revslider.css" media="screen" />
    <link rel="stylesheet" href="<?=$curdir?>/css/font-awesome.css" media="screen" />
    <link rel="stylesheet" href="<?=$curdir?>/css/zocial.css" media="screen" />
    <link rel="stylesheet" href="<?=$curdir?>/css/responsive.css" media="screen" />
     <link rel="stylesheet" href="<?=$curdir?>/css/in.css" media="screen" />

    <!-- JavaScript
    ======================================================================== -->
    <script src="<?=$curdir?>/js/jquery-1.8.2.min.js"></script>
    <script src="<?=$curdir?>/js/jquery.themepunch.plugins.min.js"></script>
    <script src="<?=$curdir?>/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?=$curdir?>/js/jquery.ui.widget.min.js"></script>                          
    <script src="<?=$curdir?>/js/jquery.ui.accordion.min.js"></script>
    <script src="<?=$curdir?>/js/jquery.ui.tabs.min.js"></script>
    <script src="<?=$curdir?>/js/jquery.easing-1.3.min.js"></script>
    <script src="<?=$curdir?>/js/jquery.fitvid.js"></script>
    <script src="<?=$curdir?>/js/jquery.fancybox.pack.js"></script>
    <script src="<?=$curdir?>/js/jquery.flexslider-min.js"></script>
    <script src="<?=$curdir?>/js/jquery.isotope.min.js"></script>
    <script src="<?=$curdir?>/js/jquery.imagesloaded.min.js"></script>
    <script src="<?=$curdir?>/js/jquery.infinitescroll.min.js"></script>
    <script src="<?=$curdir?>/js/jquery.jcarousel.min.js"></script>
    <script src="<?=$curdir?>/js/jquery.jtweetsanywhere-1.3.1.min.js"></script>
    <script src="<?=$curdir?>/js/jquery.touchSwipe.min.js"></script>
    <script src="<?=$curdir?>/js/jquery.validate.min.js"></script>
    <script src="<?=$curdir?>/js/jquery.zflickrfeed.min.js"></script>
    <script src="<?=$curdir?>/js/respond.min.js"></script>
    <script src="<?=$curdir?>/js/selectnav.min.js"></script>
    <script src="<?=$curdir?>/js/custom.js"></script>
<script src="/js/jquery-3.2.1.min.js"></script>
   

    


</head>
<body dir="ltr">

<!-- Body Wrapper -->
<div id="body-wrapper"  dir="<?=$dir1?>">


    <!-- Header
    ======================================================================== -->
    <div id="header" class="container">

        <!-- Logo -->
        <a href="/" id="logo"><img src="<?=$curdir?>/images/logo.png"></a>
		
        <!-- Navigation -->
        <ul id="navigation">
           	<?php getMenu('li','active'); ?>
        </ul>
        <!-- Navigation / End -->
        
    </div>