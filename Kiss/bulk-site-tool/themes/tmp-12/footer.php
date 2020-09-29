 <div id="footer" class="fullwidth">

        <div class="container">

            <!-- About -->
            <div class="one-fourth">
                <div class="widget widget_text">
                    <div class="logo">TQMC</div>
                   <?=$xin1p?> 
                </div>
            </div>

           <div class="one-fourth">
                <div class="widget widget_latest_posts">
                    <h3><a href="/project/"><?=$project1?></a></h3>
                    <ul>
                    
		<?php
         $kiss = new Kiss(dbPath('project'));
         $list=$kiss->getPostsByRand(2);
         foreach($list as $p):
       ?>
      
                    <li>
                            <h6><a href="/project/<?=$p['postname']?>.html"><?=$p['title']?></a></h6>
                             <?php the_excerpt($p['description'],100); ?>
                        </li>
                      <?php endforeach; ?>  
                    </ul>
                </div>
            </div>
            <!-- Contacts -->
            <div class="one-fourth">
                <div class="widget widget_latest_posts">
                    <h3><a href="/products/"><?=$products1?></a></h3>
                    <ul>
                    
		<?php
         $kiss = new Kiss(dbPath('products'));
         $list=$kiss->getPostsByRand(2);
         foreach($list as $p):
       ?>
      
                    <li>
                            <h6><a href="/products/<?=$p['postname']?>.html"><?=$p['title']?></a></h6>
                             <?php the_excerpt($p['description'],100); ?>
                        </li>
                      <?php endforeach; ?>  
                    </ul>
                </div>
            </div>

            <!-- Photo Stream -->
            <div class="one-fourth column-last">
                <div class="widget widget_flickr">
                    <h3><a href="/solutions/"><?=$solutions1?></a></h3>
                    <div class="PPP">
                    <ul>
                    	<?php
         $kiss = new Kiss(dbPath('solutions'));
         $list=$kiss->getPostsByRand(12);
         foreach($list as $p):
       ?>
                      <li>
                            <a href="/solutions/<?=$p['postname']?>.html"><img src="<?=$p['img1']?>" alt="<?=$p['title']?>"></a>
                            </li>
                             <?php endforeach; ?>
                    </ul>
                    </div>
                </div>
            </div>

        </div>

        <!-- Info -->
        <div class="info">
            <div class="container">

                <!-- Copyright -->
                <ul class="copyright">
                    <li><?=$copy?> </li>
                    
                </ul>

                <!-- Social Links -->
                

            </div>
        </div>

    </div>
    <!-- Footer / End -->

</div>
<!-- Body Wrapper / End -->

<!-- Back to Top -->
<a href="#" id="back-to-top"><i class="icon-chevron-up"></i></a>
<?=$chat1?>

<!-- Styles Selector
================================================== -->



</body></html>




