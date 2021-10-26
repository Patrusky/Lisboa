<?php
session_start();//Funcion interna de php para abrir sesion
//echo session_id();//echo simple para mostrar el user y ver que va, se lo inventa php como ejemplo
/*if (!isset($_SESSION["usuario"])) { // Sino hay sesion abierta..
    $_SESSION["usuario"] = "Invitado"; //abrela
}  */
//echo "Nombre de usuario: " . $_SESSION["usuario"];

// Establecer tiempo de vida de la sesión en segundos
$inactividad = 1200;
// Comprobar si $_SESSION["timeout"] está establecida
if(isset($_SESSION["timeout"])){
    // Calcular el tiempo de vida de la sesión (TTL = Time To Live)
    $sessionTTL = time() - $_SESSION["timeout"];//*1
    if($sessionTTL > $inactividad){
        session_regenerate_id();//regenera la id si ha excedido el tiempo.Para evitar 'puertas abiertas'
        session_destroy();//Al destruirse..
        header("Location: index.php");// te redirecciona a location
    }
}
// El siguiente key se crea cuando se inicia sesión
$_SESSION["timeout"] = time(); //aqui guarda el ultimo momento en que inicio sesion


//*1 time() -> guarda el momento actual. 
//$sessionTTL = time() - $_SESSION["timeout"]; Por tanto guarde al momento actual y lo resta al del registro.
//if($sessionTTL > $inactividad){ Si la resta es mayor al de inactividad, destruye la sesion.



?>