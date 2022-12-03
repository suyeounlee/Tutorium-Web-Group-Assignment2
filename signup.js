const form = document.getElementById('signup');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const newsletter = document.getElementById('newsletter');
var isValid=true;

	const usernameValue = username.value.trim();
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	const password2Value = password2.value.trim();

// form.addEventListener('submit', e => {
// 	e.preventDefault();
	
// 	checkInputs();
// });
  
function checkInputs() {
	emailValidation();

	if((emailValidation() == true) && (nameValidation() == true) && (passValidation() == true) && (pass2Validation() == true)){
		document.getElementsByName("form").submit();
		return true;
	}
	return false;
}
function emailValidation(){
	const email = document.getElementById('email');
	const emailValue = email.value.trim();
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
		return false;
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
		return false;
	} else {
		setSuccessFor(email);
		return true;
	}

}

function nameValidation(){
	const username = document.getElementById('username');
	const usernameValue = username.value.trim();
	if(usernameValue === ''|| usernameValue.length > 20 ) {
		setErrorFor(username, 'Username should be non-empty and less than 20');
		return false;
	} else {
		setSuccessFor(username);
		return true;
	}
}

function passValidation(){
	const password = document.getElementById('password');
	const passwordValue = password.value.trim();
	if(passwordValue === ''){
		setErrorFor(password, 'Password cannot be blank');
		return false;
	} 
    else if (passwordValue.length < 6) {
		setErrorFor(password, 'password should be at least 6 characters long');
		return false;
    }  else if(( !(v = passwordValue.match(/[A-Z]/g)) || v.length < 1) || ( !(v = passwordValue.match(/[a-z]/g)) || v.length < 1))
        {
			 setErrorFor(password, 'password should have 1 uppercase, 1 lowercase');
			 return false;
    }else {
		setSuccessFor(password);
		return true;
	}
}

function pass2Validation(){
	const password = document.getElementById('password');
	const passwordValue = password.value.trim();
	const password2 = document.getElementById('password2');
	const password2Value = password2.value.trim();
	if(password2Value === '') {
		setErrorFor(password2, 'Password2 cannot be blank');
		return false;
	} else if(passwordValue !== password2Value) {
		setErrorFor(password2, 'Passwords does not match');
		return false;
	} else{
		setSuccessFor(password2);
		return true;
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
