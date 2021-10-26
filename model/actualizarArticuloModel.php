<?php 
  $data = getMetadataByIdmd(3);
  $data1 = getContenidoById($idPagina);
  $data2 = getTagsById($idPagina);
  require (ROOT . "/parts/head.php");
  require (ROOT . "/parts/header.php");
  require (ROOT . "/views/actualizarArticuloView.php");
  require (ROOT . "/parts/footer.php");
?>