<?php
/*
Plugin Name: Membee overrides
Description: Override stuff from Membee plugin
Version: 1.0.1
Author: Design by Thomas Azar
Author URI: https://design.thomasazar.net
*/

function membee_login_dbta( $atts ) {
  global $membee_options;
  $default_destURL = urlencode('https://www.southcarolinatheatre.org/my-profile/');
	extract( shortcode_atts( array(
		'type' => 'iframe',
    'destURL' => $default_destURL,
	), $atts ) );

	if (is_user_logged_in()) {
	  return '<a href="'.wp_logout_url( 'https://memberservices.membee.com/feeds/Login/Logout.aspx?clientid='.$membee_options['membee_client_id'].'&appid='.$membee_options['membee_app_id'].'&returnURL='.urlencode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']) ).'">Log out</a>';
  } else {
    $membee = '';
    if ($_REQUEST['error']) $membee .= '<div id="membee-error-message">'.strip_tags(urldecode($_GET['error_description'])).'</div>';
    if ($type == 'iframe') {
      $membee .= '<div class="iframe-holder>"<script src="https://memberservices.membee.com/feeds/Login/LoginFrameScript.ashx?clientid='.$membee_options['membee_client_id'].'&appid='.$membee_options['membee_app_id'].'&destURL='.$destURL.'" type="text/javascript"></script></div>';
    } else if ($type == 'flyout') {
      $membee .= '<a id="MembeeSignInLink" href="#">Sign In</a> <div id="MembeeSignInModal" />';
    }
    return $membee;
  }
}

add_shortcode('membee_login_dbta', 'membee_login_dbta');

add_shortcode('membee_event', 'dbta_membee_event');

function dbta_membee_event($atts) {
  $cid = '1134';
  $wid = '801';
  $a = shortcode_atts( array(
        'event' => NULL,
    ), $atts );
    if ($a['event']) {
      $src = 'https://memberservices.membee.com/feeds/events/event.aspx?id=' . $a['event'] . '&amp;cid=' . $cid . '&amp;wid=' . $wid;
      $output = '<div class="iframe-holder"><iframe frameborder="0" src="' . $src .'"></iframe></div>';
      return $output;
    }
}
