<?php
require_once 'bootstrap.php';
$menu = $dbh->getMenuByPriceOrder();

for($i = 0; $i < count($menu); $i++){
    $menu[$i]["img"] = IMG_DIR.$menu[$i]["img"];
}

header('Content-Type: application/json');
echo json_encode($menu);
?>