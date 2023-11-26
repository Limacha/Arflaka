<!DOCTYPE html>
<html lang="fr">
<?php
require_once "function.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arflaka: Connection</title>
    <link rel="icon" href="./image/Arflaka.png">
    <link rel="stylesheet" href="./css/flex.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="flex column centerV">
    <header>
        <a href="inscription.php"><button id="inscription" name="inscription">inscription</button></a>
    </header>
    <h1>Un super formulaire</h1>
    <form action="" method="">
        <fieldset>
            <legend>connection</legend>
            <div>
                <label for="pseudo">votre pseudo</label>
                <input type="text" id="pseudo" name="pseudo" require>
            </div>
            <div>
                <label for="password">votre password</label>
                <input type="password" id="password" name="password" require>
            </div>
        </fieldset>
        <div>
            <button id="restart" name="restart">Reinitialiser</button>
            <button id="send" name="send">Envoyer</button>
        </div>
    </form>

</body>

</html>