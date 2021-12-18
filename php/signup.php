<?php
require_once 'bootstrap.php';

if(isset($_POST["username"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["confirm-password"])){
    if($_POST["password"] == $_POST["confirm-password"]){ //TODO: oppure impedire all'utente di premere il pulsante se non sono uguali.
        $dbh->registerNewUser($_POST["username"], $_POST["email"], $_POST["password"]);
        //TODO: registerLoggedAdmin(result_signup[0]);
    } else {
        $templateParams["erroresignup"] = "Errore. Le passwords non combaciano";
    }
}

if(isAdminLoggedIn()){
    //TODO: schermata "UTENTE CREATO CORRETTAMENTE".
} else {
    //TODO: di nuovo alla pagina di signup.
}



require 'signup-page.php';
?>