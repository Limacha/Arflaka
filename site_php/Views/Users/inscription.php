<div id="body" class="flex column centerV">
    <a href="connection"><button id="connection" name="connection">connection</button></a>

    <h1>Inscription</h1>
    <form action="inscription" method="POST" class="flex column centerV" enctype="multipart/form-data">
        <div>
            <div id="divFieldset" class="flex spaceBetween">
                <fieldset>
                    <legend>donnés personnel</legend>
                    <div>
                        <label for="name">votre prenom</label>
                        <input type="text" id="name" name="name" maxlength="30" placeholder="prenom: 30" required>
                    </div>
                    <div>
                        <label for="surname">votre nom</label>
                        <input type="text" id="surname" name="surname" maxlength="30" placeholder="nom: 30" required>
                    </div>
                    <div>
                        <label for="date">votre date de naissance</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <div>
                        <label for="email">votre email:</label>
                        <input type="email" id="email" name="email" placeholder="email: 150 max" required>
                    </div>
                    <div>
                        <label for="phone">votre numero de telephone(belge):</label>
                        <input type="tel" id="phone" name="phone" placeholder="00 32 4** ** ** **" onfocus="this.value='00 32 4'" pattern="[0]{2} [3]{1}[2]{1} [4]{1}[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}">
                    </div>
                    <div>
                        <label for="color">Votre couleur preferer</label>
                        <input type="color" id="color" name="color" required>
                    </div>
                </fieldset>
                <fieldset class="flex column">
                    <legend>Profil</legend>
                    <div>
                        <label for="pseudo">votre pseudo</label>
                        <input type="text" id="pseudo" name="pseudo" minlength="5" maxlength="30" placeholder="pseudo: 5-30" required>
                    </div>
                    <div>
                        <label for="password">votre password</label>
                        <input type="password" id="password" name="password" minlength="5" maxlength="255" placeholder="password: 5-255" required>
                    </div>
                    <div class="flex">
                        <label for="description">Une petit description</label>
                        <textarea name="description" id="description" cols="35" rows="8" maxlength="255" placeholder="votre description en 255 characters max"></textarea>
                    </div>
                    <div>
                        <label for="avatar">Une photo de profil</label>
                        <input type="file" name="avatar" id="avatar" accept="image/*"></input>
                    </div>
                </fieldset>
            </div>
            <div class="flex spaceBetween">
                <button id="inscriEnd" name="inscriEnd">Envoyer</button>
            </div>
        </div>
    </form>
</div>