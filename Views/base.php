<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?></title>
    <link rel="icon" href="<?= $arflakaImg ?>">

    <link rel="stylesheet" href="<?= $cssDirectory ?>constants.css">
    <link rel="stylesheet" href="<?= $cssDirectory ?>keyframes.css">
    <link rel="stylesheet" href="<?= $cssDirectory ?>flex.css">
    <link rel="stylesheet" href="<?= $cssDirectory ?>style.css">

    <link rel="stylesheet" href="<?= $cssDirectory ?>header.css">
    <link rel="stylesheet" href="<?= $cssDirectory ?>footer.css">

    <link rel="stylesheet" href="<?= $css ?>">
</head>

<body>
    <?php include  $header  ?>

    <main>
        <?php include $template ?>
    </main>

    <?php include $footer ?>
    <script src="<?= $jsDirectory ?>function.js"></script>
    <script src="/Ajax/ajaxFunction.js"></script>
    <script src="<?= $script ?>"></script>
</body>

</html>