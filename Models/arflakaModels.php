<?php


function listeUser($pdo)
{
    $sql = 'SELECT userID, userPseudo, userRole, userFla, userArka, userColor from global.users where userLife = 1;';
    return executeSql($sql, $pdo, []);
}
