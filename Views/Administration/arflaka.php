<div id="arflaka" class="flex column centerV">
    <h1>Modification et administration d'Arflaka</h1>
    <p>Liste de tout les utilisateur d'Arflaka</p>
    <div id="listPlayers" class="flex wrap centerH">
        <?php
        $buttonUri = "/administration/users/info";
        require_once("./Views/Components/list/listUser.php"); ?>
    </div>
    <br>
    <!-- <button>Edit</button> -->
</div>
<br>
<div id="objectif" class="flex column centerV">
    <h1>objectifs</h1>
    <p>Liste de tout les objectifs</p>
    <div id="listObj" class="flex wrap centerH">
        <?php require_once("./Views/Components/list/listObjectif.php"); ?>
    </div>
    <br>
    <!-- <button>Edit</button> -->
</div>
<br>
<div id="role" class="flex column centerV">
    <h1>Roles</h1>
    <p>Liste de tout les roles</p>
    <div id="listRole" class="flex wrap centerH">
        <?php require_once("./Views/Components/list/listRole.php"); ?>
    </div>
    <br>
    <!-- <button>Edit</button> -->
</div>