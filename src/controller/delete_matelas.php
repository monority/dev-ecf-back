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
        if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
            $matelasId = $_GET["id"];
            $query = $this->model->db->prepare("DELETE FROM literie.matelas WHERE id = :id");
            $query->bindParam(":id", $matelasId, PDO::PARAM_INT);
            $query->execute();
        }
    }


}