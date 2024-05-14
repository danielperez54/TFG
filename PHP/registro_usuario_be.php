<?php

//Variables para registrar al usuario//
    include 'conexion_be.php';

    $Nombre = $_POST['Nombre'];
    $Apellidos = $_POST['Apellidos'];
    $Teléfono = $_POST['tlfn'];
    $Correo = $_POST['mail'];
    $Password = $_POST['password'];
    $Localiad = $_POST['Localidad'];
    $Password = hash('sha512', $Password1);//Codificación de contraseña//


    //Query para insertar los datos 
    $query = "INSERT INTO usuarios(Nombre, Apellidos, tlfn, mail, password, Localidad)
              VALUES ('$Nombre', '$Apellidos', '$Teléfono', '$Correo', '$Password', '$Localiad')";
    
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE mail='$Correo'");

    if(mysqli_num_rows($verificar_correo ) > 0){
        echo '
        <script>
            alert("Este correo ya esta en uso, utiliza otro");
            window.location = "../registro.php";
        </script>
        ';
        exit();

    }

//Alertas de si se ha registrado o si ka fallado el registro//
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
            <script>
                alert("Te has registrado con exito");
                window.location = "../registro.php";
            </script>
            ';
    }else{
        echo'
        <script>
            alert("No te has podido registrar, intentelo de nuevo");
            window.location = "../registro.php";
        </script>
        ';
    }

    mysqli_close($conexion);

    include 'registro.php';


?>