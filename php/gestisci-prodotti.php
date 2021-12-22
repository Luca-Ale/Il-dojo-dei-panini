<?php
require_once 'bootstrap.php';

if(!isAdminLoggedIn() || !isset($_GET["action"]) || ($_GET["action"]!=1 && $_GET["action"]!=2 && $_GET["action"]!=3) || ($_GET["action"]!=1 && !isset($_GET["id"]))){
    header("location: login.php");
}

if($_GET["action"]!=1){
    $risultato = $dbh->getProductById($_GET["id"]); 
    if(count($risultato)==0){
        $templateParams["prodotto"] = null;
    }
    else{
        // ACTION 2
        $templateParams["prodotto"] = $risultato[0];
        var_dump($risultato[0]); //TODO: remove
    }
}
else{
    // ACTION 1
    $templateParams["prodotto"] = getEmptyProduct(); 
}




$templateParams["titolo"] = "Il Dojo dei Panini | Gestisci Prodotti";
$templateParams["nome"] = "admin-form.php";

$templateParams["azione"] = $_GET["action"];

require 'template/base.php';
?>