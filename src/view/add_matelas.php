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
            if (!$this->controller->validateBrand()) {
                $errors["marque"] = "Nom requis";
            }
            if (empty($errors)) {
                if ($this->controller->addMatelas()){
                    header("Location: ./");
                } else {
                    $message = "Erreur de bdd";
                }
            } else {
                // Message d'erreur
                $message = "<div class=\"alert\">{$errors["message"]}</div>";
            }

        }
        require($this->template);

    }
}

