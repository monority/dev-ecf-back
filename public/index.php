<?php
session_start();

require_once("../config/index.php");
$dsn = "mysql:host=" . DB_HOSTNAME . ";dbname=" . DB_DATABASE;
$db = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
$page = "home";
if (isset($_GET["page"]) && !empty($_GET["page"])) {
	$page = $_GET["page"];
}

$components = array(
	"home" => array(
		"model" => "HomeModel",
		"view" => "HomeView",
		"controller" => "HomeController"
	),
	"matelas" => array(
		"model" => "matelasModel",
		"view" => "matelasView",
		"controller" => "matelasController"
	),
);

$find = false;
foreach ($components as $key => $component) {
	if ($page == $key) {
		$find = true;
		$model = $component["model"];
		$view = $component["view"];
		$controller = $component["controller"];
		break;
	}
}

if ($find) {
	require_once(DIR_MODEL . $page . ".php");
	require_once(DIR_CONTROLLER . $page . ".php");
	require_once(DIR_VIEW . $page . ".php");

	$pageModel = new $model($db);
	$pageController = new $controller($pageModel);
	$pageView = new $view($pageController);

	$pageView->render();
}