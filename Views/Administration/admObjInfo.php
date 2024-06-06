<div id="body" class="flex centerV centerH fullHeight">
    <div id="div">
        <div class="flex" style="border: solid 2px; border-color: <?= ($data['helpOpen']) ? "green" : "red" ?>; border-radius: 15px; padding: 25px;">
            <img id="icon" src="<?= $objImg ?>" alt="icon<?= $data['ID'] ?>">
            <table>
                <tr>
                    <td>
                        <p class="tHead">name:</p>
                        <p class="tText"><?= $data['name'] ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="tHead">description:</p>
                        <p class="tText"><?= (isset($data['description'])) ? $data['description'] : 'pas de description' ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="tHead">Statut:</p>
                        <p class="tText"><?= substr($data['statut'], 6) ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="tHead">Start:</p>
                        <p class="tText"><?= date_format(date_create($data['startDate']), "d-m-Y") ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="tHead">End:</p>
                        <p class="tText"><?= date_format(date_create($data['endDate']), "d-m-Y") ?></p>
                    </td>
                </tr>
                <?php if ($data['helpOpen']) : ?>
                    <tr>
                        <td>
                            <p class="tHead">Limit:</p>
                            <p class="tText"><?= (!is_null($data['helpLimit'])) ? $data['helpLimit'] : "∞" ?></p>
                        </td>
                    </tr>
                <?php endif ?>
            </table>
            <?php if (in_array(2, $_SESSION['permission'])) : ?>
                <form method="GET" action="/objectif/edit">
                    <div class="backCrossDel" style="display: <?= (in_array(2, $_SESSION['permission'])) ? " flex" : "none" ?>;">
                        <button class="menu__icon" name="objId" onclick="deleteObj(<?= $objectif->objId ?>);">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </form>
            <?php endif ?>
        </div>
    </div>
</div>
<script>
    const icon = document.getElementById("icon");
    icon.style.width = getComputedStyle(icon).getPropertyValue('height');
    icon.style.height = icon.style.width;
</script>