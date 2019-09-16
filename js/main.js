const input = document.querySelectorAll("input");

let fadeOffIcons = (currentInputField) => {
    currentInputField.addEventListener("input", ($event) => {
        if ($event.target.value.length > 18) {
            $event.target.nextElementSibling.classList.add("fadeOff");
        } else {
            $event.target.nextElementSibling.classList.remove("fadeOff");
        }
    });
}
//Iterate form input fields
input.forEach(element => {
    let currentInputField = element
    fadeOffIcons(currentInputField);
});

