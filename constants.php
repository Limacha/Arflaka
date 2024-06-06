<?php
session_start();

debug_to_console($_SESSION, 'session aray');
debug_to_console(session_id(), 'session id');
debug_to_console($_POST, 'post');
debug_to_console($_GET, 'get');

$pdo = connectionPDO('localhost', 'root', 'root', 'global');

$title = "Arflaka: ";
$uri = $_SERVER['REQUEST_URI'];

$arflakaImg = "/Assets/Images/Arflaka.png";
$flaImg = "/Assets/Images/fla.png";
$profilImg = "/Assets/Images/profil.png";
$discordLogoImg = "/Assets/Images/discordLogo2.png";

$header = "./Views/Components/header.php";
$footer = "./Views/Components/footer.php";

$phpDirectory = "./Views/";
$phpUserDirectory = "./Views/Users/";
$phpAdminDirectory = "./Views/Users/";

$accueil = "/accueil";
$hierachie = "/hierachie";
$objectif = "/objectif";

$cssDirectory = "/Assets/Css/";

$jsDirectory = "/Assets/Scripts/";

$sessionElement = array(
    'ID' => null,
    'email' => null,
    'phone' => null,
    'pseudo' => null,
    'description' => null,
    'color' => "rgb(0,0,0)",
    'role' => "visiteur",
    'fla' => 0,
    'arka' => 0,
    'permission' => []
);

foreach ($sessionElement as $key => $element) {
    if (!isset($_SESSION[$key])) {
        $_SESSION[$key] = $element;
    }
}

if (!empty($_SESSION['ID'])) {
    if (file_exists('./Assets/Images/Avatars/' . $_SESSION['ID'] . '.png')) {
        $profilImg = '/Assets/Images/Avatars/' . $_SESSION['ID'] . '.png';
    }
    //SELECT * FROM global.rolesperm where `roleId` = (select `roleId` from global.roles WHERE `roleName` = "roi");
    $result = recupInfo("roleId = (select roleId from global.roles WHERE roleName = '" . $_SESSION['role'] . "')", "rolesperm", $pdo);
    if (empty($_SESSION['permission'])) {
        foreach ($result as $key) {
            if ($key->havePerm === 1) {
                array_push($_SESSION['permission'], $key->permId);
            }
        }
    }
}
