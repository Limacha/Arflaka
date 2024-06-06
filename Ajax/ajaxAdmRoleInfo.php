<?php
require_once('../function.php');
require_once('../Models/functionModels.php');
require_once('../constants.php');

$base = "rolesperm";

$totalElements = count($_POST);

$counter = 0;

foreach ($_POST as $key => $value) {
    if ($counter < $totalElements - 1) {
        $key = substr($key, 5);
        $sql = 'SELECT EXISTS( SELECT * FROM global.' . $base . ' WHERE global.' . $base . '.permId = :key && global.' . $base . '.roleId=:id) as verif;';
        $result = executeSql($sql, $pdo, ["key" => $key, "id" => $_POST["roleId"]]);
        if ($result[0]->verif) {
            $sql = 'UPDATE ' . $base . ' set havePerm=:value WHERE global.' . $base . '.permId = :key && global.' . $base . '.roleId=:id;';
            executeSql($sql, $pdo, ["value" => $value, "key" => $key, "id" => $_POST["roleId"]]);
        } else {
            insertInto(["permId" => $key, "roleId" => $_POST["roleId"], "havePerm" => $value], $base, $pdo);
        }
    }
    $counter++;
}
