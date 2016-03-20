var j = jQuery.noConflict();

j('.mobile-menu').click(function(e){
  j('.header-menu').stop();
  if (j(this).html() == 'Menu' ) {
    j('.header-menu').addClass('open');
    j(this).html('Close');
  } else {
    j('.header-menu').removeClass('open');
    j(this).html('Menu');
  }
});

j('.tabs-content li').addClass('hidden');

j('.tabs a').click(function(e){
  e.preventDefault();
  if (j(this).hasClass("active")){ // Do nothing if active
    return;
  };
  link = j(this).attr("href");
  j(".tabs a").removeClass("active");
  j(".tabs-content li").removeClass("active").addClass('hidden');
  j(".tabs-content li" + link).removeClass('hidden').addClass("active");
});
