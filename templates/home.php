<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Literie3000</title>
    <link rel="stylesheet" href="../public/assets/css/main.css" />
    <link rel="shortcut icon" href="../public/assets/img/2.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">


</head>

<body>
    <?php
    $home = true;
    require_once("header.php");
    ?>
    <div id="home" class="block">
        <div class="title-wrap">
            <h1>Catalogue</h1>
            <a href="add_matelas">
                <h1>Ajout d'un matelas</h1>
            </a>
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
                            <?= $matelas["brand"] ?>
                        </h1>
                        <p>
                            <?= $matelas["name"] ?>
                        </p>
                        <hr>
                    </div>
                    <div class="wrap">
                        <p>Dimension : <strong>
                                <?= $matelas["dimension"] ?>

                            </strong></p>
                    </div>
                    <div class="price-wrap">
                    <?php $price = $formatter->formatCurrency($matelas["price"], "EUR");    ?>
                        <span class="<?= $matelas["discount"] != number_format(0, 2) ? "line-through" : "" ?>"><?= $price ?></span>
                        <?php
                        if ($matelas["discount"] != number_format(0, 2)) {
                            $discountPrice = $matelas["price"] - $matelas["discount"];
                            $discountPrice = $formatter->formatCurrency($discountPrice, "EUR");
                            ?>
                            <span class="discount-price">
                                <?= $discountPrice ?>
                            </span>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="button-wrap">
                        <a href="matelas/<?= $matelas["id"] ?>" class="btn">Détail</a>
                        <a href="delete_matelas/<?= $matelas["id"] ?>" class="btn btn-delete">Supprimer</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

    </div>
</body>

</html>

<!-- sass --watch public/assets/sass/main.scss public/assets/css/main.css -->