export default (function() {
  const symbols = Array.from(document.querySelectorAll(".symbols"));
  const wobblyLine = document.querySelector('.wobbly_path');

  if (window.location.pathname == "/" && window.innerWidth > 450) {
    const targetSection = document.querySelector('.symbols_wrap');

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

  } else {

    symbols.forEach(symbol => symbol.classList.add('symbols--active'))
    wobblyLine.classList.add('wobble--active');

  }
})();
