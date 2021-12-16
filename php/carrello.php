<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "carrello";
$templateParams["nome"] = "carrello-tmplt.php";
$templateParams["product"] = $dbh->getShoppingCartProducts();
$templateParams["total"] = $dbh->getShoppingCartTotal();

require 'template/base.php';
?>