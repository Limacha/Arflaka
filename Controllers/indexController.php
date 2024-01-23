<?php
$template = $phpDirectory;
$css = $cssDirectory;
if ($uri === "/index.php" || $uri === "/") {
    $title = $title . "Accueil";
    $css .= 'accueil.css';
    $template .= "accueil.php";
    //    $script = $jsDirectory . "accueil.js";
    require_once("./Views/base.php");
} elseif ($uri === "/test") {
    $title = $title . "test";
    $css = './teste/test.css';
    $template = "./teste/test.php";
    require_once("./Views/base.php");
} else {
    //erreur 404
    $title = $title . "404";
    $css .= '404.css';
    $template .= "404.php";
    require_once("./Views/base.php");
}
