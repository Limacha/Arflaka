<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'global';

$pdo = connectionPDO($servername, $username, $password, $dbname);

if (isset($_POST['connectEnd'])) {
    $data = array(
        "userPseudo" => $_POST['pseudo'],
        "userPassword" => $_POST['password']
    );

    $sql = "SELECT EXISTS( SELECT * FROM global.users WHERE global.users.userPseudo = '" . $data['userPseudo'] . "' AND global.users.userPassword = '" . $data['userPassword'] . "' ) as verif;";

    $result = executeSql($sql, $pdo);
    debug_to_console('info recuperer');
    //debug_to_console($result[0]['verif'], 'resulta');
    if ($result[0]['verif'] == 1) {
        $_SESSION['connected'] = true;
        $_SESSION['pseudo'] = $data['userPseudo'];
        $_SESSION['password'] = $data['userPassword'];
        debug_to_console('header');
        header("Location: profil");
        debug_to_console('header');
    }
}
