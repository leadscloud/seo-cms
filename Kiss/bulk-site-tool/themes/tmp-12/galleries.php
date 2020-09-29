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
                <img src="<?=$curdir?>/images/service2.jpg">
                </div>
				<hr class="sep10">
              <div class="tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
                 <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
                 <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#tabs-1"><?=$products1?> </a></li>
                   <li class="ui-state-default ui-corner-top"><a href="#tabs-2"><?=$project1?>  </a></li>
                   <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#tabs-3"><?=$solutions1?></a></li>							
                  
                    
                 </ul>
                    <div class="tabs-content-wrapper">
                        
                        
 <div id="tabs-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
         <ul class="project-feed-filter">
            <li><a href="#" class="current" data-filter="*">All</a></li>
            <li><a href="#" data-filter=".mill" class="">Mill</a></li>
            <li><a href="#" data-filter=".crusher" class="">Crusher</a></li>
            <li><a href="#" data-filter=".feeder" class="">Feeder</a></li>
            <li><a href="#" data-filter=".screen" class="">Screen</a></li>
            <li><a href="#" data-filter=".other" class="">Other</a></li>
        </ul>
        <!-- /Project Feed Filter -->

        <!-- Project Feed -->
        <div class="project-feed isotope" style="position: relative; overflow: hidden; height: 759px;">
            
            <?php
         $kiss = new Kiss(dbPath('products'));
         $list=$kiss->getPostsByRand(40);
         foreach($list as $p):
       ?>
      
          
            <div class="<?=$p['tag1']?> span-3 project-item animation webdesign isotope-item">
                <img src="<?=$p['img1']?>" alt="">
                <div class="overlay"></div>
                <div class="mask">
                    <a href="<?=$p['img1']?>" class="icon-image folio" rel="gallery"><i class="icon-search"></i></a>
                    <a href="/products/<?=$p['postname']?>.html" class="item-title"><?=$p['title']?></a>
                </div>
            </div>
           <?php endforeach; ?> 
          
           
          
           
           
           
        </div>
        <!-- /Project Feed -->

 </div>
                       


    <div id="tabs-2">
         
        <!-- /Project Feed Filter -->

        <!-- Project Feed -->
 
            
            <?php
         $kiss = new Kiss(dbPath('project'));
         $list=$kiss->getPostsByRand(40);
         foreach($list as $p):
       ?>
      
          
            <div class="span-3 project-item animation webdesign isotope-item">
                <a href="/project/<?=$p['postname']?>.html"><img src="<?=$p['img1']?>" alt=""></a>
               
            </div>
            
           
            
              
           <?php endforeach; ?> 
          
           
          
           
           
           
        <!-- /Project Feed -->

 </div>
 
 
 <div id="tabs-3">
         
        <!-- /Project Feed Filter -->

        <!-- Project Feed -->
 
            
            <?php
         $kiss = new Kiss(dbPath('solutions'));
         $list=$kiss->getPostsByRand(40);
         foreach($list as $p):
       ?>
      
          
            <div class="span-3 project-item animation webdesign isotope-item">
                <a href="/solutions/<?=$p['postname']?>.html"><img src="<?=$p['img1']?>" alt=""></a>
               
            </div>
            
           
            
              
           <?php endforeach; ?> 
          
           
          
           
           
           
        <!-- /Project Feed -->

 </div>              
             

                        
                        
                        
                    	</div>
                	</div>
                
       

			</div>

			

			
		</div>
        
        <div id="sidebar">          
            <div class="widget widget_categories">
                <h3><?=$products1?> </h3>
                <ul>
                    <?php
         $kiss = new Kiss(dbPath('products'));
         $list=$kiss->getPostsByRand_c("mill");
         foreach($list as $p):
       ?>
            <li><a href="/products/<?=$p['postname']?>.html"><?=$p['title']?></a></li>
           
        <?php endforeach; ?>
        
        
        
                </ul>
            </div>
		  <div class="widget widget_categories">
                <h3><?=$products1?> </h3>
                <ul>
                    <?php
         $kiss = new Kiss(dbPath('products'));
         $list=$kiss->getPostsByRand_c("crusher");
         foreach($list as $p):
       ?>
            <li><a href="/products/<?=$p['postname']?>.html"><?=$p['title']?></a></li>
           
        <?php endforeach; ?>
        
        
        
                </ul>
            </div>
			<div class="widget widget_categories">
                <h3><?=$products1?> </h3>
                <ul>
                    <?php
         $kiss = new Kiss(dbPath('products'));
         $list=$kiss->getPostsByRand_c("screen");
         foreach($list as $p):
       ?>
            <li><a href="/products/<?=$p['postname']?>.html"><?=$p['title']?></a></li>
           
        <?php endforeach; ?>
        
        
        
                </ul>
            </div>
			<div class="widget widget_categories">
                <h3><?=$products1?> </h3>
                <ul>
                    <?php
         $kiss = new Kiss(dbPath('products'));
         $list=$kiss->getPostsByRand_c("other");
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



