<?php

session_start();
$global = $_SERVER['DOCUMENT_ROOT'] . "/lisboa_bd_clase/config/global.php";
require_once($global);

//if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $sql = "SELECT * FROM users WHERE username='$username'";
    $resultados =$conexion->query($sql);
    $data_login = array();
    $data_login = $resultados->fetch_assoc();
 

 
    if (!$data_login) {
        echo '<p class="error">El usuario o la contraseña son incorrectos</p>';
    } else {
        //if (password_verify($password, $result['PASSWORD'])) 
        if ($password == $data_login['password']) {
            $_SESSION['usuario'] = $data_login['username'];
            $_SESSION['id_usuario'] = $data_login['id'];
            header('location: ../index.php');
        } else {
            echo '<p class="error">La contraseña es incorrecta!</p>';
        }
    }

//} 
?>