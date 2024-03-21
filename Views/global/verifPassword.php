<div id="body" class="flex column centerV">
    <h1>Merci de confirmer votre mot de passe!</h1>
    <form action="verifPassword" method="POST" class="flex column centerV">
        <div id="divFieldset" class="flex spaceBetween">
            <input type="password" class="formField" id="password" name="password" placeholder="password" required="" max="30" min="6">
        </div>
        <div class="flex spaceBetween">
            <button id="verifPasswordEnd" name="verifPasswordEnd" value="<?= $_GET['verifPassword'] ?>">verifier</button>
        </div>
    </form>
</div>