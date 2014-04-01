
	<?php get_header(); ?>
    
	 <div class="slider-wrapper theme-light">
                 <div  class="nivoSlider" id="slider"> 
		
		<a href="#"><img src="<?php echo  get_template_directory_uri(); ?>/images/slide1.jpg" width="960" height="360" alt="" /></a> <a href="#"><img src="<?php echo  get_template_directory_uri(); ?>/images/slide2.jpg" width="960" height="360" alt="" /></a> <a href="#"><img src="<?php echo  get_template_directory_uri(); ?>/images/slide3.jpg" width="960" height="360" alt="" /></a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        
       <?php get_template_part('post-loop'); ?>
	   
	   
        <p class="pages">
		
		
<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts') ); ?></div>
<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>') ); ?></div>
		
		</p>
		
      </div>
      
	  <?php get_sidebar(); ?>
	  
    </div>
  </div>
 
 <?php get_footer(); ?> 