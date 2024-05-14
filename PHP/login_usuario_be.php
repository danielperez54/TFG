<?php

    session_start();

    include 'conexion_be.php';
//Variables que se van a tomar y obtener de la bbdd//
    $Correo = $_POST['mail'];
    $Password = $_POST['password'];
    $Password = hash('sha512', $Password1);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE mail='$Correo' and password ='$Password'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['Nombre'] = $Correo;
        header("location: ../bienvenida.php");
        exit;
    }else{
        echo'
        <script>
        alert("Usuario no encontrado, vuelva a intentarlo");
        window.location = "../Inicio_sesion.php";
        </script>
        ';
        exit;
    }
?>
