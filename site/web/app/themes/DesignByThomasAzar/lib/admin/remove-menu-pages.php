<?php

/*
 * Remove stuff from admin bar at the top
 */

function remove_wp_nodes() {
    if (!current_user_can('administrator') && !current_user_can('editor')) {
        global $wp_admin_bar;
        $wp_admin_bar->remove_node( 'wp-logo' );
        $wp_admin_bar->remove_node( 'comments' );
        $wp_admin_bar->remove_node( 'new-content' );
        $wp_admin_bar->remove_node( 'my-account' );
    }
}
add_action( 'admin_bar_menu', 'remove_wp_nodes', 999 );

/*
 * Remove menu pages for everyone but admin
 */

function remove_menus(){
    if (!current_user_can('administrator') && !current_user_can('editor')) {
        remove_menu_page( 'index.php' );                  //Dashboard
        remove_menu_page( 'jetpack' );                    //Jetpack*
        remove_menu_page( 'edit.php' );                   //Posts
        remove_menu_page( 'upload.php' );                 //Media
        remove_menu_page( 'edit.php?post_type=page' );    //Pages
        remove_menu_page( 'edit.php?post_type=divisions' );    //Pages
        remove_menu_page( 'edit.php?post_type=front_page' );    //Pages
        remove_menu_page( 'edit.php?post_type=scta_hero' );    //Pages
        remove_menu_page( 'edit-comments.php' );          //Comments
        remove_menu_page( 'themes.php' );                 //Appearance
        remove_menu_page( 'plugins.php' );                //Plugins
        remove_menu_page( 'users.php' );                  //Users
        remove_menu_page( 'tools.php' );                  //Tools
        remove_menu_page( 'options-general.php' );        //Settings
        remove_menu_page('profile.php');                  // Profile
        remove_menu_page('wpcf7');                  // Profile
        remove_menu_page('CF7DBPluginSubmissions');                  // Profile
    }
}

add_action( 'admin_menu', 'remove_menus' );

/*
 * Hide posts from other Users
 */

function posts_for_current_author($query) {
	global $pagenow;
    if (!current_user_can('administrator') && !current_user_can('editor')) {
        if( 'edit.php' != $pagenow && 'admin.php' != $pagenow && !$query->is_admin )
        return $query;

        if( !current_user_can('administrator') && !current_user_can('editor') ) {
            global $user_ID;
            $query->set('author', $user_ID );
        }
        return $query;
    }
}
add_filter('pre_get_posts', 'posts_for_current_author');
