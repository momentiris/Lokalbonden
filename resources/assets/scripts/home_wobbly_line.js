export default (function() {
  if (window.location.pathname == "/") {
    const wobblyLine = document.querySelector('.wobbly_path');
    const targetSection = document.querySelector('.symbols_wrap');
    const symbols = Array.from(document.querySelectorAll(".symbols"));

    var options = {
      root: null,
      rootMargin: '0px',
      threshold: 1
    }

    /**
    * [intersectionCallback checks for intersecting div to trigger animation of wobbly line.]
    * @param  {[intersectionObserverEntry]} element [description]
    * @return {[null]}
    */
    function intersectionCallback(element) {
      console.log(element[0].intersectionRatio);
      if (element[0].intersectionRatio === 1) {
        wobblyLine.classList.add('wobble--active');
        symbols.forEach(symbol => {
          symbol.classList.add("symbols--active");
        });
      }
    }

    var observer = new IntersectionObserver(intersectionCallback, options);
    observer.observe(targetSection);
    window.addEventListener('resize', () => {
      observer.observe(targetSection);
    })
  }
})();
