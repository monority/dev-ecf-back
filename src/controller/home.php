<?php
class HomeController
{
    private $model;

    public function __construct(HomeModel $model)
    {
        $this->model = $model;

    }
    public function getMatelas()
    {
        $products = $this->model->db->query("SELECT p.id, p.name, p.image, p.price, p.discount, b.name AS brand, d.name AS dimension FROM products AS p 
        INNER JOIN brands AS b ON p.id_brand = b.id
        INNER JOIN dimensions AS d ON p.id_dimension = d.id;");
        
        return $products;
    }


}