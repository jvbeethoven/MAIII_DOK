import es6Promise from 'es6-promise';
import fetch from 'isomorphic-fetch';
es6Promise.polyfill();

const cache = {};

export default () => {

  document.addEventListener(`click`, onClick);
  window.addEventListener(`popstate`, changePage);

};

const onClick = e => {

  let el = e.target;

  while (el && !el.href) {
    el = el.parentNode;
  }

  if (el) {
    e.preventDefault();
    history.pushState(null, null, el.href);
    changePage();

    return;
  }
};

const changePage = () => {
  const url = window.location.href;

  loadPage(url).then(function(responseText) {
    const wrapper = document.createElement(`div`);
    wrapper.innerHTML = responseText;

    const oldContent = document.querySelector(`.container`);
    const newContent = wrapper.querySelector(`.container`);

    const container = document.querySelector(`.container-fade`);
    container.appendChild(newContent);
    animate(oldContent, newContent);
  });
};

const loadPage = url => {
  if (cache[url]) {
    return new Promise(function(resolve) {
      resolve(cache[url]);
    });
  }

  return fetch(url, {
    method: `GET`
  }).then(function(response) {
    cache[url] = response.text();
    return cache[url];
  });
};

const animate = (oldContent, newContent) => {
  oldContent.style.position = `absolute`;

  const fadeOut = oldContent.animate({
    opacity: [1, 0]
  }, 1000);

  const fadeIn = newContent.animate({
    opacity: [0, 1]
  }, 1000);

  fadeIn.onfinish = function() {
    oldContent.parentNode.removeChild(oldContent);
  };
};
