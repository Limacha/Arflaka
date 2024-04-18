<?php foreach ($objectifs as $objectif) : ?>
    <div id="<?= 'objectif' . $objectif->objId ?>" class="objectifs flex column centerV spaceAround" style="border-color: <?= ($objectif->objHelpOpen) ? "green" : "red" ?>;">
        <div id="divID" class="flex spaceBetween">
            <img src="<?= '/Assets/Images/objectif/' .  $objectif->objId  . '.png' ?>" alt=" <?= 'objectif' . $objectif->objId ?>">
            <div class="backCrossDel">
                <button class="menu__icon">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
        <div>
            <p>Name: <span class="tText"><?= $objectif->objName ?></span></p>
            <p>Statut: <span class="tText"><?= substr($objectif->objStatut, 6) ?></span></p>
            <p>Start: <span class="tText"><?= date_format(date_create($objectif->objStartDate), "d-m-Y") ?></span></p>
            <p>End: <span class="tText"><?= date_format(date_create($objectif->objEndDate), "d-m-Y") ?></span></p>
            <?php if ($objectif->objHelpOpen) : ?>
                <p>Limit: <span class="tText"><?= (!is_null($objectif->objHelpLimit)) ? $objectif->objHelpLimit : "∞" ?></span></p>
            <?php endif ?>
        </div>
        <form class="Fmore" action="/objectif/infos" method="GET">
            <button class="more" name="more" value="<?= $_GET["more"] = $objectif->objId ?>">
                <span>More</span>
            </button>
        </form>
    </div>
<?php endforeach ?>