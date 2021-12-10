
let style_login = document.getElementById("theme-style");
let style_signup = document.getElementById("theme-style");
let style_path_login = (style_login.href).substring((style.href).length-15, (style.href).length); 
let style_path_signup = (style_signup.href).substring((style.href).length-16, (style.href).length); // -16 per il signup

console.log(style_path_login);
console.log(style_path_signup);

// TODO: fixare, se siamo nel dark theme l'occhio non deve perdere il filter: reverse();

function toggleVisibility(){
    let password = document.getElementById("password");
    let eye = document.getElementById("password-visibility");

    if(password.getAttribute("type") == "password"){
        password.setAttribute("type", "text");
        eye.style.filter = "opacity(1)";

        /*if(style_path_login == "login_style.css" || style_path_signup == "signup_style.css"){ //TODO: da fixare
            eye.style.filter = "opacity(1)";

        } else {
            eye.style.filter = "opacity(1)";
            eye.style.filter = "reverse()";
        }*/
        
        

    } else {
        password.setAttribute("type", "password");
        eye.style.filter = "opacity(0.5)";

        /*if(style_path_login == "login_style.css" || style_path_signup == "signup_style.css"){ //TODO: da fixare
            eye.style.filter = "opacity(0.5)";

        } else {
            eye.style.filter = "opacity(0.5)";
            eye.style.filter = "reverse()";
        }*/
    }
}

// TODO: fixare problema che rimuove il filter: reverse() se siamo nel dark theme.

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