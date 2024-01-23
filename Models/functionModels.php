<?php
function connectionPDO($servername, $username, $password, $dbname)
{
    $strConnection = "mysql:host=$servername;dbname=$dbname";

    try {
        $pdo = new PDO($strConnection, $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]);
        debug_to_console('Connexion réussie', 'sql');
    } catch (PDOException $e) {
        debug_to_console("Erreur : " . $e->getMessage(), 'sql');
    }
    return $pdo;
};

function executeSql($sql, $pdo)
{
    debug_to_console($sql, 'sql request');
    try {
        $sth = $pdo->prepare($sql);
        $sth->execute();
        $resultat = $sth->fetchAll();
        debug_to_console($resultat, 'sql result');
        debug_to_console('request end', 'sql');
        return $resultat;
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
};

function modifSession($id)
{
    $pdo = connectionPDO('localhost', 'root', 'root', 'global');
    $sql = 'SELECT * from global.users where global.users.userID = ' . $id . ' ;';
    $result = executeSql($sql, $pdo);
    $_SESSION['ID'] = $result[0]->userID;
    $_SESSION['email'] = $result[0]->userEmail;
    $_SESSION['phone'] = $result[0]->userPhone;
    $_SESSION['pseudo'] = $result[0]->userPseudo;
    $_SESSION['description'] = $result[0]->userDescription;
    $_SESSION['color'] = $result[0]->userColor;
    $_SESSION['role'] =  $result[0]->userRole;
    $_SESSION['fla'] =  $result[0]->userFla;
    $_SESSION['arka'] =  $result[0]->userArka;
}
