<?php 
    
    $global = $_SERVER['DOCUMENT_ROOT'] . "/lisboa_bd_clase/config/global.php";
    require_once($global);
    
    $id = $_POST['id'];
  
    $sql = "SELECT * FROM contenido INNER JOIN tags ON contenido.id=tags.id WHERE contenido.id=$id";
    $resultados = $conexion->query($sql);
    $data = array();    
    $data = $resultados->fetch_assoc();


    $sql = "INSERT INTO contenido (titular, fecha, texto, autor, url, imgPrincipal) VALUES ( '$data[titular]', '$data[fecha]','$data[texto]',  '$data[autor]','$data[url]', '$data[imgPrincipal]')" ;

    if ($conexion->query($sql)){
        echo "<h1 class='text-center'>Artículo duplicado</h1>";
    }else{
    echo "<h1 class='text-center'>No se ha podido duplicar el artículo</h1>";
    } 

    //Con esto llamamos al último id introducido
    $sql= "SELECT id FROM contenido ORDER BY id DESC LIMIT 1";
     $ultimoId = $conexion->query($sql);
     $ultimoId = $ultimoId->fetch_array();

    //Con ese ultimoId lo actualizamos
    $sql = "UPDATE contenido SET url='pagina.php?id=$ultimoId[0]' WHERE id='$ultimoId[0]'";
     $conexion->query($sql);

    $sql = "INSERT INTO tags (id, tag1, tag2, tag3, tag4) VALUES ('$ultimoId[0]', '$data[tag1]', '$data[tag2]','$data[tag3]',  '$data[tag4]')" ;

    if ($conexion->query($sql)){
       echo "<h1 class='text-center'>Tags duplicados</h1>";
    }else{
        echo "<h1 class='text-center'>No se ha podido duplicar los tags</h1><br>";
    }

    echo 'Volver a <a href="../index.php">INICIO</a>';
?>