<?php
require_once( 'lib/admin/menus.php' );

require_once( 'lib/post-types/divisions.php' );
require_once( 'lib/metabox/divisions.php' );

// Only show uploads for the current user (execpt for Site Admin)
add_filter( 'ajax_query_attachments_args', function ( $query ) {
	if ( ! current_user_can( 'update_core' ) ){
    	$user_id = get_current_user_id();
		if ( $user_id ) {
			$query['author'] = $user_id;
		}
		return $query;
	}
	else { return $query; }
} );

// Include jQuery and main.js at bottom of page
add_action( 'wp_enqueue_scripts', function () {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'main', home_url( '/js/main.js'), ['jquery'], NULL, true );
} );

// Add async to all <script>s
add_filter('script_loader_tag', function ( $tag ) {
    return str_replace( ' src', ' defer src', $tag );
}, 10, 2);

/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( ' [read more...]', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

?>
