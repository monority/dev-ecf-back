<?php
class HomeView
{
    public $controller;
    public $template;

    public function __construct(HomeController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "home.php";
    }

    public function render()
    {
        $data = $this->controller->getMatelas();
        $newprice = $this->controller->getPromos();
        require($this->template);
    }
}