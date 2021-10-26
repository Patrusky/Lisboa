<?php// include 'contenido.php' 
//a borar una vez funcione todo con la bbdd (es el array)
?>
<?php 
$global = $_SERVER['DOCUMENT_ROOT'] . "/lisboa_bd_clase/config/global.php";
require_once($global)
?>
<?php //creamos la variable de la página para identificar su contenido

//$idPagina = intval($_GET['id']);
//Este if que primero comprueba si hay un get y si es un nº , en caso de error, te redirecciona.
//Con htmlspecialchars te limpia los caracteres especiales para que no te puedan hackear. Es un met de seguridad
// Con is_numeric, comprueba si es un numero

?>

<?php require (ROOT . "/parts/head.php") ?>

<title>PRÁCTICA PAGINA DINAMICA CON BASE DE DATOS</title>
<meta name="description" content="PRÁCTICA PAGINA DINAMICA CON BASE DE DATOS">

  </head>
  <body>
  <?php require (ROOT . "/parts/header.php") ?>    


<main role="main">
<?php //require 'database/fconsultaBBDD.php' ?>
<!-- AQUI HAREMOS EL TEST DE CONEXION AL BBDD -->

<!-- //Hay 3 formas de conectar: MYSQL(), MYSQLI(), PDO() 
//Hacemos la conexion con un objeto mysql - Esto puede ir en otro php

//$conexion= new mysqli('servidor','usuario','contraseña','nombre de la bd') Esta es la sintaxis
$conexion= new mysqli('localhost', 'root', '', 'lisboa_bd'); 
//vamos a poner na condicional para ver si funciona la conexion a la bd
if ($conexion->connect_errno) {
  //echo 'Conexión fallida' podríamos poner pero mejor ponemos die que se carga cualquier carga
  die('Conexión Fallida!');
} else {
  echo '<h2>La base de datos lisboa_bd se ha conectado correctamente</h2>'; // esto solo para pruebas inciales
} -->


<!-- php 

//1º creamos una var llamada $consulta_sql que tendrá dentro lo que queremos que haga más adelante
$consulta_sql = "SELECT * FROM contenido where id = $idPagina";
$resultados = $conexion->query($consulta_sql) or die ('<h3 class="text-center text-danger pt-5"> ¡¡Algo ha ido mal en la consulta a la base de datos!!</h3>');//conexion es un objeto al que se le aplica query,(un met de consulta) y este ejecuta sobre consulta.



//USAMOS VAR_DUM
      //Aquí vamos hacer una comprobación de los datos traidos de la consulta, solo para verlos y aprender.
      //Usamos un var_dump para ver el contenido

  /*  if ($resultados->num_rows) { //Si muestra alguna fila
    echo '<pre>';
    echo 'Número de filas importadas: ' . $resultados->num_rows . '<br>';
    var_dump($resultados->fetch_assoc()); //muestrame var resultados, que tiene la funcion de fetch_assoc()(trae un array)
    var_dump($resultados->fetch_assoc()); // por cada vez que lo copies,trae el sig array asociativo
  //mysqli_fetch_assoc($resultados);este metodo es paracido al anterior


    var_dump($resultados->fetch_array()); //trae los resultados de un array asociativo y numerativo. Interesante para consultas tipo :mostrar 20 produc
    echo '</pre>';
  } else {
    echo "No hay ná";
  }*/

//OPCION 1 DE TRAER DATOS A UN ARRAY Y LUEGO USARLO
      //Aplicar el fetch_assoc a si mismo ($resultados) 

  //$resultados = $resultados->fetch_assoc();
  //echo '<h2>El titular: ' . $resultados['titular'] . '</h2>';

//OPCION 2 DE TRAER DATOS A UN ARRAY Y LUEGO USARLO
      //Aplicar el fetch_assoc y asignarlo a otro array. 
      //Esta opcion permite técnicas para múltiples data en una sola pág, para consultas múltiples, entre otras cosas.

  $data1 = array(); // IMPORTANTE : primero hay que declarar la variable como array     
  $data1 = $resultados->fetch_assoc(); //fetch_assoc trae los dato en un array asoc
  //echo '<h2>El titular: ' . $data1['titular'] . '</h2>';  
  
  //traemos los datos de la tabla tags
  $consulta_sql = "SELECT * FROM tags where id = $idPagina";
  $resultados2 = $conexion->query($consulta_sql);

  $data2 = array(); // IMPORTANTE : primero hay que declarar la variable como array     
  $data2 = $resultados2->fetch_assoc();

  $consulta_sql = "SELECT url, imgPrincipal FROM contenido";
  $resultados3 = $conexion->query($consulta_sql);
 -->
 <?php 
  $data1 = getContenidoById($idPagina);
  $consulta_sql = "SELECT * FROM tags where id = $idPagina";
  $resultados2 = $conexion->query($consulta_sql);

  $data2 = array();     
  $data2 = $resultados2->fetch_assoc();

  $consulta_sql = "SELECT url, imgPrincipal FROM contenido";
  $resultados3 = $conexion->query($consulta_sql);
?>

  <section class="jumbotron text-center">
    <div class="container">
      <h1>PRÁCTICA DE PLANTILLA DE PÁGINA DE CONTENIDOS</h1>
      <p class="lead text-muted">Esta es la plantilla que usamos para mostrar cada artículo por separado.</p>
      <p>
        <?php if(!$id == 0){
         echo '<a href="pagina.php?id=' .  $id - 1  . '"> ARTÍCULO ANTERIOR </a> | ';}//Esto hace que no se muestre nada si es el primer artículo el de esta página, para que no se muestre nada ya que iría a la pagina -1 que no existe
        ?>
        
        <a href="pagina.php?id=<?php echo $id;   ?>"> ESTE ARTÍCULO </a>
        <?php if($id == $resultados3->num_rows - 1){  //cambiamos el coun lisboa porque ya no se usa el array
          echo ' | <span class="text-muted"> No hay más artículos</span>';
        } else {
        echo ' | <a href="pagina.php?id=' . $id + 1 . '"> ARTÍCULO SIGUIENTE </a> </p>';
        }
        ?>
      
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row"><!-- row del artículo principal-->
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
              if (!isset($data2['tag1'])) { //si no hay tag1
                echo 'No hay tags'; //muestra esto
              } else { // y sino, realiza un while que tiene dentro el if
                
                $i= 1;
                while ($i<4) {
                  if ($data2["tag$i"]=='') { // si el tag está vacío,
                    //break;
                    $i++; //incrementamos la i para ver si hay mas tags
                    continue;// y si los hay, entonces continua con el sig echo
                  }
                  echo ' <a href="tags.php?tag=' . $data2["tag$i"] . '">' . $data2["tag$i"] . '</a>';
                  $i++;
                }
                /*  echo '<a href="tags.php?tag=' . $data2['tag1'] . '">' . $data2['tag1'] . '</a>'
                  . ' ' .'<a href="tags.php?tag=' . $data2['tag2'] . '">' . $data2['tag2'] . '</a>'
                  . ' ' .'<a href="tags.php?tag=' . $data2['tag3'] . '">' . $data2['tag3'] . '</a>'
                  . ' ' .'<a href="tags.php?tag=' . $data2['tag4'] . '">' . $data2['tag4'] . '</a>';*/
                
                }
              ;
            ?>
          </b></small></p>
        </div>


      </div><!--fin de row-->
      <div class="row"> 
        <div class="col-md-6 p-3">
            <div class="text-center">
               <a href="actualizar_Articulo.php?id=<?php echo $id ?>" class="btn btn-primary my-2">ACTUALIZAR</a>              
            </div>  
        </div>  
        <div class="col-md-6 p-3">   
          <form method="post" action="database/fborrarArticulo.php">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">BORRAR</button>
                </div>
                <div class="form-group d-none">
                    <input type="text" class="form-control" id="id"  name="id" value="<?php echo $id ?>">
                </div>
          </form> 
        </div>
      </div>          
      <div class="row">
        <div class="col-md-6  py-5"><!-- cuadro con miniaturas de imagenes-->
          <h3>Navegar por imágenes</h3>
          <div class="row">
            <?php  

              

              while ($fila = $resultados3->fetch_assoc()) { //mientras cada fila traiga de resultados la url e imgPrincipal, muestra
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

              while ($fila = $resultados3->fetch_assoc()) { 
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


<?php require (ROOT . "/parts/footer.php") ?>