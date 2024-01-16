<?php
function connectionPDO($servername, $username, $password, $dbname)
{
    $strConnection = "mysql:host=$servername;dbname=$dbname";

    try {
        $pdo = new PDO($strConnection, $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
        $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
        debug_to_console($resultat, 'sql result');
        debug_to_console('request end', 'sql');
        return $resultat;
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
};
