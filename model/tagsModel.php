<?php 
  $consulta_sql = "SELECT * FROM contenido INNER JOIN tags ON contenido.id=tags.id WHERE tag1='$idTag' OR tag2='$idTag' OR tag3='$idTag' OR tag4='$idTag'";
  //con esta consulta estamos uniendo el id de contenido y de tags, con lo que con un solo while podemos acceder a ambos
 $resultados = $conexion->query($consulta_sql);
 //$data = getMetadataByIdmd(5);
 //No hacemos una funcion de cosulta porque es de uso único.

  require (ROOT . "/parts/header.php");
  require (ROOT . "/views/tagsView.php");
  require (ROOT . "/parts/footer.php");
?>