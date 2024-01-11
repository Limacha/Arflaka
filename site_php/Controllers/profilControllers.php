<?php
$uri = $_SERVER['REQUEST_URI'];

$title = "Arflaka: ";

$uri = $_SERVER['REQUEST_URI'];
// echo ($uri);
if ($uri === "/Arflaka/site_php/profil") {
    $title = $title . "profil";
    $template = $phpDirectory . "profil.php";
    require_once("./Views/base.php");
} elseif ($uri === "/Arflaka/site_php/inscription") {
    $title = $title . "inscription";
    $template = $phpDirectory . "inscription.php";
    require_once("./Views/base.php");
} elseif ($uri === "/Arflaka/site_php/connection") {
    $title = $title . "connection";
    $template = $phpDirectory . "connection.php";
    require_once("./Views/base.php");
}
