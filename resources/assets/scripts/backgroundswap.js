
const hero = document.querySelector('.hero_wrap');

const url = 'themes/lokalbonden/url.json';

/**
 * counter set to one instead of 0 since I couldnt get first image without delay. So I decided to set the first one (0) in home.php like it was before. Inside the changeBackgroundImage function I check the current value of counter and reset to 0 if longer than our json objects length.
 *
 * @type {int}
 */
let counter = 1;

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
 * IIFE, don't know exactly how this works. But it makes the script wait for the fetch before it continues.
 * It basically makes the fetch synchronous within the async IIFE.
 *
 * Here is where the script starts.
 *
 * @return {[void]} [doesn't return anything but calls the getJsonObj function]
 */
console.log(window.location.pathname);
// MÅSTE hitta bättre lösning här.
if (window.location.pathname == "/") {
  (async () => {
    // Promises are asynchronous but with async + await we can make the
    // promise synchronous. This mean the script will stop until the get
    // function returns data.

      const response = await fetch(url);
      const object = await response.json();
      console.log(object);
      setInterval( () => {
        changeBackgroundImage(object, counter);
      }, 5000);

  })();
}
