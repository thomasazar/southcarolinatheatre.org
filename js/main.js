var j = jQuery.noConflict();

function getTimeRemaining(endtime) {
	var t = Date.parse(endtime) - Date.parse(new Date());
	var seconds = Math.floor((t / 1000) % 60);
	var minutes = Math.floor((t / 1000 / 60) % 60);
	var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
	var days = Math.floor(t / (1000 * 60 * 60 * 24));
	return {
		'total': t,
		'days': days,
		'hours': hours,
		'minutes': minutes,
		'seconds': seconds
	};
}

function initializeClock(id, endtime) {
	var clock = document.getElementById(id);
	var daysSpan = clock.querySelector('.timer__days');
	var hoursSpan = clock.querySelector('.timer__hours');
	var minutesSpan = clock.querySelector('.timer__minutes');
	var secondsSpan = clock.querySelector('.timer__seconds');

	function updateClock() {
		var t = getTimeRemaining(endtime);

		daysSpan.innerHTML = t.days;
		hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
		minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
		secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

		if (t.total <= 0) {
			clearInterval(timeinterval);
		}
	}

	updateClock();
	var timeinterval = setInterval(updateClock, 1000);
}

var deadline = 'May 14 2016 19:00:00 GMT-05:00';
initializeClock('timer', deadline);

function showMobileMenu() {
	menu = document.getElementById('headerMenuItems');
	if ( hasClass(menu, 'open')){
		removeClass(menu,'open');
	}
	else{
		addClass(menu,'open');
	}
}

function hasClass(el, className) {
  if (el.classList)
    return el.classList.contains(className)
  else
    return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|j)'))
}

function addClass(el, className) {
  if (el.classList)
    el.classList.add(className)
  else if (!hasClass(el, className)) el.className += " " + className
}

function removeClass(el, className) {
  if (el.classList)
    el.classList.remove(className)
  else if (hasClass(el, className)) {
    var reg = new RegExp('(\\s|^)' + className + '(\\s|j)')
    el.className=el.className.replace(reg, ' ')
  }
}


var menuOpen = document.getElementById("mobile-menu");
var menuClose = document.getElementById("menu-close-button");

menuOpen.addEventListener("click", showMobileMenu, false);
menuClose.addEventListener("click", showMobileMenu, false);

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
