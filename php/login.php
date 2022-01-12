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
            header("Refresh:0; url=login-admin.php");
        } else {
            registerLoggedUser($login_result[0]);
            header("Refresh:0; url=carrello.php");
        }
    }

}

if(isUserLoggedIn()){
	header("Refresh:0; url=carrello.php");
} else {
	if(isAdminLoggedIn()){
		header("Refresh:0; url=login-admin.php");
	}
}

require 'login-page.php';
?>