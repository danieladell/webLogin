<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if(empty($_POST)) {
        header('Location: ../loginIndex.php');
    }else {

        $n_usuario = $_POST['nombre'];
        $pass = $_POST['pass'];

        $cn = null;

        if(login($n_usuario, $pass)) {
            session_start();
            $_SESSION['usuario'] = array(
                'nombre' => "log",
                'estado' => 1
            );
            header('Location: ../../users/index.php');
        } else {
            header('Location: loginIndex.php');
        }  
    }
} 

function login($nombre, $clave) {
    $cn = mysqli_connect('localhost','root','');
    mysqli_select_db($cn, 'webLogin');

    $clavehash = password_hash($clave, PASSWORD_DEFAULT);
    $consulta = "SELECT names, pass FROM users WHERE names='$nombre' AND pass='$clavehash'";

    if (mysqli_query($cn, $consulta)) {
        return true;
    }else {
        return false;
    }
    
}

?>
