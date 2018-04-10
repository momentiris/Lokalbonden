if (window.location.pathname == "/om-oss/") {
function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.top+rect.height/2 >= 0 &&
    rect.left >= 0 &&
    rect.bottom-rect.height/2 <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
};

function addListner(elem, addClass){
  window.addEventListener('scroll', ()=>{
    if (isElementInViewport(elem[0]) && elem[1] == false) {
      elem[0].classList.add(`${addClass}`);
      elem[1] = true;
      console.log('true');
    }
  });
}

let elem_section1 = [document.querySelector('.first_section .svg_wrap'), false];
let elem_section2 = [document.querySelector('.second_section .svg_wrap'), false];
let section_border = [document.querySelector('.section_border'), false];

addListner(elem_section1, 'svg_wrap_active');
addListner(elem_section2, 'svg_wrap_active');
addListner(section_border, 'section_border_active');
};
