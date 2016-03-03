<div class='button mobile-only mobile-menu'>Menu</div>
<nav class="header-menu">
	<div class='mobile-only' style='padding: 1rem 0;'>
		<?php get_search_form(); ?>
	</div>
	<ul class='header-menu-items'>
		<?php

		$exclude_array = [
			'member-logged-in',
			'member-logged-in/job-board',
		];
		$exclude = '';
		foreach ( $exclude_array as $slug ) {
			$exclude .= get_id_by_slug( $slug ) . ',';
		}
		
		$args = array(
			'title_li' => '',
			'depth'    => '2',
			'walker'   => new Clean_Walker_Page,
			'exclude'  => $exclude,
		);

		wp_list_pages( $args );

		if( is_user_logged_in() ){
			global $current_user;
			get_currentuserinfo();

			$args = [
				'title_li' => '',
				'walker'   => new Clean_Walker_Page,
				'include'  => $exclude,
				'echo'     => false,
			];
			$nav = wp_list_pages( $args );
			$nav = str_replace( 'Member Logged In', "$current_user->display_name", $nav );
			echo $nav;
		}

		?>
	</ul>
</nav>
