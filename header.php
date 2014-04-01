<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php wp_title(' '); ?><?php if(wp_title(' ', false)) { echo ' &raquo; '; } ?><?php if ( is_single() ) { ?> Blog Archive &raquo; <?php } ?><?php bloginfo('name'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />

 <link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri(); ?>/themes/light/light.css" media="screen" />	
        <link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri(); ?>/themes/dark/dark.css" media="screen" />	
        <link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri(); ?>/themes/bar/bar.css" media="screen" />	
        <link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri(); ?>/themes/default/default.css" media="screen" />	
        <link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri(); ?>/nivo-slider.css" media="screen" />	
		<link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri(); ?>/comments.css" media="screen" />
		  <script type="text/javascript" src="<?php echo  get_template_directory_uri(); ?>/js/jquery-1.9.0.min.js"> </script>


<?php wp_head(); ?>
</head>
<body <?php body_class(''); ?>>
<div class="main">



  <div class="header">
  
  
    <div class="header_resize">
	
	
      <div class="logo">
	  <div id="header">
	    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
	    <p class="desc"><?php bloginfo('description');?></p>
	</div>
	 
	  
        
      </div>
      <div class="menu_nav">
    
        <?php wp_nav_menu(array('theme_location'=>'header-menu')); ?>

      </div>
      <div class="clr"></div>