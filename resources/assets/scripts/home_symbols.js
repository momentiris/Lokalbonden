export default (function() {
  if (window.location.pathname == "/") {
    const symbols = Array.from(document.querySelectorAll(".symbols"));

    symbols.forEach(symbol => {
      symbol.classList.add("symbols--active");
    });
  }
})();
