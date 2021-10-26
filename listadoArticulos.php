<?php 
require_once 'config/sesion.php';

$global = $_SERVER['DOCUMENT_ROOT'] . "/lisboa_bd_clase/config/global.php";
require_once($global);
comprobar_sesion();

require (ROOT . "/controller/listadoController.php") ?>
<title>PRÁCTICA PAGINA DINAMICA CON BASE DE DATOS</title>
<meta name="description" content="PRÁCTICA PAGINA DINAMICA CON BASE DE DATOS">
</head>
<body> 
<?php require (ROOT . "/model/listadoArticulosModel.php") ?>

