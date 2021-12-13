
function swapTheme(){
    let style = document.getElementById("theme-style");

    let icon_theme = document.getElementById("icon_theme");

    let navbar = document.getElementById("navbar"); // getElementByClass non andava.

    let jumbotron_recensioni = document.getElementById("jumbotron-recensioni"); // getElementByClass non andava.

    console.log(navbar);
    
    // Lampadina solid = lampadina accessa = light theme, lampadina regular = lampadina spenta = dark theme.
    if(style.getAttribute('href') == "../css/style.css"){

        style.setAttribute('href', '../css/dark_theme_style.css');
        icon_theme.className = "far fa-lightbulb"; // far per quella regular
        navbar.className = "navbar navbar-expand-lg navbar-dark bg-dark";
        jumbotron_recensioni.className = "jumbotron jumbotron-fluid bg-dark";

    } else {
        style.setAttribute('href', '../css/style.css');
        icon_theme.className = "fas fa-lightbulb"; // fas per quella solid
        navbar.className = "navbar navbar-expand-lg navbar-light bg-light";
        jumbotron_recensioni.className = "jumbotron jumbotron-fluid bg-light";
    }
}