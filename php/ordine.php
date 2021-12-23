<?php 
require_once 'bootstrap.php';
$orderID = $dbh->getLastOrderID();
if ($orderID[0]["lastOrder"] === NULL){
    $dbh->createOrder(1, $_SESSION["UserID"]);
} else {
    $dbh->createOrder($orderID[0]["lastOrder"] + 1, $_SESSION["UserID"]); 
}

$shoppingCart=$dbh->getShoppingCartProducts($_SESSION["UserID"]);

for($i = 0; $i<count($shoppingCart); $i++) {
    $dbh->addProductToOrder($shoppingCart[$i]["codice_prodotto"], $dbh->getLastOrderID()[0]["lastOrder"], $shoppingCart[$i]["quantita"]);
}

$dbh->deleteAllFromShoppingCart($_SESSION["UserID"]);
header("Refresh:0; url=carrello.php");

?>