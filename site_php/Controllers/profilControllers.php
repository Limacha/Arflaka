<?php
$title = "Arflaka: ";

$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/Arflaka/site_php/profil") {
    if ($connected) {
        $title = $title . "profil";
        $template = $phpDirectory . "connection.php";
        require_once("./Views/base.php");
    } else {
        $title = $title . "profil";
        $template = $phpDirectory . "profil.php";
        require_once("./Views/base.php");
    }
} elseif ($uri === "/Arflaka/site_php/inscription") {
    $title = $title . "inscription";
    $template = $phpDirectory . "inscription.php";
    require_once("./Views/base.php");
} elseif ($uri === "/Arflaka/site_php/connection") {
    $title = $title . "connection";
    $template = $phpDirectory . "connection.php";
    require_once("./Views/base.php");
}
