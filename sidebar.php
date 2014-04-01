<div class="sidebar">
        <div class="searchform">
          <form method="get" id="searchform" action="<?php echo home_url(); ?>/">
		<input type="text" value="<?php esc_attr_e( 'Search', 'brightpage' ); ?>" name="s" id="s" onfocus="if (this.value == '<?php esc_attr_e( 'Search', 'brightpage' ); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php esc_attr_e( 'Search', 'brightpage' ); ?>';}" />
		<input type="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'brightpage' ); ?>" />
		<input type="hidden" name="post_type" value="post">
</form>
        </div>
        <div class="clr"></div>
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          
		  <?php wp_nav_menu( array( 'theme_location' => 'sidebar-menu', 'menu_class' => 'sb_menu' ) ); ?>
		  
        </div>
       
	  <?php dynamic_sidebar('right_sidebar'); ?> 
	   
      </div>
      <div class="clr"></div>