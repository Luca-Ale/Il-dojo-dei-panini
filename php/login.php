<?php
require_once 'bootstrap.php';

if(isset($_POST["username"]) && isset($_POST["password"])){
    //$login_result = $dbh->login($_POST["username"], $_POST["password"]); //TODO: remove
    if(str_starts_with($_POST["username"], "admin")){
        $login_result = $dbh->checkAdminLogin($_POST["username"], $_POST["password"]);
    } else {
        $login_result = $dbh->checkUserLogin($_POST["username"], $_POST["password"]);
    }
    
    if(count($login_result) == 0){
        //Login fallito
        $templateParams["errorelogin"] = "Errore! Controllare username o password!";
    } else {
        if(str_starts_with($_POST["username"], "admin")){
            registerLoggedAdmin($login_result[0]);
        } else {
            registerLoggedUser($login_result[0]);
            // MESSAGGIO PER L'UTENTE CHE SI E' APPENA LOGGATO.
            $messaggio = "Sei stato tu a connetterti alle " . date("h:i:sa") . " il " . date("d/m/Y") . " " . "\r\n" . "Con il sistema operativo: " . PHP_OS . " e il browser: " . $_SERVER['HTTP_USER_AGENT'] . "?";
		    $dbh->insertNewMessageForUser("Login", $messaggio, $_SESSION["UserID"]);
        }
    }

}

if(isUserLoggedIn()){
    header("Refresh:0; url=carrello.php");
    // Qui mi servirebbe, per via delle notifiche, un
    // $templateParams["messaggi"] = $dbh->getAllMessages($_SESSION["UserID"]);
    // ma se usi l'header non va, non mi vede la variabile $templateParams["messaggi"];
    // guarda qui sotto come ho fatto per l'admin per $templateParams["prodotti"] per reference.

} else {
    if(isAdminLoggedIn()){
        $templateParams["nome"] = "login-home-admin.php";
        $templateParams["titolo"] = "Il Dojo dei Panini | Prodotti";
        $templateParams["prodotti"] = $dbh->getAllProducts();
        if(isset($_GET["formmsg"])){
            $templateParams["formmsg"] = $_GET["formmsg"];
        }
    } else {
        $templateParams["titolo"] = "Il Dojo dei Panini | Login";
        $templateParams["nome"] = "login-page.php";
    }
}

//require 'login-page.php'; //TODO: remove?
require 'template/base.php';
?>