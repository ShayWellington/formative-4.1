<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body class="body">
    <header>
      <img src="<?php echo get_template_directory_uri(); ?> /images/logo-placeholder.png" alt="Logo">
      <div class="container">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'top-menu',
              'menu' => 'Top Bar',
              'menu_class' => 'top-bar'
              )
            );
           ?>
     </div>
     <div class ="container text-info my-5">
       <?php get_search_form(); ?>
     </div>
    </header>
