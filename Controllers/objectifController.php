<?php
$template = $phpDirectory;
$css = $cssDirectory;
if (str_starts_with($uri, "/objectif")) {
    $uri = substr($uri, 9);
    $script = $jsDirectory . "objectif.js";
    if ($uri === "/create") {
        $title = $title . "objectifCreate";

        if (isset($_POST['objCreateEnd'])) {
            createObjectif($pdo);
        }

        $startTime = new DateTime();
        $startTime->add(new DateInterval('P1W'));

        $endTime = clone $startTime;
        $endTime->add(new DateInterval('P1D'));


        $css .= 'objectifCreate.css';
        $template .= "objectif/objectifCreate.php";
        //    $script = $jsDirectory . "accueil.js";
        require_once("./Views/base.php");
    } else if (str_starts_with($uri, "/infos")) {
        $title = $title . "obj:" . $_GET["more"];

        $result = recupInfo('objId = "' . $_GET["more"] . '"', 'objectif', $pdo);
        if (isset($result)) {
            $data = array(
                'ID' => $result[0]->objId,
                'name' => $result[0]->objName,
                'description' => $result[0]->objDescription,
                'statut' => $result[0]->objStatut,
                'startDate' => $result[0]->objStartDate,
                'endDate' => $result[0]->objEndDate,
                'helpOpen' => $result[0]->objHelpOpen,
                'helpLimit' => $result[0]->objHelpLimit,
                'anonyme' => $result[0]->objAnonyme,
                'creator' => $result[0]->objCreator
            );
            if (!empty($data['ID'])) {
                if (file_exists('./Assets/Images/objectif/' . $data['ID'] . '.png')) {
                    $objImg = '/Assets/Images/objectif/' . $data['ID'] . '.png';
                } else {
                    $objImg = '/Assets/Images/profil.png';
                }
            }
        }

        $css .= "objectifInfo.css";
        $template .= "objectif/objectifInfo.php";
        require_once("./Views/base.php");
    } else if (str_starts_with($uri, "/edit")) {
        $title = $title . "edit";

        $result = recupInfo('objId = "' . $_GET["more"] . '"', 'objectif', $pdo);
        if (isset($result)) {
            $data = array(
                'ID' => $result[0]->objId,
                'name' => $result[0]->objName,
                'description' => $result[0]->objDescription,
                'statut' => $result[0]->objStatut,
                'startDate' => $result[0]->objStartDate,
                'endDate' => $result[0]->objEndDate,
                'helpOpen' => $result[0]->objHelpOpen,
                'helpLimit' => $result[0]->objHelpLimit,
                'anonyme' => $result[0]->objAnonyme,
                'creator' => $result[0]->objCreator
            );

            // $startTime = new DateTime();
            // $startTime->add(new DateInterval('P1D'));

            // $endTime = clone $startTime;
            // $endTime->add(new DateInterval('P1D'));

            if (!empty($data['ID'])) {
                if (file_exists('./Assets/Images/objectif/' . $data['ID'] . '.png')) {
                    $objImg = '/Assets/Images/objectif/' . $data['ID'] . '.png';
                } else {
                    $objImg = '/Assets/Images/profil.png';
                }
            }
        }
        if (isset($_POST['objModifEnd'])) {
            modifObjectif($pdo);
        }

        $css .= "objectifEdit.css";
        $template .= "objectif/objectifEdit.php";
        require_once("./Views/base.php");
    } else {
        $title = $title . "objectif";
        $objectifs = listeObjectif($pdo);
        $css .= 'objectif.css';
        $template .= "objectif/objectif.php";
        //    $script = $jsDirectory . "accueil.js";
        require_once("./Views/base.php");
    }
}
