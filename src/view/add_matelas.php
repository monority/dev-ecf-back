<?php
class addMatelasView
{
    public $controller;
    public $template;

    public function __construct(addMatelasController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "add_matelas.php";
    }

    public function render()
    {
        $message = "";
        if (!empty($_POST)) {
            $data = $this->controller->getForm();
            if (!$this->controller->validateInput()) {
                $errors["message"] = $this->controller->errors;
            }
            if (empty($errors)) {
                if ($this->controller->add()) {
                    header("Location: ./");
                } else {
                    $message = "Erreur de bdd";
                }
            } else {
                $message = "<div class=\"alert alert-danger\">{$errors["message"]}</div>";
            }

        }
        $brands = $this->controller->getBrands();
        $dimensions = $this->controller->getDimensions();
        require($this->template);

    }
}