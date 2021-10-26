<?php
$resultados_listado = getAll();// así ejecutamos la funcion pero lo tenemos que asignar a $resultados1
$data = getMetadataByIdmd(4);
require (ROOT . "/parts/head.php");
require (ROOT . "/parts/header.php");
require (ROOT . "/views/listadoArticulosView.php");
require (ROOT . "/parts/footer.php")
 ?>