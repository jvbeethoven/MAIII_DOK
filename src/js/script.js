import handleMouseMoveDocument from './lib/HandleMouseMoveDocument';
import loadSearchEvents from './lib/LoadSearchEvents';
// import scrollEvent from './lib/ScrollEvent';

const init = () => {
  console.log(`hello`);

  const $img = document.querySelector(`.header-container-title`);
  const $img2 = document.querySelector(`.header-container-img1`);
  const $img3 = document.querySelector(`.header-container-img2`);
  const $img4 = document.querySelector(`.header-container-img3`);
  const $img5 = document.querySelector(`.header-container-img4`);
  const $map = document.querySelector(`.map-img`);

  if (window.innerWidth > 987) {
    if ($img) {
      handleMouseMoveDocument({element: $img, xPos: 19, yPos: 19, random: - 2.5});
    }

    if ($img2) {
      handleMouseMoveDocument({element: $img2, xPos: 6, yPos: 10, random: - 1});
    }

    if ($img3) {
      handleMouseMoveDocument({element: $img3, xPos: 6, yPos: 6, random: - 1.5});
    }

    if ($img4) {
      handleMouseMoveDocument({element: $img4, xPos: 14, yPos: 18, random: - 2});
    }

    if ($img5) {
      handleMouseMoveDocument({element: $img5, xPos: 11, yPos: 20, random: - 3});
    }

    if ($map) {
      handleMouseMoveDocument({element: $map, xPos: 7, yPos: 10, random: - 3});
    }
  }

  const searchInputField = document.querySelector(`.events-search-form-input`);
  const resultList = document.querySelector(`.events-result`);
  const submitButton = document.querySelector(`.events-search-form-submit`);

  if (searchInputField && resultList && submitButton) {
    loadSearchEvents({input: searchInputField, result: resultList, submit: submitButton});
  }


  // const homeItems = document.querySelector(`.general`);
  //
  // if (homeItems) {
  //   scrollEvent({element: homeItems});
  // }


};

init();
