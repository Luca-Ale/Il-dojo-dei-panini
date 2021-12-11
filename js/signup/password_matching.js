
let password_input = document.getElementById("password");

let password_confirmation = document.getElementById("confirm-password");

let exclamation = document.getElementById("exclamation-circle");
let exclamation_confirmation = document.getElementById("exclamation-circle-confirmation");

// Inizialmente, aperta la pagina non si devono vedere le icone che le password non matchano.
exclamation.style.visibility = "hidden";
exclamation_confirmation.style.visibility = "hidden";

function passwordMatching(){
    if(password_input.value == password_confirmation.value && password_input.value.length != 0){
        exclamation.style.visibility = "hidden";
        exclamation_confirmation.style.visibility = "hidden";
    } else {
        exclamation.style.visibility = "visible";
        exclamation_confirmation.style.visibility = "visible";
    }
}