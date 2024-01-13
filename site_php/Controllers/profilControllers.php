<?php
if (isset($_POST['logoutButton']) && !empty($_SESSION['pseudo'])) {
    $_SESSION['pseudo'] = null;
    $_SESSION['password'] = null;
    header("Refresh:0");
}
$template = $phpUserDirectory;
if ($uri === "/Arflaka/site_php/profil") {
    if (!empty($_SESSION['pseudo'])) {
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
