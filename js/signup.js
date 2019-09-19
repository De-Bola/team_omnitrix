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
  document.getElementById('signup').disabled = true;
}

const enableButton = () => {
  document.getElementById('signup').disabled = false;
}

document.getElementById('username').onblur = () => {
  let status = document.getElementById('username').value;
  if (status.length < 5) {
    document.getElementById('alert-username').innerHTML = 'Username field is empty or less than 5 characters';
    disableButton();
  } else if (!alphanumeric(status)) {
    document.getElementById('alert-username').innerHTML = 'Invalid characters!';
    disableButton();
  } else {
    document.getElementById('alert-username').innerHTML = '';
    enableButton();
  }
};

document.getElementById('email').onblur = () => {
  let status = document.getElementById('email').value;
  if (status.length < 0) {
    document.getElementById('alert-email').innerHTML = 'Email field is empty';
    disableButton();
  } else if (!validateEmail(status)) {
    document.getElementById('alert-email').innerHTML = 'Invalid email address!';
    disableButton();
  } else {
    document.getElementById('alert-email').innerHTML = '';
    enableButton();
  }
};

document.getElementById('password').onblur = () => {
  let status = document.getElementById('password').value;
  if (!status) {
    document.getElementById('alert-password').innerHTML = 'Password cannot be empty';
  } else if (status.length < 6) {
    document.getElementById('alert-password').innerHTML = 'Password is less than 6 characters';
    disableButton();
  } else {
    document.getElementById('alert-password').innerHTML = '';
    enableButton();
  }

  document.getElementById('password-confirm').onblur = () => {
    let confirm = document.getElementById('password-confirm').value;
    if (!confirm) {
      document.getElementById('alert-confirm-password').innerHTML = 'Password cannot be empty';
    } else if (status != confirm) {
      document.getElementById('alert-confirm-password').innerHTML = "Passwords don't match";
      disableButton();
    } else {
      document.getElementById('alert-confirm-password').innerHTML = '';
      enableButton();
    }
  }
}

document.getElementById('number').onblur = () => {
  let status = document.getElementById('number').value;
  if (!status) {
    document.getElementById('alert-numbers').innerHTML = 'Phone cannot be empty';
  } else if (status.length != 11) {
    document.getElementById('alert-numbers').innerHTML = "Phone number should be 11 digits";
    disableButton();
  } else {
    document.getElementById('alert-numbers').innerHTML = '';
    enableButton();
  }
}