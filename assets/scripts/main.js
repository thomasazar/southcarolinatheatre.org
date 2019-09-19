function domReady(fn) {
    // If we're early to the party
    document.addEventListener("DOMContentLoaded", fn);
    // If late; I mean on time.
    if (document.readyState === "interactive" || document.readyState === "complete" ) {
        fn();
    }
}

domReady(navMenu);
domReady(gallery);
domReady(fileSizeCheck);

function navMenu() {
    var navOpen, navClose;
    navButton = document.querySelector('#mobile-menu__button');
    navButton.addEventListener('click', function () {
      document.querySelector('.navigation').classList.toggle('open');
      if (navButton.innerHTML === 'Menu') {
        navButton.innerHTML = 'Close'
      } else {
        navButton.innerHTML = 'Menu';
      }
    });
}

function gallery() {
    baguetteBox.run('.hero');
}

function fileSizeCheck() {
    const input = document.getElementById('file')

    input.addEventListener('change', (event) => {
      const target = event.target
          if (target.files && target.files[0]) {

          /*Maximum allowed size in bytes
            5MB Example
            Change first operand(multiplier) for your needs*/
          const maxAllowedSize = 5 * 1024 * 1024;
          if (target.files[0].size > maxAllowedSize) {
              // Here you can ask your users to load correct file
               target.value = ''
          }
      }
    })
}
