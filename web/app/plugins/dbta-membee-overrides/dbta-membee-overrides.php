<?php
/*
Plugin Name: Membee overrides
Description: Override stuff from Membee plugin
Version: 1.0
Author: Design by Thomas Azar
Author URI: https://design.thomasazar.net
*/

function membee_login_dbta( $atts ) {
  global $membee_options;
  $default_destURL = urlencode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	extract( shortcode_atts( array(
		'type' => 'iframe'
    'destURL' => $default_destURL,
	), $atts ) );

	if (is_user_logged_in()) {
	  return '<a href="'.wp_logout_url( 'https://memberservices.membee.com/feeds/Login/Logout.aspx?clientid='.$membee_options['membee_client_id'].'&appid='.$membee_options['membee_app_id'].'&returnURL='.urlencode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']) ).'">Log out</a>';
  } else {
    $membee = '';
    if ($_REQUEST['error']) $membee .= '<div id="membee-error-message">'.strip_tags(urldecode($_GET['error_description'])).'</div>';
    if ($type == 'iframe') {
      $membee .= '<script src="https://memberservices.membee.com/feeds/Login/LoginFrameScript.ashx?clientid='.$membee_options['membee_client_id'].'&appid='.$membee_options['membee_app_id'].'&destURL='.$destURL.'" type="text/javascript"></script>';
    } else if ($type == 'flyout') {
      $membee .= '<a id="MembeeSignInLink" href="#">Sign In</a> <div id="MembeeSignInModal" />';
    }
    return $membee;
  }
}

add_shortcode('membee_login_dbta', 'membee_login_dbta');
