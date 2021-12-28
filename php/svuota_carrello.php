<?php 
require_once 'bootstrap.php';
$products = $dbh->getShoppingCartProducts($_SESSION["UserID"]);

foreach($products as $prod) {
    $shoppingCartProductQuantity = $dbh->getProductByIdFromShoppingCart($prod["cod_prodotto"], $_SESSION["UserID"])[0]["quantita"];
    $dbh->setProductQuantity($shoppingCartProductQuantity, $prod["cod_prodotto"]);
} 
$dbh->deleteAllFromShoppingCart($_SESSION["UserID"]);

header("Refresh:0; url=carrello.php");
?>