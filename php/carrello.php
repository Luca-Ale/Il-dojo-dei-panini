<?php   
require_once 'bootstrap.php';

//Base Template

$templateParams["titolo"] = "carrello";

if (isUserLoggedIn()) {
    $templateParams["nome"] = "carrello-tmplt.php";
    $templateParams["product"] = $dbh->getShoppingCartProducts($_SESSION["UserID"]);
    $templateParams["total"] = $dbh->getShoppingCartTotal($_SESSION["UserID"]);
    $templateParams["notifiche"] = $dbh->getNotificationFromUser($_SESSION["UserID"]);
    $templateParams["js"] = array("../js/jquery-3.4.1.min.js","../js/notifiche.js");
} else if (isAdminLoggedIn()) {
    header("Refresh:0; url=login-admin.php");
} else {
    header("Refresh:0; url=login.php");
}

require 'template/base.php';
?>