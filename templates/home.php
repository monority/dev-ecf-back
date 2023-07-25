<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Literie3000</title>
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="shortcut icon" href="/path/to/favicon.ico" type="image/x-icon" />


</head>

<body>
    <?php
    require_once("header.php");
    ?>

    <div id="home">
        <div class="title-wrap">
            <h1>Catalogue</h1>
        </div>
        <div class="content-wrap">
            <?php
            foreach ($data as $matelas) {
                ?>
                <div class="matelas-box">
                    <div class="image-wrap">
                        <img src="<?= $matelas["image"] ?>" alt="">
                    </div>
                    <div class="head-wrap">
                        <h1>
                            <?= $matelas["marque"] ?>
                        </h1>
                        <p>
                            <?= $matelas["type"] ?>
                        </p>
                        <hr>
                    </div>
                    <div class="wrap">
                        <p>Dimension : <strong>
                                <?= $matelas["largeur"] ?> x
                                <?= $matelas["longueur"] ?>
                            </strong></p>
                    </div>
                    <div class="price-wrap">
                        <p>
                            <?= $matelas["prix"] ?>€
                        </p>
                        <p>
                            <?php isset($newprice) ? $newprice : "" ?>
                        </p>
                        <a href="matelas/<?= $matelas["id"] ?>">Détail</a>


                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</body>

</html>

<!-- sass --watch ../public/assets/sass/main.scss css/main.css -->