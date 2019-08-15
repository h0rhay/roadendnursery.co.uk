<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="/wp-content/themes/RoadendNursery-Theme/assets/css/main.css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
    
		<!-- JavaScript -->
		<!--[if IE]><![endif]-->
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script src="/wp-content/themes/RoadendNursery-Theme/assets/js/respond.min.js"></script>
        
        <script src="/wp-content/themes/RoadendNursery-Theme/assets/js/jquery-1.7.min.js.jsp" type="text/javascript"></script>
<script src="/wp-content/themes/RoadendNursery-Theme/assets/js/jquery.bxSlider.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#slider1').bxSlider({
    auto: true,
    controls: false
  });
  });
</script>
    
</head>

<body>

    <div id="pagewrap">


            <header>
          		<img src="/wp-content/themes/RoadendNursery-Theme/assets/img/Roadend-nusery-MainBanner12.png" alt="header image"/>
                
                  <div class="logo">  
                    
                    <a href="#" class="logo"><img src="/wp-content/themes/RoadendNursery-Theme/assets/img/Roadend-Nursery-Logo.png" alt="Roadend Nursery School logo"/></a>
                    
                    </div><!--logo-->
</header>