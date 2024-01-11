<?php
require_once './Models/functionModels.php';

$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'global';

$strConnection = "mysql:host=$servername;dbname=$dbname";

//On essaie de se connecter
try {
    $pdo = new PDO($strConnection, $username, $password);
    //On définit le mode d'erreur de PDO sur Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    debug_to_console('Connexion réussie');
} catch (PDOException $e) {
    debug_to_console("Erreur : " . $e->getMessage());
}

if (isset($_POST['inscriEnd'])) {
    $array = array(
        "userName" => $_POST['name'],
        "userSurname" => $_POST['surname'],
        "userBirthday" => $_POST['date'],
        "userEmail" => $_POST['email'],
        "userPhone" => $_POST['phone'],
        "userColor" => $_POST['color'],
        "userPseudo" => $_POST['pseudo'],
        "userPassword" => $_POST['password'],
        "userDescription" => $_POST['description']
    );

    $cate = "";
    $val = "'";
    $i = 0;
    foreach ($array as $key => $value) {
        $i++;
        if (!empty($value)) {

            $cate = $cate . $key . ", ";
            $val = $val . $value . "', '";
        }
    }

    $cate = substr($cate, 0, -2);
    $val = substr($val, 0, -3);

    $sql = 'INSERT INTO users (' . $cate . ') VALUES (' . $val . ');';

    unset($key);
    unset($value);

    executeSql($sql, $pdo);
    debug_to_console('info recuperer');
    $connected = true;
}
