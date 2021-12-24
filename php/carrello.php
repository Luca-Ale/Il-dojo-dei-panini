<?php
require_once 'bootstrap.php';

//Base Template

if (isUserLoggedIn()) {
    $templateParams["product"] = $dbh->getShoppingCartProducts($_SESSION["UserID"]);
    $templateParams["titolo"] = "carrello";
    $templateParams["nome"] = "carrello-tmplt.php";
    $templateParams["total"] = $dbh->getShoppingCartTotal($_SESSION["UserID"]);
    $templateParams["notifiche"] = $dbh->getNotificationFromUser($_SESSION["UserID"]);
}

require 'template/base.php';
?>