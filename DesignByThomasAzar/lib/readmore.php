<?php
/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */

add_filter( 'excerpt_more', function ( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( ' [read more...]', 'textdomain' )
    );
} );

add_filter( 'excerpt_length', function ( $length ) { return 20; }, 999 );
?>
