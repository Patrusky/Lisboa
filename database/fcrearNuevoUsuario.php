<?php
session_start();
$global = $_SERVER['DOCUMENT_ROOT'] . "/lisboa_bd_clase/config/global.php";
require_once($global);

    $username = $_POST['username'];
    $username = trim($username);
    $username = htmlspecialchars($username);
    $email = $_POST['email'];
    //sanitize_email($email);
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users ";
    $resultados =$conexion->query($sql);
    $data_login = array();
    $data_login = $resultados->fetch_assoc();
    
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username','$password','$email')";
    if ($email === $data_login['email']) {
        echo '<p class="error">Este email ya esta registrado!</p>';
    }else{
        if ($conexion->query($sql)) {
            
            echo "<h1 class='success'>Te has registrado correctamente</h1>";   
            } else {
            echo "<h1 class='error'>No se ha podido registrar</h1>";
            } 
        };

?>