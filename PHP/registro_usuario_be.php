<?php

include 'conexion_be.php';

try {
    // Validación de campos vacíos
    if (empty($_POST['Nombre']) || empty($_POST['Apellidos']) || empty($_POST['tlfn']) || empty($_POST['mail']) || empty($_POST['password']) || empty($_POST['Localidad'])) {
        throw new Exception("Todos los campos son obligatorios.");
    }

    // Variables para registrar al usuario
    $Nombre = $_POST['Nombre'];
    $Apellidos = $_POST['Apellidos'];
    $Teléfono = $_POST['tlfn'];
    $Correo = $_POST['mail'];
    $Password = $_POST['password'];
    $Localidad = $_POST['Localidad'];

    // Validación de formato de correo electrónico
    if (!filter_var($Correo, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("El formato del correo electrónico no es válido.");
    }

    // Codificación de contraseña
    $Password = hash('sha512', $Password);

    // Verificación de si el correo ya está en uso
    $stmt = $conexion->prepare("SELECT * FROM usuariosV2 WHERE mail = ?");
    $stmt->bind_param("s", $Correo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        throw new Exception("Este correo ya está en uso, utiliza otro.");
    }

    // Query para insertar los datos
    $stmt = $conexion->prepare("INSERT INTO usuariosV2 (Nombre, Apellidos, tlfn, mail, password, Localidad) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $Nombre, $Apellidos, $Teléfono, $Correo, $Password, $Localidad);

    // Ejecución del query
    if ($stmt->execute()) {
        echo '
            <script>
                alert("Te has registrado con éxito");
                window.location = "../registro.php";
            </script>
        ';
    } else {
        throw new Exception("No te has podido registrar, inténtelo de nuevo.");
    }

    // Cierre de conexiones
    $stmt->close();
    $conexion->close();

} catch (Exception $e) {
    echo '
        <script>
            alert("' . $e->getMessage() . '");
            window.location = "../registro.php";
        </script>
    ';
}

include 'registro.php';
?>
