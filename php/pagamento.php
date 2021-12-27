<?php
    require_once 'bootstrap.php';

    $templateParams["titolo"] = "Pagamento";
    $templateParams["js"] = array("../js/jquery-3.4.1.min.js","../js/payment.js");

    require 'template/base.php';
?>