<div id="body" class="flex column centerV centerH fullHeight">
    <h1>Merci de confirmer votre mot de passe!</h1>
    <form action="" method="POST" class="flex column centerV">
        <div class="formGroup field">
            <input type="password" class="formField" id="password" name="password" placeholder="password" required="" max="30" min="6">
            <label for="password" class="formLabel">password</label>
        </div>
        <div class="flex spaceBetween">
            <button id="verifPasswordEnd" name="verifPasswordEnd" value="<?= $_GET['verifPassword'] ?>">verifier</button>
        </div>
    </form>
</div>