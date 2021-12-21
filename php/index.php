<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "Il dojo dei panini | Home";
$templateParams["nome"] = "index-tmplt.php";
//$templateParams["product"] = $dbh->getShoppingCartProducts();

require 'template/base.php';
?>