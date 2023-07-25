<?php
class deleteMatelasView
{
    public $controller;
    public $template;

    public function __construct(deleteMatelasController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "delete_matelas.php";
    }

    public function render()
    {
       if ($this->controller->deleteMatelas()){
        header("Location : ./");
       }
        require($this->template);

    }
}