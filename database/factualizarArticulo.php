<?php 
   
    $global = $_SERVER['DOCUMENT_ROOT'] . "/lisboa_bd_clase/config/global.php";
    require_once($global);

    //traemos los datos de cada name y los asignamos a variables a traves del met $_POST
    
    $titular = $_POST['titular'];
    $fecha = $_POST['fecha'];
    $texto = $_POST['texto'];
    $autor = $_POST['autor'];
    $tag1 = $_POST['tag1'];
    $tag2 = $_POST['tag2'];
    $tag3 = $_POST['tag3'];
    $tag4 = $_POST['tag4'];
    $img = $_POST['img'];
    $idPagina = $_POST['id'];
    $description = $_POST['description'];
    
   
    $sql = "UPDATE contenido SET titular='$titular', fecha='$fecha', texto='$texto', autor='$autor', imgPrincipal='$img', description='$description' WHERE id='$idPagina'";

    if ($conexion->query($sql)){
        echo "<h1 class='text-center'>Artículo actualizado</h1>";
    }else{
    echo "<h1 class='text-center'>No se ha podido actualizar el artículo</h1>";
    } ;

   
    
    $sql = " UPDATE tags SET tag1='$tag1', tag2='$tag2', tag3='$tag3', tag4='$tag4'WHERE id='$idPagina' ";
    
    if ($conexion->query($sql)){
        echo "<h1 class='text-center'>Tags actualizado</h1>";
    }else{
    echo "<h1 class='text-center'>No se ha podido actualizar el tag</h1>";
    } ;
?>
