<?php

require_once "bootstrap.php";

if(isAdminLoggedIn()){
    $templateParams["messaggi"] = $dbh->getAllMessages();
    $templateParams["titolo"] = "Il Dojo dei Panini | Messaggi";
    $templateParams["nome"] = "login-home-admin-messaggi.php";
}

require "template/base.php";
?>