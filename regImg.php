<?php
session_start();
require_once "bootstrap.php";
$loginR=$_POST["login"];
$nicknameR=$_POST["nickname"];
$passwordR=$_POST["password"];
$login = $_POST["login"]??"";
$imageReg = $_POST["imageReg"]??"";
$_SESSION["alert1"]="";
    if ($loginR == null || $nicknameR == null || $passwordR == null) {
        $_SESSION["alert1"] = "Заполните поля правильно";
    } else {
        if (isset($_POST["btnOk"])) {
            $user->regUser($_POST);
            $_POST['id_user'] = $_SESSION['id_user'];

$fileName = $_FILES["imageReg"]["name"] ?? "";
$fileSize = $_FILES["imageReg"]["size"] ?? "";
$fileTmp = $_FILES["imageReg"]["tmp_name"] ?? "";
$fileType = $_FILES["imageReg"]["type"] ?? "";
$fileError = $_FILES["imageReg"]["error"] ?? "";

$arrayI = explode('.', $fileName);
$extI = strtolower(end($arrayI));
$nameI = $arrayI[0];
$nameI .= rand(1, 100000);
$extensionI = ["jpg", "png", "jpeg", "webp", "gif"];
$nameIMG = $nameI . "." . $extI;
if (in_array($extI, $extensionI)) {
    if ($fileSize <= 5000000) {
        if ($fileError == 0) {
            $newnameI = $nameI . "." . $extI;
            if (move_uploaded_file($fileTmp, "img/{$newnameI}")) {
                $user->addImgUser($nameIMG);
            }
        }
    }}}}
$_POST["imageReg"]=$nameIMG;
header("Location:index.php");
?>