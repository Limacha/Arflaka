<?php foreach ($roles as $role) : ?>
    <div id="<?= 'role' . $role->roleId ?>" class="roles flex column spaceBetween">
        <div>
            <p>Name:</p>
            <p class="tText"><?= $role->roleName ?></p>
            <p>description:</p>
            <p class="tText"><?= $role->roleDescription ?></p>
        </div>
        <form class="Fmore" action="/administration/roles/info" method="GET">
            <button class="more" name="more" value="<?= $_GET["more"] = $role->roleId ?>">
                <span>More</span>
            </button>
        </form>
    </div>
<?php endforeach ?>