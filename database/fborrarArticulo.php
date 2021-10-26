<?php 
    
    $global = $_SERVER['DOCUMENT_ROOT'] . "/lisboa_bd_clase/config/global.php";
    require_once($global)
    ;
    //traemos los datos de cada name y los asignamos a variables a traves del met $_POST
    $id = $_POST['id'];
    
    $sql = "DELETE FROM contenido  WHERE id='$id'";
    if ($conexion->query($sql)){
        echo "<h1 class='text-center'>Artículo borrado</h1>";
    }else{
    echo "<h1 class='text-center'>No se ha podido borrar el artículo</h1>";
    } 

    $sql = "DELETE FROM tags  WHERE id='$id' ";
    if ($conexion->query($sql)){
        echo "<h1 class='text-center'>Tags borrados</h1>";
    }else{
    echo "<h1 class='text-center'>No se ha podido borrar el tag</h1>";
    } ;

    echo 'Volver a <a href= "../index.php">Inicio</a>';
?>