<div id="connect" class="flex centerV centerH">
    <div id="case" class="flex column centerV spaceAround">
        <h1>Se Connecter</h1>
        <form action="" method="POST">
            <fieldset class="flex column centerV">
                <div class="formGroup field">
                    <input type="text" class="formField" id="pseudo" name="pseudo" placeholder="pseudo" required="" max="20" min="3">
                    <label for="pseudo" class="formLabel">pseudo</label>
                </div>
                <div class="formGroup field">
                    <input type="password" class="formField" id="password" name="password" placeholder="password" required="" max="30" min="6">
                    <label for="password" class="formLabel">password</label>
                </div>
                <div id="buttonCentrer">
                    <div id="envoie">
                        <button id="connectEnd" name="connectEnd" class="flex centerV">
                            <div class="svg-wrapper-1">
                                <div class="svg-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                    </svg>
                                </div>
                            </div>
                            <span>Envoyer</span>
                        </button>
                    </div>
                </div>
            </fieldset>
        </form>
        <a id="inscription" href="inscription">inscription</a>
    </div>
</div>