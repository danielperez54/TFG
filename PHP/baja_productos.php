<?php
// Incluir el archivo de conexión
include 'conexion_be.php';

echo "Conexión exitosa a la base de datos.<br>";

// Verifica si se ha enviado el formulario
if (isset($_POST['submit'])) {
    // Captura y escapa el valor del campo id del formulario
    $id_producto = isset($_POST['id']) ? mysqli_real_escape_string($conexion, $_POST['id']) : '';

    // Consulta SQL para eliminar el producto por ID
    $sql = "DELETE FROM productos WHERE id = '$id'";

    // Ejecuta la consulta SQL
    if (mysqli_query($conexion, $sql)) {
        echo "Producto dado de baja exitosamente.";

        // Redirige a la página de bienvenida después de dar de baja el producto
        header("Location: ../bienvenida.php");
        exit();
    } else {
        echo "Error al dar de baja el producto: " . mysqli_error($conexion);
    }
} else {
    echo "No se ha enviado el formulario.";
}

// Cierra la conexión
mysqli_close($conexion);
?>
