<?php
// ARCHIVO PARA AJUSTES GLOBALES DEL SITIO
// LO MÁS RAÍZ
$db = [
    "host" => "localhost",
    "user" => "root",
    "password" => "",
    "database_name" => "Lisboa_bd",
];


require_once 'conexion.php';
require_once 'functions.php';
define("ROOT",$_SERVER['DOCUMENT_ROOT'] . "/lisboa_bd_clase");
require_once  (ROOT . "/model/db.php"); //Esta sentancia se renderiza siempre que carga la pág, y es la ruta a la db.php que hay en model. Así no hay que ponerlo en cada archivo de model. 


?>