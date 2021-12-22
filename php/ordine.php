<?php 
require_once 'bootstrap.php';
$dbh->createOrder($_SESSION["UserID"]);
$numero_ordine=$dbh->getLastOrderID();
$shoppingCart=$dbh->getShoppingCartProducts($_SESSION["UserID"]);

for($i = 0; $i<count($shoppingCart); $i++) {
    $dbh->addProductToOrder($shoppingCart[$i]["codice_prodotto"], $numero_ordine[0], $shoppingCart[$i]["quantita_ordinata"]);
}

//$dbh->deleteAllFromShoppingCart($_GET["UserID"]);
header("Refresh:0; url=carrello.php");
?>