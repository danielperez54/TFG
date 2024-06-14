<?php
// Incluir el archivo de conexión
include 'conexion_be.php';

echo "Conexión exitosa a la base de datos.<br>";

// Verificar si el formulario ha sido enviado
if (isset($_POST['submit'])) {
    echo "Formulario enviado.<br>";

    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
    $precio = mysqli_real_escape_string($conexion, $_POST['precio']);

    // Verificar si se ha subido un archivo
    if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
        echo "Imagen subida correctamente.<br>";

        $imagen = $_FILES['imagen']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($imagen));

        // Insertar los datos en la base de datos
        $sql = "INSERT INTO productos (nombre, descripcion, precio, imagen) VALUES ('$nombre', '$descripcion', '$precio', '$imgContenido')";

        if (mysqli_query($conexion, $sql)) {
            echo "Datos insertados correctamente.<br>";
            // Redirigir al usuario a la página de bienvenida
            header("Location: ../bienvenida.php");
            exit();
        } else {
            echo "Error al insertar en la base de datos: " . mysqli_error($conexion) . "<br>";
        }
    } else {
        echo "Error: No se ha subido ninguna imagen.<br>";
    }
}

// Cerrar la conexión
mysqli_close($conexion);
?>
