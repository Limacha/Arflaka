<?php

function debug_to_console($data, $name = 'php')
{
    if (is_array($data) || is_object($data)) {
        echo ("<script>console.log('" . $name . ": " . json_encode($data) . "');</script>");
    } else {
        echo ("<script>console.log('" . $name . ": " . $data . "');</script>");
    }
}


function executeSql($sql, $pdo)
{
    try {
        $sth = $pdo->prepare($sql);
        $sth->execute();
        $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
        debug_to_console($resultat);
        return $resultat;
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
};
