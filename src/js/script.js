import handleMouseMoveDocument from './lib/HandleMouseMoveDocument';

const init = () => {
  console.log(`hello`);

  const $img = document.querySelector(`.header-title`);
  handleMouseMoveDocument({element: $img, xPos: 9, yPos: 10});

};

init();
