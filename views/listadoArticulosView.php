<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1><?php echo $data['title']?></h1>
            <p class="lead text-muted">Esta plantilla va a ser el backend del usuario, donde tendrá un listado de todos los artículos y podrá actualizarlos, borrarlos o duplicarlos.</p>
        </div>
    </section>
    <div class="container pt_5">
           
        <div class="row text-dark py-3">
            <div class="col-2"><h4> Artículos</h4></div>
            <div class="col-2"><h4>Fecha</h4></div>
            <div class="col-2"><h4>Autor</h4></div>
            <div class="col-2"><h4>Actualizar</h4></div>
            <div class="col-2"><h4>Duplicar</h4></div>
            <div class="col-2"><h4>Borrar</h4></div>
        </div>
        <!-- LOOP -->

        <?php
            while ($fila = $resultados_listado->fetch_assoc()) { 
                echo 
                '<div class="row ">
            
                        <div class="col-2"><a href="' . $fila["url"] . '">' .  $fila["titular"] . '</a></div>
                        <div class="col-2">' . $fila["fecha"] . '</div>
                        <div class="col-2">' . $fila["autor"] . '</div>
                        <div class="col-2"><a href="actualizar_Articulo.php?id=';
                        echo $fila["id"]; 
                        echo '" class="btn btn-sm btn-primary my-2">ACTUALIZAR</a></div>
                        <div class="col-2">
                            <form method="post" action="database/fduplicarArticulo.php">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-sm btn-warning">DUPLICAR</button>
                                </div>
                                <div class="form-group d-none">
                                    <input type="text" class="form-control" id="id"  name="id" value="';
                                    echo $fila["id"];
                                    echo  '">
                                </div>
                            </form>
                        </div>
                        <div class="col-2">
                            <form method="post" action="database/fborrarArticulo.php">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-sm btn-danger">BORRAR</button>
                                </div>
                                <div class="form-group d-none">
                                    <input type="text" class="form-control" id="id"  name="id" value="';
                                    echo $fila["id"];
                                    echo '">
                                </div>
                            </form>
                        </div>
                       
                </div>';    
            }        
            
        ?>
    </div><!--fin container--> 
</main>