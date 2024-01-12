<?php
session_start();

$title = "Arflaka: ";
$uri = $_SERVER['REQUEST_URI'];

$arflakaImg = "./Assets/Images/Arflaka.png";
$flaImg = "./Assets/Images/fla.png";
$profilImg = "./Assets/Images/profil.png";

$header = "./Views/Components/header.php";
$footer = "./Views/Components/footer.php";

$phpUserDirectory = "./Views/Users/";
$accueil = "./index.php";

$cssDirectory = "./Assets/Css/";

$jsDirectory = "./Assets/Scripts/";

if (!isset($_SESSION['connected'])) {
    $_SESSION['connected'] = false;
    $_SESSION['pseudo'] = null;
    $_SESSION['password'] = null;
}
