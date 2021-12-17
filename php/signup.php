<?php
require_once 'bootstrap.php';

if(isset($_POST["username"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["confirm-password"])){
    if($_POST["password"] == $_POST["confirm-password"]){ //TODO: oppure impedire all'utente di premere il pulsante se non sono uguali.
        $dbh->registerNewUser($_POST["username"], $_POST["email"], $_POST["password"]);
    } else {
        $templateParams["erroresignup"] = "Errore.";
    }
}



require 'signup-page.php';
?>