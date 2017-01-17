import handleMouseMoveDocument from './lib/HandleMouseMoveDocument';

const init = () => {

  const $img = document.querySelector(`.header-title`);
  handleMouseMoveDocument({element: $img, xPos: 9, yPos: 10});

};

init();
