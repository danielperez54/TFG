<?php
// Incluir el archivo de conexión
include 'conexion_be.php';

echo "Conexión exitosa a la base de datos.<br>";

// Verifica si se ha enviado el formulario
if (isset($_POST['submit'])) {
    // Captura y escapa el valor del campo id_producto del formulario
    $id_producto = isset($_POST['id_producto']) ? mysqli_real_escape_string($conexion, $_POST['id_producto']) : '';

    // Consulta SQL para obtener la ruta de la imagen antes de eliminar el producto
    $sql_select = "SELECT imagen FROM productos WHERE id = '$id_producto'";
    $resultado = mysqli_query($conexion, $sql_select);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        // Obtiene la ruta de la imagen desde la base de datos
        $fila = mysqli_fetch_assoc($resultado);
        $ruta_imagen = $fila['imagen'];

        // Borra la imagen del directorio
        if (unlink("../" . $ruta_imagen)) {
            echo "Imagen borrada del directorio.<br>";
        } else {
            echo "Error al borrar la imagen del directorio.<br>";
        }

        // Libera el resultado
        mysqli_free_result($resultado);
    } else {
        echo "No se encontró el producto con ID: $id_producto<br>";
    }

    // Consulta SQL para eliminar el producto por ID
    $sql_delete = "DELETE FROM productos WHERE id = '$id_producto'";

    // Ejecuta la consulta SQL
    if (mysqli_query($conexion, $sql_delete)) {
        echo "Producto dado de baja exitosamente.<br>";

        // Redirige a la página de bienvenida después de dar de baja el producto
        header("Location: ../bienvenida.php");
        exit();
    } else {
        echo "Error al dar de baja el producto: " . mysqli_error($conexion) . "<br>";
    }
} else {
    echo "No se ha enviado el formulario.<br>";
}

// Cierra la conexión
mysqli_close($conexion);
?>
