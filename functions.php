<?php
show_admin_bar(false);
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('custom-header');

// Creating nav menus
function register_theme_menus()
{
  register_nav_menus(
    array(
      'primary-menu' => _('Primary Menu')
    )
  );
}

add_action('init', 'register_theme_menus');


// widgets

function myWidget_create_widget($name, $id, $description)
{

  register_sidebar(array(
    'name' => __($name),
    'id' => $id,
    'description' => __($description),
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="module-heading">',
    'after_title' => '</h3>'
  ));

}

myWidget_create_widget('Home Widget 1', 'home_widget1', 'Displays row of content on home page');
myWidget_create_widget('Home Widget 2', 'home_widget2', 'Displays row of content home page');
myWidget_create_widget('About Widget', 'about_widget', 'Displays row of content on about page');
myWidget_create_widget('Blog sidebar', 'blog_sidebar', 'Displays column of widgets on blog page');

// adding theme styles
function the_theme_styles()
{
  wp_enqueue_style('mytheme-animate', get_template_directory_uri() . '/css/animate.css');
  wp_enqueue_style('googlefonts_css', 'https://fonts.googleapis.com/css?family=Open+Sans|Roboto');
  wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'the_theme_styles');

// adding theme javascript
function my_theme_js()
{
  wp_enqueue_script('main_js', get_template_directory_uri() . '/js/app.js', '', '', true);
}

add_action('wp_enqueue_scripts', 'my_theme_js');

// Changing excerpt length

function mycustom_excerpt_length($length)
{
  return 20;
}
add_filter('excerpt_length', 'mycustom_excerpt_length', 999);
// Changing read more

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more)
{
  global $post;
  return '<a class="readmore" href="' . get_permalink($post->ID) . '"> Read More...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>