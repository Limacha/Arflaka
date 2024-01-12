<?php
if (isset($_POST['logoutButton']) && $_SESSION['connected'] == 1) {
    $_SESSION['connected'] = false;
    $_SESSION['pseudo'] = null;
    $_SESSION['password'] = null;
    header("Refresh:0");
}
$template = $phpUserDirectory;
if ($uri === "/Arflaka/site_php/profil") {
    if ($_SESSION['connected']) {
        $title = $title . "profil";
        $template .= "profil.php";

        require_once("./Views/base.php");
    } else {
        $title = $title . "profil";
        $template .= "profil.php";
        require_once("./Views/base.php");
    }
} elseif ($uri === "/Arflaka/site_php/inscription") {
    $title = $title . "inscription";
    $template .= "inscription.php";
    require_once("./Views/base.php");
} elseif ($uri === "/Arflaka/site_php/connection") {
    $title = $title . "connection";
    $template .= "connection.php";
    require_once("./Views/base.php");
}
