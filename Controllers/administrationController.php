<?php
$template = $phpDirectory;
$css = $cssDirectory;
if (str_starts_with($uri, "/administration")) {
    $uri = substr($uri, 15);
    if ($_SESSION["ID"] == 11) {
        if ($uri === "/arflaka") {
            $title = $title . "arflaka";
            $users = listeUser();
            $objectifs = listeObjectif();

            $css .= 'arflaka.css';
            $template .= "Administration/arflaka.php";
            //    $script = $jsDirectory . "accueil.js";
            require_once("./Views/base.php");
        } else if (str_starts_with($uri, "/users/info")) {
            $title = $title . "admUserInfo" . $_GET["more"];

            $result = recupInfo('userID = "' . $_GET["more"] . '"', 'users');
            if (isset($result)) {
                $data = array(
                    'ID' => $result[0]->userID,
                    'pseudo' => $result[0]->userPseudo,
                    'description' => $result[0]->userDescription,
                    'color' => $result[0]->userColor,
                    'role' =>  $result[0]->userRole,
                    'fla' =>  $result[0]->userFla,
                    'arka' =>  $result[0]->userArka
                );
                if (!empty($data['ID'])) {
                    if (file_exists('./Assets/Images/Avatars/' . $data['ID'] . '.png')) {
                        $userImg = '/Assets/Images/Avatars/' . $data['ID'] . '.png';
                    }
                }
            }
            $roles = recupListRole();
            $css .= 'admUserInfo.css';
            $template .= "Administration/admUserInfo.php";
            $script = $jsDirectory . "admUserInfo.js";
            require_once("./Views/base.php");
        }
    } else {
        header("Location: /403");
    }
}
