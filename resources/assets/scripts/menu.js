export default (function () {
  function menuSmall(e) {
  const menu = document.querySelector('.menu-container');
  if (window.scrollY > menu.clientHeight) {
    menu.classList.add('small');
  } else {
    menu.classList.remove('small');
  }
}

const wobblyNav = document.querySelector('.wobbly_nav');
const currentPage = document.querySelector('.current-menu-item')
console.dir(wobblyNav);
wobblyNav.clientHeight = currentPage.clientHeight;
wobblyNav.clientWidth = currentPage.clientWidth;

window.addEventListener('scroll', menuSmall);

})();
