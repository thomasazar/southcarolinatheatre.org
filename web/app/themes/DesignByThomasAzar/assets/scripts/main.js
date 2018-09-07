/* ========================================================================
* DOM-based Routing
* Based on http://goo.gl/EUTi53 by Paul Irish
*
* Only fires on body classes that match. If a body class contains a dash,
* replace the dash with an underscore when adding it to the object below.
*
* .noConflict()
* The routing is enclosed within an anonymous function so that you can
* always reference jQuery with $, even when in .noConflict() mode.
* ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        $(".mobile-menu__button").click(function() {
          $(".banner__menus").toggleClass("open");
          if ($(this).html() === "Menu") {
            $(this).html("Close");
          } else {
            $(this).html("Menu");
          }
        });
        $("input[type='tel']").each(function(){
          $(this).on("change keyup paste", function (e) {
            var output,
            $this = $(this),
            input = $this.val();

            if(e.keyCode !== 8) {
              input = input.replace(/[^0-9]/g, '');
              var area = input.substr(0, 3);
              var pre = input.substr(3, 3);
              var tel = input.substr(6, 4);
              if (area.length < 3) {
                output = "(" + area;
              } else if (area.length === 3 && pre.length < 3) {
                output = "(" + area + ")" + " " + pre;
              } else if (area.length === 3 && pre.length === 3) {
                output = "(" + area + ")" + " " + pre + "-" + tel;
              }
              $this.val(output);
            }
          });
        });
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
        baguetteBox.run('.photo-credit');
      }
    },
    // About us page, note the change from about-us to about_us.
    'vendors': {
      init: function() {

      },
      finalize: function() {
        function update_total() {
          var awards_donation = $("#awards-donation").val();
          var registration = $("#registration input:checked").val();
          if (registration === "$75 SCTA Member Organization") {
            registration = 75;
          } else {
            registration = 200;
          }
          var additional_fees = [];
          $('#additional-fees input:checked').each(function(i){
            additional_fees[i] = $(this).val();
          });
          console.log(additional_fees.length);
          if (additional_fees.length === 2) {
            additional_fees = 60;
          } else if (additional_fees[0] === "$25 SCTA Individual Adult membership") {
            additional_fees = 25;
          } else if (additional_fees[0] === "$35 SCTA 2018 Convention fee") {
            additional_fees = 35;
          } else {
            additional_fees = 0;
          }
          var total_payment = (+awards_donation) + (+registration) + (+additional_fees);
          $('#total-payment-placeholder').html(total_payment);
          $('#total-payment').val(total_payment);
        }
        $("#awards-donation").keyup(function(){
          update_total();
        });
        $("#registration").change(function(){
          update_total();
        });
        $("#additional-fees").change(function(){
          update_total();
        });
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
