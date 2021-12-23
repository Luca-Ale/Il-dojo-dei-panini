
let style_login = document.getElementById("theme-style-login");
let style_signup = document.getElementById("theme-style-signup");

console.log(style_login);
console.log(style_signup);
//console.log(document.getElementById("theme-style-login").name);

console.trace();
console.log(window.location);
console.log(window.location.href);
console.log(window.location.pathname);
console.log(window.location.origin);

/*let yeah = window.href;

console.log(yeah);*/

let style_path_login;
let style_path_signup;

/*if(window.location.href == "/Il-dojo-dei-panini/html/login.html"){
    console.log("login page");
} else {
    console.log("signup page");
}*/

//console.log(style_path_login);
//console.log(style_path_signup);

// TODO: fixare, se siamo nel dark theme l'occhio non deve perdere il filter: reverse();

function toggleVisibility(){
    let password = document.getElementById("password");
    let eye = document.getElementById("password-visibility");

    if(style_signup == null){
        style_path_login = style_login.getAttribute('href');
        console.log("login page" , style_path_login);
    } else {
        style_path_signup = style_signup.getAttribute('href');
        console.log("signup page" , style_path_signup);
    }

    console.log("fuori login page" , style_path_login);
    console.log("fuori signup page" , style_path_signup);

    if(password.getAttribute("type") == "password"){
        password.setAttribute("type", "text");
        //eye.style.filter = "opacity(1)";

        if(style_path_login == "../css/login_style.css" || style_path_signup == "../css/signup_style.css"){ //TODO: da fixare
            eye.style.filter = "opacity(1)";
            console.log("nell'if");

        } else {
            //eye.style.filter = "opacity(1)";
            //eye.style.filter = "reverse()";
            eye.style.filter = "opacity(1) reverse()";
            console.log("nell'else");
        }
        
        

    } else {
        password.setAttribute("type", "password");
        //eye.style.filter = "opacity(0.5)"; //TODO: quando sistemato sotto, questo è da commentare

        if(style_path_login == "../css/login_style.css" || style_path_signup == "../css/signup_style.css"){ //TODO: da fixare
            eye.style.filter = "opacity(0.5)";
            console.log("nell'if");

        } else {
            //eye.style.filter = "opacity(0.5)";
            //eye.style.filter = "reverse()";
            eye.style.filter = "opacity(0.5) reverse()";
            console.log("nell'else");
        }
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