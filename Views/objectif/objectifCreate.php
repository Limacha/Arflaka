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
                            <th>une description:</th>
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
                                <label class="container">
                                    <input type="checkbox" id="helpOpen" name="helpOpen" checked>
                                    <div class="checkmark"></div>
                                </label>
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
                                <input type="file" name="illustration" id="illustration" accept="image/*">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="buttonCentrer">
                <div id="envoie" class="flex centerH">
                    <button id="objCreateEnd" name="objCreateEnd" class="flex centerV">
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
</div>