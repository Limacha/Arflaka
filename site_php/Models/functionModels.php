<?php
function executeSql($sql, $pdo)
{
    try {
        $sth = $pdo->prepare($sql);
        $sth->execute();
        $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
};
