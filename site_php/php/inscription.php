<!DOCTYPE html>
<html lang="fr">
<?php
require_once "function.php";

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arflaka: Inscription</title>
    <link rel="icon" href="./image/Arflaka.png">
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
    <a href="connection.php"><button id="connection" name="connection">connection</button></a>

    <h1>Insciption</h1>
    <form action="" method="" class="flex column centerV">
        <div id="divFieldset" class="flex spaceBetween">
            <fieldset>
                <legend>donnés personnel</legend>
                <div>
                    <label for="name">votre prenom</label>
                    <input type="text" id="name" name="name" require>
                </div>
                <div>
                    <label for="surname">votre nom</label>
                    <input type="text" id="surname" name="surname" require>
                </div>
                <div>
                    <label for="date">votre date de naissance</label>
                    <input type="date" id="date" name="date" require>
                </div>
                <div>
                    <label for="email">votre email:</label>
                    <input type="email" id="email" name="email" require>
                </div>
                <div>
                    <label for="phone">votre numero de telephone</label>
                    <input type="tel" id="phone" name="phone" require>
                </div>
                <div>
                    <label for="color">Votre couleur preferer</label>
                    <input type="color" id="color" name="color" require>
                </div>
            </fieldset>
            <fieldset class="flex column">
                <legend>Profil</legend>
                <div>
                    <label for="username">votre pseudo</label>
                    <input type="text" id="username" name="username" require>
                </div>
                <div>
                    <label for="password">votre password</label>
                    <input type="password" id="password" name="password" require>
                </div>
                <div class="flex">
                    <label for="description">Une petit description</label>
                    <textarea name="description" id="description" cols="35" rows="8" maxlength="250" placeholder="votre description en 250 characters max"></textarea>
                </div>
            </fieldset>
        </div>
        <div class="flex spaceBetween">
            <button id="restart" name="restart">Reinitialiser</button>
            <button id="send" name="send">Envoyer</button>
        </div>

    </form>

</body>

</html>