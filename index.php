<?php

require_once 'config/sesion.php';
//require_once 'config/global.php' ---  Esta opcion no permite estructurar y nos lia para las rutas
$global = $_SERVER['DOCUMENT_ROOT']; // Esto devuelve 'localhost' o sea la carpeta de 'HTDOCS'
$global .= "/lisboa_bd_clase/config/global.php";//Con el '.' CONCATENAMOS
//$global = $_SERVER['DOCUMENT_ROOT'] . "/lisboa_bd_clase/config/global.php"; Tambien se puede poner así
require_once($global);
?>
<?php require (ROOT . "/controller/indexController.php") ?>   
<?php require (ROOT . "/model/indexModel.php") ?>

