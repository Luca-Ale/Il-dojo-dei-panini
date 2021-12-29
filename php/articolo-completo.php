<?php 
require_once 'bootstrap.php';

$templateParams["titolo"] = "";
$templateParams["testo"] = $dbh->getNotificationByOrderID($_GET["id"]);
$templateParams["nome"] = "articolo-completo-tmplt.php";

require 'template/base.php';
?>