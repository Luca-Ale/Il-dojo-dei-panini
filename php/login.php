<?php
require_once 'bootstrap.php';

if(isset($_POST["username"]) && isset($_POST["password"])){
    $login_result = $dbh->login($_POST["username"], $_POST["password"]);
    
    if(count($login_result) == 0){
        //Login fallito
        $templateParams["errorelogin"] = "Errore! Controllare username o password!";
    } else {
        registerLoggedUser($login_result[0]);
    }

}

if(isUserLoggedIn()){
    $templateParams["titolo"] = "Il Dojo dei Panini | Benvenuto Utente";
    $templateParams["nome"] = "index.php"; //TODO: modificare
} else {
    $templateParams["titolo"] = "Il Dojo dei Panini | Login";
    $templateParams["nome"] = "../html/login.html";
}

//require '../html/index.html'; //TODO: modificare
require 'template/base.php';
?>