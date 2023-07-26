<?php
class addMatelasController
{
    private $model;
    public $errors;


    public function __construct(addMatelasModel $model)
    {
        $this->model = $model;

    }
    public function getForm()
    {
        return array(
            "brand" => $this->model->brand,
            "name" => $this->model->name,
            "image" => $this->model->image,
            "dimension" => $this->model->dimension,
            "discount" => $this->model->discount,
            "price" => $this->model->price
        );
    }


    public function validateInput()
    {
        if (empty($this->model->brand) || empty($this->model->name) || empty($this->model->image) || empty($this->model->dimension) || empty($this->model->discount) || empty($this->model->price)) {
            $this->errors = "Remplisser les champs";
            return false;
        } else {
            return true;
        }

    }
    
    public function add()
    {
        $query = $this->model->db->prepare("INSERT INTO products (name, image, price, discount, id_brand, id_dimension) VALUES(:name, :image, :price, :discount, :brand, :dimension)");
        $query->bindParam(":name", $this->model->name);
        $query->bindParam(":image", $this->model->image);
        $query->bindParam(":price", $this->model->price);
        $query->bindParam(":discount", $this->model->discount);
        $query->bindParam(":brand", $this->model->brand);
        $query->bindParam(":dimension", $this->model->dimension);

        if ($query->execute()) {
            return true;
        } else {
            return $query->errorInfo();
        }
    }
    public function getBrands()
    {
        $query = $this->model->db->query("SELECT * FROM brands");
        $res = $query->fetchAll();
        return $res;
    }
    public function getDimensions()
    {
        $query = $this->model->db->query("SELECT * FROM dimensions");
        $res = $query->fetchAll();
        return $res;
    }

}