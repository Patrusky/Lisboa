<?php

//Siun usuario entra con una url index.php cargará indexView.php
// Si el usuario aprieta el botón de blocks en la pag index, se cargará indexBlocksView.php
//Si el usuario aprieta el botón de grid, se cargará el de indexView.php
$resultados1 = getAll();// así ejecutamos la funcion pero lo tenemos que asignar a $resultados1

$data = getMetadataByIdmd(1);

require (ROOT . "/parts/head.php");
require (ROOT . "/parts/header.php");

if ($d=="grid") {
    require (ROOT . "/views/indexView.php");
} else {
    if ($d=="block") {
      require (ROOT . "/views/indexBlocksView.php");  
    } else {
        require (ROOT . "/views/indexView.php");
    }
}

require (ROOT . "/parts/footer.php");
 ?>