<?php

$nav_walker      = new Clean_Walker();

$args = array(
	'title_li' => '',
	'echo' => 0,
	'walker' => $nav_walker,
);

$navMenu = wp_list_pages( $args );
echo '<nav><ul>';
echo $navMenu;

?>
