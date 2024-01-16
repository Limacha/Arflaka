<div id="body" class="flex column centerV">
    <h1>modification des données</h1>
    <form action="editProfil" method="POST" class="flex column centerV" enctype="multipart/form-data">
        <div>
            <div id="divFieldset" class="flex spaceBetween">
                <fieldset>
                    <legend>donnés personnel</legend>
                    <div>
                        <label for="email">votre email:</label>
                        <input type="email" id="email" name="email" placeholder="email: 150 max" value="<?= $email ?>" required>
                    </div>
                    <div>
                        <label for="phone">votre numero de telephone(belge):</label>
                        <input type="tel" id="phone" name="phone" placeholder="00 32 4** ** ** **" value="<?= $phone ?>" pattern="[0]{2} [3]{1}[2]{1} [4]{1}[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}">
                    </div>
                    <div>
                        <label for="color">Votre couleur preferer</label>
                        <input type="color" id="color" name="color" value="<?= $color ?>" required>
                    </div>
                </fieldset>
                <fieldset class="flex column">
                    <legend>Profil</legend>
                    <div>
                        <label for="pseudo">votre pseudo</label>
                        <input type="text" id="pseudo" name="pseudo" minlength="5" maxlength="30" placeholder="pseudo: 5-30" value="<?= $pseudo ?>" required>
                    </div>
                    <div class="flex">
                        <label for="description">Une petit description</label>
                        <textarea name="description" id="description" cols="35" rows="8" maxlength="255" placeholder="votre description en 255 characters max"><?= $description ?></textarea>
                    </div>
                    <div>
                        <label for="avatar">Une photo de profil</label>
                        <input type="file" name="avatar" id="avatar" accept="image/*"></input>
                    </div>
                </fieldset>
            </div>
            <div class="flex spaceBetween">
                <button id="editEnd" name="editEnd">modifier</button>
            </div>
        </div>
    </form>
</div>