<div id="body" class="flex column centerV">
    <h1>modification des données</h1>
    <form action="editProfil" method="POST" class="flex column centerV" enctype="multipart/form-data">
        <div>
            <div id="divFieldset" class="flex spaceBetween">
                <table>
                    <tbody>
                        <tr>
                            <th class="title" colspan="2">donne peronnel</th>
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
                        <tr>
                            <th class="title">profil</th>
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
            <div class="flex spaceBetween">
                <button id="editEnd" name="editEnd">modifier</button>
            </div>
        </div>
    </form>
</div>