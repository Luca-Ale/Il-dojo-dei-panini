<?php
function isActive($pagename){
    if(basename($_SERVER['PHP_SELF'])==$pagename){
        echo " class='active' ";
    }
}

function getIdFromName($name){
    return preg_replace("/[^a-z]/", '', strtolower($name));
}

function isUserLoggedIn(){
    return !empty($_SESSION['UserID']);
}

function isAdminLoggedIn(){
    return !empty($_SESSION['AdminID']);
}

function registerLoggedUser($user){
    $_SESSION["UserID"] = $user["UserID"];
    $_SESSION["username"] = $user["username"];
    $_SESSION["email"] = $user["email"];
}
?>