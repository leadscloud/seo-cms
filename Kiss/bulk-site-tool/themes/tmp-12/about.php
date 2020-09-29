   <?php include('header.php'); ?>


    <!-- Page Title -->
    <h1 class="page-title fullwidth-padding">
        <div class="container">
            <a href="/"><?=$home1?> >> </a> <?=$about1?>
        </div>
    </h1>


    <!-- Content
    ======================================================================== -->
    <div id="content" class="container">
		 <hr class="sep20">

       <h4 class="headline"><?=$why1?></h4>
        
        <div class="one-fifth">
            
            <p>1  &nbsp;&nbsp;<?=$why1p2?></p>
        </div>
        <div class="two-fifth">
            
            <p>2   &nbsp;&nbsp;<?=$why1p6?></p>
        </div>
      
        
        <div class="two-fifth column-last">
           <p>3  &nbsp;&nbsp; <?=$why1p5?></p>
        </div>
         <hr class="sep10">
		<div class="two-fifth">
           <p>4  &nbsp;&nbsp; <?=$why1p4?></p>
        </div>
        <div class="one-fifth">
            
            <p>5  &nbsp;&nbsp; <?=$why1p1?></p>
        </div>
        
        <div class="two-fifth column-last">
           <p>6 &nbsp;&nbsp;  <?=$why1p3?></p>
        </div>
        
          <hr class="sep20">
        <div class="clear"></div>

        
        <div class="one-fourth">
            <div class="team-member">
                <div class="member-photo">
                    <img src="<?=$curdir?>/images/news01.jpg" alt="" />
                    <div class="overlay"></div>
                </div>
                <div class="member-info">
                    <h4><?=$abouth1?></h4>
                  
                    <p><?=$abouth1p?></p>
                     <ul class="member-social-links">
                        <li><a onclick="openZoosUrl('chatwin');"><?=$learn?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="one-fourth">
            <div class="team-member">
                <div class="member-photo">
                    <img src="<?=$curdir?>/images/news02.jpg" alt="" />
                    <div class="overlay"></div>
                </div>
                <div class="member-info">
                    <h4><?=$abouth2?></h4>
                   
                    <p><?=$abouth2p?></p>
                     <ul class="member-social-links">
                        <li><a onclick="openZoosUrl('chatwin');"><?=$learn?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="one-fourth">
            <div class="team-member">
               <div class="member-photo">
                    <img src="<?=$curdir?>/images/news03.jpg" alt="" />
                    <div class="overlay"></div>
                </div>
                <div class="member-info">
                    <h4><?=$abouth3?></h4>
                    
                    <p><?=$abouth3p?></p>
                    <br><br>
                    <ul class="member-social-links">
                        <li><a onclick="openZoosUrl('chatwin');"><?=$learn?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="one-fourth column-last">
            <div class="team-member">
               <div class="member-photo">
                    <img src="<?=$curdir?>/images/news04.jpg" alt="" />
                    <div class="overlay"></div>
                </div>
                <div class="member-info">
                    <h4><?=$abouth4?></h4>
                 
                    <p><?=$abouth4p?></p>
                    <br><br>
                     <ul class="member-social-links">
                        <li><a onclick="openZoosUrl('chatwin');"><?=$learn?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Team / End -->
       <hr class="sep20">
        <div class="clear"></div>
        <!-- Slider -->
        <div class="flexslider image-slider two-fifth">
        <hr class="sep20">
            <ul class="slides">
                <li>
                    <img src="<?=$curdir?>/images/slide1.jpg" alt="" />
                    <div class="overlay"></div>
                </li>
                <li>
                    <img src="<?=$curdir?>/images/slide2.jpg" alt="" />
                    <div class="overlay"></div>
                </li>
                
            </ul>
        </div>

       

        

        

		<div class="three-fifth">
           <p> <?=$about1p1?><p> <?=$about1p2?>

        </div>
        
        <hr class="sep10">
        <div class="clear"></div>

		<div>
        <p> <?=$about1p3?>
        <p> <?=$about1p4?><p> <?=$about1p5?>

        </div>
        
		
       
       
      
    </div>
    <!-- Content / End -->

<?php include('footer.php'); ?>
