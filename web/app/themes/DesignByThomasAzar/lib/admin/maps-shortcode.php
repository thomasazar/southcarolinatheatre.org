<?php
//[maps]
function scta_maps( $atts ){
  $a = shortcode_atts(['mid' => null,], $atts);
  if ($a['mid'] == null){
    return;
  } else {
    return '<div class="maps"><iframe class="maps__iframe" src="https://www.google.com/maps/d/embed?mid=' . $a['mid'] . '" width="640" height="480"></iframe></div>';
  }
}
add_shortcode( 'maps', 'scta_maps' );
