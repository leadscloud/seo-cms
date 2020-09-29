Title:			<?=$post['title']?>
模板路径：		<?=$curdir?>
导航：			<?php getMenu('li','active'); ?>
分类路径：		<?=$path?>
分类标题：		<?=$catTitle?>
摘要：			<?php the_excerpt($post['description'],100); ?>

首页摘要<?php the_excerpt($p['description'],200); ?>


描述：			<?=$post['description']?>
Features：		<?=$post['features']?>
Application: 	<?=$post['application']?>
Technical Data:	<?=$post['data']?>
content:		<?=$post['content']?>
图片路径：		<?=$post['img1']?>   <?=$post['img2']?>   <?=$post['img3']?>   <?=$post['img4']?>
留言板：		<script type="text/javascript" src="<?=$curdir?>/js/message.js"></script>
链接URL：		<?=$p['postname']?>

包含头部文件：<?php include('header.php'); ?>
包含底部文件：<?php include('footer.php'); ?>

商务通：onclick="openZoosUrl('chatwin');"
        <?=$livechat['sb']?>
        
  <a href="#" onclick="openZoosUrl('chatwin')"></a>
                  
                  



分类页列表：
<?php
  $list=$kiss->getPostsByRand(40);
  foreach($list as $p)
   echo "<li><a href=\"{$p['postname']}.html\">{$p['title']}</a></li>";
?>

分类页列表链接：<?=$post['postname']?>.html
分类页图片链接：/timthumb.php/?src=<?=$post['img1']?>&amp;w=130&amp;h=90&amp;zc=1

判断是内页：
<?php if($single):?>
<script src="js/mim.js" type="text/javascript" ></script>
<script src="js/slider.js"  type="text/javascript" ></script>
<?php endif; ?>

判断是分类页：
<?php if($category):?>
<script src="js/mim.js" type="text/javascript" ></script>
<script src="js/slider.js"  type="text/javascript" ></script>
<?php endif; ?>


联系我们：
<li>Add.: <?=$contact['sb']['add']?></li>
<li>Zip: <?=$contact['sb']['postcode']?></li>
<li>Tel: <?=$contact['sb']['tel']?></li>
<li>Fax: <?=$contact['sb']['fax']?></li>
<li>E-mail: <?=$contact['sb']['email']?></li>

category.php
single-products.php	
single-project.php
single-solutions.php


about，contact页面调用列表：

<?php
   $kiss = new Kiss('../includes/'.$language.'.products');
   $p=$kiss->getPostsByRelated('crusher,mill',10);
   foreach($p as $post)
   echo "<li><a href=\"/products/{$post['postname']}.html\">{$post['title']}</a></li>";
?>






		<?php
         $kiss = new Kiss(dbPath('products'));
         $list=$kiss->getPostsByRand(4);
         foreach($list as $p):
       ?>
      
            <a href="/products/<?=$p['postname']?>.html"><?=$p['title']?></a>
           <a href="/products/<?=$p['postname']?>.html"><img src="<?=$p['img1']?>" alt="<?=$p['title']?>"></a>
            <a href="/products/<?=$p['postname']?>.html">More Details</a>
          <?php the_excerpt($p['description'],200); ?>
        <?php endforeach; ?>





		<?php
         $kiss = new Kiss(dbPath('project'));
         $list=$kiss->getPostsByRand(4);
         foreach($list as $p):
       ?>
      
            <a href="/project/<?=$p['postname']?>.html"><?=$p['title']?></a>
           <a href="/project/<?=$p['postname']?>.html"><img src="<?=$p['img1']?>" alt="<?=$p['title']?>"></a>
            <a href="/project/<?=$p['postname']?>.html">More Details</a>
          <?php the_excerpt($p['description'],200); ?>
        <?php endforeach; ?>







		<?php
         $kiss = new Kiss(dbPath('solutions'));
         $list=$kiss->getPostsByRand(4);
         foreach($list as $p):
       ?>
      
            <a href="/solutions/<?=$p['postname']?>.html"><?=$p['title']?></a>
           <a href="/solutions/<?=$p['postname']?>.html"><img src="<?=$p['img1']?>" alt="<?=$p['title']?>"></a>
            <a href="/solutions/<?=$p['postname']?>.html">More Details</a>
          <?php the_excerpt($p['description'],200); ?>
        <?php endforeach; ?>
		
        
        
        
        
        
        
        
        
        
        
        
          <section class="span8 one-column">
        
            
                 <?php
          $num=5; 
           $count=$kiss->getPostsNum();
           $list=$kiss->getPostsByTime($num,($page-1)*$num);
            $i=0;
            $i++;
         foreach($list as $p):
       ?>
	    	<!-- Blog Post -->
	    	<article class="media">
            
			    	<a class="object" data-hover="icon-zoom" href="<?=$p['img1']?>" data-rel="gallery[portfolio]"><img src="<?=$p['img1']?>" alt="<?=$p['title']?>"></a>
		        <div class="caption">
		        	<a class="mini button" href="<?=$path.$p['postname']?>.html"><h3><?=$p['title']?></h3></a>
		        	
		        	<div class="hr_small"></div>
		        	<p> <?php the_excerpt($p['description'],250); ?></p>
		        	<p><a class="mini button" href="<?=$path.$p['postname']?>.html">More &rarr;</a></p>
		       	</div>
		    </article> 
			    	<!-- / Blog Post -->
		<?php endforeach; ?>
		    <!-- Blog Post -->
  
    <ul class="page-1">    
  <a  href="index<?php echo (($page==2||$page==0)?"":($page-1));?>.html">Previous</a>
      <?php
for ($i=1,$len=1+intval($count/$num);$i<=$len;$i++){
  echo "<a href='index".($i==1?"":$i).".html' class=\"page-numbers ".(($page==0&&$i==1)||$page==$i?" current":"")."\">{$i}</a>";
}
?></a>
<a class="page-numbers next" href="index<?php echo (($page<(1+intval($count/$num)))?($page==0?'2':$page+1):$page);?>.html">Next</a><!--next--> 
     </ul>   
		</section>

        
  面包屑导航      
        
   <ul class="tabs clearfix">
          <li><a href="/" class="default-tab active">Home >></a></li>
          <li><a href="<?=$path?>"><?=$catTitle?></a></li>
           <li><a href="#"><?=$post['title']?></a></li>
          
        </ul>     
        