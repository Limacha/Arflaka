<?php
$pdo = connectionPDO('localhost', 'root', 'root', 'global');

if (isset($_POST['inscriEnd'])) {
    // stock de toute les donne
    $data = array(
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

    $sql = 'SELECT EXISTS( SELECT * FROM global.users WHERE global.users.userPseudo = "' . $data['userPseudo'] . '" ) as verif;';
    $result = executeSql($sql, $pdo);

    // verification si il existe deja et il n'est pas deja connecter
    if ($result[0]['verif'] == 0 && empty($_SESSION['userID'])) {
        $cate = "";
        $val = '"';
        $i = 0;
        // creation de la commande sql
        foreach ($data as $key => $value) {
            $i++;
            if (!empty($value)) {

                $cate = $cate . $key . ", ";
                $val = $val . $value . '", "';
            }
        }

        unset($key);
        unset($value);


        $cate = substr($cate, 0, -2);
        $val = substr($val, 0, -3);

        $sql = 'INSERT INTO users (' . $cate . ', userRole, userFla, userArka) VALUES (' . $val . ', "chomeur", 0, 0);';
        executeSql($sql, $pdo);

        $sql = 'SELECT userID from global.users where global.users.userPseudo = "' . $data['userPseudo'] . '" AND global.users.userPassword = "' . $data['userPassword'] . '" ;';
        $result = executeSql($sql, $pdo);

        $_SESSION['ID'] = $result[0]['userID'];
        //creation de l'image avatar
        if (isset($_FILES['avatar']) && !empty($_FILES['avatar']['name'])) {
            debug_to_console($_FILES['avatar']['name']);
            $maxSize = 2097152;
            $goodExtension = array('jpg', 'jpeg', 'png', 'webp');
            if ($_FILES['avatar']['size'] <= $maxSize) {
                $parts = preg_split('/\./', $_FILES['avatar']['name']);
                $extension = strtolower(end($parts));
                if (in_array($extension, $goodExtension)) {
                    $path = "./Users/Avatars/" . $_SESSION['ID'] . '.png';
                    $move = move_uploaded_file($_FILES['avatar']['tmp_name'], $path);
                }
            };
        }
        // refresh de la page vers profil si sa a marcher
        header("Location: profil");
        exit();
    }
}
