<?php 
require_once 'bootstrap.php';
$dbh->deleteAllFromShoppingCart($_SESSION["UserID"]);
header("Refresh:0; url=carrello.php");
?>