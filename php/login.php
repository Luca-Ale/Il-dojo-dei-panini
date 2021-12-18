<?php
require_once 'bootstrap.php';

if(isset($_POST["username"]) && isset($_POST["password"])){
    //$login_result = $dbh->login($_POST["username"], $_POST["password"]); //TODO: remove
    if(substr("admin", 0) === $_POST["username"]){
        $login_result = $dbh->checkAdminLogin($_POST["username"], $_POST["password"]);
    } else {
        $login_result = $dbh->checkUserLogin($_POST["username"], $_POST["password"]);
    }
    
    if(count($login_result) == 0){
        //Login fallito
        $templateParams["errorelogin"] = "Errore! Controllare username o password!";
    } else {
        if(substr("admin", 0) === $_POST["username"]){
            registerLoggedAdmin($login_result[0]);
        } else {
            registerLoggedUser($login_result[0]);
        }
        
    }

}

if(isUserLoggedIn()){
    header("Refresh:0; url=../html/index.html"); // carico il index.html al posto del index.php perchè al momento ha dei problemi con gli stili e gli scripts.
} else {
    if(isAdminLoggedIn()){
        //TODO: aggiungere schermata per l'admin
    }
}

require 'login-page.php'; //TODO: qui potrei direttamente caricare login.html
?>