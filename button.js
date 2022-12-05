//button.js by Mathunan

// when button changes login to signup and vice versa.
var x = document.getElementById("login");
var y = document.getElementById("signup");
var z = document.getElementById("btn");

//when click button signup
function signup() {
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";

}

//when click button login
function login() {
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0px";
}