let mouseX, mouseY;

export default ({element, xPos = 0, yPos = 0} = {}) => {
  document.addEventListener(`mousemove`, handleMouseMove);
  requestAnimationFrame(() => move(element, xPos, yPos));

  mouseX = innerWidth / 2;
  mouseY = innerHeight / 2;
};

const handleMouseMove = e => {
  ({pageX: mouseX, pageY: mouseY} = e);
};

const move = (element, xPos, yPos) => {

  const height = document.body.clientHeight;
  const width = document.body.clientWidth;

  const yValue = mapRange(mouseY, 0, height, yPos - 3, yPos + 3);
  const xValue = mapRange(mouseX, 0, width, xPos - 1, xPos + 1);


  element.style.left = `${xValue}%`;
  element.style.top = `${(yValue)}%`;

  requestAnimationFrame(() => move(element, xPos, yPos));
};

const mapRange = (value, low1, high1, low2, high2) => {
  return low2 + (high2 - low2) * (value - low1) / (high1 - low1);
};
