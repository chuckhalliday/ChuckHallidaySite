import {toggleHiddenElement} from './dom-functions.js';

const buttonElement = document.getElementById('submitsong');
const pElement = document.getElementById('submitmessage');
 
buttonElement.addEventListener('click', () => {
  toggleHiddenElement(pElement);
});