<?php
function connectionPDO($servername, $username, $password, $dbname)
{
    $strConnection = "mysql:host=$servername;dbname=$dbname";

    try {
        $pdo = new PDO($strConnection, $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]);
        debug_to_console('Connexion réussie', 'sql');
    } catch (PDOException $e) {
        debug_to_console("Erreur : " . $e->getMessage(), 'sql');
    }
    return $pdo;
};

function executeSql($sql, $pdo, $info)
{
    debug_to_console($sql, 'sql request');
    try {
        $sth = $pdo->prepare($sql);
        $sth->execute($info);
        $resultat = $sth->fetchAll();
        debug_to_console($resultat, 'sql result');
        debug_to_console('request end', 'sql');
        return $resultat;
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
};

function modifSession($id, $pdo)
{
    $sql = 'SELECT * from global.users where global.users.userID = :id;';
    $result = executeSql($sql, $pdo, ["id" => $id]);
    $_SESSION['ID'] = $result[0]->userID;
    $_SESSION['email'] = $result[0]->userEmail;
    $_SESSION['phone'] = $result[0]->userPhone;
    $_SESSION['pseudo'] = $result[0]->userPseudo;
    $_SESSION['description'] = $result[0]->userDescription;
    $_SESSION['color'] = $result[0]->userColor;
    $_SESSION['role'] =  $result[0]->userRole;
    $_SESSION['fla'] =  $result[0]->userFla;
    $_SESSION['arka'] =  $result[0]->userArka;
}

function verifPasword($function, $pdo)
{
    $sql = 'SELECT userPassword from global.users where global.users.userId = :userID ;';
    $result = executeSql($sql, $pdo, ["userID" => $_SESSION['ID']]);
    if (!empty($result[0]->userPassword)) {
        if ($result[0]->userPassword == $_POST["password"]) {
            if (function_exists($function)) {
                $function($pdo);
            } else {
                header("Location: " . $function);
            }
        } else {
            debug_to_console("password incorect");
            header("Location: accueil");
        }
    }
    $_POST['message'] = "password incorext retourne dous tu viens";
}

function insertInto($data, $base, $pdo)
{
    $cate = "";
    $val = '"';
    $i = 0;
    /*
    $data = array(
        "$key" => $value
    );
    */
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

    $sql = 'INSERT INTO :base (:cate) VALUES (:val);';
    executeSql($sql, $pdo, ["base" => $base, "cate" => $cate, "val" => $val]);
}

function recupInfo($where, $base, $pdo)
{
    if ($where != '') {
        $where = 'where ' . $where;
    }
    $sql = 'SELECT * from global.' . $base . ' ' . $where . ';';
    $result = executeSql($sql, $pdo, []);
    return $result;
}
