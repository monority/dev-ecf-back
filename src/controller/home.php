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
        $query = $this->model->db->query("SELECT matelas.id, matelas.marque, matelas.image, matelas.type, matelas.largeur, matelas.longueur, matelas.prix,
        GROUP_CONCAT(promos.newprice SEPARATOR ', ') AS promos
        FROM matelas
        LEFT JOIN matelas_promos ON matelas.id = matelas_promos.matelas_id
        LEFT JOIN promos ON promos.id = matelas_promos.promos_id
        GROUP BY matelas.id, matelas.marque, matelas.image, matelas.type, matelas.largeur, matelas.longueur, matelas.prix"
        );
        $matelas = $query->fetchAll(PDO::FETCH_ASSOC);
        return $matelas;
    }


}