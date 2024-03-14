<?php
$template = $phpDirectory;
$css = $cssDirectory;
if ($uri === "/objectif" || $uri === "/") {
    $title = $title . "objectif";
    $css .= 'objectif.css';
    $template .= "objectif/objectif.php";
    //    $script = $jsDirectory . "accueil.js";
    require_once("./Views/base.php");
}
