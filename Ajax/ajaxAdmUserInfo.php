<?php
require_once('../function.php');
require_once('../Models/functionModels.php');
require_once('../constants.php');

$base = "users";

$sql = 'UPDATE users set :key=:reset WHERE global.:base.userID = :sub;';
executeSql($sql, $pdo, ["key" => key($_POST), "reset" => reset($_POST), "base" => $base, "sub" => substr($_POST['id'], 6)]);
$result = recupInfo("userID=" . substr($_POST['id'], 6), $base, $pdo);

if ("userRole" == key($_POST)) {
    echo ($result[0]->userRole);
} else if ("userFla" == key($_POST)) {
    echo ($result[0]->userFla);
} else if ("userArka" == key($_POST)) {
    echo ($result[0]->userArka);
}
