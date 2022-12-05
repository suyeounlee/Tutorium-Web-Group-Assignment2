<<<<<<< HEAD
//contact.js by Leonardo
var errorFirstName = document.createElement('p');
var errorLastName = document.createElement('p');
var errorMail = document.createElement('p');
var errorInterest = document.createElement('p');
var errorMessage = document.createElement('p');

function validate() {

    var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var emailValue = document.querySelector("#email").value;
    var isEmailValid = emailPattern.test(emailValue);
    var firstNamePattern = /^[a-zA-Z]{1,20}$/
    var firstNameValue = document.querySelector("#firstName-input").value;
    var isFirstNameValid = firstNamePattern.test(firstNameValue);

    var lastNamePattern = /^[a-zA-Z]{1,20}$/
    var lastNameValue = document.querySelector("#lastName-input").value;
    var islastNameValid = lastNamePattern.test(lastNameValue);

    var interestValue = document.querySelector("#interest").value;
    var messageValue = document.querySelector("#message").value;

    if (!isFirstNameValid) {
        errorAction("firstName-input", 0, errorFirstName);
    } else if (isFirstNameValid) {
        document.forms[0].interest.value.toLowerCase();
        correctValue("firstName-input", errorFirstName);
    }

    if (!islastNameValid) {
        errorAction("lastName-input", 1, errorLastName);
    } else if (islastNameValid) {
        correctValue("lastName-input", errorLastName);
    }

    if (!isEmailValid) {
        errorAction("email", 2, errorMail);
    } else if (isEmailValid) {
        correctValue("email", errorMail);
    }

    if (interestValue == 'none') {
        errorAction("interest", 3, errorInterest);
    } else if (interestValue) {
        correctValue("interest", errorInterest);
    }

    if (messageValue == '') {
        errorAction("message", 4, errorMessage);
    } else if (messageValue) {
        correctValue("message", errorMessage);
    }

    if ((isEmailValid == true) && (isFirstNameValid == true) && (islastNameValid == true) &&
        (interestValue != 'none') && (messageValue != '')) {
        window.confirm(`Your message has been received`);
        document.getElementsByTagName("form").submit();
        return true;
    }
    return false;
=======
/**
 * Contact JavaScript file (leonardo)
 * This script is used to evaluate if user's entered values are valid inputs
 * Function validate is called from contact.html form>submit button
 */
var errorFirstName = document.createElement("p");
var errorLastName = document.createElement("p");
var errorMail = document.createElement("p");
var errorInterest = document.createElement("p");
var errorMessage = document.createElement("p");

function validate() {
  var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var emailValue = document.querySelector("#email").value;
  var isEmailValid = emailPattern.test(emailValue);
  var firstNamePattern = /^[a-zA-Z]{1,20}$/;
  var firstNameValue = document.querySelector("#firstName-input").value;
  var isFirstNameValid = firstNamePattern.test(firstNameValue);

  var lastNamePattern = /^[a-zA-Z]{1,20}$/;
  var lastNameValue = document.querySelector("#lastName-input").value;
  var islastNameValid = lastNamePattern.test(lastNameValue);

  var interestValue = document.querySelector("#interest").value;
  var messageValue = document.querySelector("#message").value;

  if (!isFirstNameValid) {
    errorAction("firstName-input", 0, errorFirstName);
  } else if (isFirstNameValid) {
    document.forms[0].interest.value.toLowerCase();
    correctValue("firstName-input", errorFirstName);
  }

  if (!islastNameValid) {
    errorAction("lastName-input", 1, errorLastName);
  } else if (islastNameValid) {
    correctValue("lastName-input", errorLastName);
  }

  if (!isEmailValid) {
    errorAction("email", 2, errorMail);
  } else if (isEmailValid) {
    correctValue("email", errorMail);
  }

  if (interestValue == "none") {
    errorAction("interest", 3, errorInterest);
  } else if (interestValue) {
    correctValue("interest", errorInterest);
  }

  if (messageValue == "") {
    errorAction("message", 4, errorMessage);
  } else if (messageValue) {
    correctValue("message", errorMessage);
  }

  if (
    isEmailValid == true &&
    isFirstNameValid == true &&
    islastNameValid == true &&
    interestValue != "none" &&
    messageValue != ""
  ) {
    window.confirm(`Your message has been received`);
    document.getElementsByTagName("form").submit();
    return true;
  }
  return false;
>>>>>>> aba7e5eafb056a7472550739436fa6a59395e54c
}

function errorAction(inputId, listError, errorName) {
  errorName.textContent = errlistMsg[listError];
  errorName.style = "color:red";
  document.getElementById(inputId).style = "border-color:red";
  document.getElementById(inputId).after(errorName);
}

function correctValue(inputId, errorName) {
  document.getElementById(inputId).style = "border-color:black";
  errorName.remove();
}

var lowerCaseLogin = document.querySelector("button");
lowerCaseLogin.addEventListener("click", function () {
<<<<<<< HEAD
    document.getElementById("login").value = document.getElementById("login").value.toLowerCase();
})

var errlistMsg = ["❌ First name should be non-empty , within 20 characters long and no numbers allowed."
    , "❌ Last name should be non-empty , within 20 characters long and no numbers allowed.", "❌ Email address should be non-empty with the format xyx@xyz.xyz",
    "❌ Please select a course.", "❌ Message shouldn't be blank."]
=======
  document.getElementById("login").value = document
    .getElementById("login")
    .value.toLowerCase();
});

var errlistMsg = [
  "❌ First name should be non-empty , within 20 characters long and no numbers allowed.",
  "❌ Last name should be non-empty , within 20 characters long and no numbers allowed.",
  "❌ Email address should be non-empty with the format xyx@xyz.xyz",
  "❌ Please select a course.",
  "❌ Message shouldn't be blank.",
];
>>>>>>> aba7e5eafb056a7472550739436fa6a59395e54c
