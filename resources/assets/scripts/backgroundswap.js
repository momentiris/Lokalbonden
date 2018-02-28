const hero = document.querySelector('.hero_wrap');
const url = 'themes/lokalbonden/url.json';

/**
 * counter set to one instead of 0 since I couldnt get first image without delay. So I decided to set the first one (0) in home.php like it was before. Inside the changeBackgroundImage function I check the current value of counter and reset to 0 if longer than our json objects length.
 *
 * @type {int}
 */
let counter = 1;

/**
 * [getJsonObj description]
 *
 * @param  {[string]} url [local url for saved url.json]
 * @return {[fetch]}     [returns a fetch with the json object from url.json to the async IIFE]
 */
const getJsonObj = (url) => {
  return fetch(url)
  .then(response => response.json())
  .then(object => {
    // hero.style.cssText = `background-image: url(${object[0]})`;
    return object;
    })
}

/**
 * [changeBackgroundImage] checks the value of counter and changes background image in the hero_wrap with counter as an index.
 *
 * @param  {[json]} object
 * @param  {[int]} currentCount [current value of the variable counter]
 * @return {[void]}
 */
function changeBackgroundImage(object, currentCount) {
  if (counter >= object.length)
    counter = 0;

  hero.style.cssText = `background-image: url(${object[counter]})`;
  counter++;
}

/**
 * IIFE, don't know exactly how this works. But it makes the script wait for the fetch in getJsonObj func before it continues.
 * It basically makes the fetch synchronous.
 *
 * Here is where the script starts.
 *
 * @return {[void]} [doesn't return anything but calls the getJsonObj function]
 */
(async () => {
  // Promises are asynchronous but with async + await we can make the
  // promise synchronous. This mean the script will stop until the get
  // function returns data.
  const jsonObj = await getJsonObj(url);

  setInterval( () => {
    changeBackgroundImage(jsonObj, counter);
  }, 5000);

})();
