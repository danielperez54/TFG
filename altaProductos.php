<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Productos</title>
    <link rel="stylesheet" href="CSS/inicio_sesion1.css">
    <!-- GOOGLE FONTs LETRAS-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- CSS ANIMADAS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://kit.fontawesome.com/4f730f639e.js" crossorigin="anonymous"></script>
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
                    <ul class="menu">
                            <li class="submenu">
                                 <a href="altaProductos.php">Alta Productos</a>
                                     <ul class="submenu-content">
                                         <li><a href="bajaProductos.php">Baja Productos</a></li>
                                    </ul>
                                        </li>
                                        <li><a href="bienvenida.php">Inicio</a></li>
                                        <li><a href="tienda_general.php">Tienda</a></li>
                                        <li><a href="PHP/cerrar_sesion.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
                                    </ul>      
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <br><br><br><br>
    <br><br><br><br>
    <div class="content">

    <div class="contact-wrapper animated bounceInUp">
    <div class="contact-form">
        <h3 class="logo">Registrar Producto<span> rellenando el siguiente formulario:</span></h3>
        <form action="PHP/alta_productos.php" method="POST" enctype="multipart/form-data">
            <p>
                <label>Nombre del Producto</label>
                <input type="text" name="nombre" required>
            </p>
            <p>
                <label>Descripción</label>
                <textarea name="descripcion" required></textarea>
            </p>
            <p>
                <label>Precio</label>
                <input type="number" step="0.01" name="precio" required>
            </p>
            <p>
                <label>Imagen del Producto</label>
                <input type="file" name="imagen" accept="image/*" required>
            </p>
            <p class="block">
                <button class='button' type="submit" name="submit">Registrar Producto</button>
            </p>
        </form>
    </div>
    <div class="contact-info">
        <ul>
            <li>Esperamos que tengas una cómoda navegación por nuestra página.</li>
            <li>Si ya tienes cuenta, inicia sesión <a href="Inicio_sesion.php">AQUÍ</a>.</li>
        </ul>
        <img src="IMAGENES/TEKNOCITY.png">
    </div>
</div>


    </div>
    <br><br><br><br>
    <br><br><br><br>
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
               <a href="formulario_citas.php">Citas</a>
               <a href="Inicio_sesion.php">Inicio sesión</a>
            </div>

            <div class="box__footer">
               <h2>TEKNOCITY</h2>
               <a href="formulario_citas.php">Acerca de</a>
               <a href="Inicio_sesion.php">Términos</a>
            </div>

            <div class="box__footer">
               <h2>RRSS</h2>
               <a href="formulario_citas.php"><i class="fa-brands fa-instagram"></i> Instagram</a>
               <a href="Inicio_sesion.php"><i class="fa-brands fa-square-x-twitter"></i> X</a>

            </div>
        </div>
        <div class="box__copyright">
            <hr>
            <p>Derechos reservados © 2024
            <b>TEKNOCITY</b></p>
        </div>
    </footer>
</body>
</html>
