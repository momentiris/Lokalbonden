export default (function () {
  function makeMenuSmaller() {
  if (window.scrollY > menu.clientHeight) {
    menu.classList.add('small');
    menu.classList.add('green-background');
    logotype.classList.add('smaller-logo');
  } else {
    menu.classList.remove('small');
    menu.classList.remove('green-background');
    logotype.classList.remove('smaller-logo');

  }
}

  // function changeHamburgerColor() {
  //   const hamburger = document.querySelector('.hamburger-inner');
  //   if (!menu.classList.contains('is-open')) {
  //     if (window.scrollY > window.innerHeight) {
  //       hamburger.classList.add('green');
  //     } else {
  //       hamburger.classList.remove('green');
  //     }
  //   }
  // }

const menu = document.querySelector('.menu-container');
const logotype = document.querySelector('.header-logotype');

if (window.innerWidth > 768) {
  window.addEventListener('scroll', makeMenuSmaller);
}
// else {
//   window.addEventListener('scroll', changeHamburgerColor);
// }
})();
