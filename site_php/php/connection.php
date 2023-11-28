<!DOCTYPE html>
<html lang="fr">
<?php
require_once "function.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arflaka: Connection</title>
    <link rel="icon" href="../image/Arflaka.png">
    <link rel="stylesheet" href="../css/flex.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="flex column centerV">
    <header class="flex centerV">
        <div id="logo" class="flex centerV">
            <img class="Himg" src="../image/Arflaka.png" alt="name">
            <p> Arflaka</p>
        </div>
        <div id="menu" class="flex centerV">
            <button class="Hbutton">
                <a href="#">acceuil</a>
            </button>
            <button class="menuDeroulant Hbutton">
                <p>discord </p>
                <ul class="sousMenuDeroulant">
                    <li class="Hli">
                        <a href="#">lien</a>
                    </li>
                    <li class="Hli">
                        <a href="#">info</a>
                    </li>
                    <li class="Hli">
                        <a href="#">jeux relier</a>
                    </li>
                </ul>
            </button>
            <button class="menuDeroulant Hbutton">
                <p>creation </p>
                <ul class="sousMenuDeroulant">
                </ul>
            </button>
            <button class="menuDeroulant Hbutton">
                <p>jeux </p>
                <ul class="sousMenuDeroulant">
                </ul>
            </button>
            <button class="Hbutton">
                <a href="#">forum</a>
            </button>
            <button class="Hbutton">
                <a href="#">objectif</a>
            </button>
            <button class="Hbutton">
                <a href="#">aide</a>
            </button>
        </div>
        <div id="info">
            <p>role: inconnu</p>
            <p class="flex centerV">fla: 0 <img id="fla" src="../image/fla.png" alt=""></p>
            <p>Arka: 0 <img src="" alt=""></p>
        </div>
        <div id="profil">
            <a href="">
                <img class="Himg" src="../image/profil.png" alt="">
            </a>
        </div>
    </header>
    <a href="inscription.php"><button id="inscription" name="inscription">inscription</button></a>

    <h1>Connection</h1>
    <form action="" method="">
        <fieldset class="centerV">
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
        <div class="flex spaceAround">
            <button id="restart" name="restart">Reinitialiser</button>
            <button id="send" name="send">Envoyer</button>
        </div>
    </form>

</body>

</html>