


<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
        <h1><?php echo $data['title']?></h1>
        <p class="lead text-muted">Esta plantilla será para actualizar datos en la DB y los artículos.</p>  
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row text-center py-4"><!-- row del artículo principal-->
                <div class="col-md-10">
                    <h2>¿Te lo has pensado mejor?. Vamos allá con las modificaciones</h2>
                </div>
            </div>  
            <div class="row ">
            <div class="col-md-10">
                <form method="post" action="database/factualizarArticulo.php">
                    <div class="form-group d-none">
                        <input type="text" class="form-control" id="id"  name="id" value="<?php echo $data1['id'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="titular">Nuevo titular:</label>
                        <input type="text" class="form-control" id="titular"  name="titular" value="<?php echo $data1['titular'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha de modificación:</label>
                        <input type="date" class="form-control" id="fecha"  name="fecha" value="<?php echo $data1['fecha'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="texto">Nuevo artículo:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"  name="texto"  value="" rows="8" cols="60"><?php echo $data1['texto'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="autor">Nuevo autor:</label>
                        <input type="text" class="form-control" id="autor"  name="autor" value="<?php echo $data1['autor'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="tag1">Tag 1:</label>
                        <input type="text" class="form-control" id="tag1" placeholder="Tags" name="tag1" value="<?php echo $data2['tag1'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="tag2">Tag 2:</label>
                        <input type="text" class="form-control" id="tag2" placeholder="Tags" name="tag2" value="<?php echo $data2['tag2'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="tag3">Tag 3:</label>
                        <input type="text" class="form-control" id="tag3" placeholder="Tags" name="tag3" value="<?php echo $data2['tag3'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="tag4">Tag 4:</label>
                        <input type="text" class="form-control" id="tag4" placeholder="Tags" name="tag4" value="<?php echo $data2['tag4'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="img">Imagen:</label>
                        <input type="text" class="form-control" id="img" placeholder="img/principales/08.jpg" name="img" value="<?php echo $data1['imgPrincipal'] ?>">
                    </div>
                    <div class="form-group">
                   <label for="description">Breve description para buscador:</label>
                        <textarea class="form-control" id="description" placeholder="Introduce el texto" name="description" rows="3" cols="60"><?php echo $data1['description'] ?></textarea>
                    </div> 
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
                    </div>   
                       
                </form>
                
            </div>
        </div> <!--fin de row--> 
        <div class="row">     
            <div class="col-md-10 py-3">
                
                <form method="post" action="fborrarArticulo.php">
                    <div class="form-group d-none">
                        <input type="text" class="form-control" id="id"  name="id" value="<?php echo $data1['id'] ?>">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">BORRAR</button>
                    </div>
                    
                </form> 
            </div>
        </div><!--fin de row-->
        </div><!--fin container-->
    </div><!--fin album-->
</main>

