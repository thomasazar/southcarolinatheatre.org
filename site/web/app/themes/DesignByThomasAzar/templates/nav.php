<div class='button mobile-only mobile-menu'>Menu</div>
<nav class="nav-menu">
	<div class='nav-menu__search mobile-only' style='padding: 1rem 0;'>
		<?php get_search_form(); ?>
	</div>
	<ul class="main-menu">
		<?php wp_nav_menu( [ 'theme_location' => 'primary_navigation', 'menu_class' => 'main-menu', 'container' => '', 'depth' => 2, 'items_wrap' =>  '%3$s', ] ); ?>

		<?php

		$class = 'menu-item menu-item--login';
		$text = 'Login';
		$menu = '';
		if (is_user_logged_in()) {
			$class .= ' menu-item-has-children';
			$href = esc_url(get_permalink(get_page_by_title('My Information')));
			$text = 'My Profile';
			$menu = wp_nav_menu( [ 'theme_location' => 'members_navigation', 'menu_class' => 'sub-menu', 'container' => '', 'depth' => 1, 'echo' => false, ] );
		} else {
			$href = esc_url(get_permalink(get_page_by_title('SCTA Members')));
		}

		?>
		<li class="<?= $class; ?>">
			<a href="<?= $href; ?>"><?= $text; ?></a>
			<?= $menu; ?>
		</li>
	</ul>
</nav>
