<?php
$conexion = new mysqli("localhost", "usuario", "contraseña", "base_de_datos");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $imagen = $_FILES['imagen']['tmp_name'];
    $imgContenido = addslashes(file_get_contents($imagen));

    $sql = "INSERT INTO productos (nombre, descripcion, precio, imagen) VALUES ('$nombre', '$descripcion', '$precio', '$imgContenido')";

    if ($conexion->query($sql) === TRUE) {
        echo "Imagen insertada correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}

$conexion->close();
?>
