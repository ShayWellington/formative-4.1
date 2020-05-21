<!--
<?php

//Hook1: customize-register to define new Cutomizer panels, settings, controls
function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here


   // Background Colour
   $wp_customize->add_setting( 'theme_backgroundColour' , array(
       'default'   => '#ffffff',
       'transport' => 'refresh',
   ) );


   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_backgroundColourControl', array(
   	'label'      => __( 'Background Colour', 'gardenTheme' ),
    'description' => 'Change the background Colour',
   	'section'    => 'colors',
   	'settings'   => 'theme_backgroundColour',
   ) ) );

   // Header and Footer garden_backgroundColour // Background Colour
    $wp_customize->add_setting( 'theme_headerFooterColour' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );


    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_headerFooterColourControl', array(
    	'label'      => __( 'Header and Footer Colour', 'Theme' ),
     'description' => 'Change the Header and Footer Colour',
    	'section'    => 'colors',
    	'settings'   => 'theme_headerFooterColour',
    ) ) );


   // Footer Message
   $wp_customize->add_section( 'theme_footerSection' , array(
       'title'      => __( 'Footer Text', 'Theme' ),
       'priority'   => 30,
   ));

   $wp_customize->add_setting( 'theme_footerMessage' , array(
       'default'   => 'copyright@2020',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'garden_footerMessageControl', array(
     'label'      => __( 'Footer Text', 'Theme' ),
     'section'    => 'theme_footerSection',
     'settings'   => 'theme_footerMessage',
   ) ) );

   // Site Title Text
   $wp_customize->add_section( 'theme_siteTitleTextSection' , array(
       'title'      => __( 'Site Title Text', 'Theme' ),
       'priority'   => 30,
   ));

   $wp_customize->add_setting( 'theme_siteTitleText' , array(
       'default'   => 'UHARC',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'garden_siteTitleTextControl', array(
     'label'      => __( 'Site Title Text', 'Theme' ),
     'section'    => 'theme_siteTitleTextSection',
     'settings'   => 'theme_siteTitleText',
   ) ) );

   // header image

   $wp_customize->add_section( 'theme_frontPageImage' , array(
      'title'      => __( 'Front Page Header Image', 'Theme' ),
      'priority'   => 30,
  ) );

  $wp_customize->add_setting( 'theme_frontPageImageSetting' , array(
      'default'   => '',
      'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'garden_frontPageImageControl', array(
    'label'      => __( 'Front Page Header Image', 'Theme' ),
    'section'    => 'theme_frontPageImage',
    'settings'   => 'theme_frontPageImageSetting',
  ) ) );






   }

 add_action( 'customize_register', 'mytheme_customize_register' );


//Hook2: wp_head to output custom-generated CSS
 function mytheme_customize_css()
 {
   ?>
    <style type="text/css">
    body {
            background-color: <?php echo get_theme_mod('garden_backgroundColour','#ffffff'); ?>!important;
         }
   .myTheme{
             background-color: <?php echo get_theme_mod('garden_headerFooterColour', '#000000'); ?>!important ;
           }


  </style>
<?php
}
add_action( 'wp_head', 'mytheme_customize_css'); -->
