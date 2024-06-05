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
    <script src="JAVASCRIPT/app.js" async></script>
    <script src="https://kit.fontawesome.com/4f730f639e.js" crossorigin="anonymous"></script>
    <title>Tienda</title>
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


<br><br><br><br>
<section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Portátil gaming - MSI THIN GF63 12VE-026ES</span>
                <img src="IMAGENES/msi1.png" alt="" class="img-item">
                <span class="precio-item">969€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_portatil-gaming-msi-thin-gf63-12ve-026es-156-full-hd-intelr-coretm-i7-12650h-16gb-ram-512gb-ssd-geforce-rtx-4050-windows-11-home-1555086.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-TOP.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8u0fRqEb9kndi_XxHG95a9uWU1t5GFZymzBx0lz6ch69-ltSdOk6dsaArueEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Portátil gaming - MSI Thin GF63 12UCX-1076XES</span>
                <img src="IMAGENES/msi2.png" alt="" class="img-item">
                <span class="precio-item">709€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_portatil-gaming-msi-thin-gf63-12ucx-1076xes-156-full-hd-intelr-coretm-i5-12450h-16gb-ram-512gb-ssd-geforce-rtxtm-2050-sin-sistema-operativo-1569650.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-TOP.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8sAz5sSDDe5c0DvrYszvF-iYstzPsQ7dERM8FbCZ7HIMMLZKfPr7AUaAoGREALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Portátil gaming - MSI Pulse 15 B13VFK-442XES</span>
                <img src="IMAGENES/msi3.png" alt="" class="img-item">
                <span class="precio-item">1.538€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_portatil-gaming-msi-pulse-15-b13vfk-442xes-156-qhd-intelr-coretm-i7-13700h-32gb-ram-1tb-ssd-geforce-rtxtm-4060-sin-sistema-operativo-1558941.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-TOP.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8sr6x3e-uWSudzlWiwGKFB2PK6-EOYB4_8A2ekbzjGzZYXSPEyhN28aApzBEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Razer Blade 17</span>
                <img src="IMAGENES/razerport1.png" alt="" class="img-item">
                <span class="precio-item">1.999€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.pccomponentes.com/razer-blade-17-4k-144hz-intel-core-i9-12900h-32gb-1tb-ssd-rtx-3070ti-173?s_kwcid=AL!14405!3!649445392543!!!g!2310861622017!&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8ur66dhI97Idx0yIt8N2QDUwDJui_UvHQ26XeESr2cpZUh421B_lrkaAk9bEALw_wcB-->
            </div>
            <div class="item">
                <span class="titulo-item">Razer Blade 16</span>
                <img src="IMAGENES/razerport2.png" alt="" class="img-item">
                <span class="precio-item">4.999€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.pccomponentes.com/razer-blade-16-doble-resolucion-uhd-fhd-intel-core-i9-13950hx-32gb-2tb-ssd-rtx-4090-16?s_kwcid=AL!14405!3!649445392543!!!g!2331554351914!&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8v2HidUuGx9bR2_yJ7es5G2NQjW2umJZ9CBFM3VlcwSqee83QqL2tEaAiKXEALw_wcB-->
            </div>
            <div class="item">
                <span class="titulo-item">Razer Blade 16 2024</span>
                <img src="IMAGENES/razerport3.png" alt="" class="img-item">
                <span class="precio-item">5.299€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.pccomponentes.com/razer-blade-16-2024-dual-uhd-fhd-intel-core-i9-14900hx-64gb-4tb-ssd-rtx-4090-16?s_kwcid=AL!14405!3!649445392543!!!g!2331554351914!&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8tBXcuPeLNBD1R_OIXmBpPGAH332JJOJZGvzAXiGOeqffGnMZGq0TUaAjvYEALw_wcB-->
            </div>
            <div class="item">
                <span class="titulo-item">Portátil - Lenovo IdeaPad 3 15ITL6</span>
                <img src="IMAGENES/lenovoport1.png" alt="" class="img-item">
                <span class="precio-item">409€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_portatil-lenovo-ideapad-3-15itl6-156-full-hd-intelr-coretm-i5-1155g7-8-gb-ram-512-gb-ssd-irisr-xe-graphics-sin-sistema-operativo-1559901.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-TOP.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8urs5ciQHmEe56uMUlxU4IiLo9bmGnNKN2Hkuxf87c7aYbl10mZ6lUaApLREALw_wcB&gclsrc=aw.ds-->

            </div>
            <div class="item">
                <span class="titulo-item">Portátil - Lenovo IdeaPad 5 15ITL05</span>
                <img src="IMAGENES/lenovoport2.png" alt="" class="img-item">
                <span class="precio-item">569€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_portatil-lenovo-ideapad-5-15itl05-156-full-hd-intelr-coretm-i7-1165g7-8gb-ram-512gb-ssd-intel-irisr-xe-graphics-sin-sistema-operativo-1531637.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-TOP.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8snvBwZ2y0lkau4emjwRGUEWvHKh3FMhBkb3h36094JeqP-hNFBFjEaAiLXEALw_wcB&gclsrc=aw.ds-->

            </div>
            <div class="item">
                <span class="titulo-item">Portátil - Lenovo IdeaPad Slim 5 16IRL8</span>
                <img src="IMAGENES/lenovoport3.png" alt="" class="img-item">
                <span class="precio-item">749€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_portatil-lenovo-ideapad-slim-5-16irl8-16-wuxga-intelr-coretm-i7-13620h-16gb-ram-512gb-ssd-uhd-graphics-windows-11-home-1558261.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-TOP.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8vDq4gA3sAcE0d0VJrtKmXjuwFP1qAhaHH6_iIAKlSDoFK57j4JRb0aAj8vEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Apple MacBook Air (2022)</span>
                <img src="IMAGENES/mac1.png" alt="" class="img-item">
                <span class="precio-item">1.099€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_apple-macbook-air-2022-136-retina-chip-m2-de-apple-gpu-8-nucleos-8-gb-256-gb-ssd-macos-teclado-magic-keyboard-touch-id-gris-espacial-1534476.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-TOP.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8u_GCgL0xeNZJuclFl9Prhe1pgGG7sez2dY_q2jicI2xzmS8TQUa0oaAhEOEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Apple MacBook Air (2024)</span>
                <img src="IMAGENES/mac2.png" alt="" class="img-item">
                <span class="precio-item">1.439€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_apple-macbook-air-2024-153-chip-m3-gpu-de-10-nucleos-8-gb-ram-256gb-de-ssd-teclado-magic-keyboard-touch-id-macos-medianoche-1571103.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-TOP.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8uhKkRB5e-NV5cbJHU-yDltrfLq_VEenGV1LgTAId84h2lJueXiyNwaAheBEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Apple MacBook Pro (2023)</span>
                <img src="IMAGENES/mac3.png" alt="" class="img-item">
                <span class="precio-item">1.799€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_apple-macbook-pro-2023-142-chip-m3-cpu-de-8-nucleos-gpu-de-10-nucleos-8-gb-ram-ssd-de-512gb-macos-gris-espacial-1564632.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-TOP.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8uWbEHNCOD_Tem0IKK1Wo4SM6YBhesPGgGmW74-xDiw413KTg004EIaAjnDEALw_wcB&gclsrc=aw.ds-->
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