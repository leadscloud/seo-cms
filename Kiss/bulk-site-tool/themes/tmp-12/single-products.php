   <?php include('header.php'); ?>


    <!-- Page Title -->
    <h1 class="page-title fullwidth-padding">
        <div class="container">
            
            <a href="/"><?=$home1?> >> </a><a href="<?=$path?>"><?=$catTitle?>>></a><?=$post['title']?>
        	
        </div>
    </h1>


    <!-- Content
    ======================================================================== -->
    <div id="content" class="container">

        <!-- Main Content -->
        <div id="main">

            <!-- Normal Post -->
            <div class="post single">
                <h2><?=$post['title']?></h2>
                
                <div class="post-entry">
                    <img src="<?=$post['img2']?>">   <img src="<?=$post['img3']?>">
                    
                    <h3><?=$description1?></h3> <p> <?=$post['description']?></p>
                     <h3><?=$features1?> </h3> <p> <?=$post['features']?></p>
                     <p>
                        <a onclick="openZoosUrl('chatwin');" class="button yellow-darkgray"><?=$getprice?> </a>
                    </p>
                     <h3><?=$application1?> </h3> <p> 	<?=$post['application']?></p>
                     
                       <h3><?=$data1?>  </h3> <p><?=$post['data']?></p>
        
                </div>
            </div>

            <!-- Comments -->
            <div id="comments">
					<?=$message1?>
             	
            </div>
            <!-- Comments / End -->

        </div>
        <!-- Main Content / End -->

        <!-- Sidebar -->
        <div id="sidebar">

            <!-- Search Widget -->
           
            <!-- Blog Categories Widget -->
            <div class="widget widget_categories">
                <h3><?=$products1?> </h3>
                <ul>
                    <?php
         $kiss = new Kiss(dbPath('products'));
         $list=$kiss->getPostsByRand(15);
         foreach($list as $p):
       ?>
      
            <li><a href="/products/<?=$p['postname']?>.html"><?=$p['title']?></a></li>
           
        <?php endforeach; ?>
                </ul>
            </div>

<div class="widget widget_text">
                <h3><?=$project1?></h3>
          
		<div class="accordion">
                <?php
         $kiss = new Kiss(dbPath('project'));
         $list=$kiss->getPostsByRand(10);
         foreach($list as $p):
       ?>
      
          
       
                
                    <a href="#" class="accordion-button"><?=$p['title']?></a>
                    <div class="accordion-content">
                        <?php the_excerpt($p['description'],100); ?>
                    </div>
                   
          
              <?php endforeach; ?>   
	      </div>
</div>

            <!-- Text Widget -->
           

            <!-- Recent Posts Widget -->
            <div class="widget widget_recent_entries">
                <h3><?=$solutions1?></h3>
                <ul class="posts">
                
		<?php
         $kiss = new Kiss(dbPath('solutions'));
         $list=$kiss->getPostsByRand(10);
         foreach($list as $p):
       ?>
      
   
                    <li>
                        <a href="/solutions/<?=$p['postname']?>.html"><img src="<?=$p['img1']?>" alt="<?=$p['title']?>"></a>
                        <div class="entry">
                           <a href="/solutions/<?=$p['postname']?>.html"><?=$p['title']?></a>
                          
                        </div>
                    </li>
                    <div class="clear"></div>
               <?php endforeach; ?>      
                    
                </ul>
            </div>

            
            

        </div>
        <!-- Sidebar / End -->

    </div>
   <?php include('footer.php'); ?>



