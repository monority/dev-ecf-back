<?php
class addMatelasModel
{
    public $db;
    public $type;
    public $marque;
    public $largeur;
    public $longueur;
    public $image;
    public $prix;
    public $newFilename;
    public function __construct($db)
    {
        $this->db = $db;
        if (!empty($_POST)) {
            $this->marque = trim(strip_tags($_POST['marque']));
            $this->type = trim(strip_tags($_POST['type']));
            $this->image = trim(strip_tags($_POST['image']));
            $this->largeur = trim(strip_tags($_POST['largeur']));
            $this->longueur = trim(strip_tags($_POST['longueur']));
            $this->prix = trim(strip_tags($_POST["prix"]));
        }
    }

}