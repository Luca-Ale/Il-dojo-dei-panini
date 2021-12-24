<?php
require_once "bootstrap.php";

if(isAdminLoggedIn()){
    $templateParams["nome"] = "login-home-admin.php";
    $templateParams["titolo"] = "Il Dojo dei Panini | Prodotti";
    $templateParams["prodotti"] = $dbh->getAllProducts();
    if(isset($_GET["formmsg"])){

        $templateParams["formmsg"] = $_GET["formmsg"];
    }
}

require "template/base.php";
?>