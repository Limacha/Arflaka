<?php
$template = $phpDirectory;
if ($uri === "/Arflaka/site_php/index.php" || $uri === "/Arflaka/site_php/") {
    $title = $title . "Accueil";
    $template .= "accueil.php";
    //    $script = $jsDirectory . "accueil.js";
    require_once("./Views/base.php");
} elseif ($uri === "/Arflaka/site_php/arflaka") {
    require_once("./Models/arflakaModels.php");
    $title = $title . "administration";
    $template .= "/Administration/arflaka.php";
    //    $script = $jsDirectory . "accueil.js";
    require_once("./Views/base.php");
} else {
    //erreur 404
    $title = $title . "404";
    $template .= "404.php";
    require_once("./Views/base.php");
}
