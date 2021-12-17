<?php
session_start();
define("IMG_DIR", "./imgs/");
require_once("../php/database.php");
require_once("utils/functions.php");
$dbh = new DatabaseHelper("localhost", "root", "", "dojo", 3306);
?>
