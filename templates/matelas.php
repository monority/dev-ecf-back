<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Literie3000</title>
    <link rel="stylesheet" href="..\assets\css\main.css" />
    <link rel="shortcut icon" href="../public/assets/img/2.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">


</head>

<body>

    <?php
    require("header.php");
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
            <div class="price-wrap">
                <p>
                    <?= $data["prix"] ?> €
                </p>
            </div>
            <div class="dimension-wrap">
                <p>
                    <?= $data["largeur"] ?> cm x
                    <?= $data["longueur"] ?> cm
                </p>
            </div>
            <div class="image-wrap">
                <img src="<?= $data["image"] ?>" alt="">
            </div>
            <div class="button-wrap">
                <a href="../" class="btn btn-back">Retour</a>
            </div>
            <?php
        }
        ?>
    </div>
</body>

</html>