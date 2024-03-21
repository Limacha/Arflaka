<div id="objectif" class="flex column">
    <div id="head" class="flex spaceAround centerV">
        <form action="verifPassword" method="GET">
            <button id="objectifDelete" name="verifPassword" value="objectifDelete">suprimer</button>
        </form>
        <div>
            <h1>objectifs</h1>
            <p>Liste de tout les objectifs</p>
        </div>
        <form action="verifPassword" method="GET">
            <button id="objectifCreate" name="verifPassword" value="objectifCreate">ajouter</button>
        </form>
    </div>
    <div id="listObj" class="flex wrap centerH">
        <?php foreach ($objectifs as $objectif) : ?>
            <div id="<?= 'objectif' . $objectif->objId ?>" class="objectifs flex column centerV spaceAround" style="border-color: <?= ($objectif->objHelpOpen) ? "green" : "red" ?>;">
                <img src="<?= './Assets/Images/objectif/' .  $objectif->objId  . '.png' ?>" alt=" <?= 'objectif' . $objectif->objId ?>">
                <div>
                    <p>Name: <?= $objectif->objName ?></p>
                    <p>Statut: <?= $objectif->objStatut ?></p>
                    <p>Start: <?= date_format(date_create($objectif->objStartDate), "d-m-Y") ?></p>
                    <p>End: <?= date_format(date_create($objectif->objEndDate), "d-m-Y") ?></p>
                    <?php if ($objectif->objHelpOpen) : ?>
                        <p>Limit: <?= (!is_null($objectif->objHelpLimit)) ? $objectif->objHelpLimit : "∞" ?></p>
                    <?php endif ?>
                </div>
                <button>more</button>
            </div>
        <?php endforeach ?>
    </div>
</div>