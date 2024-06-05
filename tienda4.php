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
                <span class="titulo-item">APPLE Watch SE (2023)</span>
                <img src="IMAGENES/applereloj1.png" alt="" class="img-item">
                <span class="precio-item">249€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_apple-watch-se-2023-gps-40-mm-caja-de-aluminio-medianoche-vidrio-delantero-ion-x-talla-sm-correa-deportiva-medianoche-1561381.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-PROMO.SECUNDARIOS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw9vqyBhCKARIsAIIcLMFEtBUNkkRaI9Qma7IJoMxItmDMOGgp8gmGo9uG8Voc0JD_CPq5ps0aAtskEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Apple Watch Series 9 (2023)</span>
                <img src="IMAGENES/applereloj2.png" alt="" class="img-item">
                <span class="precio-item">399€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_apple-watch-series-9-2023-gps-41-mm-gesto-de-doble-toque-caja-de-aluminio-rosa-correa-deportiva-rosa-talla-sm-1561423.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-PROMO.SECUNDARIOS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw9vqyBhCKARIsAIIcLMFzgPMWDjliZBLy7FhbnsKQ9UZuPIz652LySBged7GFmHKaCa9cVKsaAtQAEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Apple Watch Ultra 2 (2023)</span>
                <img src="IMAGENES/applereloj3.png" alt="" class="img-item">
                <span class="precio-item">859€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_apple-watch-ultra-2-2023-gps-cellular-49-mm-caja-de-titanio-gesto-doble-toque-correa-ocean-band-de-color-azul-1561488.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-RESTO.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw9vqyBhCKARIsAIIcLMHHagV3TmqjU2nyJntN4RbOHyC3qcSeyOOQCqXFR102ekmy5YtI6asaAsoTEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Smartwatch - Samsung Watch 4 BT</span>
                <img src="IMAGENES/samsungreloj1.png" alt="" class="img-item">
                <span class="precio-item">149€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_smartwatch-samsung-watch-4-bt-40-mm-12-exynos-w920-16-gb-240-mah-ip68-gold-1513905.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-PROMO.SECUNDARIOS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw9vqyBhCKARIsAIIcLMHoQzbS-5iGvzxbhHeLw8h8C1-oOB27D1pi-nlyGOMuLf0zbVvgq7YaAtPXEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Smartwatch - Samsung Watch 4 Classic BT</span>
                <img src="IMAGENES/samsungreloj2.png" alt="" class="img-item">
                <span class="precio-item">169€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_smartwatch-samsung-watch-4-classic-bt-46-mm-14-exynos-w920-16-gb-350-mah-ip68-black-1513900.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-PROMO.SECUNDARIOS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw9vqyBhCKARIsAIIcLMHZsB_Qkdh2KrXVQo8dXHvJmWlFCoCUNrK0vklcVvrp-TfYyM_J_FUaAlkbEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Smartwatch - Samsung Galaxy Watch6 BT</span>
                <img src="IMAGENES/samsungreloj3.png" alt="" class="img-item">
                <span class="precio-item">199€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_smartwatch-samsung-galaxy-watch6-bt-40mm-131-exynos-w930-16gb-2gb-ram-300mah-oro-1557006.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-PROMO.SECUNDARIOS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw9vqyBhCKARIsAIIcLMEPtJcsG7epQc3tBgMoaCQrumkdmFJLCHW3Uu-fmEyh3algWzhZCKsaAufIEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Smartwatch - Xiaomi Redmi Watch 3 Active</span>
                <img src="IMAGENES/xiaomireloj1.png" alt="" class="img-item">
                <span class="precio-item">34€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_smartwatch-xiaomi-redmi-watch-3-active-llamadas-bluetooth-bateria-hasta-12-dias-multideporte-negro-1556662.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-PROMO.SECUNDARIOS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw9vqyBhCKARIsAIIcLMEszmLtW9AF8novUN4lyzvnSDgp1iBWFKGOiXtGF_5DHn9z37rnZXIaAjNTEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Smartwatch - Xiaomi Redmi Watch 4</span>
                <img src="IMAGENES/xiaomireloj2.png" alt="" class="img-item">
                <span class="precio-item">90€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_smartwatch-xiaomi-redmi-watch-4-bluetooth-hasta-20-dias-multideporte-gris-plata-1567280.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-RESTO.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw9vqyBhCKARIsAIIcLMEEt-MJs7cPES4F_7TC14NfGNJDXqn3XOLbhiUPodlbCdqh2jNf-rQaAjCmEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Smartwatch - Xiaomi Watch 2</span>
                <img src="IMAGENES/xiaomireloj3.png" alt="" class="img-item">
                <span class="precio-item">165€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_smartwatch-xiaomi-watch-2-amoled-bluetooth-gps-dual-de-5-sistemas-150-modos-fitness-negro-1567277.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-PROMO.SECUNDARIOS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw9vqyBhCKARIsAIIcLMFWWEYlZr4pcxKyc80kEIzalGqgTT3EVWs28lu9IQ7Ov6GEAE0rNQEaApm_EALw_wcB&gclsrc=aw.ds-->
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