<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "Shop";
$templateParams["nome"] = "shop-tmplt.php";
$templateParams["products"] = $dbh->getMenuByPriceOrder();

require 'template/base.php';
?>