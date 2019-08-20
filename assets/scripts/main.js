function domReady(fn) {
  // If we're early to the party
  document.addEventListener("DOMContentLoaded", fn);
  // If late; I mean on time.
  if (document.readyState === "interactive" || document.readyState === "complete" ) {
    fn();
  }
}

domReady(nav_menu);

function nav_menu() {
  var navOpen, navClose;
  navButton = document.querySelector('#mobile-menu__button');
  navButton.addEventListener('click', function(){
    document.querySelector('.navigation').classList.toggle('open');
    if (navButton.innerHTML === 'Menu') {
      navButton.innerHTML = 'Close'
    } else {
      navButton.innerHTML = 'Menu';
    }
  });
}
