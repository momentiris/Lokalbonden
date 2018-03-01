export default function menuSmall(e) {
  const menu = document.querySelector('.menu-navbar-container');
  if (window.scrollY > menu.clientHeight) {
    menu.classList.add('small');
  } else {
    menu.classList.remove('small');
  }
}
