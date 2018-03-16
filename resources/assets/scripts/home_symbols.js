export default (function() {
  const symbols = Array.from(document.querySelectorAll(".symbols"));

  symbols.forEach(symbol => {
    symbol.classList.add("symbols--active");
  });
})();
