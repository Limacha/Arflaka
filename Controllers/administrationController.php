<?php
$template = $phpDirectory;
$css = $cssDirectory;
if (str_starts_with($uri, "/administration")) {
    $uri = substr($uri, 15);
    if ($_SESSION["ID"] == 11) {
        if ($uri === "/arflaka") {
            $title = $title . "arflaka";
            $users = listeUser($pdo);
            $objectifs = listeObjectif($pdo);
            $roles = recupInfo('', 'roles', $pdo);

            $css .= 'arflaka.css';
            $template .= "Administration/arflaka.php";
            //    $script = $jsDirectory . "accueil.js";
            require_once("./Views/base.php");
        } else if (str_starts_with($uri, "/users/info")) {
            $title = $title . "admUserInfo" . $_GET["more"];

            $result = recupInfo('userID = "' . $_GET["more"] . '"', 'users', $pdo);
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
            $roles = recupInfo('', 'roles', $pdo);
            $css .= 'admUserInfo.css';
            $template .= "Administration/admUserInfo.php";
            $script = $jsDirectory . "admUserInfo.js";
            require_once("./Views/base.php");
        } else if (str_starts_with($uri, "/roles/info")) {
            $title = $title . "admRoleInfo" . $_GET["more"];

            $result = recupInfo('roleId = "' . $_GET["more"] . '"', 'roles', $pdo);
            if (isset($result)) {
                $data = array(
                    'ID' => $result[0]->roleId,
                    'name' => $result[0]->roleName,
                    'description' => $result[0]->roleDescription
                );
            }

            $result = recupInfo('roleId="' . $_GET["more"] . '" || roleId="10"', 'rolesperm', $pdo);
            $perms = recupInfo('', 'perms', $pdo);

            //value a set
            $permValue = array();

            //perm perso posseder
            $setPerm = array();

            //savoir si je dois prendre default ou non
            foreach ($result as $value) {
                if ($value->roleId == $_GET['more']) {
                    array_push($setPerm, $value->permId);
                }
            }
            //select le bon
            foreach ($result as $value) {
                if (in_array($value->permId, $setPerm) && $value->roleId == $_GET['more']) {
                    $permValue[$value->permId] = $value->havePerm;
                } else if ($value->roleId == 10 && !in_array($value->permId, $setPerm)) {
                    $permValue[$value->permId] = $value->havePerm;
                }
            }

            $css .= 'admRoleInfo.css';
            $template .= "Administration/admRoleInfo.php";
            $script = $jsDirectory . "admRoleInfo.js";
            require_once("./Views/base.php");
        }
    } else {
        header("Location: /403");
    }
}
