<?php
require_once 'bootstrap.php';

if(isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm-password"])){
    if($_POST["password"] == $_POST["confirm-password"]){
        $dbh->updatePassword($_POST["username"], $_POST["email"] && $_POST["password"]);
    } else {
        $templateParams["erroreforgotpassword"] = "Errore, le passwords non combaciano!";
    }
}

require 'forgot_password-page.php';
?>