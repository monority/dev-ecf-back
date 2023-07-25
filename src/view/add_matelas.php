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
            // if (!$this->controller->validatePicture()) {
            //     $errors["picture"] = "L'image ne fonctionne pas";
            // }
            if (empty($errors["marque"])) {
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