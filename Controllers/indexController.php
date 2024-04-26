<?php
$template = $phpDirectory;
$css = $cssDirectory;
if ($uri === "/accueil" || $uri === "/") {
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
} elseif (str_starts_with($uri, "/verifPassword")) {
    $title = $title . "verification du password";

    if (isset($_POST['verifPasswordEnd'])) {
        verifPasword($_POST['verifPasswordEnd']);
    }

    $css .= 'verifPassword.css';
    $template .= "./global/verifPassword.php";
    require_once("./Views/base.php");
} else if ($uri == "/403") {
    //erreur 403
    $title = $title . "403";
    $css .= '403.css';
    $template .= "./error/403.php";
    require_once("./Views/base.php");
} else {
    //erreur 404
    $title = $title . "404";
    $css .= '404.css';
    $template .= "./error/404.php";
    require_once("./Views/base.php");
}
