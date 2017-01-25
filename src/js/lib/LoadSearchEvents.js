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
  e.preventDefault();

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

  console.log(result[0]);
  resultList.innerHTML = ``;

  if (result.length > 0) {

    result.forEach(event => {

      const listItemElement = createListElement(`${event.title}`);
      resultList.appendChild(listItemElement);

    });

  } else {

    const listItemElement = createListElement(`Er zijn geen gebruikers met deze naam`);
    resultList.appendChild(listItemElement);

  }

};

const createListElement = text => {
  const listItemElement = document.createElement(`li`);
  listItemElement.innerHTML = text;

  return listItemElement;
};
