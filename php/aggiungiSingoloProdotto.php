<?php
require_once 'bootstrap.php';
if(isUserLoggedIn()) {
    $query = $dbh->isProductStillAvaiable($_GET["id"]);
    var_dump($query);
    if (!empty($query)) {
        $dbh->addQuantityToShoppingCart($_GET["id"], $_SESSION["UserID"]);
        $dbh->decreaseProductQuantity($_GET["id"]);
    }
    header("Refresh:0; url=carrello.php");
} else {
    header("Refresh:0; url=login.php");
}
?>