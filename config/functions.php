<?php
function comprobar_sesion(){
    if (!isset($_SESSION['id_usuario'])){
        header('location: index.php');
    }
   
}
?>