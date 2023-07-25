<?php
class deleteMatelasController
{
    private $model;

    public function __construct(deleteMatelasModel $model)
    {
        $this->model = $model;

    }
    public function deleteMatelas()
    {
        if (isset($_GET["id"])) {
            $matelasId = $_GET["id"];
            
            $query = $this->model->db->prepare("DELETE FROM literie.matelas_promos WHERE matelas_id = :id");
            $query->bindParam(":id", $matelasId, PDO::PARAM_INT);
            $query->execute();
            
            $query_second = $this->model->db->prepare("DELETE FROM literie.matelas WHERE id = :id");
            $query_second->bindParam(":id", $matelasId, PDO::PARAM_INT);
            $query_second->execute();
        }
    }


}