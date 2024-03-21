<?php
$template = $phpDirectory;
$css = $cssDirectory;
if ($uri === "/objectif") {
    $title = $title . "objectif";
    $objectifs = listeObjectif();
    $css .= 'objectif.css';
    $template .= "objectif/objectif.php";
    //    $script = $jsDirectory . "accueil.js";
    require_once("./Views/base.php");
} else if ($uri === "/objectifCreate") {
    $title = $title . "objectifCreate";

    if (isset($_POST['objCreateEnd'])) {
        createObjectif();
    }

    $startTime = new DateTime();
    $startTime->add(new DateInterval('P1W'));

    $endTime = clone $startTime;
    $endTime->add(new DateInterval('P1D'));


    $css .= 'objectifCreate.css';
    $template .= "objectif/objectifCreate.php";
    //    $script = $jsDirectory . "accueil.js";
    require_once("./Views/base.php");
}
