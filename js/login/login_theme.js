
function swapTheme(){
    let style = document.getElementById("theme-style");
    let style_path = (style.href).substring((style.href).length-15, (style.href).length);

    let icon_theme = document.getElementById("icon_theme");
    
    if(style_path == "login_style.css"){
        style.href = "../css/login_dark_theme_style.css";
        icon_theme.src = "../icons/theme/lightbulb-solid.svg";

    } else {
        style.href = "../css/login_style.css";
        icon_theme.src = "../icons/theme/lightbulb-regular.svg";
        
    }
}