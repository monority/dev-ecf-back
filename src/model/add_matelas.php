<?php
class addMatelasModel
{
    public $db;
    public $name;
    public $brand;
    public $price;
    public $dimension;
    public $image;
    public $discount;
    public function __construct($db)
    {
        $this->db = $db;
        if (!empty($_POST)) {
            $this->name = trim(strip_tags($_POST['name']));
            $this->brand = trim(strip_tags($_POST['brand']));
            $this->image = trim(strip_tags($_POST['image']));
            $this->price = trim(strip_tags($_POST['price']));
            $this->dimension = trim(strip_tags($_POST['dimension']));
            $this->discount = trim(strip_tags($_POST["discount"]));
        }
    }

}