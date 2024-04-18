<div id="body" class="flex centerV centerH fullHeight">
    <div id="div">
        <div class="flex">
            <div>
                <img id="avatar" src="<?= $userImg ?>" alt="avatar<?= $data['ID'] ?>">
            </div>
            <div>
                <table id="info">
                    <tr>
                        <th>
                            <p class="tHead">role:</p>

                        </th>
                        <td>
                            <p class="tText"><?= $data['role'] ?></p>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <p class="tHead">fla:</p>
                        </th>
                        <td>
                            <p class="flex centerV tText">fla: <?= $data['fla'] ?> <img id="fla" src="<?= $flaImg ?>" alt=""></p>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <p class="tHead">arka:</p>
                        </th>
                        <td>

                            <p class="tText"><?= $data['arka'] ?></p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <table>
            <tr>
                <td>
                    <p class="tHead">username</p>
                    <p class="tText"><?= $data['pseudo'] ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="tHead">description</p>
                    <p class="tText"><?= (isset($data['description'])) ? $data['description'] : 'pas de description' ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="tHead">couleur</p>
                    <div id="Color" style='background-color: <?= $data['color'] ?>;'></div>
                </td>
            </tr>
        </table>


    </div>
</div>