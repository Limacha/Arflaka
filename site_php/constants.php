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

$role = 'visiteur';
$fla = 0;
$arka = 0;

if (!isset($_SESSION['ID'])) {
    $_SESSION['ID'] = null;
}

if (!empty($_SESSION['ID'])) {
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'global';

    $pdo = connectionPDO($servername, $username, $password, $dbname);

    $sql = 'SELECT userRole, userFla, userArka from global.users where global.users.userID = "' . $_SESSION['ID'] . '" ;';
    $result = executeSql($sql, $pdo);

    $role = $result[0]['userRole'];
    $fla = $result[0]['userFla'];
    $arka = $result[0]['userArka'];
    if (file_exists('./Users/Avatars/' . $_SESSION['ID'] . '.png')) {
        $profilImg = './Users/Avatars/' . $_SESSION['ID'] . '.png';
    }
}
