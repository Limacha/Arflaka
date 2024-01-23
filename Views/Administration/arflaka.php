<div id="arflaka">
    <h1>Modification et administration d'Arflaka</h1>
    <p>Liste de tout les utilisateur d'Arflaka</p>
    <div id="listPlayers" class="flex wrap">
        <?php foreach ($users as $user) : ?>
            <div id="<?= 'user' . $user->userID ?>" class="users flex column centerV spaceAround" style=" <?= 'border-color: ' . $user->userColor ?>;">
                <img src="<?= './Assets/Images/Avatars/' .  $user->userID  . '.png' ?>" alt=" <?= 'avatar' . $user->userID ?>">
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
</div>