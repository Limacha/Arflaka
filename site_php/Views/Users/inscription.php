<div id="body" class="flex column centerV">
    <a href="connection"><button id="connection" name="connection">connection</button></a>

    <h1>Insciption</h1>
    <form action="connection" method="POST" class="flex column centerV">
        <div>
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
                <button id="send" name="send">Envoyer</button>
            </div>
        </div>

    </form>
</div>