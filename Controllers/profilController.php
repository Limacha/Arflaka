<?php
$template = $phpUserDirectory;
$css = $cssDirectory;
if (str_starts_with($uri, "/profil")) {
    $uri = substr($uri, 7);
    if (isset($_POST['logoutButton']) && !empty($_SESSION['ID'])) {
        foreach ($sessionElement as $key => $element) {
            $_SESSION[$key] = $element;
        }
        header("Refresh:0");
        exit();
    }
    if ($uri === "") {
        $title = $title . "profil";
        $css .= 'profil.css';

        if (!empty($_SESSION['ID'])) {
            change_css('--loginDisplay', 'block');
        } else {
            change_css('--logoutDisplay', 'flex');
        }

        $template .= "profil.php";
        require_once("./Views/base.php");
    } elseif ($uri === "/inscription") {
        $title = $title . "inscription";

        if (isset($_POST['inscriptionEnd'])) {
            inscritpion($pdo);
        }

        $css .= 'inscription.css';
        $template .= "inscription.php";
        require_once("./Views/base.php");
    } elseif ($uri === "/connection") {
        $title = $title . "connection";

        if (isset($_POST['connectEnd']) && empty($_SESSION['ID'])) {
            connection($pdo);
        }

        $css .= 'connection.css';
        $template .= "connection.php";
        require_once("./Views/base.php");
    } elseif ($uri === "/editProfil") {
        $title = $title . "profil editing";

        if (isset($_POST['editEnd'])) {
            editProfil($pdo);
        }
        $css .= "editProfil.css";
        $template .= "editProfil.php";
        require_once("./Views/base.php");
    }
    /* elseif ($uri === "/deleteProfil") {
    $title = $title . "profil deleting";

    if (isset($_POST['deleteEnd'])) {
        verifPasword('deleteProfil');
    }

    $template .= "deleteProfil.php";
    require_once("./Views/base.php");
}
*/
}
