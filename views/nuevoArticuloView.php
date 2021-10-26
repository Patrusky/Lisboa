<main role="main">
    
    <section class="jumbotron text-center">
        <div class="container">
            <h1><?php echo $data['title']?></h1>
            <p class="lead text-muted">Esta plantilla será para introducir datos en la DB y crear nuevos artículos</p>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row text-center py-4"><!-- row del artículo principal-->
                <div class="col-md-10">
                    <h2>¿Cúan inspirados estamos hoy?. Déjate llevar y crea tu nuevo artículo</h2>
                </div>
            </div>  
            <div class="row ">
            <div class="col-md-10">
                <form method="post" action="database/fagregarNuevoArticulo.php">
                    <div class="form-group">
                        <label for="titular">Titular:</label>
                        <input type="text" class="form-control" id="titular" placeholder="Introduce un titular" name="titular">
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha:</label>
                        <input type="date" class="form-control" id="fecha" placeholder="Fecha de publicación" name="fecha">
                    </div>
                    <div class="form-group">
                        <label for="texto">Nuevo artículo:</label>
                        <textarea class="form-control" id="texto" placeholder="Introduce el texto" name="texto" rows="8" cols="60"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="autor">Autor:</label>
                        <input type="text" class="form-control" id="autor" placeholder="Autor" name="autor">
                    </div>
                    <div class="form-group">
                        <label for="tags">Tags (como máximo 4 y separados por comas):</label>
                        <input type="text" class="form-control" id="tags" placeholder="Tags" name="tags">
                    </div>
                    <div class="form-group">
                        <label for="img">Imagen:</label>
                        <input type="text" class="form-control" id="img" placeholder="img/principales/08.jpg" name="img">
                    </div>
                   <div class="form-group">
                   <label for="texto">Breve description para buscador:</label>
                        <textarea class="form-control" id="description" placeholder="Introduce el texto" name="description" rows="3" cols="60"></textarea>
                    </div>  
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Crear artículo</button>
                    </div>    
                </form>
                
            </div>
        </div><!--fin de row-->
        </div><!--fin container-->
    </div><!--fin album-->
</main>