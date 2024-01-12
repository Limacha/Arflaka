<?php
$template = $phpUserDirectory;
if ($uri === "/Arflaka/site_php/index.php" || $uri === "/Arflaka/site_php/") {
    $title = $title . "Accueil";
    $template .= "accueil.php";
    //    $script = $jsDirectory . "accueil.js";
    require_once("./Views/base.php");
} else {
    //erreur 404
    $title = $title . "404";
    $template .= "connection.php";
    require_once("./Views/base.php");
}
