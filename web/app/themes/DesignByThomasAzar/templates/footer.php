<footer class="main-footer">
  <div class="container">
    <?php
    if (has_nav_menu('footer_navigation')) :
      wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav main-footer__nav']);
    endif;
    ?>
  </div>
</footer>
