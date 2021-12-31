<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "Shop";
$templateParams["js"] = array("../js/jquery-3.4.1.min.js","../js/shop.js");
$templateParams["products"] = $dbh->getMenuByPriceOrder();

require 'template/base.php';
?>