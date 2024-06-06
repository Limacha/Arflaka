<?php

function listeObjectif($pdo)
{
    $sql = 'SELECT * from global.objectif order by objName;';
    return executeSql($sql, $pdo, []);
}

function createObjectif($pdo)
{
    // stock de toute les donne
    $data = array(
        "objCreationTime" => date("Y-m-d H:i:s"),
        "objName" => htmlentities($_POST['name']),
        "objDescription" => htmlentities($_POST['description']),
        "objStatut" => $_POST['statut'],
        "objStartDate" => $_POST['startTime'],
        "objEndDate" => $_POST['endTime'],
        "objHelpOpen" => isset($_POST['helpOpen']),
        "objHelpLimit" => $_POST['helpLimit'],
        "objCreator" => $_SESSION['ID'],
        "objAnonyme" => isset($_POST['anonyme'])
    );

    $sql = 'SELECT EXISTS( SELECT * FROM global.objectif WHERE global.objectif.objName = :objName ) as verif;';
    $result = executeSql($sql, $pdo, ["objName" => $data["objName"]]);

    // verification si il existe deja
    if ($result[0]->verif == 0) {
        insertInto($data, 'objectif', $pdo);

        $sql = 'SELECT objId from global.objectif where global.objectif.objName = :objName ;';
        $result = executeSql($sql, $pdo, ["objName" => $data["objName"]]);
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
        // refresh de la page vers obj si sa a marcher
        header("Location: objectif");
        exit();
    }
    $_POST['message'] = "deja cree desoler et courage pour trouver un nom.";
}

function deleteObjectif($pdo)
{
    $sql = "DELETE FROM global.objectif WHERE objId = :objId;";
    executeSql($sql, $pdo, ["objId" => $_POST["objId"]]);
}

function modifObjectif($pdo)
{
    // stock de toute les donne
    $data = array(
        "objDescription" => htmlentities($_POST['description']),
        "objHelpOpen" => isset($_POST['helpOpen']),
        "objHelpLimit" => $_POST['helpLimit'],
        "objAnonyme" => isset($_POST['anonyme'])
    );

    var_dump($data);

    $sql = 'SELECT EXISTS( SELECT * FROM global.objectif WHERE global.objectif.objId = :objId && global.objectif.objCreator = :objCreator ) as verif;';
    $result = executeSql($sql, $pdo, ["objId" => $_GET['more'], "objCreator" => $_SESSION['ID']]);

    // verification si il existe deja
    if ($result[0]->verif == 1) {

        $sql = 'update objectif set ';
        $i = 0;
        $arSql = array(
            "objId" => $_GET['more']
        );
        // creation de la commande sql
        foreach ($data as $key => $value) {
            $i++;
            if (!empty($value) or $value === false) {
                $sql = $sql . $key . " = :v" . $i . " , ";
                if ($value === true) {
                    $arSql["v" . $i . ""] = "1";
                } else if ($value === false) {
                    $arSql["v" . $i . ""] = "0";
                } else {
                    $arSql["v" . $i . ""] = $value;
                }
            }
        }

        unset($key);
        unset($value);
        unset($i);

        $sql = substr($sql, 0, -2);

        $sql .= "WHERE global.objectif.objId = :objId;";

        var_dump($sql);
        var_dump($arSql);
        executeSql($sql, $pdo, $arSql);

        //creation de l'image
        if (isset($_FILES['illustration']) && !empty($_FILES['illustration']['name'])) {
            debug_to_console($_FILES['illustration']['name']);
            $maxSize = 2097152;
            $goodExtension = array('jpg', 'jpeg', 'png', 'webp');
            if ($_FILES['illustration']['size'] <= $maxSize) {
                $parts = preg_split('/\./', $_FILES['illustration']['name']);
                $extension = strtolower(end($parts));
                if (in_array($extension, $goodExtension)) {
                    $path = "./Assets/Images/objectif/" . $_GET['more'] . '.png';
                    $move = move_uploaded_file($_FILES['illustration']['tmp_name'], $path);
                }
            }
        }
        // refresh de la page vers obj si sa a marcher
        header("Location: objectif");
        exit();
    }
    $_POST['message'] = "deja cree desoler et courage pour trouver un nom.";
}
