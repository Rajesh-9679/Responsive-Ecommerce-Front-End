// Login/ Register form swap functionality

var loginForm = document.getElementById("login-form");
var regForm = document.getElementById("register-form");
var indicator = document.getElementById("indicator");

function register() {
    regForm.style.transform = "translateX(0rem)";
    loginForm.style.transform = "translateX(0rem)";
    indicator.style.transform = "translateX(10rem)";
}

function login() {
    regForm.style.transform = "translateX(40rem)";
    loginForm.style.transform = "translateX(40rem)";
    indicator.style.transform = "translateX(0rem)";
}
