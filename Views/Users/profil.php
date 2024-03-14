<div id="body" class="flex centerV centerH fullHeight">
    <div id="logout">
        <a href="inscription"><button id="inscription" name="inscription">inscription</button></a>
        <a href="connection"><button id="connection" name="connection">connection</button></a>
    </div>
    <div id="login">
        <img src="<?= $profilImg ?>" alt="avatar<?= $_SESSION['ID'] ?>">
        <div class="flex spaceBetween">
            <form action="profil" method="POST">
                <button id="logoutButton" name="logoutButton">
                    <p>deconnection</p>
                </button>
            </form>
            <form action="editProfil" method="POST">
                <button id="editButton" name="editButton">
                    <p>modifier le profil</p>
                </button>
            </form>
            <form action="deleteProfil" method="POST">
                <button id="deleteButton" name="deleteButton">
                    <p>suprimer le profil</p>
                </button>
            </form>
        </div>

    </div>
</div>