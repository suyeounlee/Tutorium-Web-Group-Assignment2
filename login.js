// login.js for validation by Mathunan

//variables
const usernameValue = username.value.trim();
const emailValue = email.value.trim();
const passwordValue = password.value.trim();
const password2Value = password2.value.trim();

// submit eventlistner for validation
form.addEventListener('submit', event => {
    event.preventDefault();

    formvalidation(thisform);
});

function formvalidation(thisform) {
    with (thisform) {
        if (emailValidation(email) == false) {
            return false;
        }
        if (nameValidation(username) == false) {
            return false;
        }
        if (passwordValidition(password) == false) {
            return false;
        }
        if (password2Validition(password2) == false) {
            return false;
        }
    }
}

//function for email validation
function emailValidation(email) {
    with (document.form) {
        if (email.value == " ") {
            setErrorFor(email, 'Email cannot be blank');
            email.focus();
            return false
        } else if (!isEmail(email.value)) {
            setErrorFor(email, 'Not a valid email');
        } else {
            setSuccessFor(email);
        }
    }
}

//function for name validation
function nameValidation(username) {
    with (document.form) {
        if (username.value == "" || username.length > 20) {
            setErrorFor(username, 'Username should be non-empty and less than 20');
            username.focus();
            return false;
        } else {
            setSuccessFor(username);
        }
    }
}

//function for password validation
function passwordValidition(password) {
    with (document.form) {
        const passwordValue = password.value;
        if (passwordValue === '') {
            setErrorFor(password, 'Password cannot be blank');
            password.focus();
            return false;
        }
        else if (passwordValue.length < 6) {
            setErrorFor(password, 'password should be at least 6 characters long');
            password.focus();
            return false;

        } else if ((!(v = passwordValue.match(/[A-Z]/g)) || v.length < 1) || (!(v = passwordValue.match(/[a-z]/g)) || v.length < 1)) {
            setErrorFor(password, 'password should have 1 uppercase, 1 lowercase');
            password.focus();
            return false;
        } else {
            setSuccessFor(password);
        }
    }
}

//function for re-password validation
function password2Validition(password2) {
    with (document.form) {
        if (password2.value == "") {
            setErrorFor(password2, 'Password2 cannot be blank');
            password2.focus();
            return false;
        } else if (password.value !== password2.value) {
            setErrorFor(password2, 'Passwords does not match');
            password2.focus();
            return false;
        } else {
            setSuccessFor(password2);
        }
    }
}

//function to see Error 
function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-control error';
    small.innerText = message;
}

//function to set success
function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}

// email regular expression
function isEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
}