<?php
session_start();
define("IMG_DIR", "../imgs/Food/");
require_once("../php/database.php");
require_once("../php/utils/functions.php");
$dbh = new DatabaseHelper("localhost", "root", "", "dojo", 3306);
?>