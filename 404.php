<?php get_header(); ?>

<section class="page-wrap errorpage">

  <div class="row container m-auto my-5">

    <div class="col-lg-9">

      <div id="content" class="site-content col-lg-9" role="main">

            <header class="page-header bg-white">
              <br>
                <h3 class="page-title  text-dark">Page not found</h3>
            </header>

            <div class="page-wrapper ">
                <div class="page-content">

                    <h4 class="text-info my-5"> It looks like nothing was found at this location. Maybe try a search?</h4>
                    <?php get_search_form(); ?>
                </div>
            </div>
         </div>

   </div>

   <div class="col-lg-3 widget">

     <?php if(is_active_sidebar('blog-sidebar')) :?>
       <?php dynamic_sidebar('blog-sidebar'); ?>

     <?php endif; ?>
   </div>

</div>
</section>
<?php get_footer(); ?>
