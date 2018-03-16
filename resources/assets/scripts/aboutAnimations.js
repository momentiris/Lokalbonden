
function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document. documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document. documentElement.clientWidth)
  );
};

function addListner(elem, tagetClass, addClass){
  window.addEventListener('scroll', ()=>{
    if (isElementInViewport(elem[0]) && elem[1] == false) {
      elem[0].querySelector(`.${tagetClass}`).classList.add(`${addClass}`);
      elem[1] = true;
    }
  });
}

let elem_section1 = [document.querySelector('.first_section'), false];
let elem_section2 = [document.querySelector('.second_section'), false];
let section_border = [document.querySelector('.section_border_wrapper'), false];

addListner(elem_section1, 'svg_wrap', 'svg_wrap_active');
addListner(elem_section2, 'svg_wrap', 'svg_wrap_active');
addListner(section_border, 'section_border', 'section_border_active');
