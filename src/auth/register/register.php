<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if(empty($_POST)) {
        header('Location: ../registerIndex.php');

    }else {
        $n_usuario = htmlspecialchars($_POST['nombre']);
        $email = htmlspecialchars($_POST['email']);
        $pass = htmlspecialchars($_POST['pass']);
        $cn = null;

        if(register($n_usuario, $pass, $email)) {
            header('Location: ../loginIndex.php');
        } else {
            header('Location: ../registerIndex.php');
        }
    }
}

function register($nombre, $pass, $email) {
    $cn = mysqli_connect('localhost','root','');
    mysqli_select_db($cn, 'webLogin');

    //$password = password_hash($_pass, PASSWORD_DEFAULT);

    $consulta = "INSERT INTO users (names, email, roles, pass) VALUES ('$nombre', '$email', '0', '$pass')";

    if (mysqli_query($cn, $consulta)) {
        echo "Te has registrado correctamente.";
        return mysqli_insert_id($cn);
    } else {
        echo "Error al registrar el usuario.";
    
    }
}

?>
