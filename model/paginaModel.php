<?php 
  $data1 = getContenidoById($idPagina);
  $data2 = getTagsById($idPagina);
  $resultados3 = getImgUrlTitular();
  $resultados4 = getImgUrlTitular();

  
  require (ROOT . "/parts/headPagina.php");
  require (ROOT . "/parts/header.php");
  require (ROOT . "/views/paginaView.php");
  require (ROOT . "/parts/footer.php");
?>