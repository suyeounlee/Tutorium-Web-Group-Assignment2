
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

function emailValidation(email) {
    with (document.form) {
        if (email.value == " ") {
            alert("Email id is not entered")
            email.focus();
            return false
        } else if (!isEmail(email.value)) {
            alert("Email id is not correct")
            email.focus();
            return false;
        } else {
            setSuccessFor(email);
            return true;
        }
    }
}
function nameValidation(username) {
    with (document.form) {
        if (username.value == "" || username.length > 20) {
            alert("Username should be non-empty and less than 20");
            username.focus();
            return false;
        } else {
            setSuccessFor(username);
            return true;
        }
    }
}



function passwordValidition(password) {
    with (document.form) {
        const passwordValue = password.value;
        if (passwordValue === '') {
            alert("Password cannot be blank");
            password.focus();
            return false;
        }
        else if (passwordValue.length < 6) {
            alert("password should be at least 6 characters long");
            password.focus();
            return false;

        } else if ((!(v = passwordValue.match(/[A-Z]/g)) || v.length < 1) || (!(v = passwordValue.match(/[a-z]/g)) || v.length < 1)) {
            alert("password should have 1 uppercase, 1 lowercase");
            password.focus();
            return false;
        } else {
            setSuccessFor(password);
            return true;
        }
    }
}

function password2Validition(password2) {
    with (document.form) {
        if (password2.value == "") {
            alert("Password2 cannot be blank");
            password2.focus();
            return false;
        } else if (password.value !== password2.value) {
            alert("Passwords does not match");
            password2.focus();
            return false;
        } else {
            setSuccessFor(password2);
            return true
        }
    }
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-control error';
    small.innerText = message;
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}

function isEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
}