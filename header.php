<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right');
        bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="navigation">  
<?php $header_image = get_header_image();
if (!empty($header_image)) : ?>
        <a href="<?php bloginfo('url'); ?>"><img src="<?php echo esc_url($header_image); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
<?php else : ?>
<a class="header-text" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
<?php endif ?>
<div class="hamburger-menu" onclick="hamburgerToggle(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>
<nav id="nav" class="animated fadeInRight">
<?php

$defaults = array(
  'container' => false,
  'theme_location' => 'primary-menu',
  'menu_class' => 'no-bullet'
);

wp_nav_menu($defaults);

?>
</nav>
</header>

