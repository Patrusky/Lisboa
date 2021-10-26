<main role="main">
    
    <section class="jumbotron text-center">
        <div class="container">
            <h1><?php echo $data['title']?></h1>
            <p class="lead text-muted">Esta plantilla es para crear nuevos usuarios</p>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row  py-4"><!-- row del artículo principal-->
                <div class="col-md-10">
                    <h2>Inscríbete y podrás crear tus propios artículos</h2>
                </div>
            </div>  
            <div class="row ">
            <div class="col-md-10 ">
                <form method="post" action="database/fcrearNuevoUsuario.php" name="signup-form">
                    <div class="form-element">
                        <label>Usuario</label>
                        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
                    </div>
                    <div class="form-element">
                        <label>Email</label>
                        <input type="email" name="email" required />
                    </div>
                    <div class="form-element">
                        <label>Contraseña</label>
                        <input type="text" name="password" required />
                    </div>
                    <button type="submit" name="register" value="register">Registrarse</button>
                </form>
                
            </div>
        </div><!--fin de row-->
        </div><!--fin container-->
    </div><!--fin album-->
</main>