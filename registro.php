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
                        <li><a href="formulario_citas.php">Cita</a></li>
                        <li><a href="">Tienda</a></li>    
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
                <h3 class="logo">Registrate<span> rellenando el siguiente formulario:</span></h3>
                <form  action="PHP/registro_usuario_be.php" method="POST"  enctype="multipart/form-data">
                    <p>
                        <label>Nombre</label>
                        <input type="text" name="Nombre">
                    </p>
                    <p>
                        <label>Apellidos</label>
                        <input type="text" name="Apellidos">
                    </p>
                    <p>
                        <label>Teléfono</label>
                        <input type="tel" name="tlfn">
                    </p>
                    <p>
                        <label>Correo</label>
                        <input type="mail" name="mail">
                    </p>
                    <p>
                        <label>Contraseña</label>
                        <input type="password" name="password">
                    </p>
                    <p>
                        <label>Localidad</label>
                        <input type="text" name="Localidad">
                    </p>
                    
                    <p class="block">
                        <button class='button'>Registrarse</button>
                    </p>
                </form>
            </div>
            <div class="contact-info">
            <ul>
                <p>
                </p>
                <li></i>Esperamos que tengas una comoda navegacion por nuestra página.</li>
                <li></i> SI YA TIENES CUENTA INICIA SESION <a href="Inicio_sesion.php">AQUÍ</a></li>
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
               <a href="formulario_citas.php"><i class="fa-brands fa-instagram"></i>  Instagram</a>
               <a href="Inicio_sesion.php"><i class="fa-brands fa-square-x-twitter"></i>  X</a>

            </div>
        </div>
        <div class="box__copyright">
            <hr>
            <p>Derechos reservados © 2024
            <b>TEKNOCITY</b></p>
        </div>


</body>
</html>