<?php
// Incluir el archivo de conexión
include 'conexion_be.php';

// Consulta SQL para obtener todos los productos
$sql = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $sql);

// Verificar si se encontraron resultados
if (mysqli_num_rows($resultado) > 0) {
    // Iniciar la lista de productos
    echo '<div class="products-container">';

    // Recorrer cada fila de resultados
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $nombre = $fila['nombre'];
        $descripcion = $fila['descripcion'];
        $precio = $fila['precio'];
        $imagen = $fila['imagen'];

        // Mostrar cada producto dentro de un div
        echo '<div class="product">';
        echo '<img src="../' . $imagen . '" alt="' . $nombre . '">';
        echo '<h3>' . $nombre . '</h3>';
        echo '<p>' . $descripcion . '</p>';
        echo '<p>Precio: ' . $precio . ' €</p>';
        echo '</div>';
    }

    // Cerrar la lista de productos
    echo '</div>';
} else {
    echo "No se encontraron productos.";
}

// Liberar el resultado
mysqli_free_result($resultado);

// Cerrar la conexión
mysqli_close($conexion);
?>
