<?php 
require_once 'bootstrap.php';
$shoppingCartTotal = $dbh->getShoppingCartTotal($_SESSION["UserID"]);
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
//Qui inserisco la notifica
$notificationID = $dbh->getLastNotificationID();
$orderData = $dbh->getOrderWithID($dbh->getLastOrderID()[0]["lastOrder"]);
$userName = $dbh->getUserNameByID($_SESSION["UserID"]);
$products = $dbh->getOrderProducts($dbh->getLastOrderID()[0]["lastOrder"]);
$elencoProdotti = " ";
foreach($products as $prod) {
    $elencoProdotti = $elencoProdotti . $prod["nome"] . ", ";
}
$testoArticolo = "Signor " . $userName[0]["username"]
. ", la confermiamo che in data " . $orderData[0]["DataOra"] 
. " lei ha effettuato l'ordine " . $orderData[0]["codice_ordine"] 
. " in cui ha acquistato i prodotti: "
. $elencoProdotti
. "il quale costo totale è: "
. $shoppingCartTotal[0]["totale"]
. "€ buona giornata.";
if ($orderID[0]["lastOrder"] === NULL){
    $dbh->insertNewUserNotification(1, "Conferma avvenuto ordine", $testoArticolo, $dbh->getLastOrderID()[0]["lastOrder"]);
} else {
    $dbh->insertNewUserNotification($dbh->getLastNotificationID()[0]["lastNotification"] + 1, "Conferma avvenuto ordine", $testoArticolo, $dbh->getLastOrderID()[0]["lastOrder"]);
}
header("Refresh:0; url=carrello.php");

?>