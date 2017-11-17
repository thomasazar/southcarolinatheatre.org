<?php

// Add AFC form head if [my_acf_user_form] is present in post
function add_acf_form_head(){
  global $post;

  if ( !empty($post) && has_shortcode( $post->post_content, 'my_acf_user_form' ) ) {
    acf_form_head();
  }
}
add_action( 'wp_head', 'add_acf_form_head', 7 );

// disable acf css on front-end acf forms
add_action( 'wp_print_styles', 'my_deregister_styles', 100 );

function my_deregister_styles() {
  wp_deregister_style( 'acf' );
  wp_deregister_style( 'acf-field-group' );
  wp_deregister_style( 'acf-global' );
  wp_deregister_style( 'acf-input' );
  wp_deregister_style( 'acf-datepicker' );
}



function add_wpcf7_js(){
  global $post;

  if ( !empty($post) && has_shortcode( $post->post_content, 'contact-form-7' ) ) {
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
      wpcf7_enqueue_scripts();
    }
  }
}
add_action( 'wp_head', 'add_wpcf7_js', 7 );
