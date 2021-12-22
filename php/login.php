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
        }
    }

}

if(isUserLoggedIn()){
    header("Refresh:0; url=carrello.php");
} else {
    if(isAdminLoggedIn()){
        $templateParams["nome"] = "login-home-admin.php";
        $templateParams["prodotti"] = $dbh->getAllProducts();
        if(isset($_GET["formmsg"])){
            $templateParams["formmsg"] = $_GET["formmsg"];
        }
    } else {
        $templateParams["nome"] = "login-page.php";
    }
}

//require 'login-page.php'; //TODO: remove?
require 'template/base.php';
?>