<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "Il dojo dei panini | Home";
$templateParams["nome"] = "index-tmplt.php";
$templateParams["products"] = $dbh->getThreeRandomProducts();

require "template/index-page-tmplt.php";
?>