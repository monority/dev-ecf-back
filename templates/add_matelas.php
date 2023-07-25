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
    <div id="add">
        <div class="container">
            <h1>Ajouter un matelas</h1>
            <?= $message ?>

            <form action="" method="post">
                <div class="form-group">
                    <label for="inputMarque">Marque du matelas :</label>
                    <input type="text" id="inputMarque" name="marque"
                        value="<?= isset($data["marque"]) ? $data["marque"] : "" ?>" required />
                    <?php if (isset($errors["marque"])) {
                        ?>
                        <span class="info-error">
                            <?= $errors["marque"] ?>
                        </span>
                        <?php
                    } ?>
                </div>
                <div class="form-group">
                    <label for="inputType">Type du matelas : </label>
                    <input type="text" id="inputType" name="type"
                        value="<?= isset($data["type"]) ? $data["type"] : "" ?>" required />
                    <?php if (isset($errors["type"])) {
                        ?>
                        <span class="info-error">
                            <?= $errors["type"] ?>
                        </span>
                        <?php
                    } ?>
                </div>

                <div class="form-group">
                    <label for="inputImage">Image du matelas (via url) :</label>
                    <input type="text" id="inputImage" name="image">
                    <?php if (isset($errors["image"])) {
                        ?>
                        <span class="info-error">
                            <?= $errors["image"] ?>
                        </span>
                        <?php
                    } ?>
                </div>

                <div class="form-group">
                    <label for="inputLargeur">Largeur :</label>
                    <input type="number" name="largeur" id="inputLargeur"
                        value="<?= isset($data["largeur"]) ? $data["largeur"] : 0 ?>" required />

                </div>
                <div class="form-group">
                    <label for="inputLongueur">Longueur :</label>
                    <input type="number" name="longueur" id="inputLongueur"
                        value="<?= isset($data["longueur"]) ? $data["longueur"] : 0 ?>" required />

                </div>
                <div class="form-group">
                    <label for="inputPrix">Prix :</label>
                    <input type="number" name="prix" id="inputprix"
                        value="<?= isset($data["prix"]) ? $data["prix"] : 0 ?>" required />

                </div>

                <input type="submit" value="Ajouter le matelas" class="btn">

            </form>
            <div class="button-wrap">
                <a href="./" class="btn btn-back">Retour</a>
            </div>
        </div>
    </div>
</body>

</html>