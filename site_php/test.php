<!DOCTYPE html>
<html>

<head>
    <title>Cours PHP / MySQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cours.css">
</head>

<body>
    <h1>Bases de données MySQL</h1>
    <?php

    require_once './Models/functionModels.php';

    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'gandalf';

    $strConnection = "mysql:host=$servername;dbname=$dbname";

    //On essaie de se connecter
    try {
        $pdo = new PDO($strConnection, $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion réussie';
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }


    echo '<pre>';
    print_r(executeSql("SELECT * FROM medecin;", $pdo));
    echo '</pre>';
    echo 'info recuperer';

    //on ferme la connexion
    $conn = null;
    ?>
</body>

</html>