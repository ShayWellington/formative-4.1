<?php

//load stylesheet
function load_css(){

  //bootstrap
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.5.0', 'all');
  wp_enqueue_style('bootstrap');

  //my css
  wp_register_style('main',get_template_directory_uri() . '/css/main.css',array(),false,'all');
  wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts','load_css');


//load javascript
function load_js(){
  wp_enqueue_script('jquery');

  wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.5.0', true);
  wp_enqueue_script('bootstrap');

  wp_register_script('js',get_template_directory_uri() . '/js/script.js', array('jquery'), false,true);
  wp_enqueue_script('js');
}
add_action('wp_enqueue_scripts','load_js');


// theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus
register_nav_menus(
  array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
    'footer-menu' => 'Footer Menu Location',
  )


);

//custom image size
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-small', 300, 200, true);

// Register sidebars
function my_sidebars(){
  register_sidebar(
      array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
      )
    );

    register_sidebar(
        array(
          'name' => 'Blog Sidebar',
          'id' => 'blog-sidebar',
          'before_title' => '<h4 class="widget-title">',
          'after_title' => '</h4>'
        )
      );
}

add_action('widgets_init', 'my_sidebars');

 ?>
