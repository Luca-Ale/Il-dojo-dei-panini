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
    $templateParams["titolo"] = "Il Dojo dei Panini | Benvenuto Utente";
    $templateParams["nome"] = "index.php"; //TODO: modificare
} else {
    $templateParams["titolo"] = "Il Dojo dei Panini | Login";
    $templateParams["nome"] = "login-page.php"; //TODO: modificare
}

//require '../html/index.html'; //TODO: modificare
require 'template/base.php';
?>