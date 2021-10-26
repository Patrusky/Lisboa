<?php

 //***************CONEXION A BESA DE DATOS TIPO 1 MYSQLI()
//Hacemos la conexion con un objeto mysql - Esto puede ir en otro php

//$conexion= new mysqli('servidor','usuario','contraseña','nombre de la bd') Esta es la sintaxis
$conexion= new mysqli($db["host"], $db["user"], $db["password"], $db["database_name"]); 
$conexion->set_charset("utf8");
//vamos a poner na condicional para ver si funciona la conexion a la bd

// AQUI HAREMOS EL TEST DE CONEXION AL BBDD 
if ($conexion->connect_errno) {
  //echo 'Conexión fallida';// podríamos poner pero mejor ponemos die que se carga cualquier carga
  die('Conexión Fallida!');
} else {
  //echo '<h2>La base de datos lisboa_bd se ha conectado correctamente</h2>'; // esto solo para pruebas inciales
} 
//$conexion es un objeto al que se le ejecutan metodos




