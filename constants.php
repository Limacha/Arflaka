<?php
session_start();

debug_to_console($_SESSION, 'session aray');
debug_to_console(session_id(), 'session id');

$title = "Arflaka: ";
$uri = $_SERVER['REQUEST_URI'];

$arflakaImg = "./Assets/Images/Arflaka.png";
$flaImg = "./Assets/Images/fla.png";
$profilImg = "./Assets/Images/profil.png";

$header = "./Views/Components/header.php";
$footer = "./Views/Components/footer.php";

$phpDirectory = "./Views/";
$phpUserDirectory = "./Views/Users/";
$phpAdminDirectory = "./Views/Users/";
$accueil = "./index.php";

$cssDirectory = "./Assets/Css/";

$jsDirectory = "./Assets/Scripts/";

if (!isset($_SESSION['ID'])) {
    $_SESSION['ID'] = null;
    $_SESSION['email'] = null;
    $_SESSION['phone'] = null;
    $_SESSION['pseudo'] = null;
    $_SESSION['description'] = null;
    $_SESSION['color'] = "rgb(0, 0, 0)";
    $_SESSION['role'] = "visiteur";
    $_SESSION['fla'] = 0;
    $_SESSION['arka'] = 0;
}

if (!empty($_SESSION['ID'])) {
    if (file_exists('./Assets/Images/Avatars/' . $_SESSION['ID'] . '.png')) {
        $profilImg = './Assets/Images/Avatars/' . $_SESSION['ID'] . '.png';
    }
}
