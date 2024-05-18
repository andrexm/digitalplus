<?php $parts = __DIR__ . "/parts/" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Tailwind CSS project</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include($parts . "navbar.php") ?>
    <?php include($parts . "hero.php") ?>
    <?php include($parts . "cards.php") ?>
    <?php include($parts . "about.php") ?>
    <?php include($parts . "cta.php") ?>
    <?php include($parts . "services.php") ?>

    <script src="assets/scripts/script.js"></script>
</body>
</html>
