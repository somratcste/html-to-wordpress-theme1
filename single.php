
	<?php get_header(); ?>
    
	
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
	  
	  <?php if(have_posts()) : ?>
<?php while(have_posts())  : the_post(); ?>



   <div class="article">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="infopost">Posted <span class="date"><?php the_time('M d, Y'); ?></span> by <a href="#">Admin</a> &nbsp;&nbsp;|&nbsp;&nbsp;Category <a href="#"><?php the_category(','); ?></a>  <a href="#" class="com">Comments <span><?php comments_popup_link('No Comment','1 Comment','% Comments'); ?></span></a></p>
          <div class="clr"></div>
          <div class="img" id=" single_image">
		  <?php the_post_thumbnail('post-image', array('class' => 'post-thumb')); ?>
		  </div>
          <div class="post_content" id=" single_page">
	<?php the_content(); ?>

	   <?php comments_template( '', true ); ?> 
	     <!-- <p class="spec"><a href="#" class="rm">Read more &raquo;</a></p> -->
          </div>
          <div class="clr"></div>
        </div>

	   
<?php endwhile; ?>

<?php else : ?>
	<h3><?php _e('404 Error&#58; Not Found'); ?></h3>
<?php endif; ?>

	   
		
      </div>
      
	  <?php get_sidebar(); ?>
	  
    </div>
  </div>
 
 <?php get_footer(); ?> 