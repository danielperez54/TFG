<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- GOOGLE FONTs LETRAS-->
     <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- CSS ANIMADAS -->
    <link rel="stylesheet" href="estilos2.css">
    <!--<link rel="stylesheet" href="buscador.css">-->
    <script src="JAVASCRIPT/app.js" async></script>
    <script src="JAVASCRIPT/buscador.js"></script>
    <script src="https://kit.fontawesome.com/4f730f639e.js" crossorigin="anonymous"></script>
    
    <title>Tienda</title>
</head>

<header id="header">
<div class="container__header">
            <div class="logo">
                <img src="IMAGENES/TEKNOCITY.png">
            </div>
            <div class="container__nav">
                <nav>
                    <ul>
                        <li><a href="bienvenida.php">Inicio</a></li>
                        <li><a href="tienda.php">Tienda</a></li>  
                        <li><a href="PHP/cerrar_sesion.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>        
                    </ul>
                </nav>
            </div>
        </div>
</header>
<body>

<br><br><br><br><br>
<div>
    <div class="propiedades-buscador">
    <input type="text"  name="buscador" id="buscador" placeholder="Busca aquí tu producto">
    <!--<button onclick="busc()">Presioname</button>-->
    </div>
</div>

<section class="contenedor">
        <div class="contenedor-items">
            <?php
            // Incluir el archivo de conexión
            include 'PHP/conexion_be.php';

            // Verificar si la conexión se estableció correctamente
            if (!$conexion) {
                die("Error de conexión: " . mysqli_connect_error());
            }

            // Consulta SQL para obtener todos los productos
            $sql = "SELECT * FROM productos";
            $resultado = mysqli_query($conexion, $sql);

            // Verificar si se encontraron resultados
            if ($resultado && mysqli_num_rows($resultado) > 0) {
                // Recorrer cada fila de resultados
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    $nombre = $fila['nombre'];
                    $descripcion = $fila['descripcion'];
                    $precio = $fila['precio'];
                    $imagen = $fila['imagen'];

                    // Mostrar cada producto dentro de un div
                    echo '<div class="product">';
                    echo '<img src="' . $imagen . '" alt="' . $nombre . '">';
                    echo '<h3>' . $nombre . '</h3>';
                    echo '<p>' . $descripcion . '</p>';
                    echo '<p>Precio: ' . $precio . ' €</p>';
                    echo '</div>';
                }
            } else {
                echo "<p>No se encontraron productos.</p>";
            }

            // Liberar el resultado
            mysqli_free_result($resultado);

            // Cerrar la conexión
            mysqli_close($conexion);
            ?>
        </div>

        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
                <!-- 
                <div class="carrito-item">
                    <img src="img/boxengasse.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Box Engasse</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$15.000,00</span>
                    </div>
                   <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </span>
                </div>
                <div class="carrito-item">
                    <img src="img/skinglam.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Skin Glam</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="3" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$18.000,00</span>
                    </div>
                   <button class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </button>
                </div>
                 -->
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>
    <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="IMAGENES/TEKNOCITY.png" alt="">
                </div>
                <div class="terms">
                <p>TEKNOCITY es una empresa que se dedica a la distribución de dispositivos elctronicos de ultima generación con la maxima calidad</p>
                </div>
            </div>
            <div class="box__footer">
               <h2>Soluciones</h2>
               <a href="formulario_citas.php">Inscribete al curso</a>
               <a href="Inicio_sesion.php">Inicio sesion</a>
            </div>

            <div class="box__footer">
               <h2>TEKNOCITY</h2>
               <a href="formulario_citas.php">Acerca de</a>
               <a href="Inicio_sesion.php">Terminos</a>
            </div>

            <div class="box__footer">
               <h2>RRSS</h2>
               <a href="formulario_citas.php"><i class="fa-brands fa-instagram"></i> <i class="fa-brands fa-square-x-twitter"></i> <i class="fa-brands fa-square-facebook"></i></a>
           </div>
        </div>
        <div class="box__copyright">
            <hr>
            <p>Derechos reservados © 2024
            <b>TEKNOCITY</b></p>
        </div>
<script src="JAVASCRIPT/scrip.js"></script>
     
</footer>

</body>
</html>