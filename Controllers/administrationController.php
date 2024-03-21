<?php
$template = $phpDirectory;
$css = $cssDirectory;
if ($_SESSION["ID"] == 11) {


    if ($uri === "/administration/arflaka") {
        $title = $title . "arflaka";
        $users = listeUser();
        $objectifs = listeObjectif();

        $css .= 'arflaka.css';
        $template .= "/Administration/arflaka.php";
        //    $script = $jsDirectory . "accueil.js";
        require_once("./Views/base.php");
    }
} else if (str_starts_with($uri, "/administration/")) {
    //erreur 403
    $title = $title . "403";
    $css .= '403.css';
    $template .= "./error/403.php";
    require_once("./Views/base.php");
}
