
<footer class="bg-dark">
<div class="container">
<?php
wp_nav_menu(
  array(
  'theme_location' => 'footer-menu',
 //  'menu' => 'Top Bar',
  'menu_class' => 'top-bar'
  )
);
?>
</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
