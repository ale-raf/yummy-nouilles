const formElt = document.querySelector("form");
const errorMessageElt = document.querySelectorAll(".error-message");
const menu = ["entrées", "plats", "desserts", "boissons"];

const validateForm = () => {
  for (const [index, item] of menu.entries()) {
    let inputRadio = document.forms["form"][item];
    if (inputRadio.value === "" || inputRadio.checked === false) {
      errorMessageElt[index].innerText = `Vous devez choisir un-e ${item.slice(
        0,
        -1
      )}`;
    } else {
      errorMessageElt[index].innerText = "";
      errorMessageElt[index].style.display = "none";
    }
  }

  let errorMessageArr = Array.from(errorMessageElt);

  let validation = errorMessageArr.every((elt) => elt.style.display === "none");

  return validation;
};

formElt.addEventListener("submit", (e) => {
  let validation = validateForm();
  !validation ? e.preventDefault() : null;
});
