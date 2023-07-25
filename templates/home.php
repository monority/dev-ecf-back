<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ECF BACK</title>
    <link rel="stylesheet" href="../css/main.css" />
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
                <img src="<?= $matelas["image"] ?>" alt="">
            </div>
            <?php
        }
        ?>
    </div>
    </div>
</body>

</html>

<!-- sass --watch ../public/assets/sass/main.scss css/main.css -->