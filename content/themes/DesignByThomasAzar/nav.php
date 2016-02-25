<?php
/*
$nav_walker      = new Clean_Walker();

$args = array(
	'title_li' => '',
	'echo' => 0,
	'walker' => $nav_walker,
);

$navMenu = wp_list_pages( $args );
echo '<div class='mobile-only menu-open-button' id='mobile-menu'>Menu</div><nav class='header-menu'>	<ul class='header-menu-items' id='headerMenuItems'>	<li class='menu-item menu-close-button mobile-only' id='menu-close-button'><a href='#'>Close</a></li>';
echo $navMenu;
*/
?>
<div class='mobile-only menu-open-button' id='mobile-menu'>Menu</div>
<nav class="header-menu">
	<ul class='header-menu-items' id='headerMenuItems'>
		<li class='menu-item menu-close-button mobile-only' id='menu-close-button'>
			<a href='#'>Close</a>
		</li>
		<?php

		$args = array(
			'title_li' => '',
			'depth'    => '2',
		);

		wp_list_pages( $args );

		?>
	</ul>
</nav>
