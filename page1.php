<?php
session_start();
if (!$_SESSION["auth"]){
    header("Location: index.php");
    die();
}
require_once "bootstrap.php";
$res=$user->getImgUser($_SESSION["id_user"]);
require_once "page1.view.php";
?>
