
function swapTheme(){
    let style = document.getElementById("theme-style-login");
    let style_path = style.getAttribute('href');

    let icon_theme = document.getElementById("icon_theme");
    
    if(style_path == "../css/login_style.css"){
        style.setAttribute('href', '../css/login_dark_theme_style.css');
        icon_theme.setAttribute('src', '../icons/theme/lightbulb-solid.svg');

    } else {
        style.setAttribute('href', '../css/login_style.css');
        icon_theme.setAttribute('src', '../icons/theme/lightbulb-regular.svg');
        
    }
}