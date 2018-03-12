  const hamburger = document.querySelector('.hamburger');

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('is-active');
    hamburger.nextElementSibling.classList.toggle('is-open');
    hamburger.parentElement.classList.toggle('is-open');
  })
