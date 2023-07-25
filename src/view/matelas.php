<?php
class matelasView
{
    public $controller;
    public $template;

    public function __construct(matelasController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "matelas.php";
    }

    public function render()
    {
        $data = $this->controller->getMatelas();

        require($this->template);
    }
}