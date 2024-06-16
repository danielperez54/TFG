<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="estilos6.css">
    <script src="https://kit.fontawesome.com/4f730f639e.js" crossorigin="anonymous"></script>
    <script src="JAVASCRIPT/app.js" async></script>
    <script src="JAVASCRIPT/buscador.js"></script>
    <title>Tienda</title>
    <style>
        /* Aquí puedes agregar estilos adicionales si es necesario */
    </style>
</head>
<body>
    <header id="header">
        <div class="container__header">
            <div class="logo">
                <img src="IMAGENES/TEKNOCITY.png">
            </div>
            <div class="container__nav">
                <nav>
                <ul>
                    <li class="carrito-icon">
                        <a href="#" id="carrito-icon"><i class="fa-solid fa-cart-shopping"></i></a>
                        <div class="carrito-dropdown" id="carrito-dropdown">
                        <section class="carrito" id="carrito">
                            <h2>Carrito de Compras</h2>
                                <div class="carrito-items" id="carrito-items">
                                <!-- Aquí se mostrarán los productos agregados al carrito -->
                                </div>
                                 <div class="carrito-total">
                                 <p>Total: <span id="carrito-total">0.00</span> €</p>
                                 <button class="btn-pagar" id="btn-pagar">Pagar</button>
                                 </div>
                        </section>

                        </div>
                    </li>
                    <li><a href="bienvenida.php">Inicio</a></li>
                    <li><a href="tienda_general.php">Tienda</a></li>
                    <li><a href="PHP/cerrar_sesion.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
                </ul>
                </nav>
            </div>
        </div>
    </header>

    <br><br><br><br><br>

    <div>
    <div class="propiedades-buscador">
        <input type="text" name="buscador" id="buscador" placeholder="Busca aquí tu producto">
    </div>
</div>


    <section class="contenedor">
        <div class="contenedor-items">
        <section class="contenedor">
    <div class="contenedor-items">
    <?php
include 'PHP/conexion_be.php';

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$sql = "SELECT * FROM productos WHERE nombre LIKE 'movil%'";
$resultado = mysqli_query($conexion, $sql);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $nombre = $fila['nombre'];
        $descripcion = $fila['descripcion'];
        $precio = $fila['precio'];
        $imagen = $fila['imagen']; // Asegúrate de tener el campo correcto en la base de datos

        echo '<div class="product">';
        echo '<img src="' . $imagen . '" alt="' . $nombre . '">';
        echo '<h3>' . $nombre . '</h3>';
        echo '<p>' . $descripcion . '</p>';
        echo '<p>Precio: ' . $precio . ' €</p>';
        // Añadir data-image con la URL completa de la imagen
        echo '<button class="add-to-cart" data-name="' . $nombre . '" data-price="' . $precio . '" data-image="' . $imagen . '">Agregar al carrito</button>';
        echo '</div>';
    }
} else {
    echo "<p>No se encontraron productos.</p>";
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>

    </div>
</section>


        </div>
    </section>

    <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="IMAGENES/TEKNOCITY.png" alt="">
                </div>
                <div class="terms">
                    <p>TEKNOCITY es una empresa que se dedica a la distribución de dispositivos electrónicos de última generación con la máxima calidad</p>
                </div>
            </div>
            <div class="box__footer">
                <h2>Soluciones</h2>
                <a href="formulario_citas.php">Inscríbete al curso</a>
                <a href="Inicio_sesion.php">Inicio sesión</a>
            </div>
            <div class="box__footer">
                <h2>TEKNOCITY</h2>
                <a href="formulario_citas.php">Acerca de</a>
                <a href="Inicio_sesion.php">Términos</a>
            </div>
            <div class="box__footer">
                <h2>RRSS</h2>
                <a href="formulario_citas.php"><i class="fa-brands fa-instagram"></i> <i class="fa-brands fa-square-x-twitter"></i> <i class="fa-brands fa-square-facebook"></i></a>
            </div>
        </div>
        <div class="box__copyright">
            <hr>
            <p>Derechos reservados © 2024 <b>TEKNOCITY</b></p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('buscador');
            const itemsContainer = document.querySelector('.contenedor-items');

            searchInput.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase();
                const items = itemsContainer.querySelectorAll('.product');

                items.forEach(function(item) {
                    const itemName = item.querySelector('h3').textContent.toLowerCase();
                    if (itemName.includes(searchTerm)) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>
