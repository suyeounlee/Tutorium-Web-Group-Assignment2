var x = document.getElementById("login");
var y = document.getElementById("signup");
var z = document.getElementById("btn");

var id = "";
var ename = "";
var addr = "";
var telno = "";

let userid = document.getElementById("userid").value;
let username = document.getElementById("username").value;
let pnumber = document.getElementById("pnumber").value;
let email = document.getElementById("email").value;
let pass = document.getElementById("pass1").value;
let pass2 = document.getElementById("pass2").value;


function signup() {
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";

}

function login() {
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0px";
}

function formvalidation(thisform){
    with(thisform){
        if(idValidation(userid) == false){
            return false;
        }
        if(nameValidation(empname) == false){
            return false;
        }
        if(addrValidation(empaddr) == false){
            return false;
        }
        if(telnoValidation(etelno) == false){
            return false;
        }
        if(emailValidation(empemail) == false){
            return false;
        }
    }
}

function idValidation(userid){
    with(document.form1){
        if(userid == ""){
            alert("Employee ID is not Entered.");
            empid.focus();
            return false;
        }
        else{
            id=userid.length;
            if((id < 0) || (id > 10)){
                alert("Employee ID should have maximum 10 character length.");
                empid.focus();
                return false;
            }
            var len = userid.length;
            var i = 0;
            var str = "0123456789";
            while (i<len){
                if (str.indexOf(userid.substr(i,1)) == -1){
                    alert ("ID may consist of 0-9.");
                     userid = "";
                    return false;
                }
                i++;
            }
            return true;
        }
    }
}


    // if (userid == "") {
    //     document.getElementById('message').style.visibility = "visible";
    //     document.getElementById('message').innerHTML = "User Id should not be empty";
    // } else if ((userid.value < 0) || (userid.value > 6)) {
    //     document.getElementById('message').style.visibility = "visible";
    //     document.getElementById('message').innerHTML = "User Id should not be empty";
    // } else {
    //     document.getElementById('message1').style.visibility = "hidden";
    // }

    // //Email validation
    // if (email == "" || email == null) {
    //     document.getElementById('message1').style.visibility = "visible";
    //     document.getElementById('message1').innerHTML = "X Email id should be non-empty";

    // }

    // else if (((regexp.test(email)) == false)) {
    //     document.getElementById('message').style.visibility = "visible";
    //     document.getElementById('message').innerHTML = "X Email id is not valid";
    //     isValid = false;
    // }

    // else {
    //     document.getElementById('message').style.visibility = "hidden";
    // }

    // if (login == "" || login == null) {
    //     document.getElementById('message1').style.visibility = "visible";
    //     document.getElementById('message1').innerHTML = "X login name should be non-empty";
    //     isValid = false;
    // }

    // //login length validation
    // else if ((login.length > 20)) {
    //     document.getElementById('message1').style.visibility = "visible";
    //     document.getElementById('message1').innerHTML = "X Login name should not be less than 20 characters long";
    //     isValid = false;
    // }

    // else {
    //     document.getElementById('message1').style.visibility = "hidden";
    //     //let login2= login.toLowerCase();

    // }

    // //Password validation
    // if (pass == "" || pass == null) {
    //     document.getElementById('message2').style.visibility = "visible";
    //     document.getElementById('message2').innerHTML = "X Password should be non-empty";
    //     isValid = false;
    // }

    // else if ((pass.length < 6)) {
    //     document.getElementById('message2').style.visibility = "visible";
    //     document.getElementById('message2').innerHTML = "X Password should be at least 6 characters long";
    //     isValid = false;
    // }

    // else if ((!(m = pass.match(/[A-Z]/g)) || m.length < 1) || (!(m = pass.match(/[a-z]/g)) || m.length < 1)) {
    //     document.getElementById('message2').style.visibility = "visible";
    //     document.getElementById('message2').innerHTML = "X Password should have one upper and one lower case letter";
    //     isValid = false;
    // }
    // else {
    //     document.getElementById('message2').style.visibility = "hidden";
    // }


    // //Confirm password validation
    // if (pass2 == "" || pass2 == null) {
    //     document.getElementById('message3').style.visibility = "visible";
    //     document.getElementById('message3').innerHTML = " X Password should be non-empty";
    //     isValid = false;
    // }

    // else if (pass != pass2) {
    //     document.getElementById('message3').style.visibility = "visible";
    //     document.getElementById('message3').innerHTML = "X Password not matching";
    //     isValid = false;
    // }


