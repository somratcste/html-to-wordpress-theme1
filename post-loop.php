<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>

	<!---- Post Query info here -->
	<div class="article">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="infopost">Posted <span class="date"><?php the_time('M d, Y'); ?></span> by <a href="#">Admin</a> &nbsp;&nbsp;|&nbsp;&nbsp;Category <a href="#"><?php the_category(','); ?></a>  <a href="#" class="com">Comments <span><?php comments_popup_link('No Comment','1 Comment','% Comments'); ?></span></a></p>
          <div class="clr"></div>
          <div class="img">
		  <?php the_post_thumbnail('post-image', array('class' => 'post-thumb')); ?>
		  </div>
          <div class="post_content">
            <?php the_excerpt(); ?>	
			
           <!-- <p class="spec"><a href="#" class="rm">Continue Reading &raquo;</a></p> -->
          </div>
          <div class="clr"></div>
        </div>
	
	
	
<?php endwhile; ?>
<?php endif; ?>