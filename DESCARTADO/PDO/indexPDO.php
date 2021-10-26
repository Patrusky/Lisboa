<?php require 'conexionPDO.php' ?>
<?php 

    $consulta_sql = "SELECT * FROM contenido LEFT JOIN tags ON contenido.id=tags.id";
     //con esta consulta estamos uniendo el id de contenido y de tags, con lo que con un solo while podemos acceder a ambos
    $resultados1 = $conexion->query($consulta_sql);
    
  ?>
<?php require 'head.php' ?>

<title>PRÁCTICA INDEX DINAMICA CON BASE DE DATOS</title>
<meta name="description" content="PRÁCTICA PAGINA DINAMICA CON BASE DE DATOS">

  </head>
  <body>
    
<?php require 'header.php' ?>

<main role="main">
  

  <section class="jumbotron text-center">
    <div class="container">
      <h1>PRÁCTICA LOOP FOREACH EN PHP</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <?php
        
          //foreach (LISBOA as $key => $articulo) {
           // echo $articulo['titular'] . '<br>'; // esto ha sido para comprobar que funciona la llamada a contenido.php y el foreach
          while ($fila = $resultados1->fetch( PDO::FETCH_ASSOC )) { 
           echo 
           '<div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img src="' . $fila['imgPrincipal'] . '" class="img-fluid">
                <div class="card-body">
                  <h2>' . $fila['titular'] . '</h2>
                  <small>' . $fila['fecha'] . '</small><br>
                  <p class="card-text">' . $fila['texto'] . '</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="' . $fila['url'] . '" type="button" class="btn btn-sm btn-outline-secondary">Ver Más</a>
                    </div>
                    <small class="text-muted">' . $fila['autor'] . '</small>
                  </div>
                  <small class="text-muted">TAGS: ' ;
                  //if (!is_array($articulo['tags'])) {
                  // while ($fila = $resultados->fetch_assoc()) {
                    //  if (!isset($fila['tag1'])) {
                    // echo 'No hay tags';
                    //  } else {
                      $tagsVacios=0;
                        $i=1;
                        while ($i<=4) {
                          if ($fila["tag$i"]=='') {
                          $i++; //incrementas solo el primero par auqe pase al sig tag
                          $tagsVacios++; // incrementa cualquier tag
                          continue;
                          }
                          echo ' <a href="tags.php?tag=' . $fila["tag$i"] . '">#' . $fila["tag$i"] . '</a>';
                          $i++;
                        }
                        if ($tagsVacios==4) { //si se p
                         echo 'No hay tags';
                        }
                      //}
                    ;
                  echo '</small>
                  </div>
              </div>
            </div>';
          }//cierre wgile principal
        ?>
      </div><!-- fin de .row-->
    </div>
  </div>

</main>


<?php require 'footer.php' ?>