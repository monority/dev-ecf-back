<?php
class HomeModel
{
    public $db;
    
    public function __construct($db){
        $this->db = $db;
    }
}