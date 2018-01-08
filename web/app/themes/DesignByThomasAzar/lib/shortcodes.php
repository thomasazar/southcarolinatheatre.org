<?php

function dbta_logout( $atts ){
  $a = shortcode_atts([], $atts);
  return '<a class="button" href="' . wp_logout_url(home_url()) . '">Logout</a>';
}
add_shortcode('logout', 'dbta_logout');

/*
* Create a user profile page with ACF
* https://usersinsights.com/acf-user-profile/
*/

function my_acf_user_form_func( $atts ) {
  $a = shortcode_atts(['field_group' => ''], $atts);
  $uid = get_current_user_id();

  if (!empty($a['field_group']) && !empty($uid)) {
    $options = [
      'post_id' => 'user_'.$uid,
      'field_groups' => array($a['field_group']),
      'return' => add_query_arg( 'updated', 'true', get_permalink() ),
      'html_before_fields' => '<h3>' . get_the_title($a['field_group']) . '</h3>',
    ];

    ob_start();
    acf_form( $options );
    $form = ob_get_contents();
    ob_end_clean();
  }

  return $form;
}
add_shortcode( 'my_acf_user_form', 'my_acf_user_form_func' );
