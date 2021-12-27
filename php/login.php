<?php
require_once 'bootstrap.php';

if(isset($_POST["username"]) && isset($_POST["password"])){
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
            //TODO: boh qualcosa
            // MESSAGGIO PER L'UTENTE CHE SI E' APPENA LOGGATO.
            //$messaggio = "Sei stato tu a connetterti alle " . date("h:i:sa") . " il " . date("d/m/Y") . " " . "\r\n" . "Con il sistema operativo: " . PHP_OS . " e il browser: " . $_SERVER['HTTP_USER_AGENT'] . "?";
		    //$dbh->insertNewMessageForUser("Login", $messaggio, $_SESSION["UserID"]);
        }
    }

}

if(isAdminLoggedIn()){

    header("Refresh:0; url=login-admin.php");
}


require 'login-page.php'; //TODO: sarebbe quasi meglio chiamare ../html/login.html perchè la sua versione php, ovvero "login-page.php" non va molto bene.
?>