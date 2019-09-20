console.log("working");


const input = document.querySelectorAll("input");
const login = document.querySelector("login1")
const username = document.getElementById('username')
const password = document.getElementById('password')

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

// Validate form fields

const alphanumeric = (data) => {
    let letters = /^[0-9a-zA-Z]+$/;
    if (letters.test(data)) {
        return true;
    }
    return false;
}

const validateEmail = (data) => {
    let testData = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (testData.test(data)) {
        return true;
    }
    return (false)
}

const disableButton = () => {
    document.getElementById('login1').disabled = true;
}

const enableButton = () => {
    document.getElementById('login1').disabled = false;
}

document.getElementById('username').onblur = () => {
    let status = document.getElementById('username').value;
    if (!status) {
        document.getElementById('alert-username').innerHTML = 'Please enter a username';
        disableButton();
    } else if (status.length < 5) {
        document.getElementById('alert-username').innerHTML = 'Username is less than 5 characters';
        disableButton();
    } else if (!alphanumeric(status)) {
        document.getElementById('alert-username').innerHTML = 'Invalid characters!';
        disableButton();
    } else {
        document.getElementById('alert-username').innerHTML = '';
        enableButton();
    }
};

document.getElementById('password').onblur = () => {
    let status = document.getElementById('password').value;
    if (!status) {
        document.getElementById('alert-password').innerHTML = 'Please enter a password';
        disableButton();
    } else if (status.length < 6) {
        document.getElementById('alert-password').innerHTML = 'Password field is empty or less than 6 characters';
        disableButton();
    } else {
        document.getElementById('alert-password').innerHTML = '';
        enableButton();
    }
}

login.addEventListener("click", event => {
    event.preventDefault()
    if (!password.value || !username.value) {
        document.getElementById('alert-incomplete').innerHTML = 'Please complete the form';
    }

     else {
         window.location.assign('landing.html')
     }
})
