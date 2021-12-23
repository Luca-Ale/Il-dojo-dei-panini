<?php
require_once 'bootstrap.php';
$product = $dbh->getProductByIdFromShoppingCart($_GET["id"], $_SESSION["UserID"]);
if ($product[0]["quantita"] > 1) {
    $dbh->decreaseQuantityToShoppingCart($_GET["id"], $_SESSION["UserID"]);
} 
header("Refresh:0; url=carrello.php");
?>