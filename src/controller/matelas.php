<?php
class matelasController
{
    private $model;

    public function __construct(matelasModel $model)
    {
        $this->model = $model;
    }
    public function getMatelas()
    {
        $query = $this->model->db->prepare("SELECT * FROM literie.matelas WHERE id = :id");
        $query->bindParam(":id", $this->model->id, PDO::PARAM_INT);
        $query->execute();
        $matelas = $query->fetch();

        return $matelas;
    }
}