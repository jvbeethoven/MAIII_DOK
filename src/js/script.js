import handleMouseMoveDocument from './lib/HandleMouseMoveDocument';
import loadSearchEvents from './lib/LoadSearchEvents';

const init = () => {
  console.log(`hello`);

  const $img = document.querySelector(`.header-container-title`);
  if ($img) {
    handleMouseMoveDocument({element: $img, xPos: 10, yPos: 50});
  }

  const searchInputField = document.querySelector(`.events-search-form-input`);
  const resultList = document.querySelector(`.events-result`);
  const submitButton = document.querySelector(`.events-search-form-submit`);

  if (searchInputField && resultList && submitButton) {
    loadSearchEvents({input: searchInputField, result: resultList, submit: submitButton});
  }

};

init();
