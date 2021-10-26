<?php 
// INDEX
function getAll(){
    global $conexion;


    $consulta_sql = "SELECT * FROM contenido LEFT JOIN tags ON contenido.id=tags.id";
     //con esta consulta estamos uniendo el id de contenido y de tags, con lo que con un solo while podemos acceder a ambos
    $resultados1 = $conexion->query($consulta_sql);
    
    return $resultados1;

}
//PAGINA
    function getContenidoById($id){
    global $conexion;   
    $consulta_sql = "SELECT * FROM contenido where id = $id";
    $resultados = $conexion->query($consulta_sql) or die ('<h3 class="text-center text-danger pt-5"> ¡¡Algo ha ido mal en la consulta a la base de datos!!</h3>');
    
    $resultados = $conexion->query($consulta_sql);
    $data1 = array();    
    $data1 = $resultados->fetch_assoc();

    return $data1;
    }

    function getTagsById($id){
        global $conexion;   
        $consulta_sql = "SELECT * FROM tags where id = $id";
        $resultados2 = $conexion->query($consulta_sql);

        $resultados2 = $conexion->query($consulta_sql);
        $data2 = array();     
        if ($resultados2 ->num_rows > 0) {
            $data2 = $resultados2 -> fetch_assoc();
          } else {
              $data2 =["tag1" =>"","tag2" =>"","tag3" =>"","tag4" =>""];
          }
    
        return $data2;
        }
    function getImgUrlTitular(){
        global $conexion; 
        $consulta_sql = "SELECT url, imgPrincipal ,titular FROM contenido";
        $resultados3 = $conexion->query($consulta_sql);
        return $resultados3;
    }  
    
// METADATA
function getMetadataByIdmd($idmd){
    global $conexion;   
    $consulta_sql = "SELECT * FROM metadata where idmd = $idmd";
    $resultados = $conexion->query($consulta_sql) or die ('<h3 class="text-center text-danger pt-5"> ¡¡Algo ha ido mal en la consulta a la base de datos!!</h3>');
    
    $resultados = $conexion->query($consulta_sql);
    $data = array();    
    $data = $resultados->fetch_assoc();

    return $data;
    }    
?>