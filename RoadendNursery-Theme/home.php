<?php get_header(); ?>

	                <nav>
                     <ul class="main-nav">
                        <li><a href="about" class="nav-img"><img src="/wp-content/themes/RoadendNursery-Theme/assets/img/About-link.png" alt="about nav image"/></a></li>
                        <li><a href="discovery" class="nav-img"><img src="/wp-content/themes/RoadendNursery-Theme/assets/img/courses-link.png" alt="discover nav image"/></a></li>
                        <li><a href="contact" class="nav-img"><img src="/wp-content/themes/RoadendNursery-Theme/assets/img/contact-link.png" alt="contact nav image"/></a></li>
                     </ul>
                
                </nav>
        
                      <div id="main-pic">
                      <div id="slider1">
  <div><img src="/wp-content/themes/RoadendNursery-Theme/assets/img/Main-pic-farm-painting.jpg" alt="farm painting"/></div>
  <div><img src="/wp-content/themes/RoadendNursery-Theme/assets/img/Main-pic-littleboy-drawing.jpg" alt="farm painting"/></div>
</div>

<div id="gallery-link"><a href="#"><img src="/wp-content/themes/RoadendNursery-Theme/assets/img/gallery-btn.png" alt="gallery-link" class="gallery"/></a></div>
</div><!--main-pic-->
        
        
        
        
        	<div class="divider"><img src="/wp-content/themes/RoadendNursery-Theme/assets/img/divder-dots.png" alt="divider dots" style="margin:auto;"/></div>
        
        
        
        
                            <section class="lower-section">
                            
                                <section class="left-content dot-HandW">
                                    <img src="/wp-content/themes/RoadendNursery-Theme/assets/img/Column-dots.png" alt="background dots"/>
                                    <img src="/wp-content/themes/RoadendNursery-Theme/assets/img/welcome.png" alt="welcome to roadend nursery" class="welcome"/>
                                    <img src="/wp-content/themes/RoadendNursery-Theme/assets/img/the-roadend-girls.png" alt="Loopy and the staff" class="staff"/>
                                    <p class="welcome-text">Roadend is a place where children can feel at home from home. This encourages a joy of learning, curiosity, creativity and imagination. A warm, interesting, fun learning environment which nurtures the children's social integration by allowing them freedom to choose and time to discover their place in the world.</p>
                                </section>
                                
                                <section class="middle-content dot-HandW">
                                    <img src="/wp-content/themes/RoadendNursery-Theme/assets/img/Column-dots.png" alt="background dots"/>
                                    <img src="/wp-content/themes/RoadendNursery-Theme/assets/img/ofsted.png" alt="ofsted reports" class="welcome"/>
                                    <div class="ofsted-text"><img src="/wp-content/themes/RoadendNursery-Theme/assets/img/tick.png" alt="tick"/><?php query_posts( 'p=21' );;?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_excerpt('more...'); ?>
<?php endwhile; endif; ?><a href="<?php the_permalink(); ?>" title="more" class="more-link">more...</a></div>
                                    

                                    
                                    <!--<div class="ofsted-text-2ndpara"><img src="/wp-content/themes/RoadendNursery-Theme/assets/img/tick.png" alt="tick"/>Children Thrive in the marvellously child centred environment. They all thoroughly enjoy their time <a href="#">more...</a></div>-->
                                </section>
                                
                                <section class="right-content dot-HandW no-margin-right">
                                    <img src="/wp-content/themes/RoadendNursery-Theme/assets/img/Column-dots.png" alt="background dots"/>
                                    <img src="/wp-content/themes/RoadendNursery-Theme/assets/img/news.png" alt="news section" class="welcome"/>
                                    <p class="news-text"><img src="/wp-content/themes/RoadendNursery-Theme/assets/img/arrow.png" alt="arrow"/><strong>06.11.11</strong> We are always checked and inspected by ofsted and have received good results everytime. <br/><a href="#">more...</a></p>
                                    <p class="news-text-2ndpara"><img src="/wp-content/themes/RoadendNursery-Theme/assets/img/arrow.png" alt="arrow"/><strong>06.11.11</strong> We are always checked and inspected by ofsted and have received good results everytime. <br/><a href="#">more...</a></p>
                                </section>
                            
                            </section> <!--lower-section-->
                            
                            
                            
        
        <div class="divider xclearfloat"><img src="/wp-content/themes/RoadendNursery-Theme/assets/img/divder-dots.png" alt="divider dots" style="margin:auto;"/></div>


<?php get_footer(); ?>