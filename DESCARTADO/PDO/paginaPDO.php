<?php include 'contenido.php' 

?>
<?php require 'conexionPDO.php' ?>
<?php 
//$idPagina = intval($_GET['id']);

if (isset($_GET['id'])) {
  $idPagina = intval(htmlspecialchars($_GET['id']));
}else{
  header("location: index.php");
}
?>
<?php 
$consulta_sql = "SELECT * FROM contenido where id = $idPagina";
$resultados = $conexion->query($consulta_sql);

 $data1 = array();   
$data1 = $resultados->fetch( PDO::FETCH_ASSOC ); 
  
  
  $consulta_sql = "SELECT * FROM tags where id = $idPagina";
  $resultados2 = $conexion->query($consulta_sql);

  $data2 = array();   
  $data2 = $resultados2->fetch( PDO::FETCH_ASSOC );

  $consulta_sql = "SELECT url, imgPrincipal FROM contenido";
  $resultados3 = $conexion->query($consulta_sql);
?>


<?php require 'tags.php' ?>
<?php require 'head.php' ?>
<title>PRÁCTICA PAGINA DINAMICA CON BASE DE DATOS</title>
<meta name="description" content="PRÁCTICA PAGINA DINAMICA CON BASE DE DATOS">

  </head>
  <body>
    
<?php require 'header.php' ?>

<main role="main">




  <section class="jumbotron text-center">
    <div class="container">
      <h1>PRÁCTICA DE PLANTILLA DE PÁGINA DE CONTENIDOS</h1>
      <p class="lead text-muted">Esta es la plantilla que usamos para mostrar cada artículo por separado.</p>
      <p>
        <?php if(!$idPagina == 0){
         echo '<a href="pagina.php?id=' .  $idPagina - 1  . '"> ARTÍCULO ANTERIOR </a> | ';}
        ?>
        
        <a href="pagina.php?id=<?php echo $idPagina;   ?>"> ESTE ARTÍCULO </a>
        <?php if($idPagina == $resultados3->rowsCount() - 1){ 
          echo ' | <span class="text-muted"> No hay más artículos</span>';
        } else {
        echo ' | <a href="pagina.php?id=' . $idPagina + 1 . '"> ARTÍCULO SIGUIENTE </a> </p>';
        }
        ?>
      
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="<?php echo $data1['imgPrincipal'] ?>" alt="Lisboa y sus tranvías" class="img-fluid">
        </div>
        <div class="col-md-6">
          <h2><?php echo $data1['titular'] ?></h2>
          <p><small><?php echo $data1['fecha'] ?></small></p>
          <p><?php echo $data1['texto'] ?></p>
          <p><b><?php echo $data1['autor'] ?></b></p>
          <p><small>Tags de este artículo:<b>
           
            <?php
              if (!isset($data2['tag1'])) { 
                echo 'No hay tags'; 
              } else { 
                
                $i= 1;
                while ($i<4) {
                  if ($data2["tag$i"]=='') {
                    
                    $i++; 
                    continue;
                  }
                  echo ' <a href="tags.php?tag=' . $data2["tag$i"] . '">' . $data2["tag$i"] . '</a>';
                  $i++;
                }
                
                }
              ;
            ?>
          </b></small></p>
        </div>


      </div><!--fin de row-->

      <div class="row">
        <div class="col-md-6  py-5"><!-- cuadro con miniaturas de imagenes-->
          <h3>Navegar por imágenes</h3>
          <div class="row">
            <?php  

              

              while ($fila = $restultados3->fetch( PDO::FETCH_ASSOC )) { //mientras cada fila traiga de resultados la url e imgPrincipal, muestra
                echo '<div class="col-4 p-3"><a href="' . $fila["url"] . '"> <img src="' . $fila['imgPrincipal'] . '" class="img-fluid"></a></div>';
              }

              /* foreach (LISBOA as $key => $articulo) {
                echo '<div class="col-4 p-3"><a href="' . $articulo["url"] . '"> <img src="' . $articulo['imgPrincipal'] . '" class="img-fluid"></a></div>';
              } */
            ?>
          </div>
        </div>

      
        <div class="col-md-6 py-5"> <!-- MENU DE TODOS LOS ARTÍCULOS-->
            <h3>Todos los artículos</h3>
            <?php  

              $consulta_sql = "SELECT url, titular FROM contenido";
              $resultados3 = $conexion->query($consulta_sql);

              while ($fila = $resultados3->fetch( PDO::FETCH_ASSOC )) { 
                echo '<a href="' . $fila["url"] . '">' .  $fila["titular"] . '</a><br>';
              }
            /* foreach (LISBOA as $key => $articulo) {
              echo '<a href="' . $articulo["url"] . '">' .  $articulo["titular"] . '</a><br>';
            } */
            ?>
        </div>

      </div><!--fin de row-->
      
    </div><!--fin container-->
  </div><!--fin album-->

</main>


<?php require 'footer.php';
$conexion= null;
?>