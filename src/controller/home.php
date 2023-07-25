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
        $query = $this->model->db->query("SELECT * FROM literie.matelas GROUP BY matelas.id
        ORDER BY matelas.id");
        $matelas = $query->fetchAll(PDO::FETCH_ASSOC);
        return $matelas;
    }

}