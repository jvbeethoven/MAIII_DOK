let mouseX, mouseY;

export default ({element, xPos = 0, yPos = 0, random = 1} = {}) => {
  document.addEventListener(`mousemove`, handleMouseMove);
  requestAnimationFrame(() => move(element, xPos, yPos, random));
  // console.log(random);

  mouseX = innerWidth / 2;
  mouseY = innerHeight / 2;
};

const handleMouseMove = e => {
  ({pageX: mouseX, pageY: mouseY} = e);
};

const move = (element, xPos, yPos, random) => {

  const height = document.body.clientHeight;
  const width = document.body.clientWidth;

  const xMultiplied = mouseX * random;
  const yMultiplied = mouseY * random;

  const yValue = mapRange(yMultiplied, 0, height, yPos - 4, yPos + 4);
  const xValue = mapRange(xMultiplied, 0, width, xPos - 0.5, xPos + 0.5);

  element.style.left = `${xValue}%`;
  element.style.top = `${(yValue)}%`;

  requestAnimationFrame(() => move(element, xPos, yPos, random));
};

const mapRange = (value, low1, high1, low2, high2) => {
  return low2 + (high2 - low2) * (value - low1) / (high1 - low1);
};
