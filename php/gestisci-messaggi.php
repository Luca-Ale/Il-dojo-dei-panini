<?php
require_once 'bootstrap.php';

if(!isUserLoggedIn() || !isset($_GET["action"]) || ($_GET["action"]!=1 && $_GET["action"]!=2 || ($_GET["action"]!=1 && !isset($_GET["id"]))){
    header("location: login.php");
}

if($_GET["action"] == 1){
    $dbh->deleteAllMessages();
    $msg = "Cancellazione di tutti i messaggi eseguita correttamente!";

} else if($_GET["action"] == 2){

    $dbh->deleteMessageById($_GET["id"]);
    $msg = "Cancellazione del messaggio: " . $_GET["id"] . " eseguita con successo!";
}

header("location: login.php?formmsg=".$msg);

?>