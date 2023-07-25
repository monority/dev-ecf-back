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
                $errors["message"] = "Les champs ne sont pas validés";
            }
            if (empty($errors)) {
                if ($this->controller->addMatelas()) {
                    header("Location: ./");
                } else {
                    $message = "Erreur de bdd";
                }
            } else {
                $message = "<div class=\"alert\">Remplisser les champs</div>";
            }

        }
        require($this->template);

    }
}