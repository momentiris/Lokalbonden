const hero = document.querySelector('.hero_wrap');

const url = 'themes/lokalbonden/url.json';
let counter = 1;

const getJsonObj = (url) => {
  return fetch(url)
  .then(response => response.json())
  .then(object => {
    // hero.style.cssText = `background-image: url(${object[0]})`;
    return object;
    })
}


function changeBackgroundImage(object, currentCount) {

  if (counter >= object.length) {
    counter = 0;
  }
  hero.style.cssText = `background-image: url(${object[counter]})`;

  console.log(counter);
  counter++;
}

(async () => {
  // Promises are asynchronous but with async + await we can make the
  // promise synchronous. This mean the script will stop until the get
  // function returns data.
  const jsonObj = await getJsonObj(url);
  hero.style.cssText = `background-image: url(${jsonObj[0]})`;
  console.log(jsonObj);
  setInterval( () => {

    changeBackgroundImage(jsonObj, counter);
  }, 5000);


})();
