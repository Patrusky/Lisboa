<main role="main">
  
  <section class="jumbotron text-center">
    <div class="container">
      <h1>ARTÍCULOS CON EL TAG: #</h1>
     
      
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <?php
            // FOREACH FUNPARA AMBAS CONEXIONES
         //foreach (LISBOA as $key => $fila) {
           // echo $articulo['titular'] . '<br>'; // esto ha sido para comprobar que funciona la llamada a contenido.php y el foreach

           //ESTE WHILE ES PARA CONEXION PDO
          //while ($fila = $resultados->fetch( PDO::FETCH_ASSOC )) {  

          while ($fila = $resultados->fetch_assoc()) {   
            
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
                  
                        $tagsVacios=0;
                        $i=1;
                        while ($i<=4) {
                            if ($fila["tag$i"]=='') {
                            $i++; //incrementas solo el primero para que pase al sig tag
                            $tagsVacios++; // incrementa cualquier tag
                            continue;
                            }
                            echo ' <a href="tags.php?tag=' . $fila["tag$i"] . '">#' . $fila["tag$i"] . '</a>';
                            $i++;
                            }
                              if ($tagsVacios==4) { //si se p
                              echo 'No hay tags';
                              }
                        
                    ;
                  echo '</small>
                  </div>
              </div>
            </div>';
        }//cierre while principal
        ?>
      </div><!-- fin de .row-->
    </div>
  </div>

</main>