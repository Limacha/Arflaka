<!DOCTYPE html>
<html lang="fr">
<?php
require_once "function.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arflaka</title>
    <link rel="icon" href="./image/Arflaka.png">
    <link rel="stylesheet" href="./css/flex.css">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body class="flex column centerV">
    <header class="flex centerV">
        <div id="logo" class="flex centerV">
            <img id="imglogo" src="./image/Arflaka.png" alt="name">
            <p> Arflaka</p>
        </div>
        <div id="menu" class="flex centerV">
            <button>
                <a href="#">acceuil</a>
            </button>
            <button class="menuDeroulant">
                <p>discord </p>
                <ul class="sousMenuDeroulant">
                    <li>
                        <a href="#">lien</a>
                    </li>
                    <li>
                        <a href="#">info</a>
                    </li>
                    <li>
                        <a href="#">jeux relier</a>
                    </li>
                </ul>
            </button>
            <button class="menuDeroulant">
                <p>creation </p>
                <ul class="sousMenuDeroulant">
                </ul>
            </button>
            <button class="menuDeroulant">
                <p>jeux </p>
                <ul class="sousMenuDeroulant">
                </ul>
            </button>
            <button>
                <a href="#">forum</a>
            </button>
            <button>
                <a href="#">objectif</a>
            </button>
            <button>
                <a href="#">aide</a>
            </button>
        </div>
        <div id="info">
            <p>role: inconnu</p>
            <p>fla: 0 <img src="./image/fla.png" alt=""></p>
            <p>Arka: 0 <img src="" alt=""></p>
        </div>
        <div id="profil">
            <a href="">
                <img src="./image/profil.png" alt="">
            </a>
        </div>
    </header>

    <a href="inscription.php"><button id="inscription" name="inscription">inscription</button></a>
    <a href="connection.php"><button id="connection" name="connection">connection</button></a>
    <footer></footer>
</body>

</html>