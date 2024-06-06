<?php foreach ($users as $user) : ?>
    <div id="<?= 'user' . $user->userID ?>" class="users flex column centerV spaceAround" style="border-color: <?= $user->userColor ?>; border-style: <?= ($user->userLife) ? 'solid' : 'dashed' ?>;">
        <img src="<?= (file_exists('./Assets/Images/Avatars/' . $user->userID . '.png')) ? '/Assets/Images/Avatars/' . $user->userID . '.png' : '/Assets/Images/profil.png' ?>" alt="avatar<?= $user->userID ?>">
        <div>
            <p>pseudo: <span class="tText"><?= $user->userPseudo ?></span></p>
            <p>role: <span class="tText"><?= $user->userRole ?></span></p>
            <p class="flex centerV">fla: <span class="tText"><?= $user->userFla ?><img id="fla" src="<?= $flaImg ?>" alt="fla"></span></p>
            <p>arka: <span class="tText"><?= $user->userArka ?></span></p>
        </div>
        <form class="flex centerV" action="<?= $buttonUri ?>" method="GET">
            <button class="more" name="more" value="<?= $_GET["more"] = $user->userID ?>">
                <span>More</span>
            </button>
        </form>
    </div>
<?php endforeach ?>