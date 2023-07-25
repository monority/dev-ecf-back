<?php
class HomeModel
{
    public $db;
    public $lenght = 0;
    public $limit = 5;
    public $debut;
    public $page;
    public $resultFoundRows;
    public $nombredElementsTotal;
    public $nombreDePages;

    public function __construct($db)
    {
        $this->db = $db;
    }

}