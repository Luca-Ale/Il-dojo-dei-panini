<?php
require_once 'bootstrap.php';

if(isset($_POST["username"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["confirm-password"])){
    if($_POST["password"] == $_POST["confirm-password"]){ //TODO: oppure impedire all'utente di premere il pulsante se non sono uguali.
        $result_signup = $dbh->registerNewUser($_POST["username"], $_POST["email"], $_POST["password"]);

        if($result_signup == false){ //TODO: forse questo controllo non serve nemmeno?
            $templateParams["msgsignup"] = "Errore nella registrazione. Dati errati!";
            
        } else {
            //header("Refresh:0; url=template/base.php");
            //$templateParams["nome"] = "";

            //TODO: o alla pagina di login o ad una pagina del tipo "UTENTE CREATO CORRETTAMENTE".
            $templateParams["msgsignup"] = "Utente creato correttamente!";
        }
    } else {
        $templateParams["msgsignup"] = "Errore. Le passwords non combaciano";
    }
}

require 'signup-page.php';
?>