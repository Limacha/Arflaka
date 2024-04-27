<?php
require_once('../function.php');
require_once('../Models/functionModels.php');
require_once('../constants.php');

$base = "users";

$sql = 'UPDATE users set ' . key($_POST) . '="' . reset($_POST) . '" WHERE global.' . $base . '.userID = ' . substr($_POST['id'], 6) . ';';
executeSql($sql, $pdo);
$result = recupInfo("userID=" . substr($_POST['id'], 6), $base, $pdo);

echo ($result[0]->userRole);
