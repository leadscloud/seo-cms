
   <?php include('header.php'); ?>

	
    <!-- Slider
    ======================================================================== -->
    <div class="revslider-wrapper fullwidth" dir="ltr">
        <div class="revslider">
            <ul>
                  <li data-transition="fade" data-slotamount="7" data-masterspeed="300">
                    <!-- The main image in the slide -->
                    <img src="#" style="display: none;" />
                    <!-- The captions of the first slide -->
                    
                    <div class="caption sfb boxshadow" data-x="500" data-y="200" data-speed="300" data-start="1200" data-easing="easeOutExpo">
                        <img src="<?=$curdir?>/images/sp1.jpg" />
                    </div>
                    <div class="caption sft big_black" data-x="65" data-y="50" data-speed="300" data-start="1600" data-easing="easeOutExpo">		<div class="sp-6">		
					<?=$xin1?>
                     </div>  
                    </div>
                    <div class="caption sft medium_white" data-x="90" data-y="200" data-speed="300" data-start="2000" data-easing="easeOutExpo">			<div class="sp-2">
                     	 <?=$xin1p?>
                      </div>
                    </div>
                    <div class="caption sfb button" data-x="70" data-y="450" data-speed="300" data-start="2400" data-easing="easeOutExpo">
                        <a href="/about.html" class="sp-7 button white-darkgray big"><?=$learn?></a>
                    </div>
                </li>


                <li data-transition="fade" data-slotamount="7" data-masterspeed="300">
                    <!-- The main image in the slide -->
                    <img src="#" style="display: none;" />
                    <!-- The captions of the first slide -->
                    <div class="caption sft boxshadow" data-x="615" data-y="90" data-speed="300" data-start="0" data-easing="easeOutExpo">
                        <img src="<?=$curdir?>/images/content/slider_photo_01.jpg" />
                    </div>
                    <div class="caption sft boxshadow" data-x="800" data-y="90" data-speed="300" data-start="400" data-easing="easeOutExpo">
                        <img src="<?=$curdir?>/images/content/slider_photo_03.jpg" />
                    </div>
                    <div class="caption sfb boxshadow" data-x="615" data-y="275" data-speed="300" data-start="800" data-easing="easeOutExpo">
                        <img src="<?=$curdir?>/images/content/slider_photo_02.jpg" />
                    </div>
                    <div class="caption sfb boxshadow" data-x="800" data-y="275" data-speed="300" data-start="1200" data-easing="easeOutExpo">
                        <img src="<?=$curdir?>/images/content/slider_photo_04.jpg" />
                    </div>
                    <div class="sp-1 caption sft big_black" data-x="85" data-y="130" data-speed="300" data-start="1600" data-easing="easeOutExpo">			<div class="sp-5">	
					<?=$xin4?>
                       </div>
                    </div>
                    <div class="caption sft medium_white" data-x="90" data-y="220" data-speed="300" data-start="2000" data-easing="easeOutExpo">			<div class="sp-2">
                     	 <?=$xin4p?>
                      </div>
                    </div>
                    <div class="caption sfb button" data-x="70" data-y="450" data-speed="300" data-start="2400" data-easing="easeOutExpo">
                        <a href="/about.html" class="sp-7 button white-darkgray big"><?=$learn?></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Slider / End -->

    <hr class="sep90">

    <!-- Content
    ======================================================================== -->
    <div id="content" class="container">

        <!-- Services -->
        <div class="service one-third">
            
            <div class="service-description">
                <h3><?=$products1?> </h3>
                <p><?=$products1p?> </p>
                <div class="more">
                    <a href="/products/" class="button gray-yellow small"><?=$learn?> </a>
                </div>
            </div>
        </div>
        <div class="service one-third">
            
            <div class="service-description">
                <h3><?=$project1?> </h3>
                <p><?=$project1p?> </p>
                <div class="more">
                    <a href="/project/" class="button gray-yellow small"><?=$learn?></a>
                </div>
            </div>
        </div>
        <div class="service one-third column-last">
           
            <div class="service-description">
                <h3><?=$solutions1?></h3>
                <p><?=$solutions1p?></p>
                <div class="more">
                    <a href="/solutions/" class="button gray-yellow small"><?=$learn?></a>
                </div>
            </div>
        </div>
        <!-- Services / End -->

        <hr class="sep40">

        <!-- Project Carousel -->
        <div class="project-carousel fullwidth-padding clearfix">
            <a id="project-prev" class="jcarousel-prev" href="#"><i class="icon-chevron-left"></i></a>
            <a id="project-next" class="jcarousel-next" href="#"><i class="icon-chevron-right"></i></a>
            <ul>
            <?php
         $kiss = new Kiss(dbPath('products'));
         $list=$kiss->getPostsByRand(12);
         foreach($list as $p):
       ?>
      
            
           
            
   

            
                <li class="project-item">
                  <img src="<?=$p['img1']?>" alt="<?=$p['title']?>">
                    <div class="overlay"></div>
                    <div class="mask">
                        <a href="<?=$p['img1']?>" class="icon-image folio" rel="gallery"><i class="icon-search"></i></a>
                        <a href="/products/<?=$p['postname']?>.html" class="item-title"><?=$p['title']?></a>
                    </div>
                </li>
                   <?php endforeach; ?> 
               
            </ul>
        </div>
        
        <!-- Project Carousel / End -->

        <hr class="sep90">

        <!-- Logo List -->
        <ul class="logo-list clearfix">
        <?php
         $kiss = new Kiss(dbPath('project'));
         $list=$kiss->getPostsByRand(5);
         foreach($list as $p):
       ?>
      
           

        
            <li class="one-fifth"><a href="/project/<?=$p['postname']?>.html"><img src="<?=$p['img1']?>" alt="<?=$p['title']?>"></a></li>
           
            
           <?php endforeach; ?> 
            
        </ul>

    </div>
    <!-- Content / End -->


    <!-- Footer
    ======================================================================== -->
   <?php include('footer.php'); ?>