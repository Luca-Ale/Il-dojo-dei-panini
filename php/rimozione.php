<?php 
require_once 'bootstrap.php';
$shoppingCartProductQuantity = $dbh->getProductByIdFromShoppingCart($_GET["id"], $_SESSION["UserID"])[0]["quantita"];
$dbh->setProductQuantity($shoppingCartProductQuantity, $_GET["id"]);
$dbh->deleteFromShoppingCart($_GET["id"], $_SESSION["UserID"]);
header("Refresh:0; url=carrello.php");
?>