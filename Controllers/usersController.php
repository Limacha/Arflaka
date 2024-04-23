<?php
$template = $phpUserDirectory;
$css = $cssDirectory;
if (str_starts_with($uri, "/users")) {
    $uri = substr($uri, 6);
    if (str_starts_with($uri, "/info")) {
        $title = $title . "User" . $_GET["more"];

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

        $css .= "usersInfo.css";
        $template .= "usersInfo.php";
        require_once("./Views/base.php");
    }
}
