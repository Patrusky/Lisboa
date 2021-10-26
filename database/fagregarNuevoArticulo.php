<?php 
     
    $global = $_SERVER['DOCUMENT_ROOT'] . "/lisboa_bd_clase/config/global.php";
    require_once($global)
    ;

   


    //traemos los datos de cada name y los asignamos a variables a traves del met $_POST
    $titular = $_POST['titular'];
    $fecha = $_POST['fecha'];
    $texto = $_POST['texto'];
    $autor = $_POST['autor'];
    $tags = $_POST['tags'];
    $img = $_POST['img'];
    $description = $_POST['description'];
   
   
    $sql = "INSERT INTO contenido (titular, fecha, texto, autor, imgPrincipal , description) VALUES ( '$titular' , '$fecha', '$texto', '$autor', '$img', '$description') ";

    if ($conexion->query($sql)){
        echo "<h1 class='text-center'>Artículo agregado</h1>";
    }else{
    echo "<h1 class='text-center'>No se ha podido agregar el artículo</h1>";
    } 

     //Busacamos id del  ultimo articulo 
     $sql= "SELECT id FROM contenido ORDER BY id DESC LIMIT 1";
     $ultimoId = $conexion->query($sql);
     $ultimoId = $ultimoId->fetch_array();
    // echo  "El ultimo articulo tiene  $ultimoId[0]";
    //$ultimoId[0] =$ultimoId[0] +1;//incrementa en 1 el id es una opcion

    //Así no tenemos que incrementar en 1 el id, sino que coge directamente
    //Con update estamos actualizando el campo url y lo sobrescribimos. 
    $sql = "UPDATE contenido SET url='pagina.php?id=$ultimoId[0]' WHERE id='$ultimoId[0]'";
    $conexion->query($sql);
    //if ($conexion->query($sql)){
    //echo "<h1 class='text-center'>Artículo agregado</h1>";
    //}else{
    //echo "<h1 class='text-center'>No se ha podido agregar el artículo</h1>";
    //} ;

    //************* INSERCIÓN DE TAGS *********************** */
    
    
    //print_r($tags);
    
    //print "<br>";
    $tagsArray = explode(',',$tags);
    
   while (count($tagsArray) < 4) {
       array_push($tagsArray, "");
   }
    $sql = "INSERT INTO tags (id, tag1, tag2, tag3, tag4) VALUES ('$ultimoId[0]','$tagsArray[0]', '$tagsArray[1]', '$tagsArray[2]', '$tagsArray[3]')";
    
    if ($conexion->query($sql)){
        echo "<h1 class='text-center'>Artículo agregado</h1>";
    }else{
    echo "<h1 class='text-center'>No se ha podido agregar el artículo</h1>";
    } ;
?>
