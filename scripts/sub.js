const header = document.querySelector('.header');
const _navAnimation = function (el, inview) {
  if (inview) {
    header.classList.remove('triggered');
  } else {
    header.classList.add('triggered');
  }
}
const so = new ScrollObserver('.nav-trigger', _navAnimation, { once: false, rootMargin: "10px" });
