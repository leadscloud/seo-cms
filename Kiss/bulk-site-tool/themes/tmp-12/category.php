
   <?php include('header.php'); ?>


    <!-- Page Title -->
    <h1 class="page-title fullwidth-padding">
        <div class="container">
           <a href="/"><?=$home1?> >> </a> <?=$catTitle?>
        </div>
    </h1>


    <!-- Content
    ======================================================================== -->
    <div id="content" class="container">

        <!-- Blog Feed -->
        <div class="post-block-feed clearfix">
            
            <?php
          $num=6; 
           $count=$kiss->getPostsNum();
           $list=$kiss->getPostsByTime($num,($page-1)*$num);
            $i=0;
            $i++;
         foreach($list as $p):
       ?>
	    	<!-- Blog Post -->
	    
			    	<!-- / Blog Post -->
		
        
            
            <div class="post-block one-third">
                <div class="post-entry">
                <a href="<?=$path.$p['postname']?>.html"><h2><?=$p['title']?></h2></a>
                   
                    <p> <?php the_excerpt($p['description'],250); ?></p>
                </div>
                 <a href="<?=$path.$p['postname']?>.html"><img src="<?=$p['img1']?>" alt="<?=$p['title']?>"></a>
                <div class="post-meta">
                    <a href="<?=$path.$p['postname']?>.html" class="link"><?=$view?> </a>
                   
                </div>
            </div>
           
          <?php endforeach; ?> 
           
           
           
           
           
           
        </div>
        <!-- Blog Feed / End -->

    </div>
    <!-- Content / End -->
<div class="fullwidth-padding">
         <ul class="page-1">    
  <a  class="prea" href="index<?php echo (($page==2||$page==0)?"":($page-1));?>.html"><li> <?=$previous?> </li></a>
      <?php
for ($i=1,$len=1+intval($count/$num);$i<=$len;$i++){
  echo "<a href='index".($i==1?"":$i).".html' class=\"page-numbers ".(($page==0&&$i==1)||$page==$i?" current":"")."\"><li>{$i}</li></a>";
}
?>
<a class="page-numbers next" href="index<?php echo (($page<(1+intval($count/$num)))?($page==0?'2':$page+1):$page);?>.html"> <li><?=$next?></li>    </a><!--next--> 
     </ul>   
</div>
  


    <!-- Footer
    ======================================================================== -->
    
   <?php include('footer.php'); ?>
