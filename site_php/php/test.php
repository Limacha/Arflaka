<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1erPHP : Ponchaut Nicolas</title>
    <link rel="icon" href="./image/Arflaka.png">
    <link rel="stylesheet" href="./css/flex.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php

    ?>
    <div class="flex">
        <fieldset id="left">
            <legend>Vos coordonés</legend>
            <div class="flex column" id="leftInput">
                <div class="flex column">
                    <label for="name">name:</label>
                    <input type="text" name="name">
                </div>
                <div class="flex column">
                    <label for="surname">surname:</label>
                    <input type="text" name="surname">
                </div>
                <div class="flex column">
                    <label for="naissance">date de naissance:</label>
                    <input type="date" name="naissance">
                </div>
                <div class="flex column">
                    <label for="email">email:</label>
                    <input type="email" name="emails">
                </div>
                <div class="flex column">
                    <label for="pays">pays:</label>
                    <select>
                        <optgroup label="Europe">
                            <option value="belgique" name="belgique">belgique</option>
                        </optgroup>
                        <optgroup label="Amerique">
                            <option value="usa" name="usa">Étas-Unis</option>
                            <option value="canada" name="canada">canada</option>
                        </optgroup>
                        <optgroup label="Asia">
                            <option value="japon" name="japon">japon</option>
                            <option value="chine" name="chine">chine</option>
                        </optgroup>
                    </select>
                </div>
                <div class="flex column">
                    <label for="nombreCopie">nombre de copie:</label>
                    <input type="number" name="nombreCopie">
                </div>
            </div>
        </fieldset>
        <fieldset id="right">
            <fieldset class="" id="r1">
                <legend>périodicité</legend>
                <div>
                    <input type="radio" name="Newsletter" id="hebdo" value="hebdo" />
                    <label for="hebdo">Newsletter hebbdomadaire</label><br>

                    <input type="radio" name="Newsletter" id="mensuelle" value="mensuelle" />
                    <label for="mensuelle">Newsletter mensuelle</label><br>

                    <input type="radio" name="Newsletter" id="trimestriel" value="trimestriel" />
                    <label for="trimestriel">Newsletter trimestriel</label><br>
                </div>
            </fieldset>
            <fieldset class="" id="r2">
                <legend>version papier/info</legend>
                <div>
                    <input type="checkbox" name="papier">
                    <label for="papier">recevoir la version papier</label>
                </div>
                <div>
                    <input type="checkbox" name="info">
                    <label for="info">recevoir la version informatic</label>
                </div>
            </fieldset>
            <div id="send" class="flex">
                <button id="Bsend">Envoyer</button>
            </div>
        </fieldset>
    </div>
</body>

</html>