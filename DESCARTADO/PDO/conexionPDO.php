<?php

//*************** CONEXION A BESA DE DATOS TIPO 1 CON PDO() Y USANDO TRY/CATCH ******/

try {
  // $conexion = new PDO('mysqli:host=HOST_BASE DE DATOS; dbname=NOMBRE_BBDD','USUARIO','CONTRASEÑA');
  
  $conexion = new PDO('mysql:host=localhost; dbname=lisboa_bd','root','');
  $conexion->exec('set names utf8');
  echo 'Conexion correcta';
} catch (PDOException $e) {
  echo 'Error:' . $e->getMessage();
}
?>

