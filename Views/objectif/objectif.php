<div id="objectif" class="flex column">
    <div id="head" class="flex spaceAround centerV">
        <div>
            <h1>objectifs</h1>
            <p>Liste de tout les objectifs</p>
        </div>
    </div>
    <div class="flex spaceAround centerV">
        <!-- <form action="find" method="GET">
            <button id="objectifCreate" name="find" value="objectifCreate">chercher</button>
        </form> -->
        <?php if (isset($_SESSION["ID"])) : ?>
            <?php if ($_SESSION["ID"] == 11) : ?>
                <form action="verifPassword" method="GET">
                    <button id="objectifCreate" name="verifPassword" value="/objectif/create">ajouter</button>
                </form>
            <?php endif ?>
        <?php endif ?>
    </div>
    <div id="listObj" class="flex wrap centerH">
        <?php require_once("./Views/Components/list/listObjectif.php"); ?>
    </div>
</div>