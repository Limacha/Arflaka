<div id="body" class="flex centerV centerH fullHeight">
    <div id="logout">
        <a href="inscription"><button id="inscription" name="inscription">inscription</button></a>
        <a href="connection"><button id="connection" name="connection">connection</button></a>
    </div>
    <div id="login">
        <img src="<?= $profilImg ?>" alt="avatar<?= $_SESSION['ID'] ?>">
        <table>
            <tr>
                <td>
                    <p class="head">username</p>
                    <p class="text"><?= $_SESSION['pseudo'] ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="head">email</p>
                    <p class="text"><?= $_SESSION['email'] ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="head">phone</p>
                    <p class="text"><?= (isset($_SESSION['phone'])) ? $_SESSION['phone'] : 'pas de numero' ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="head">description</p>
                    <p class="text"><?= $_SESSION['description'] ?></p>
                </td>
            </tr>
        </table>
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
            <form action="verifPassword" method="GET">
                <button id="deleteButton" name="verifPassword" value="deleteProfil">
                    <p>suprimer le profil</p>
                </button>
            </form>
        </div>

    </div>
</div>