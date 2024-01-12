<div id="body" class="flex column centerV">
    <a href="inscription"><button id="inscription" name="inscription">inscription</button></a>

    <h1>Connection</h1>
    <form action="connection" method="POST">
        <fieldset class="centerV">
            <legend>connection</legend>
            <div>
                <label for="pseudo">votre pseudo</label>
                <input type="text" id="pseudo" name="pseudo" require>
            </div>
            <div>
                <label for="password">votre password</label>
                <input type="password" id="password" name="password" require>
            </div>
        </fieldset>
        <div class="flex spaceAround">
            <button id="connectEnd" name="connectEnd">Envoyer</button>
        </div>
    </form>
</div>