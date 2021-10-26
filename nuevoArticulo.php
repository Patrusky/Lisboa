<?php 
require_once 'config/sesion.php';
$global = $_SERVER['DOCUMENT_ROOT'] . "/lisboa_bd_clase/config/global.php";
require_once($global);
comprobar_sesion();
require (ROOT . "/controller/nuevoController.php");
require (ROOT . "/model/nuevoArticuloModel.php") ?>

