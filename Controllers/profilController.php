<?php
$template = $phpUserDirectory;
$css = $cssDirectory;
if (isset($_POST['logoutButton']) && !empty($_SESSION['ID'])) {
    $_SESSION['ID'] = null;
    header("Refresh:0");
    exit();
}
if ($uri === "/profil") {
    $title = $title . "profil";
    $css .= 'profil.css';

    if (!empty($_SESSION['ID'])) {
        change_css('--loginDisplay', 'block');
    } else {
        change_css('--logoutDisplay', 'block');
    }

    $template .= "profil.php";
    require_once("./Views/base.php");
} elseif ($uri === "/inscription") {
    require_once './Models/inscriptionModels.php';
    $title = $title . "inscription";

    if (isset($_POST['inscriEnd'])) {
        inscritpion();
    }

    $css .= 'inscription.css';
    $template .= "inscription.php";
    require_once("./Views/base.php");
} elseif ($uri === "/connection") {
    require_once './Models/connectionModels.php';
    $title = $title . "connection";

    if (isset($_POST['connectEnd']) && empty($_SESSION['ID'])) {
        connection();
    }

    $css .= 'connection.css';
    $template .= "connection.php";
    require_once("./Views/base.php");
} elseif ($uri === "/editProfil") {
    require_once './Models/editProfilModels.php';
    $title = $title . "profil editing";

    if (isset($_POST['editEnd'])) {
        editProfil();
    }

    $template .= "editProfil.php";
    require_once("./Views/base.php");
}
