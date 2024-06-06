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
            $roles = recupInfo("", 'roles', $pdo);

            $css .= 'arflaka.css';
            $template .= "Administration/arflaka.php";
            $script = $jsDirectory . "arflaka.js";
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
                    } else {
                        $userImg = '/Assets/Images/profil.png';
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
        } // else if (str_starts_with($uri, "/objectif/info")) {
        //     $title = $title . "obj:" . $_GET["more"];

        //     $result = recupInfo('objId = "' . $_GET["more"] . '"', 'objectif', $pdo);
        //     if (isset($result)) {
        //         $data = array(
        //             'ID' => $result[0]->objId,
        //             'name' => $result[0]->objName,
        //             'description' => $result[0]->objDescription,
        //             'statut' => $result[0]->objStatut,
        //             'startDate' => $result[0]->objStartDate,
        //             'endDate' => $result[0]->objEndDate,
        //             'helpOpen' => $result[0]->objHelpOpen,
        //             'helpLimit' => $result[0]->objHelpLimit,
        //             'anonyme' => $result[0]->objAnonyme,
        //             'creator' => $result[0]->objCreator
        //         );
        //         if (!empty($data['ID'])) {
        //             if (file_exists('./Assets/Images/objectif/' . $data['ID'] . '.png')) {
        //                 $objImg = '/Assets/Images/objectif/' . $data['ID'] . '.png';
        //             } else {
        //                 $objImg = '/Assets/Images/profil.png';
        //             }
        //         }
        //     }

        //     $css .= "objectifInfo.css";
        //     $template .= "objectif/objectifInfo.php";
        //     require_once("./Views/base.php");
        // }
    } else {
        header("Location: /403");
    }
}
