<?php
$template = $phpDirectory;
$css = $cssDirectory;
if ($uri === "/hierachie") {
    $title = $title . "hierachie";
    $css .= 'hierachie.css';
    $template .= "/information/hierachie.php";
    //    $script = $jsDirectory . "accueil.js";
    require_once("./Views/base.php");
}
