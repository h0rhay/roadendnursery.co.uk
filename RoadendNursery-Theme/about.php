<?php

	/*
		Template Name:  about
	*/
	
?>


<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		
		<title></title>

		<!-- Meta tags -->
		<meta name="description" content="Roadend Nursery school, in the Brede valley, East sussex. " />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- Don't forget to update the bookmark icons (favicon.ico and apple-touch-icons) in the root: http://mathiasbynens.be/notes/touch-icons -->

		<!-- CSS -->
        
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="/wp-content/themes/RoadendNursery-Theme/assets/css/main.css" />
    
		<!-- JavaScript -->
		<!--[if IE]><![endif]-->
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script src="assets/js/respond.min.js"></script>
    
    
	</head>
    
<body>

    <div id="pagewrap">


            <header>
          		<img src="/wp-content/themes/RoadendNursery-Theme/assets/img/Roadend-nusery-MainBanner12.png" alt="header image"/>
                
                  <div class="logo">  
                    
                    <a href="#" class="logo"><img src="/wp-content/themes/RoadendNursery-Theme/assets/img/Roadend-Nursery-Logo.png" alt="Roadend Nursery School logo"/></a>
                    
                    </div><!--logo-->
            </header>
    
    
<div class="divider"><img src="/wp-content/themes/RoadendNursery-Theme/assets/img/divder-dots.png" alt="divider dots" style="margin:auto;"/></div>
    
    
                <nav>
                     <ul class="main-nav">
                        <li><a href="about" class="nav-img"><img src="/wp-content/themes/RoadendNursery-Theme/assets/img/About-link.png" alt="about nav image"/></a></li>
                        <li><a href="discovery" class="nav-img"><img src="/wp-content/themes/RoadendNursery-Theme/assets/img/courses-link.png" alt="discover nav image"/></a></li>
                        <li><a href="contact" class="nav-img"><img src="/wp-content/themes/RoadendNursery-Theme/assets/img/contact-link.png" alt="contact nav image"/></a></li>
                     </ul>
               
                </nav>
        
        
      <section class="about-lower-section">
                            
        <section class="main-content">
                                    
                                    <img src="/wp-content/themes/RoadendNursery-Theme/assets/img/home-from-home.png" alt="about roadend nursery" class="about-title"/>
                                    <div class="content-text">
									<?php query_posts ( 'pagename=about&posts_per_page=1' );?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?></div>
                                     
        </section>
                            
      </section> <!--lower-section-->
                            
                           
                           
        
  <div class="divider" style="clear:both;"><img src="/wp-content/themes/RoadendNursery-Theme/assets/img/divder-dots.png" alt="divider dots" style="margin:auto;"/></div>


<?php get_footer(); ?>