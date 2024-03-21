<div id="body" class="flex column centerV">
    <h1>New objectif</h1>
    <form action="" method="POST" class="flex column centerV" enctype="multipart/form-data">
        <div>
            <div id="divFieldset" class="flex spaceBetween">
                <table>
                    <tbody>
                        <tr>
                            <th>nom de l'objectif:</th>
                            <td>
                                <input type="text" id="name" name="name" maxlength="30" placeholder="nom: 30" required>
                            </td>

                        </tr>
                        <tr>
                            <th>
                                <p>une description:</p>
                            </th>
                            <td>
                                <textarea name="description" id="description" maxlength="255" placeholder="votre description en 255 characters max" required></textarea>
                            </td>

                        </tr>
                        <tr>
                            <th>date de début prévu:</th>
                            <td>
                                <input type="datetime-local" id="startTime" name="startTime" value="<?= date_format($startTime, "Y-m-d H:i") ?>" min="<?= date_format($startTime, "Y-m-d H:i") ?>" />
                            </td>
                        </tr>
                        <tr>
                            <th>date de fin:</th>
                            <td>
                                <input type="datetime-local" id="endTime" name="endTime" value="<?= date_format($endTime, "Y-m-d H:i") ?>" min="<?= date_format($endTime, "Y-m-d H:i") ?>" />
                            </td>
                        </tr>
                        <tr>
                            <th>choissisez un statut:</th>
                            <td>
                                <select name="statut" id="statut">
                                    <option selected value="statutBrouillon">brouillon</option>
                                    <option value="statutPrepa">en Preparation</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>ouvert au proposition d'aide:</th>
                            <td>
                                <input type="checkbox" id="helpOpen" name="helpOpen">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>limiter le nombre de participant:</p>
                            </th>
                            <td>
                                <input type="number" id="helpLimit" name="helpLimit" min="0" max="2147483647" placeholder="Limite: rien = ∞">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>Une photo pout illustrer</pfor=>
                            </th>
                            <td>
                                <input type="file" name="illustration" id="illustration" accept="image/*"></input>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex spaceBetween">
                <button id="objCreateEnd" name="objCreateEnd">Envoyer</button>
            </div>
        </div>
    </form>
</div>