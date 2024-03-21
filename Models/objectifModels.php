<?php

function listeObjectif()
{
    $pdo = connectionPDO('localhost', 'root', 'root', 'global');

    $sql = 'SELECT * from global.objectif order by objName;';
    return executeSql($sql, $pdo);
}

function createObjectif()
{
    $pdo = connectionPDO('localhost', 'root', 'root', 'global');

    // stock de toute les donne
    $data = array(
        "objCreationTime" => date("Y-m-d H:i:s"),
        "objName" => $_POST['name'],
        "objDescription" => $_POST['description'],
        "objStatut" => $_POST['statut'],
        "objStartDate" => $_POST['startTime'],
        "objEndDate" => $_POST['endTime'],
        "objHelpOpen" => isset($_POST['helpOpen']),
        "objHelpLimit" => $_POST['helpLimit'],
        "objCreator" => $_SESSION['ID']
    );

    $sql = 'SELECT EXISTS( SELECT * FROM global.objectif WHERE global.objectif.objName = "' . $data['objName'] . '" ) as verif;';
    $result = executeSql($sql, $pdo);

    // verification si il existe deja
    if ($result[0]->verif == 0) {
        insertInto($data, 'objectif');

        $sql = 'SELECT objId from global.objectif where global.objectif.objName = "' . $data['objName'] . '" ;';
        $result = executeSql($sql, $pdo);
        debug_to_console($result);

        //creation de l'image avatar
        if (isset($_FILES['illustration']) && !empty($_FILES['illustration']['name'])) {
            debug_to_console($_FILES['illustration']['name']);
            $maxSize = 2097152;
            $goodExtension = array('jpg', 'jpeg', 'png', 'webp');
            if ($_FILES['illustration']['size'] <= $maxSize) {
                $parts = preg_split('/\./', $_FILES['illustration']['name']);
                $extension = strtolower(end($parts));
                if (in_array($extension, $goodExtension)) {
                    $path = "./Assets/Images/objectif/" . $result[0]->objId . '.png';
                    $move = move_uploaded_file($_FILES['illustration']['tmp_name'], $path);
                }
            };
        }
        // refresh de la page vers profil si sa a marcher
        header("Location: objectif");
        exit();
    }
}
