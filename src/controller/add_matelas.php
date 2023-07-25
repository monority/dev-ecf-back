<?php
class addMatelasController
{
    private $model;


    public function __construct(addMatelasModel $model)
    {
        $this->model = $model;

    }
    public function getForm()
    {
        return array(
            "marque" => $this->model->marque,
            "type" => $this->model->type,
            "image" => $this->model->image,
            "largeur" => $this->model->largeur,
            "longueur" => $this->model->longueur,
            "prix" => $this->model->prix
        );
    }
    public function validatePicture()
    {
        if (isset($_FILES["picture"]) && $_FILES["picture"]["error"] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES["picture"]["tmp_name"];
            $fileName = $_FILES["picture"]["name"];
            $fileType = $_FILES["picture"]["type"];
            $fileNameArray = explode(".", $fileName);
            $fileExtension = end($fileNameArray);
            $newFileName = md5($fileName . time()) . "." . $fileExtension;
            $fileDestPath = "../public/assets/img/temp/{$newFileName}";
            $allowedTypes = array("image/jpeg", "image/png", "image/webp");

            if (in_array($fileType, $allowedTypes)) {
                move_uploaded_file($fileTmpPath, $fileDestPath);
            }
            return true;
        } else {
            return false;
        }

    }

    public function validateInput()
    {
        if (empty($this->model->marque) || empty($this->model->image) || empty($this->model->type) || empty($this->model->largeur) || empty($this->model->longueur) || empty($this->model->prix)) {

            return false;
        } else {
            return true;
        }

    }
    public function addMatelas()
    {
        $query = $this->model->db->prepare("INSERT INTO literie.matelas (marque, type, image, largeur, longueur, prix) VALUES (:marque, :type, :image, :largeur, :longueur, :prix)");
        $query->bindParam(":marque", $this->model->marque);
        $query->bindParam(":type", $this->model->type);
        $query->bindParam(":image", $this->model->image);
        $query->bindParam(":largeur", $this->model->largeur, PDO::PARAM_INT);
        $query->bindParam(":longueur", $this->model->longueur, PDO::PARAM_INT);
        $query->bindParam(":prix", $this->model->prix, PDO::PARAM_INT);
        $query->execute();
    }

}