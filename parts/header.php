<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">Proyecto Lisboa</h4>
          <p class="text-muted">Ejercicio desarollado en el certificado de profesionalidad para la práctica de PHP, Bootstrap, SQL y métodos de programación.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h3 class="text-white">PÁGINAS</h3>
          <ul class="list-unstyled">
            <li><a href="index.php" class="text-white">Index</a></li>
            <li><a href="listadoArticulos.php" class="text-white">Listado Artículos</a></li>
            <li><a href="nuevoArticulo.php" class="text-white">Nuevo Artículo</a></li>          
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Lisboa</strong>
      </a>
      <div class='d-inline'> 
        <?php
        if (isset($_SESSION['id_usuario'])) {
          echo '<span class="text-white">Usuario: ' . $_SESSION['usuario'] . ' | </span>';
          echo '<a  class="text-white" href="config/cerrar_sesion.php">Cerrar Sesión</a>';
        } else {
          echo '<a  class="btn btn-sm btn-info" href="login.php">Login</a>';
          
        }
       ;
        ?>
        

        <a  class="btn btn-sm btn-info ml-3" href="nuevoUsuario.php">Nuevo Usuario</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </div>
</header>