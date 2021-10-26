<main role="main">
  

  <section class="jumbotron text-center">
    <div class="container">
      <h1><?php echo $data['title']?></h1>
      <p class="lead text-muted">En esta práctica aprendemos a utilizar un loop ingresando datos traídos por una consulta datos.</p>
      
    </div>
  </section>
  <div class="container">
    <div class="row">
      
    </div>
  </div>      
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row mb-3">
      <div class="col-2">
        <div class="row">
          <div class="col">
            <a href="index.php?d=block" class="btn btn-white my-2"> <img src="img/block.png"  width="20" height="20"></a>
          </div>
          <div class="col">
            <a href="index.php?d=grid" class="btn btn-white my-2"> <img src="img/grid.png"  width="20" height="20"></a>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        
          //foreach (LISBOA as $key => $articulo) {
           // echo $articulo['titular'] . '<br>'; // esto ha sido para comprobar que funciona la llamada a contenido.php y el foreach
          while ($fila = $resultados1->fetch_assoc()) { 
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
