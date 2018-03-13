export default (function () {
  function makeMenuSmaller() {
  if (window.scrollY > menu.clientHeight) {
    menu.classList.add('small');
  } else {
    menu.classList.remove('small');
  }
}

  function changeHamburgerColor() {
    const hamburger = document.querySelector('.hamburger-inner');
    if (!menu.classList.contains('is-open')) {
      if (window.scrollY > window.innerHeight) {
        hamburger.classList.add('green');
      } else {
        hamburger.classList.remove('green');
      }
    }
  }

const menu = document.querySelector('.menu-container');

if (window.innerWidth > 768) {
  window.addEventListener('scroll', makeMenuSmaller);
} else {
  window.addEventListener('scroll', changeHamburgerColor);
}
})();
