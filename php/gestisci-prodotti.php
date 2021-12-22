<?php
require_once 'bootstrap.php';

if(!isUserLoggedIn() || !isset($_GET["action"]) || ($_GET["action"]!=1 && $_GET["action"]!=2 && $_GET["action"]!=3) || ($_GET["action"]!=1 && !isset($_GET["id"]))){
    header("location: login.php");
}

if($_GET["action"]!=1){
    $risultato = $dbh->getProductById($_GET["id"]); 
    if(count($risultato)==0){
        $templateParams["prodotto"] = null;
    }
    else{
        //TODO:
    }
}
else{
    $templateParams["prodotto"] = getEmptyProduct(); 
}




$templateParams["titolo"] = "Il Dojo dei Panini | Gestisci Prodotti";
$templateParams["nome"] = "admin-form.php";

$templateParams["azione"] = $_GET["action"];

require 'template/base.php';
?>