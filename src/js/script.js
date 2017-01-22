import handleMouseMoveDocument from './lib/HandleMouseMoveDocument';

const init = () => {
  console.log(`hello`);

  const $img = document.querySelector(`.header-container-title`);
  handleMouseMoveDocument({element: $img, xPos: 10, yPos: 50});

};

init();
