export default (function () {
  function menuSmall(e) {
  const menu = document.querySelector('.menu-container');
  if (window.scrollY > menu.clientHeight) {
    menu.classList.add('small');
  } else {
    menu.classList.remove('small');
  }
}
if (window.innerWidth > 600) {
  window.addEventListener('scroll', menuSmall);
}
})();
