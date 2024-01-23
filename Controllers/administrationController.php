<?php
$template = $phpDirectory;
$css = $cssDirectory;
if ($uri === "/arflaka") {
    require_once("./Models/arflakaModels.php");
    $title = $title . "arflaka";
    if ($_SESSION['ID'] == 11) {
        $users = listeUser();
    }
    $css .= 'arflaka.css';
    $template .= "/Administration/arflaka.php";
    //    $script = $jsDirectory . "accueil.js";
    require_once("./Views/base.php");
}
