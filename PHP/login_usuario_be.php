<?php
session_start();
include 'conexion_be.php';

// Verificar que ambos campos estén completos
if (empty($_POST['mail']) || empty($_POST['password'])) {
    echo '
    <script>
    alert("Por favor, complete ambos campos.");
    window.location = "../Inicio_sesion.php";
    </script>
    ';
    exit;
}

// Variables que se van a tomar y obtener de la BBDD
$Correo = $_POST['mail'];
$Password = $_POST['password'];
$Password = hash('sha512', $Password); // Asegúrate de hashear la contraseña correctamente

// Debug: imprimir valores para verificar (quitar después de depurar)
error_log("Correo: $Correo");
error_log("Password (hashed): $Password");

// Utilizar una declaración preparada para la consulta
$stmt = $conexion->prepare("SELECT * FROM usuariosV2 WHERE mail = ? AND password = ?");
if ($stmt === false) {
    die('Error en la preparación de la declaración: ' . htmlspecialchars($conexion->error));
}
$stmt->bind_param('ss', $Correo, $Password);
$stmt->execute();
$result = $stmt->get_result();

// Debug: verificar el número de filas encontradas (quitar después de depurar)
error_log("Número de filas encontradas: " . $result->num_rows);

// Verificar si se encontró un usuario con las credenciales dadas
if ($result->num_rows > 0) {
    $_SESSION['Nombre'] = $Correo;
    header("location: ../bienvenida.php");
    exit;
} else {
    echo '
    <script>
    alert("Usuario no encontrado, vuelva a intentarlo.");
    window.location = "../Inicio_sesion.php";
    </script>
    ';
    exit;
}

// Cerrar la declaración y la conexión
$stmt->close();
$conexion->close();
?>
