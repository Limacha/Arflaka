<?php


function listeUser()
{
    $pdo = connectionPDO('localhost', 'root', 'root', 'global');

    $sql = 'SELECT userID, userPseudo, userRole, userFla, userArka, userColor from global.users;';
    return executeSql($sql, $pdo);
}
