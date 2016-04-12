<?php
session_start();
if(isset($_GET) && isset($_GET["ctrl"]) && isset($_GET["action"])){
    $ctrl = $_GET["ctrl"];
    $action = $_GET["action"];
}
else{
    $ctrl = "default";
    $action = "index";
}
if(!class_exists($ctrl)){
	include_once("../controllers/".$ctrl."Controller.php");
}	
$ctrl = $ctrl."Controller";
$controller = new $ctrl();
$controller->$action();