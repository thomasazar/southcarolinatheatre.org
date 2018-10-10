<?php

namespace App;

/**
 * Add <body> classes
 */
add_filter('body_class', function (array $classes) {
    /** Add page slug if it doesn't exist */
    if (is_single() || is_page() && !is_front_page()) {
        if (!in_array(basename(get_permalink()), $classes)) {
            $classes[] = basename(get_permalink());
        }
    }

    /** Add class if sidebar is active */
    if (display_sidebar()) {
        $classes[] = 'sidebar-primary';
    }

    /** Clean up class names for custom templates */
    $classes = array_map(function ($class) {
        return preg_replace(['/-blade(-php)?$/', '/^page-template-views/'], '', $class);
    }, $classes);

    return array_filter($classes);
});

/**
 * Add "… Continued" to the excerpt
 */
add_filter('excerpt_more', function () {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
});

/**
 * Template Hierarchy should search for .blade.php files
 */
collect([
    'index', '404', 'archive', 'author', 'category', 'tag', 'taxonomy', 'date', 'home',
    'frontpage', 'page', 'paged', 'search', 'single', 'singular', 'attachment'
])->map(function ($type) {
    add_filter("{$type}_template_hierarchy", __NAMESPACE__.'\\filter_templates');
});

/**
 * Render page using Blade
 */
add_filter('template_include', function ($template) {
    $data = collect(get_body_class())->reduce(function ($data, $class) use ($template) {
        return apply_filters("sage/template/{$class}/data", $data, $template);
    }, []);
    if ($template) {
        echo template($template, $data);
        return get_stylesheet_directory().'/index.php';
    }
    return $template;
}, PHP_INT_MAX);

/**
 * Render comments.blade.php
 */
add_filter('comments_template', function ($comments_template) {
    $comments_template = str_replace(
        [get_stylesheet_directory(), get_template_directory()],
        '',
        $comments_template
    );

    $data = collect(get_body_class())->reduce(function ($data, $class) use ($comments_template) {
        return apply_filters("sage/template/{$class}/data", $data, $comments_template);
    }, []);

    $theme_template = locate_template(["views/{$comments_template}", $comments_template]);

    if ($theme_template) {
        echo template($theme_template, $data);
        return get_stylesheet_directory().'/index.php';
    }

    return $comments_template;
}, 100);


/**
 * Add SCTA logo to the Primary Navigation menu
 */

add_filter('wp_nav_menu_items', function ($items, $args) {
   if ($args->theme_location == 'primary') {
     $href = esc_url(home_url('/'));
     $svg  = get_template_directory_uri() . '/../dist/images/logo-side-text.svg';
     $logo = "<a class='logo__link desktop-only' href='$href'><img class='logo logo--nav' src='$svg' alt='SCTA' description='SCTA logo'></a>";
     $items = $logo . $items;
   }

   if ($args->theme_location == 'secondary') {
     if (is_user_logged_in()) {
       $href = get_permalink(get_page_by_title('My Profile'));
       $login = '<li class="menu-item menu-login"><a href="' . $href . '">My Profile</a></li>';
       $items .= $login;
     }
     else {
       $href = get_permalink(get_page_by_title('Login'));
       $login = '<li class="menu-item menu-login"><a href="' . $href . '">Login</a></li>';
       $items .= $login;
     }
   }
   return $items;
}, 10, 2);

/**
 * Get rid of 'Archives:' from archive page
 */

add_filter('get_the_archive_title', function ($title) {
  if (is_post_type_archive()) {
    $title = post_type_archive_title( '', false );
  }
  return $title;
});
