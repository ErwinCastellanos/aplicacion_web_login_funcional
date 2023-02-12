//VARIABLES
let formulario_login = document.querySelector(".formulario__login");
let formulario_register = document.querySelector(".formulario__register");
let login_register = document.querySelector(".login-register");
let caja_trasera_login = document.querySelector(".caja__trasera-login");
let caja_trasera_register = document.querySelector(".caja__trasera-register");

function register() {
    formulario_register.style.display = "block";
    login_register.style.left = "410px";
    formulario_login.style.display = "none";
    caja_trasera_register.style.opacity = "0";
    caja_trasera_login.style.opacity = "1";
}

///////////////////////////  FUNCON DE LOS BOTONES ////////////////////////////////////////
document.getElementById("btn__registrarse").addEventListener("click", register);