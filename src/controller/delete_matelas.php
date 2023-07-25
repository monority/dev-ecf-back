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
            $deleteQuery = "DELETE FROM literie.matelas_promos WHERE matelas_id = :id";
            $deleteStmt = $this->model->db->prepare($deleteQuery);
            $deleteStmt->bindParam(":id", $matelasId, PDO::PARAM_INT);
            $deleteStmt->execute();

            // Then, proceed with deleting the matelas row
            $deleteMatelasQuery = "DELETE FROM literie.matelas WHERE id = :id";
            $deleteMatelasStmt = $this->model->db->prepare($deleteMatelasQuery);
            $deleteMatelasStmt->bindParam(":id", $matelasId, PDO::PARAM_INT);
            $deleteMatelasStmt->execute();
        }
    }


}