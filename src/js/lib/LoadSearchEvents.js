let inputField;
let resultList;
// let submitBtn;

export default ({input, result, submit} = {}) => {
  inputField = input;
  resultList = result;
  // submitBtn = submit;
  console.log(submit);

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

  if (searchValue.length < 3) {
    return;
  }

  clearTimeout(timer);
  const timer = setTimeout(() => validateSearch(searchValue), 700);


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

  if (!result || result.length === 0) {
    resultList.innerHTML = `<p>Geen event gevonden</p>`;
    return;
  }
  let resultHTML = `<ol>`;
  result.forEach(result => {
    resultHTML += `<li><a href="index.php?page=result-detail&amp;id=${result.id}">${result.title}</a></li>`;
  });
  resultHTML += `</ol>`;
  resultList.innerHTML = resultHTML;
};
