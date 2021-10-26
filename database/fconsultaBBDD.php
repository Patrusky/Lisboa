<?php 
    
    $global = $_SERVER['DOCUMENT_ROOT'] . "/lisboa_bd_clase/config/global.php";
    require_once($global);

    $id = intval($_GET['id']);
    
    
    

    $consulta_sql = "SELECT * FROM tags where id = $id";
    $resultados2 = $conexion->query($consulta_sql);

    $data2 = array(); 
    $data2 = $resultados2->fetch_assoc();

    $consulta_sql = "SELECT * FROM contenido";
    $resultados3 = $conexion->query($consulta_sql);
    
    $sql = "UPDATE contenido SET url='pagina.php?id=$id' WHERE id='$id'";
    $conexion->query($sql);
    
?>
