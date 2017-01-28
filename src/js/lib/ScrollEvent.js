export default ({element} = {}) => {
  console.log(element);
  // const elementLength = element.clientHeight;

  window.addEventListener(`scroll`, onScroll);
};

const onScroll = e => {
  console.log(e);
  window.requestAnimationFrame(() => {
    focusElements();
  });
};

const focusElements = () => {
  console.log(`test`);

};
