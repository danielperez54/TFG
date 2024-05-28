<!--Comprobacion de si se ha iniciado sesion-->

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
    <link rel="stylesheet" href="CSS/bienvenida2.css">
    <!-- GOOGLE FONTs LETRAS-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- CSS ANIMADAS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://kit.fontawesome.com/4f730f639e.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <li><a href="tienda.php">Tienda</a></li>  
                        <li><a href="PHP/cerrar_sesion.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>        
                    </ul>
                </nav>
            </div>
        </div>
</header>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    
<section> <!-- slider container-->
    <div class="slider-images">
        <div class="slider-img">
            <img src="IMAGENES/apple.png" alt="1" />
        </div>
        <div class="slider-img">
            <img src="IMAGENES/samsung.png" alt="2" />
        </div>
        <div class="slider-img">
            <img src="IMAGENES/xiaomi.png" alt="3" />
        </div>
        <div class="slider-img active">
            <img src="IMAGENES/lenovo.png" alt="4" />
        </div>
        <div class="slider-img">
            <img src="IMAGENES/logitech1.png" alt="5" />
        </div>
        <div class="slider-img">
            <img src="IMAGENES/razer.png" alt="6" />
        </div>
        <div class="slider-img">
            <img src="IMAGENES/msi.jpg" alt="1" />
        </div>
    </div>
    <hr>
</section>

<script src="JAVASCRIPT/jQuery.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".slider-img").on("click", function () {
            $(".slider-img").removeClass("active");
            $(this).addClass("active");
        });
    });
</script>

<div class="container">
    <div class="card">
        <div class="box box1">
            <div class="content">
                <img src="IMAGENES/iPhonee15.png" alt="">
                <h3>Moviles</h3>
            </div>
        </div>
        <div class="box box2">
            <div class="content">
                <div class="icon">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <p>En TEKNOCITY disponemos de los dispositivos moviles de ultima generación.</p>
                <a href="moviles">Ver</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="box box1">
            <div class="content">
                <img src="IMAGENES/portatil.jpg" alt="">
                <h3>Portatiles</h3>
            </div>
        </div>
        <div class="box box2">
            <div class="content">
                <div class="icon">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <p>Aquí podras ver toda la variedad de portatiles como para la vida laboral como para el gamming</p>
                <a href="moviles">Ver</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="box box1">
            <div class="content">
                <img src="IMAGENES/cascos.png" alt="">
                <h3>Perifericos</h3>
            </div>
        </div> 
        <div class="box box2">
            <div class="content">
                <div class="icon">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                </div>
                <p>Tenemos todo tipo de variedad de perifericos haciendo click en ver podras ver todos</p>
                <a href="moviles">Ver</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="box box1">
            <div class="content">
                <img src="IMAGENES/reloj.png" alt="">
                <h3>SmartWatch</h3>
            </div>
        </div> 
        <div class="box box2">
            <div class="content">
                <div class="icon">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                </div>
                <p>Todo tipo de variedad de smartwatch con diversas funcionalidades.</p>
                <a href="moviles">Ver</a>
            </div>
        </div>
    </div>

    
</div>

<br>

<div class="card1">
    <div class="card_landing1" style="--i:url(curso1.jpg)">
    <img src="curso1.png" alt="" width="300px" height="400px" position="fixed">
        <h6>Curso de formación</h6>
    </div>
    <div class="card_info1">
        <div class="head1">
            <p class="title1">Información</p>
            <div class="description1">
                <div class="item1">
                    <i class="fa-regular fa-clock"></i>
                    <p>168 h</p>
                </div>
                <div class="item1">
                    <i class="fa-regular fa-user"></i>
                    <p>50</p>
                </div>
            </div>
        </div>


        <div class="content1">
            <p class="title1">Requisitos:</p>
            <ul class="list1">
                <li> 15€</li>
                <li> 168h</li>
                <li> Mayores de 16 años</li>
                <li> Presencial</li>
                <li> Experiencia</li>
            </ul>
        </div>

        <div class="action1">
            <a href="#" class="btn1">Inscribirse</a>
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
                <p>TEKNOCITY es una empresa que se dedica a la distribución de dispositivos elctronicos de ultimageneración con la maxima calidad</p>
                </div>
            </div>
            <div class="box__footer">
               <h2>Soluciones</h2>
               <a href="formulario_citas.php">Citas</a>
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