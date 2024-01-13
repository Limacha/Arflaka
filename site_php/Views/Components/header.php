<?php
$menuContent = '
<li class="Hbutton">
<a href="' . $accueil . '">acceuil</a>
</li>
<li class="menuDeroulant Hbutton">
 <p>discord </p>
 <ul class="sousMenuDeroulant">
     <li class="Hli">
         <a href="#">info</a>
     </li>
     <li class="Hli">
         <a href="#">jeux relier</a>
     </li>
 </ul>
</li>
<li class="menuDeroulant Hbutton">
 <p>creation </p>
 <ul class="sousMenuDeroulant">
     <li class="Hli">
         <a href="#">1 nom crea</a>
     </li>
     <li class="Hli">
         <a href="#">2 nom crea</a>
     </li>
 </ul>
</li>
<li class="Hbutton">
 <a href="#">forum</a>
</li>
<li class="Hbutton">
 <a href="#">objectif</a>
</li>
<li class="Hbutton">
 <a href="#">aide</a>
</li>'
?>

<header id="header" class="flex centerV">
    <div id="logo" class="flex centerV">
        <button class="Hbuttonim">
            <img src="<?= $arflakaImg ?>" alt="name">
            <div id="menub" class="flex centerV column spaceAround">
                <?= $menuContent ?>
            </div>
        </button>
        <p> Arflaka</p>
    </div>
    <div id="menu" class="flex centerV spaceAround">
        <?= $menuContent ?>
    </div>
    <div id="info">
        <p>role: inconnu</p>
        <p class="flex centerV">fla: 0 <img id="fla" src="<?= $flaImg ?>" alt=""></p>
        <p>Arka: 0 <img src="" alt=""></p>
    </div>
    <div id="profil">
        <a href="profil">
            <img class="Himg" src="<?= $profilImg ?>" alt="">
        </a>
    </div>
</header>