<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail du matelas</title>
</head>

<body>
    <?php
    require_once("header.php");
    ?>
    <div id="detail">
        <?php

        if (empty($data)) {
            ?>
            <div class="title-wrap">
                <h1>Matelas introuvable</h1>
            </div>
            <?php
        } else {
            ?>
            <div class="title-wrap">
                <h1>
                    <?= $data["marque"] . " " . $data["type"] ?>
                </h1>
            </div>
            <p>
                <?= $data["prix"] ?>
            </p>
            <img src="<?= $data["image"] ?>" alt="">
            <?php
        }
        ?>
    </div>
</body>

</html>