<div class='button mobile-only mobile-menu'>Menu</div>
<nav class="header-menu">
	<div class='mobile-only' style='padding: 1rem 0;'>
		<?php get_search_form(); ?>
	</div>
	<ul class='main-menu'>
		<?php
    $exclude = get_id_by_slug('member-login');
		$args = [
      'title_li' => '',
      'depth'    => '2',
      'walker'   => new Clean_Walker_Page,
      'exclude'  => $exclude,
    ];
		wp_list_pages( $args );
		?>
    <li class='main-menu__item main-menu--login'>
      <a class='main-menu__link main-menu__link--login' href='/member-login'>Members Only</a>
    </li>
	</ul>
</nav>
