<?php
function editProfil($pdo)
{
    $data = array(
        "userID" => $_SESSION['ID'],
        "userEmail" => $_POST['email'],
        "userPhone" => $_POST['phone'],
        "userColor" => $_POST['color'],
        "userDescription" => htmlentities($_POST['description'])
    );
    $sql = 'SELECT count(*) as "verif" from users where global.users.userId = :userID ;';
    $result = executeSql($sql, $pdo, $data);
    if ($result[0]->verif <= 1 && !empty($_SESSION['ID'])) {

        $set = "";
        $i = 0;
        foreach ($data as $key => $value) {
            $i++;
            if (!empty($value)) {
                $set .= $key . ' = "' . $value . '", ';
            }
        }

        $set = substr($set, 0, -2);

        $sql = 'UPDATE users set :set WHERE global.users.userID = :ID;';

        executeSql($sql, $pdo, ["set" => $set, "ID" => $_SESSION['ID']]);

        //creation/modif de l'image avatar
        if (isset($_FILES['avatar']) && !empty($_FILES['avatar']['name'])) {
            debug_to_console($_FILES['avatar']['name']);
            $maxSize = 2097152;
            $goodExtension = array('jpg', 'jpeg', 'png', 'webp');
            if ($_FILES['avatar']['size'] <= $maxSize) {
                $parts = preg_split('/\./', $_FILES['avatar']['name']);
                $extension = strtolower(end($parts));
                if (in_array($extension, $goodExtension)) {
                    $path = "./Assets/Images/Avatars/" . $_SESSION['ID'] . '.png';
                    $move = move_uploaded_file($_FILES['avatar']['tmp_name'], $path);
                }
            };
        }

        modifSession($_SESSION['ID'], $pdo);
        header("Location: /profil");
        exit();
    }
    $_POST['message'] = "qui es-tu nous ne te connesons pas?";
}

function deleteProfil($pdo)
{
    $sql = 'UPDATE global.users set userLife = 0 where userID = :ID;';
    $result = executeSql($sql, $pdo, ["ID" => $_SESSION["ID"]]);
    session_destroy();
    header("Location: /profil");
}

function inscritpion($pdo)
{
    debug_to_console($_POST, 'post');
    // stock de toute les donne
    $data = array(
        "userCreationTime" => date("Y-m-d H:i:s"),
        "userName" => htmlentities($_POST['name']),
        "userSurname" => htmlentities($_POST['surname']),
        "userBirthday" => $_POST['date'],
        "userEmail" => $_POST['email'],
        "userPhone" => $_POST['phone'],
        "userColor" => $_POST['color'],
        "userPseudo" => htmlentities($_POST['pseudo']),
        "userPassword" => htmlentities($_POST['password']),
        "userDescription" => htmlentities($_POST['description']),
        "userRole" => "chomeur",
        "userFla" => 100,
        "userArka" => 0
    );

    $sql = 'SELECT EXISTS( SELECT * FROM global.users WHERE global.users.userPseudo = :userPseudo) as verif;';
    $result = executeSql($sql, $pdo, ["userPseudo" => $data["userPseudo"]]);

    // verification si il existe deja et il n'est pas deja connecter
    if ($result[0]->verif == 0 && empty($_SESSION['userID'])) {
        insertInto($data, 'users', $pdo);

        $sql = 'SELECT userID from global.users where global.users.userPseudo = :userPseudo AND global.users.userPassword = :userPassword ;';
        $result = executeSql($sql, $pdo, ["userPseudo" => $data["userPseudo"], "userPassword" => $data["userPassword"]]);

        //creation de l'image avatar
        if (isset($_FILES['avatar']) && !empty($_FILES['avatar']['name'])) {
            debug_to_console($_FILES['avatar']['name']);
            $maxSize = 2097152;
            $goodExtension = array('jpg', 'jpeg', 'png', 'webp');
            if ($_FILES['avatar']['size'] <= $maxSize) {
                $parts = preg_split('/\./', $_FILES['avatar']['name']);
                $extension = strtolower(end($parts));
                if (in_array($extension, $goodExtension)) {
                    $path = "./Assets/Images/Avatars/" . $result[0]->userID . '.png';
                    $move = move_uploaded_file($_FILES['avatar']['tmp_name'], $path);
                }
            };
        }
        modifSession($result[0]->userID, $pdo);
        $_POST['message'] = "Bienvenu " . $data['userPseudo'] . "nous vous souhaiton le bienvenu.";
        // refresh de la page vers profil si sa a marcher
        header("Location: /profil");
        exit();
    } else {
        $_POST['message'] = "Le pseudo que vous voullez utiliser a déjà été pris.";
    }
}

function connection($pdo)
{
    $sql = 'SELECT userID from global.users where global.users.userPseudo = :pseudo AND global.users.userPassword = :password ;';
    $result = executeSql($sql, $pdo, ["pseudo" => $_POST['pseudo'], "password" => $_POST['password']]);

    if (isset($result[0]->userID)) {
        $sql = 'SELECT userLife from global.users where userID=:ID;';
        $verif = executeSql($sql, $pdo, ["ID" => $result[0]->userID]);
        if (isset($verif[0]->userLife)) {
            if ($verif[0]->userLife == 1) {
                modifSession($result[0]->userID, $pdo);
                header("Location: /profil");
                exit();
            }
        }
        $_POST['message'] = "cette utilisateur nous a quitte pais a son ame.";
    }
    $_POST['message'] = "pseudo ou password incorrect";
}
