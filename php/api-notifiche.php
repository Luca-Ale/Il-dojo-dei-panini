<?php
require_once 'bootstrap.php';
$notification = $dbh->getNotificationFromUser($_SESSION["UserID"]);

header('Content-Type: application/json');
echo json_encode($menu);
?>