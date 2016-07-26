<?php
function scta_countdown(){
  $output = "
  <div id='timer'>
    <div class='timer__box'>
      <span class='timer__days'></span>
      <div class='timer__smalltext'>Days</div>
    </div>
    <div class='timer__box'>
      <span class='timer__hours'></span>
      <div class='timer__smalltext'>Hours</div>
    </div>
    <div class='timer__box'>
      <span class='timer__minutes'></span>
      <div class='timer__smalltext'>Min</div>
    </div>
    <div class='timer__box'>
      <span class='timer__seconds'></span>
      <div class='timer__smalltext'>Sec</div>
    </div>
  </div>";
  return $output;
}

add_shortcode( 'countdown', 'scta_countdown' );
?>
