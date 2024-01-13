<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'global';

$pdo = connectionPDO($servername, $username, $password, $dbname);

if (isset($_POST['inscriEnd'])) {
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

    $sql = "SELECT EXISTS( SELECT * FROM global.users WHERE global.users.userPseudo = '" . $data['userPseudo'] . "' ) as verif;";

    $result = executeSql($sql, $pdo);
    debug_to_console('info recuperer');
    if ($result[0]['verif'] == 0) {
        $cate = "";
        $val = "'";
        $i = 0;
        foreach ($data as $key => $value) {
            $i++;
            if (!empty($value)) {

                $cate = $cate . $key . ", ";
                $val = $val . $value . "', '";
            }
        }

        unset($key);
        unset($value);


        $cate = substr($cate, 0, -2);
        $val = substr($val, 0, -3);

        $sql = 'INSERT INTO users (' . $cate . ') VALUES (' . $val . ');';

        executeSql($sql, $pdo);
        debug_to_console('info recuperer');
        $_SESSION['pseudo'] = $data['userPseudo'];
        $_SESSION['password'] = $data['userPassword'];
        header("Location: profil");
    }
}
