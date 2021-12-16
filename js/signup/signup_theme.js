
function swapTheme(){
    let style = document.getElementById("theme-style-signup");
    let style_path = style.getAttribute('href');

    let icon_theme = document.getElementById("icon_theme");
    
    if(style_path == "../css/signup_style.css"){
        style.setAttribute('href', '../css/signup_dark_theme_style.css');
        icon_theme.setAttribute('src', '../icons/theme/lightbulb-solid.svg');

    } else {
        style.setAttribute('href', '../css/signup_style.css');
        icon_theme.setAttribute('src', '../icons/theme/lightbulb-regular.svg');
    }
}