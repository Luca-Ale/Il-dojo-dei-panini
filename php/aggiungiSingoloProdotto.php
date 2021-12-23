<?php
require_once 'bootstrap.php';
if(isUserLoggedIn()) {
    $query = $dbh->isProductAlreadyOnShoppingCart($_GET["id"], $_SESSION["UserID"]);
    if (!empty($query)) {
        //Il prodotto è già presente nel carrello, dunque va fatto solo l'update della quantità
        $dbh->addQuantityToShoppingCart($_GET["id"], $_SESSION["UserID"]);
    } else {
        //Il prodotto non è nel carrello, va aggiunto da 0
        $dbh->addToShoppingCart($_GET["id"], $_SESSION["UserID"], 1);
    }
    header("Refresh:0; url=carrello.php");
} else {
    header("Refresh:0; url=login.php");
}
?>