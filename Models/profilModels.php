<?php
function editProfil()
{
    $pdo = connectionPDO('localhost', 'root', 'root', 'global');
    $data = array(
        "userEmail" => $_POST['email'],
        "userPhone" => $_POST['phone'],
        "userColor" => $_POST['color'],
        "userPseudo" => $_POST['pseudo'],
        "userDescription" => $_POST['description']
    );
    $sql = 'SELECT count(*) as "verif" from users where global.users.userPseudo = "' . $_POST['pseudo'] . '" ;';
    $result = executeSql($sql, $pdo);
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

        $sql = 'UPDATE users set ' . $set . ' WHERE global.users.userID = ' . $_SESSION['ID'] . ';';

        executeSql($sql, $pdo);

        if (isset($_FILES['avatar']) && !empty($_FILES['avatar']['name'])) {
            debug_to_console($_FILES['avatar']['name']);
            $maxSize = 2097152;
            $goodExtension = array('jpg', 'jpeg', 'png', 'webp');
            if ($_FILES['avatar']['size'] <= $maxSize) {
                $parts = preg_split('/\./', $_FILES['avatar']['name']);
                $extension = strtolower(end($parts));
                if (in_array($extension, $goodExtension)) {
                    $path = "./Users/Avatars/" . $_SESSION['ID'] . '.png';
                    $move = move_uploaded_file($_FILES['avatar']['tmp_name'], $path);
                }
            };
        }
        modifSession($_SESSION['ID']);
        header("Location: profil");
        exit();
    }
}

function deleteProfil()
{
    debug_to_console("good password");
    $pdo = connectionPDO('localhost', 'root', 'root', 'global');
    $sql = 'DELETE FROM users WHERE userID = "' . $_SESSION['ID'] . '" AND userPassword = "' . $_POST['password'] . '";';
    $result = executeSql($sql, $pdo);
    session_destroy();
    header("Location: profil");
}

function inscritpion()
{
    $pdo = connectionPDO('localhost', 'root', 'root', 'global');


    // stock de toute les donne
    $data = array(
        "userName" => $_POST['name'],
        "userSurname" => $_POST['surname'],
        "userBirthday" => $_POST['date'],
        "userEmail" => $_POST['email'],
        "userPhone" => $_POST['phone'],
        "userColor" => $_POST['color'],
        "userPseudo" => $_POST['pseudo'],
        "userPassword" => $_POST['password'],
        "userDescription" => $_POST['description'],
        "userRole" => "chomeur",
        "userFla" => 100,
        "userArka" => 0
    );

    $sql = 'SELECT EXISTS( SELECT * FROM global.users WHERE global.users.userPseudo = "' . $data['userPseudo'] . '" ) as verif;';
    $result = executeSql($sql, $pdo);

    // verification si il existe deja et il n'est pas deja connecter
    if ($result[0]->verif == 0 && empty($_SESSION['userID'])) {
        insertInto($data, 'users');

        $sql = 'SELECT userID from global.users where global.users.userPseudo = "' . $data['userPseudo'] . '" AND global.users.userPassword = "' . $data['userPassword'] . '" ;';
        $result = executeSql($sql, $pdo);

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
        modifSession($result[0]->userID);
        // refresh de la page vers profil si sa a marcher
        header("Location: profil");
        exit();
    }
}

function connection()
{
    $pdo = connectionPDO('localhost', 'root', 'root', 'global');
    $sql = 'SELECT userID from global.users where global.users.userPseudo = "' . $_POST['pseudo'] . '" AND global.users.userPassword = "' . $_POST['password'] . '" ;';
    $result = executeSql($sql, $pdo);
    if (!empty($result[0]->userID)) {
        modifSession($result[0]->userID);
        header("Location: profil");
        exit();
    }
}
