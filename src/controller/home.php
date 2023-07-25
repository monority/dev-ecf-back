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
        $query = $this->model->db->query("SELECT * FROM literie.matelas ORDER BY id");
        $matelas = $query->fetchAll(PDO::FETCH_ASSOC);
        return $matelas;
    }
    public function getPromos()
    {
        $query = $this->model->db->query("SELECT promos.newprice 
        FROM literie.promos 
        INNER JOIN matelas_promos ON literie.promos.id = matelas_promos.promos_id 
        INNER JOIN matelas ON matelas.id = matelas_promos.matelas_id 
        ORDER BY promos.newprice");

        $newprice = $query->fetchAll(PDO::FETCH_ASSOC);
        return $newprice;
    }
}