<?php

/* Dynamic menu*/

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'sidebar-menu' => __( 'Sidebar Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


function somrat_widget_areas() {
	register_sidebar( array(
		'name' => __( 'Right Widget', 'somrat' ),
		'id' => 'right_sidebar',
		'before_widget' => '<div class="gadget">',
		'after_widget' => '</div>',
	    'before_title' => '<h2 class="star">',
	    'after_title' => '</h2>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Left Footer', 'somrat' ),
		'id' => 'left_footer',
		'before_widget' => '<div class="col c1">',
		'after_widget' => '</div>',
	    'before_title' => '<h2>',
	    'after_title' => '</h2>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Middle Footer', 'somrat' ),
		'id' => 'mid_footer',
		'before_widget' => '<div class="col c2">',
		'after_widget' => '</div>',
	    'before_title' => '<h2>',
	    'after_title' => '</h2>',
	) );
	
}
add_action('widgets_init', 'somrat_widget_areas');

/* This code for enable Featured Image Support of wordpress */

add_theme_support('post-thumbnails', array('post') );

/* For enable Crop feature */

set_post_thumbnail_size( 200, 200, true );
add_image_size( 'post-image', 150, 150, true );

//  For enable Comments:


function comment_scripts(){

   if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

}
add_action( 'wp_enqueue_scripts', 'comment_scripts' );

// Changing excerpt more
	   function new_excerpt_more($more) {
	   global $post;
	   return '… <a href="'. get_permalink($post->ID) . '">' . 'Read More' . '</a>';
	   }
	   add_filter('excerpt_more', 'new_excerpt_more');
	   
	   
	  
add_theme_support( 'custom-background' );






	// Admin Panel
	//  Set some default values
	define('HEADER_TEXTCOLOR', 'ffffff');//  Default text color
	define('HEADER_IMAGE', '%s/images/Header.jpg');  // %s is theme dir uri, set a default image
	define('HEADER_IMAGE_WIDTH', 998); //  Default image width is actually the div's width
	define('HEADER_IMAGE_HEIGHT', 125);  // Same for height
	 
	function header_style() {
	//  This function defines the style for the theme
	//  You can change these selectors to match your theme
	?>
	<style type="text/css">
	#header{
	background: url(<?php header_image() ?>) no-repeat;
	}
	<?php if ( 'blank' == get_header_textcolor() ) { ?>
	#header h1, #header #desc {
	display: none;
	}
	<?php } else { ?>
	#header h1 a, #desc {
	color:#<?php header_textcolor() ?>;
	}
	#desc {
	margin-right: 30px;
	}
	<?php } ?>
	</style>
	<?php
	}
	 
	function admin_header_style() {
	?>
	<style type="text/css">
	#headimg{
	background: url(<?php header_image() ?>) no-repeat;	height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
	width:<?php echo HEADER_IMAGE_WIDTH; ?>px;
	padding:0 0 0 18px;
	}
	 
	#headimg h1{
	padding-top:40px;
	margin: 0;
	}
	#headimg h1 a{
	color:#<?php header_textcolor() ?>;
	text-decoration: none;
	border-bottom: none;
	}
	#headimg #desc{
	color:#<?php header_textcolor() ?>;
	font-size:1em;
	margin-top:-0.5em;
	}
	 
	#desc {
	display: none;
	text-align:center;
	}
	 
	<?php if ( 'blank' == get_header_textcolor() ) { ?>
	#headimg h1, #headimg #desc {
	display: none;
	}
	#headimg h1 a, #headimg #desc {
	color:#<?php echo HEADER_TEXTCOLOR ?>;
	}
	<?php } ?>
	 
	</style>
	<?php
	}
	 
	add_custom_image_header('header_style', 'admin_header_style');
	 
	
	
?>