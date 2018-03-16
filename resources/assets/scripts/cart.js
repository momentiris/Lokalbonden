export default (function () {

  function updateCart() {
    const update = document.querySelector('[name="update_cart"]');
    update.removeAttribute("disabled");
    update.click();
  }

  if (window.location.pathname == "/cart/") {
    const quantity = document.querySelectorAll('input.qty');
    const checkboxes = document.querySelectorAll('[type="checkbox"]');

    quantity.forEach(button => {
      button.addEventListener('change', updateCart);
    });
    // checkboxes.forEach(checkbox => {
    //   console.log(checkbox);
    //   checkbox.addEventListener('change', updateCart);
    // });
  };
})();
