
<?php get_header(); ?>

<section class="page-wrap ">
      <h1 class="header"> <?php the_title(); ?> </h1>
        <div class="img-container">
          <img class="header-img" src="<?php echo get_template_directory_uri(); ?> /images/cat-header.jpg" alt="Header Image">
        </div>
      <div class="includes">  
        <?php get_template_part('includes/section','content'); ?>
      </div>
</section>
<?php get_footer(); ?>
