<?php
if (!empty($_SESSION['ID'])) {
    $pdo = connectionPDO('localhost', 'root', 'root', 'global');

    $sql = 'SELECT userEmail, userPhone, userColor, userPseudo, userDescription from global.users where global.users.userID = "' . $_SESSION['ID'] . '" ;';
    $result = executeSql($sql, $pdo);

    $email = $result[0]['userEmail'];
    $phone = $result[0]['userPhone'];
    $color = $result[0]['userColor'];
    $pseudo = $result[0]['userPseudo'];
    $description = $result[0]['userDescription'];

    if (isset($_POST['editEnd'])) {
        $data = array(
            "userEmail" => $_POST['email'],
            "userPhone" => $_POST['phone'],
            "userColor" => $_POST['color'],
            "userPseudo" => $_POST['pseudo'],
            "userDescription" => $_POST['description']
        );
        $sql = 'SELECT count(*) as "verif" from users where global.users.userPseudo = "' . $pseudo . '" ;';

        $result = executeSql($sql, $pdo);
        if ($result[0]['verif'] <= 1 && empty($_SESSION['userID'])) {

            $set = "";
            $i = 0;
            foreach ($data as $key => $value) {
                $i++;
                if (!empty($value)) {
                    $set .= $key . ' = "' . $value . '", ';
                }
            }

            $set = substr($set, 0, -2);

            $sql = 'UPDATE users set ' . $set . ' WHERE global.users.userID = ' . $_SESSION['ID'] . ';';

            executeSql($sql, $pdo);

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
            header("Location: profil");
            exit();
        }
    }
}
