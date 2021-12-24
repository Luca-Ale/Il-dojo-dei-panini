<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "Il dojo dei panini | Home";
$templateParams["nome"] = "index-tmplt.php";
//$templateParams["product"] = $dbh->getShoppingCartProducts();

//require 'template/base.php'; // Il base ha il suo stile, mentre l'index ha un altro stile, inoltre ha anche un js per cambiare il tema.
require "template/index-page-tmplt.php";
?>