export default (function () {
    function updateCart() {
      const update = document.querySelector('[name="update_cart"]');
      update.removeAttribute("disabled");
      update.click();
    }

    function addToCart(e) {
      if (e.target.checked) {
        const id = e.target.dataset.id;
        fetch(`${window.location.href}?add-to-cart=${id}`)
        .then(updateCart());
      }
    }

  if (window.location.pathname == "/kundvagn/") {
    const quantity = document.querySelectorAll('input.qty');

    quantity.forEach(button => {
      button.addEventListener('change', updateCart);
    });
  };
})();
