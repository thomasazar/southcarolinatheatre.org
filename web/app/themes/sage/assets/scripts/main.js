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
        $('.mobile-menu').click(function(e){
          $('.header-menu').stop();
          if ($(this).html() === 'Menu' ) {
            $('.header-menu').addClass('open');
            $(this).html('Close');
          } else {
            $('.header-menu').removeClass('open');
            $(this).html('Menu');
          }
        });
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    },
    'exhibitor': {
      init: function() {
        $('#total-payment').attr({
          disabled: 'disabled',
          value: 100,
        });
        $("#awards-donation").keyup(function(){
          update_total();
        });
        $("#registration").change(function(){
          update_total();
        });
        $("#additional-fees").change(function(){
          update_total();
        })
        function update_total() {
          var awards_donation = $("#awards-donation").val();
          var registration = $("#registration input:checked").val();
          if (registration === "$25 SCTA Member Organization") {
            registration = 25;
          } else {
            registration = 100;
          }
          var additional_fees = $("#additional-fees input:checked").map(function () {
            return this.value;
          }).get();
          switch (additional_fees.length) {
            case 1:
              additional_fees = 25;
              break;
            case 2:
              additional_fees = 50;
              break;
            default:
              additional_fees = 0;
              break;
          }
          var total_payment = +awards_donation + +registration + +additional_fees;
          $('#total-payment').val(total_payment);
        }
      }
    },
    'single_divisions': {
      init: function() {
        console.log('single-divisions');
        $('.maps').click(function () {
          $('.maps__iframe').css("pointer-events", "auto");
        });

        $( ".maps" ).mouseleave(function() {
          $('.maps__iframe').css("pointer-events", "none");
        });
      }
    },
    // About us page, note the change from about-us to about_us.
    'registration': {
      init: function() {
        $('.tabs-content li').addClass('hidden');

        $('.tabs a').click(function(e){
          e.preventDefault();
          if ($(this).hasClass("active")){ // Do nothing if active
            return;
          }
          link = $(this).attr("href");
          $(".tabs a").removeClass("active");
          $(".tabs-content li").removeClass("active").addClass('hidden');
          $(".tabs-content li" + link).removeClass('hidden').addClass("active");
        });
      }
    },
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
