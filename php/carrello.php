<?php
require_once 'bootstrap.php';

//Base Template

$templateParams["titolo"] = "carrello";
$templateParams["nome"] = "carrello-tmplt.php";

if (isUserLoggedIn()) {
    $templateParams["product"] = $dbh->getShoppingCartProducts($_SESSION["UserID"]);
    $templateParams["total"] = $dbh->getShoppingCartTotal($_SESSION["UserID"]);
    $templateParams["notifiche"] = $dbh->getNotificationFromUser($_SESSION["UserID"]);
}

require 'template/base.php';
?>