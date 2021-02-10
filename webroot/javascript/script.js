
function validarCheck(){
    var checkBox = document.getElementById("checkBox");
    var password = document.getElementById("Password");

    if (checkBox.checked) {
        password.type = "text";
    } else {
        password.type = "password";
    }
}

function validarCheck2(){
    var checkBox = document.getElementById("checkBox");
    var password = document.getElementById("Password");
    var passwordC = document.getElementById("PasswordConfirmacion");

    if (checkBox.checked) {
        password.type = "text";
        passwordC.type = "text";
    } else {
        password.type = "password";
        passwordC.type = "password";
    }
}

