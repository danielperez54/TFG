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

        // Directorio donde se guardarán las imágenes
        $target_dir = "../IMAGENES/";
        $target_file = $target_dir . basename($_FILES["imagen"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Verificar si el archivo es una imagen real o una imagen falsa
        $check = getimagesize($_FILES["imagen"]["tmp_name"]);
        if ($check !== false) {
            echo "El archivo es una imagen - " . $check["mime"] . ".<br>";
            $uploadOk = 1;
        } else {
            echo "El archivo no es una imagen.<br>";
            $uploadOk = 0;
        }

        // Verificar si el archivo ya existe
        if (file_exists($target_file)) {
            echo "Lo sentimos, el archivo ya existe.<br>";
            $uploadOk = 0;
        }

        // Verificar el tamaño del archivo
        if ($_FILES["imagen"]["size"] > 500000) {
            echo "Lo sentimos, tu archivo es demasiado grande.<br>";
            $uploadOk = 0;
        }

        // Permitir ciertos formatos de archivo
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Lo sentimos, solo se permiten archivos JPG, JPEG, PNG y GIF.<br>";
            $uploadOk = 0;
        }

        // Verificar si $uploadOk es 0 debido a un error
        if ($uploadOk == 0) {
            echo "Lo sentimos, tu archivo no fue subido.<br>";
        } else {
            if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
                echo "El archivo " . htmlspecialchars(basename($_FILES["imagen"]["name"])) . " ha sido subido.<br>";

                // Guardar la ruta de la imagen en la base de datos
                $ruta_imagen = 'IMAGENES/' . htmlspecialchars(basename($_FILES["imagen"]["name"]));
                $sql = "INSERT INTO productos (nombre, descripcion, precio, imagen) VALUES ('$nombre', '$descripcion', '$precio', '$ruta_imagen')";

                if (mysqli_query($conexion, $sql)) {
                    echo "Datos insertados correctamente.<br>";
                    // Redirigir al usuario a la página de bienvenida
                    header("Location: ../bienvenida.php");
                    exit();
                } else {
                    echo "Error al insertar en la base de datos: " . mysqli_error($conexion) . "<br>";
                }
            } else {
                echo "Lo sentimos, hubo un error al subir tu archivo.<br>";
            }
        }
    } else {
        echo "Error: No se ha subido ninguna imagen.<br>";
    }
}

// Cerrar la conexión
mysqli_close($conexion);
?>
