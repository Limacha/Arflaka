<div id="body" class="flex centerV centerH fullHeight">
    <div id="logout" class="centerV spaceAround">
        <a href="/profil/inscription"><button id="inscription" name="inscription">inscription</button></a>
        <a href="/profil/connection"><button id="connection" name="connection">connection</button></a>
    </div>
    <div id="login">
        <img src="<?= $profilImg ?>" alt="avatar<?= $_SESSION['ID'] ?>">
        <table>
            <tr>
                <td>
                    <p class="tHead">username</p>
                    <p class="tText"><?= $_SESSION['pseudo'] ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="tHead">email</p>
                    <p class="tText"><?= $_SESSION['email'] ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="tHead">phone</p>
                    <p class="tText"><?= (isset($_SESSION['phone'])) ? $_SESSION['phone'] : 'pas de numero' ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="tHead">description</p>
                    <p class="tText"><?= (isset($_SESSION['description'])) ? $_SESSION['description'] : 'pas de description' ?></p>
                </td>
            </tr>
        </table>
        <div class="flex spaceBetween">
            <form action="" method="POST">
                <button id="logoutButton" name="logoutButton">
                    <p>deconnection</p>
                </button>
            </form>
            <a href="/profil/editProfil">
                <button id="editButton" name="editButton">
                    modifier le profil
                </button>
            </a>
            <form action="/verifPassword" method="GET">
                <button id="deleteButton" name="verifPassword" value="deleteProfil">
                    <p>suprimer le profil</p>
                </button>
            </form>
        </div>

    </div>
</div>