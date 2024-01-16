<?php
$pdo = connectionPDO('localhost', 'root', 'root', 'global');

if (isset($_POST['connectEnd']) && empty($_SESSION['ID'])) {
    $sql = 'SELECT userID from global.users where global.users.userPseudo = "' . $_POST['pseudo'] . '" AND global.users.userPassword = "' . $_POST['password'] . '" ;';
    $result = executeSql($sql, $pdo);
    // debug_to_console($result[0]['userID'], 'resulta (userID)');
    if (!empty($result[0]['userID'])) {
        $_SESSION['ID'] = $result[0]['userID'];
        header("Location: profil");
        exit();
    }
}
