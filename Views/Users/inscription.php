<div id="body" class="flex column centerV">
    <h1>Inscription</h1>
    <form action="/profil/inscription" method="POST" class="flex column centerV" enctype="multipart/form-data">
        <div id="divDivTabel">
            <div id="divTabel" class="flex spaceAround">
                <table>
                    <tbody>
                        <tr>
                            <th class="title" colspan="2">donne peronnel</th>
                        </tr>
                        <tr>
                            <th>votre pseudo:</th>
                            <td>
                                <input type="text" id="name" name="name" maxlength="30" placeholder="prenom: 30" required>
                            </td>
                        </tr>
                        <tr>
                            <th>votre nom:</th>
                            <td>
                                <input type="text" id="surname" name="surname" maxlength="30" placeholder="nom: 30" required>
                            </td>
                        </tr>
                        <tr>
                            <th>votre date de naissance:</th>
                            <td>
                                <input type="date" id="date" name="date" required>
                            </td>
                        </tr>
                        <tr>
                            <th>votre email:</th>
                            <td>
                                <input type="email" id="email" name="email" placeholder="email: 150 max" value="<?= $_SESSION['email'] ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <th>votre numero de telephone:</th>
                            <td>
                                <input type="tel" id="phone" name="phone" placeholder="00 32 4** ** ** **" value="<?= $_SESSION['phone'] ?>" pattern="[0]{2} [3]{1}[2]{1} [4]{1}[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}">
                            </td>
                        </tr>
                        <tr>
                            <th>votre couleur preferer:</th>
                            <td>
                                <input type="color" id="color" name="color" value="<?= $_SESSION['color'] ?>" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <tbody>
                        <tr>
                            <th class="title">profil</th>
                        </tr>
                        <tr>
                            <th>votre pseudo:</th>
                            <td>
                                <input type="text" id="pseudo" name="pseudo" maxlength="30" placeholder="pseudo: 30" required>
                            </td>
                        </tr>
                        <tr>
                            <th>votre password:</th>
                            <td>
                                <input type="password" id="password" name="password" minlength="5" maxlength="255" placeholder="password: 5-255" required>
                            </td>
                        </tr>
                        <tr>
                            <th>votre description:</th>
                            <td>
                                <textarea name="description" id="description" cols="35" rows="8" maxlength="255" placeholder="votre description en 255 characters max"><?= $_SESSION['description'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>votre avatar:</th>
                            <td>
                                <input type="file" name="avatar" id="avatar" accept="image/*">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="buttonCentrer">
                <div id="envoie" class="flex centerH">
                    <button id="inscriptionEnd" name="inscriptionEnd" class="flex centerV">
                        <div class="svg-wrapper-1">
                            <div class="svg-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                </svg>
                            </div>
                        </div>
                        <span>Envoyer</span>
                    </button>
                </div>
            </div>
        </div>
    </form>

    <a id="connection" href="connection">connection</a>
</div>