<?php //creamos la variable de la página para identificar su contenido
//$idTag = $_GET['tag']; se puede usar este get para la url o

//Este if que primero comprueba si hay un get y si es un nº , en caso de error, te redirecciona.
//Con htmlspecialchars te limpia los caracteres especiales para que no te puedan hackear. Es un met de seguridad
// Con is_numeric, comprueba si es un numero

if (isset($_GET['tag'])) {
  $idTag = htmlspecialchars($_GET['tag']);
}else{
  header("location: index.php");
}
?>