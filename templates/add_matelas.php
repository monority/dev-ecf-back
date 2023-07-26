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
                        <label for="inputName">Nom *</label>
                        <input type="text" name="name" id="inputName" value="<?= isset($data["name"]) ? $data["name"] : "" ?>" required />
                    </div>
                <div class="form-group">
                    <label for="inputbrand">Marque du matelas :</label>
                    <select name="brand" id="inputBrand">
                        <?php
                        foreach ($brands as $brand) {
                            ?>
                            <option value="<?= $brand["id"] ?>" <?= isset($data["brand"]) && ($brand["id"] == $data["brand"]) ? "selected" : "" ?>><?= $brand["name"] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputDimension">Dimension</label>
                    <select name="dimension" id="inputDimension">
                        <?php
                        foreach ($dimensions as $dimension) {
                            ?>
                            <option value="<?= $dimension["id"] ?>" <?= isset($data["dimension"]) && ($dimension["id"] == $data["dimension"]) ? "selected" : "" ?>><?= $dimension["name"] ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
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
                    <label for="inputPrice">Prix :</label>
                    <input type="number" name="price" id="inputPrice"
                        value="<?= isset($data["price"]) ? $data["price"] : 0 ?>" required />

                </div>
                <div class="form-group">
                        <label for="inputDiscount">Remise (en euros)</label>
                        <input type="number" name="discount" id="inputDiscount" value="<?= $data["discount"] == number_format(0, 2) ? $data["discount"] : 0 ?>" />
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