export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
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
  },
};
