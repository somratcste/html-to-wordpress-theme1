
	<?php get_header(); ?>
    
	
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
	  
	 


   <h2 class="latest_frm_cat_title archive_title"><?php printf( __( 'Search Results for: %s', 'brightpage' ), '<span>' . get_search_query() . '</span>' ); ?></h2>	
						
						
					<?php if (have_posts()) : ?>
					
						<?php get_template_part( 'post-loop' ); // Post Excerpt (post-excerpt.php) ?>

					<?php else : ?>
						<h2>404 <span>not found</span></h3>
					<?php endif; ?>	


	   <p class="pages">
		
	  <!--navigation -->
	  <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts') ); ?></div>
<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>') ); ?></div>
		</p>
		
      </div>
      
	  <?php get_sidebar(); ?>
	  
    </div>
  </div>
 
 <?php get_footer(); ?> 