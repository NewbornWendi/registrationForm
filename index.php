<?php
session_start();
require_once "bootstrap.php";
if(isset($_POST["btnOk"])) {
    $user->loginUser($_POST["login"], $_POST["password"]);
    if ($_SESSION["auth"]) {

        $_SESSION["alert"] = "";
        header("Location: page1.php");
    } else {
        $_SESSION["alert"] = "Введен неверный пароль или емаил.";
    }
}
require_once "index.view.php";
