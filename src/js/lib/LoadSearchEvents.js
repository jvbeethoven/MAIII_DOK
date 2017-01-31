import es6Promise from 'es6-promise';
import fetch from 'isomorphic-fetch';
es6Promise.polyfill();

let inputField;
let resultList;
// let submitBtn;

export default ({input, result, submit} = {}) => {
  inputField = input;
  resultList = result;
  submit.style.display = `none`;

  input.addEventListener(`input`, inputHandler);
};

const inputHandler = e => {
  // e.preventDefault();
  console.log(e);

  const searchValue = inputField.value;

  if (searchValue.length === 0) {
    resultList.innerHTML = ``;
  }

  if (searchValue.length < 1) {
    return;
  }

  clearTimeout(timer);
  const timer = setTimeout(() => validateSearch(searchValue), 500);


};

const validateSearch = searchValue => {
  console.log(searchValue);

  fetch(`index.php?page=event&query=${searchValue}`, {
    headers: new Headers({
      Accept: `application/json`
    }),
    method: `post`
  })
  .then(r => r.json())
  .then(result => parse (result));
};

const parse = result => {
  console.log(result);

  if (!result || result.length === 0) {
    resultList.innerHTML = `<p class="error">Nah, da's niks voor DOK. Zoek anders iets leuks via onze zoekfunctie's.</p>`;
    return;
  }
  let resultHTML = `<ol>`;
  result.forEach(result => {
    resultHTML += `<li><a href="index.php?page=result-detail&amp;id=${result.id}">${result.title}</a></li>`;
  });
  resultHTML += `</ol>`;
  resultList.innerHTML = resultHTML;
};
