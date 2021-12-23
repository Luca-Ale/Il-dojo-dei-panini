
function toggleVisibility(){
    let password = document.getElementById("password");
    let eye = document.getElementById("password-visibility");

    if(password.getAttribute("type") == "password"){
        password.setAttribute("type", "text");
        eye.style.filter = "opacity(1)"; 
        //eye.className = "fas fa-eye-slash password-visibility"; //TODO: se uso l'opacity cambiare l'icona non ha senso

    } else {
        password.setAttribute("type", "password");
        eye.style.filter = "opacity(0.5)";
        //eye.className = "fas fa-eye password-visibility"; //TODO: se uso l'opacity cambiare l'icona non ha senso
    }
}

function toggleVisibilityConfirmation(){
    let password_confirmation = document.getElementById("confirm-password");
    let eye_confirmation = document.getElementById("password-visibility-confirmation");

    if(password_confirmation.getAttribute("type") == "password"){
        password_confirmation.setAttribute("type", "text");
        eye_confirmation.style.filter = "opacity(1)";

    } else {
        password_confirmation.setAttribute("type", "password");
        eye_confirmation.style.filter = "opacity(0.5)";

    }
}