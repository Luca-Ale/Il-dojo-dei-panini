const Files = {
    LOGIN_LIGHT_THEME: '',
    LOGIN_DARK_THEME: '',

    SIGNUP_LIGHT_THEME: '',
    SIGNUP_DARK_THEME: '',

    LIGHTBULB_ICON_LIGHT: '',
    LIGHTBULB_ICON_DARK: ''
};

function swapTheme(){ //TOOD: fix
    let style = document.getElementById("theme-style");
    //let style_path = (style.href).substring((style.href).length-15, (style.href).length);
    let style_path = style.href;

    console.log(style_path); //TOOD: remove

    let icon_theme = document.getElementById("icon_theme");
    
    //TODO: cambiare icone per light e dark theme
    //TODO: forse potrei usare un enum ?
    if(style_path == "login_style.css"){
        style.href = "../css/login_dark_theme_style.css";
        icon_theme.src = "../icons/lightbulb-solid.svg";

    } else if(style_path == "signup_style.css"){
        style.href = "../css/signup_dark_theme_style.css";
        icon_theme.src = "../icons/lightbulb-solid.svg";

    } else if(style_path == "signup_dark_theme_style.css"){

        style.href = "../css/signup_dark_theme_style.css";
        icon_theme.src = "../icons/lightbulb-regular.svg";
    } else {
        style.href = "../css/login_style.css";
        icon_theme.src = "../icons/lightbulb-regular.svg";
    }
}