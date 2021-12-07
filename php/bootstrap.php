<?php
session_start();
define("IMG_DIR", "./imgs/");
require_once("php/database.php");
$dbh = new DatabaseHelper("localhost", "root", "", "dojo");
?>
