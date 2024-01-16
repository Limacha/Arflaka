<?php

$template = $phpUserDirectory;
if (isset($_POST['logoutButton']) && !empty($_SESSION['ID'])) {
    $_SESSION['ID'] = null;
    header("Refresh:0");
    exit();
}
if ($uri === "/Arflaka/site_php/profil") {
    $title = $title . "profil";
    if (!empty($_SESSION['ID'])) {
        change_css('--loginDisplay', 'block');
    } else {
        change_css('--logoutDisplay', 'block');
    }

    $template .= "profil.php";
    require_once("./Views/base.php");
} elseif ($uri === "/Arflaka/site_php/inscription") {
    require_once './Models/inscriptionModels.php';
    $title = $title . "inscription";
    $template .= "inscription.php";
    require_once("./Views/base.php");
} elseif ($uri === "/Arflaka/site_php/connection") {
    require_once './Models/connectionModels.php';
    $title = $title . "connection";
    $template .= "connection.php";
    require_once("./Views/base.php");
} elseif ($uri === "/Arflaka/site_php/editProfil") {
    require_once './Models/editProfilModels.php';
    $title = $title . "profil editing";
    $template .= "editProfil.php";
    require_once("./Views/base.php");
}
