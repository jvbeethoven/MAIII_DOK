import handleMouseMoveDocument from './lib/HandleMouseMoveDocument';
import loadSearchEvents from './lib/LoadSearchEvents';
import scrollEvent from './lib/ScrollEvent';
// import pageTransition from './lib/PageTransition';


const init = () => {
  console.log(`hello`);

  const $img = document.querySelector(`.header-container-title`);
  if ($img) {
    handleMouseMoveDocument({element: $img, xPos: 19, yPos: 19});
  }

  const searchInputField = document.querySelector(`.events-search-form-input`);
  const resultList = document.querySelector(`.events-result`);
  const submitButton = document.querySelector(`.events-search-form-submit`);

  if (searchInputField && resultList && submitButton) {
    loadSearchEvents({input: searchInputField, result: resultList, submit: submitButton});
  }


  const homeItems = document.querySelector(`.general`);

  if (homeItems) {
    scrollEvent({element: homeItems});
  }

  // if (navigator.userAgent.toLowerCase().indexOf(`chrome`) > - 1) {
  //   console.log(pageTransition());
  // }

};

init();
