<main role="main">

        <div class="container">
            <div class="row pt-5"><!-- row del artículo principal-->
                <div class="col-md-10">
                    <h2>LOGIN</h2>
                </div>
            </div>  
            <div class="row ">
            <div class="col-md-10">
                <form method="post" action="database/hacer_login.php" name="signin-form">
                    <div class="form-element">
                        <label>Nombre de usuario</label>
                        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
                    </div>
                    <div class="form-element">
                        <label>Contraseña</label>
                        <input type="text" name="password" required />
                    </div>
                    <button type="submit" name="login" value="login">Log In</button>
                </form>
                
            </div>
        </div> <!--fin de row--> 
    
        </div><!--fin container-->
    </div><!--fin album-->
</main>

