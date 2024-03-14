<header id="header" class="flex centerV">
    <div id="logo" class="flex centerV">
        <button class="Hbuttonim">
            <img src="<?= $arflakaImg ?>" alt="name">
            <div id="menub" class="flex centerV column spaceAround">
                <?php require './Views/Components/menu.php'; ?>
            </div>
        </button>
        <p> Arflaka</p>
    </div>
    <div id="menu" class="flex centerV spaceAround">
        <?php require './Views/Components/menu.php'; ?>
    </div>
    <div id="info">
        <p>role: <?= $_SESSION['role'] ?></p>
        <p class="flex centerV">fla: <?= $_SESSION['fla'] ?> <img id="fla" src="<?= $flaImg ?>" alt=""></p>
        <p>Arka: <?= $_SESSION['arka'] ?> <img src="" alt=""></p>
    </div>
    <div id="profil">
        <a href="profil">
            <img class="Himg" src="<?= $profilImg ?>" alt="">
        </a>
    </div>
</header>