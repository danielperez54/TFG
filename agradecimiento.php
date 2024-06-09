<?php

    session_start();

    if(!isset($_SESSION['Nombre'])){
        echo '
        <script>
            alert("Por favor inicia sesión");
            window.location = "Inicio_sesion.php";
        </script>
        ';
        session_destroy();
        die();
        
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website with a contact Form 01</title>
    <link rel="stylesheet" href="CSS/inicio_sesion.css">
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
                        <li><a href="bienvenida.php">Inicio</a></li>
                        <li><a href="">Tienda</a></li>  
                        <li><a href="PHP/cerrar_sesion.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>        
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <br><br> <br><br>
    <br><br> <br><br>
    <div class="content">

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3 class="logo">GRACIAS POR TU COMPRA!!! <span>Disfruta de tu producto y ante cualquier duda que tengas a la derecha esta nuestra info.</span></h3>
                
            </div>
            <div class="contact-info">
                <h4>Mas información</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Zaragoza</li>
                    <li><i class="fas fa-phone"></i> +34 638 32 38 25</li>
                    <li><i class="fas fa-envelope-open-text"></i> TEKNOCITY@gmail.com</li>
                </ul>
                <p>Empresa dedicada a la distribución de dispositivos electronicos de ultima generación</p>
                <p>TEKNOCITY</p>
                <img src="IMAGENES/TEKNOCITY.png">
            </div>
        </div>

    </div>
    <br><br> <br><br>
    <br><br> <br><br>
    <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="IMAGENES/TEKNOCITY.png" alt="">
                </div>
                <div class="terms">
                <p>TEKNOCITY es una empresa que se dedica a la distribución de dispositivos elctronicos de ultimageneración con la maxima calidad</p>
                </div>
            </div>
            <div class="box__footer">
               <h2>Soluciones</h2>
               <a href="formulario_citas.php">Inicio</a>
               <a href="Inicio_sesion.php">Inicio sesion</a>
            </div>

            <div class="box__footer">
               <h2>TEKNOCITY</h2>
               <a href="formulario_citas.php">Acerca de</a>
               <a href="Inicio_sesion.php">Terminos</a>
            </div>

            <div class="box__footer">
               <h2>RRSS</h2>
               <a href="formulario_citas.php"><i class="fa-brands fa-instagram"></i>  Instagram</a>
               <a href="Inicio_sesion.php"><i class="fa-brands fa-square-x-twitter"></i>  X</a>

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