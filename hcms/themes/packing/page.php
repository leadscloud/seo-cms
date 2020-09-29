<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
<title><?php the_title(); ?> - SKB Gear</title>
<link href="/skin/css/style.css" rel="stylesheet">
<link href="/skin/css/media-queries.css" rel="stylesheet">
<?php
function curPageURL() 
{
   $this_page = $_SERVER["REQUEST_URI"];
   $pageURL=  $this_page;
   return $pageURL;
}
?>
<script type="text/javascript">
try {var urlhash = window.location.hash;if (!urlhash.match("fromapp"))
{if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios|iPad|nokia|blackberry|webos|webmate|bada|lg|ucweb|skyfire|sony|ericsson|mot|samsung|sgh|philips|panasonic|alcatel|lenovo|cldc|midp|wap|mobile)/i)))
{window.location="http://m.<?php echo constant('site_name'); ?><?php echo curPageURL();?>";}}}
catch(err)
{
}</script>
<meta name="mobile-agent" content="format=xhtml;url=http://m.<?php echo constant('site_name'); ?><?php echo curPageURL();?>">
<link rel="alternate" media="only screen and (max-width: 640px)"  href="http://m.<?php echo constant('site_name'); ?><?php echo curPageURL();?>"/>
</head>
<body>
<script src="/skin/js/jquery-1.9.1.min.js"></script>
<script src="/skin/js/jquery.min.js"></script>
<script src="/skin/js/sanme.js"></script>

<?php get_nav(); ?>

<div id="bnav"><p><a href="/">Home</a>&nbsp;>&nbsp;<a href="<?php the_title(); ?>.html"><?php the_title(); ?></a></p></div>
<div class="content">
	
	<div class="solution-left f_l">
    <div class="title"><h1> <?php the_title(); ?> SKB® Gears</h1></div>
        <div class="single-info">

    
 <?php the_content(); ?> 

         </div>



<script>
onload=function c(){
 
 var ke = document.getElementById("imgs");
 var le = ke.getElementsByTagName("li");
 for(var i=0;i<le.length;i++)
  {
var img = document.createElement("img");
var s =img.setAttribute("src","/imgs/"+Math.floor(Math.random()*74+1)+".jpg");
   le[i].insertBefore(img,le[i].childNodes[0]);
  } 
 }
</script>	

<style type="text/css">
.imgs{ height:auto;}
.img ul{list-style:none;}
.imgs li{float:left; width:50%; height:95px; overflow:hidden;}
.imgs li img{ width:150px; float:left; margin-right:5px; border:#999 1px solid;} 
</style>


<div class="news-next imgs" id="imgs" >
<ul>
<?php
$rand_posts=get_posts('numberposts=10&orderby=rand');
foreach( $rand_posts as $post ) :?>
              
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a><br /> <a style="color:red;" href="javascript:void(0)" onclick="openZoosUrl('chatwin')">Get Price!</a></li>
<?php endforeach; ?>   
</ul>
</div>


<div class="clear"></div>

<div class="news-next">
        	<p>
<a style="color:red;" href="javascript:void(0)" onclick="openZoosUrl('chatwin')"><img src="/img/gear4.jpg" /></a></br>
<a style="color:red;" href="javascript:void(0)" onclick="openZoosUrl('chatwin')"><img src="/img/gear6.jpg" /></a></br>


</p>
 </div>


<div class="clear"></div>






    </div>
    
<?php get_right(); ?>




    <div class="clear"></div>
</div>
<div class="warp">
	<div class="content">

       
 <?php get_message(); ?>  
       

</div>
</div>
</div>
<?php get_footer(); ?>
</body>
</html>
