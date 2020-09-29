   <?php include('header.php'); ?>


    <!-- Page Title -->
    <h1 class="page-title fullwidth-padding">
        <div class="container">
            
            <a href="/"><?=$home1?> >> </a><?=$post['title']?>
        	
        </div>
    </h1>




    <div id="content" class="container">

        <!-- Main Content -->
        <div id="main">

            <!-- Normal Post -->
            <div class="post single">
				<div>
                <img src="<?=$curdir?>/images/service1.jpg">
                </div>
				<hr class="sep10">
               		<div class="tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
                 <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
                 <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#tabs-3"><?=$brief1?> </a></li>
                   <li class="ui-state-default ui-corner-top"><a href="#tabs-1"><?=$service1?> </a></li>
                   <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#tabs-2"><?=$factory1?> </a></li>							
                   
                   <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#tabs-4"><?=$technology1?></a></li>
                    
                 </ul>
                    <div class="tabs-content-wrapper">
                        <div id="tabs-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                           	<h3><?=$serviceh1?> </h3> <p> <?=$serviceh1p?> </p>
                                 <h3><?=$serviceh2?>  </h3> <p> <?=$serviceh2p?> </p>
                                
                                 <h3><?=$serviceh3?> </h3> <p> <?=$serviceh3p?> </p>
                            
                        </div>
                        <div id="tabs-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
                            
                            <h3><?=$factory1?>  </h3> <p> <?=$factory1p?> </p>
                                 
                        </div>
                        
                         <div id="tabs-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
                            
                            <h3><?=$brief1?>  </h3> <p> <?=$brief1p1?> </p><p> <?=$brief1p2?> </p>
                            
                        </div>
                        
                         <div id="tabs-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
                              <h3><?=$technology1?></h3> <p> <?=$technology1p1?>  </p><p><?=$technology1p2?> <p><?=$technology1p3?> <p>
                            
                        </div>
                        
                        <div id="comments">
					<?=$message1?>
             	
            </div>
                    </div>
                </div>
                
       

			</div>

			

			
		</div>
        
        <div id="sidebar">

            <!-- Search Widget -->
           
            <!-- Blog Categories Widget -->
            <div class="widget widget_categories">
                <h3><?=$products1?> </h3>
                <ul>
                    <?php
         $kiss = new Kiss(dbPath('products'));
         $list=$kiss->getPostsByRand(10);
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
         $list=$kiss->getPostsByRand(8);
         foreach($list as $p):
       ?>
      
          
       
                
                    <a href="#" class="accordion-button"><?=$p['title']?></a>
                    <div class="accordion-content">
                        <a href="/project/<?=$p['postname']?>.html"><?php the_excerpt($p['description'],100); ?></a>
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
         $list=$kiss->getPostsByRand(7);
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

</div>



    
   <?php include('footer.php'); ?>



