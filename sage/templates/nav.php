<div class='button mobile-only mobile-menu'>Menu</div>
<nav class="header-menu">
	<div class='mobile-only' style='padding: 1rem 0;'>
		<?php get_search_form(); ?>
    <div class='members-only'>
      <?php
      if ( is_user_logged_in() ):
        $current_user = wp_get_current_user();
        if ( $current_user->user_firstname ) {
          $first_name = 'Hi, ' . $current_user->user_firstname . '!';
        } else {
          $first_name = 'My Profile';
        } ?>
        <a class='button button--sign-in' href='/member-login?loggedin=true'><?= $first_name; ?></a>
        <?php
        $args = [
          'theme_location' => 'extra-menu',
          'menu_class' => 'members-only-menu members-only-menu--mobile sub-menu',
          'container' => '',
        ];

        wp_nav_menu( $args );
      else: ?>
        <a class="button button--sign-in" href="/member-login">Sign in</a>
      <?php endif; ?>
	   </div>
   </div>
	<?php wp_nav_menu( [ 'theme_location' => 'primary_navigation', 'menu_class' => 'main-menu', 'container' => '', 'depth' => 2, ] ); ?>
</nav>
