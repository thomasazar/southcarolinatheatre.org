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
