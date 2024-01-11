<?php
$uri = $_SERVER['REQUEST_URI'];

$title = "Arflaka: ";

$uri = $_SERVER['REQUEST_URI'];
// echo ($uri);
if ($uri === "/Arflaka/site_php/index.php" || $uri === "/Arflaka/site_php/") {
    $title = $title . "Accueil";
    $template = $phpDirectory . "accueil.php";
    //    $script = $jsDirectory . "accueil.js";
    require_once("./Views/base.php");
}
