<?php
require_once 'bootstrap.php';

if(isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm-password"])){
    if($_POST["password"] == $_POST["confirm-password"]){
        $result_update = $dbh->updatePassword($_POST["username"], $_POST["email"], $_POST["password"]);
        if($result_update == false){
            $templateParams["msgforgotpassword"] = "Errore nei dati.";
        } else {
            $templateParams["msgforgotpassword"] = "Password modificata correttamente!";
        }
    } else {
        $templateParams["msgforgotpassword"] = "Errore, le passwords non combaciano!";
    }
}

require 'forgot_password-page.php';
?>