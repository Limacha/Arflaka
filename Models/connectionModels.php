<?php
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
