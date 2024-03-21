<div id="arflaka" class="flex column centerV">
    <h1>Modification et administration d'Arflaka</h1>
    <p>Liste de tout les utilisateur d'Arflaka</p>
    <div id="listPlayers" class="flex wrap centerH">
        <?php foreach ($users as $user) : ?>
            <div id="<?= 'user' . $user->userID ?>" class="users flex column centerV spaceAround" style=" <?= 'border-color: ' . $user->userColor ?>;">
                <img src="<?= '/Assets/Images/Avatars/' .  $user->userID  . '.png' ?>" alt=" <?= 'avatar' . $user->userID ?>">
                <div>
                    <p>pseudo: <?= $user->userPseudo ?></p>
                    <p>role: <?= $user->userRole ?></p>
                    <p>fla: <?= $user->userFla ?><img id="fla" src="<?= $flaImg ?>" alt="fla"></p>
                    <p>arka: <?= $user->userArka ?></p>
                </div>
                <button>more</button>
            </div>
        <?php endforeach ?>
    </div>
    <br>
    <button>Edit</button>
</div>
<br>
<div id="objectif" class="flex column centerV">
    <h1>objectifs</h1>
    <p>Liste de tout les objectifs</p>
    <div id="listObj" class="flex wrap centerH">
        <?php foreach ($objectifs as $objectif) : ?>
            <div id="<?= 'objectif' . $objectif->objId ?>" class="objectifs flex column centerV spaceAround" style="border-color: <?= ($objectif->objHelpOpen) ? "green" : "red" ?>;">
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
    <br>
    <button>Edit</button>
</div>
<br>