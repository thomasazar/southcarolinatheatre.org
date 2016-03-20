<div class='button mobile-only mobile-menu'>Menu</div>
<nav class="header-menu">
	<div class='mobile-only' style='padding: 1rem 0;'>
		<?php get_search_form(); ?>
	</div>
	<ul class='header-menu-items'>
		<?php
		$args = [
      'title_li' => '',
      'depth'    => '2',
      'walker'   => new Clean_Walker_Page,
      'exclude'  => get_id_by_slug('member-login'),
    ];
		wp_list_pages( $args );
		?>
    <li class='page_item page_item--login'>
      <a href='/member-login'>Login</a>
    </li>
	</ul>
</nav>
