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
                <span class="titulo-item">Teclado gaming - Razer Ornata V3 X</span>
                <img src="IMAGENES/rezertecl1.png" alt="" class="img-item">
                <span class="precio-item">49,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_teclado-gaming-razer-ornata-v3-x-por-cable-razer-chroma-rgb-switches-silenciosos-reposamunecas-ergonomico-negro-1556503.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-RESTO.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8sRAG6R83zy1XOAup0rCeZMHBFYOZJOX_KnKaMMW2l28N6EpTcmxYQaAkOQEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Teclado gaming - Razer Ornata V3</span>
                <img src="IMAGENES/rezertecl2.png" alt="" class="img-item">
                <span class="precio-item">89,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_teclado-gaming-razer-ornata-v3-por-cable-retroiluminacion-ambidiestro-membrana-mecanica-qwerty-negro-1556501.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-RESTO.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8uM_5EtBn4HMhmw5B394fso84k36_q9P-hdS6IQo0LaBGTtLvMTAJEaAmOUEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Teclado gaming - Razer Huntsman V2 Tenkeyless</span>
                <img src="IMAGENES/rezertecl3.png" alt="" class="img-item">
                <span class="precio-item">219€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_huntsman-v2-purple-switch-spanish-layout-1531152.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-RESTO.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8uvJ870315KxhKC0RZ6LJSFCo1CxVhO3Fb9t2V6yc9cT--U4EahXq0aAqUjEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">APPLE Magic Keyboard Inalámbrico Plata</span>
                <img src="IMAGENES/appletecl1.png" alt="" class="img-item">
                <span class="precio-item">119€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_apple-magic-keyboard-teclado-inalambrico-numerico-bluetooth%C2%AE-qwerty-espanol-plata-1368951.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-PROMO.SECUNDARIOS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8uy3fAIETY1cDLXkrWgUBE4y_E7uqpmycKmPO8kBp8ijkLRKzk5micaAqdzEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">APPLE Magic Keyboard Inalámbrico Blanco</span>
                <img src="IMAGENES/appletecl2.png" alt="" class="img-item">
                <span class="precio-item">93,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_apple-magic-keyboard-inalambrico-y-recargable-cable-usb-c-a-lightning-tejido-blanco-1515403.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-PROMO.SECUNDARIOS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8sTPNR0B2Lk4NIfc3V8Ghjeo6Vd1ObZ82kpk5jaSW6Vm2CY5OyPPq4aAoa2EALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">APPLE Magic Keyboard</span>
                <img src="IMAGENES/appletecl3.png" alt="" class="img-item">
                <span class="precio-item">179€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_apple-magic-keyboard-con-touch-id-y-teclado-numerico-para-modelos-de-mac-con-chip-de-apple-espanol-bluetooth-negro-1530330.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-PROMO.SECUNDARIOS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8tMAeo_mrYTZKLq542_3NSm-C7mRbsI7x1XkGLI1IV9b9yZklhdyxcaAlTUEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Teclado Gaming - Logitech G413 SE</span>
                <img src="IMAGENES/logitechtecl1.png" alt="" class="img-item">
                <span class="precio-item">68,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.amazon.es/Logitech-Full-Size-Teclado-Mec%C3%A1nico-Gaming/dp/B07W5JKPK4/ref=asc_df_B07W5JKPK4/?tag=googshopes-21&linkCode=df0&hvadid=593216731606&hvpos=&hvnetw=g&hvrand=15067724523716015397&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1005548&hvtargid=pla-1762030303675&psc=1&mcid=ef18335822c63bee9839339ba89c3108-->
            </div>
            <div class="item">
                <span class="titulo-item">Teclado Gaming - LOGITECH G Pro</span>
                <img src="IMAGENES/logitechtecl2.png" alt="" class="img-item">
                <span class="precio-item">156€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_teclado-gaming-g-pro-logitech-negro-101746942.html-->
            </div>
            <div class="item">
                <span class="titulo-item">Teclado gaming - Logitech G G915 TKL</span>
                <img src="IMAGENES/logitechtecl3.png" alt="" class="img-item">
                <span class="precio-item">249€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_teclado-gaming-logitech-g915-tkl-inal%C3%A1mbrico-mec%C3%A1nico-lightspeed-bluetooth-sin-teclado-num%C3%A9rico-negro-1502686.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-RESTO.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8ugwXYFvzieMKGjCSELqbYXaOZF5TzSLNkM5TLSRygkRMsbduWvyNMaAoq0EALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Ratón - Razer DeathAdder Essential</span>
                <img src="IMAGENES/razerat1.png" alt="" class="img-item">
                <span class="precio-item">24,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.amazon.es/Razer-DeathAdder-Essential-programables-interruptores/dp/B092R5MCB3/ref=asc_df_B092R5MCB3/?tag=googshopes-21&linkCode=df0&hvadid=527749737731&hvpos=&hvnetw=g&hvrand=7441894180769003491&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1005548&hvtargid=pla-1363770907123&mcid=50b69380f11931dc9fcc2ed549fb69aa&th=1-->
            </div>
            <div class="item">
                <span class="titulo-item">Ratón - Razer Cobra</span>
                <img src="IMAGENES/razerat2.png" alt="" class="img-item">
                <span class="precio-item">49,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_raton-razer-cobra-por-cable-8-botones-programables-8500-ppp-iluminacion-rgb-negro-1561000.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-RESTO.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8tFuscc89JkJSD3oFqnTimBTK48ZxQAhtIUPZ18klDzs77FRdyvj90aAja8EALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Ratón gaming - Razer Basilisk V3</span>
                <img src="IMAGENES/razerat3.png" alt="" class="img-item">
                <span class="precio-item">84,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_raton-gaming-razer-basilisk-v3-por-cable-26000-ppp-11-teclas-programables-negro-1531149.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-RESTO.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8uzzGtamVjDOf6K0I0RjNkxIbU9H3DffZSKfe5JtmwkuXeuRI777Z4aAg08EALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">APPLE Magic Mouse</span>
                <img src="IMAGENES/applerat1.png" alt="" class="img-item">
                <span class="precio-item">69,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_apple-magic-mouse-raton-inalambrico-y-recargable-superficie-multi-touchcable-usb-c-a-lightning-blanco-1515406.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-PROMO.SECUNDARIOS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8va5XXD9VaIITKZRmVZRGGUO1L8ENOGIlh_acoMOe9l1k6Oj4XrHPIaAnhrEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">APPLE Magic Mouse</span>
                <img src="IMAGENES/applerat2.png" alt="" class="img-item">
                <span class="precio-item">89,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_apple-magic-mouse-superficie-multitactil-lightning-inalambrico-y-recargable-negro-1530328.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-PROMO.SECUNDARIOS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8tPpHNRHUwS4UWGA5AAMSj7h7DjuQ78sqZSbEz7ifEP1ncQr0c1bFAaAmFvEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Ratón inalámbrico - Logitech M185</span>
                <img src="IMAGENES/logitechrat1.png" alt="" class="img-item">
                <span class="precio-item">17,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_raton-inalambrico-logitech-m185-nano-receptor-1000-ppp-ambidiestro-24ghz-12-meses-de-pila-windows-mac-negro-y-azul-1146350.html-->
            </div>
            <div class="item">
                <span class="titulo-item">Ratón inalámbrico - Logitech Marathon Mouse M705</span>
                <img src="IMAGENES/logitechrat2.png" alt="" class="img-item">
                <span class="precio-item">54,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_raton-inalambrico-logitech-marathon-mouse-m705-1000-ppp-botones-personalizables-3-anos-pila-usb-multisistema-operativo-negro-1124640.html-->
            </div>
            <div class="item">
                <span class="titulo-item">Ratón gaming - Logitech G G502 Hero</span>
                <img src="IMAGENES/logitechrat3.png" alt="" class="img-item">
                <span class="precio-item">89,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_raton-gaming-logitech-g-g502-hero-sensor-hero-25k-25600-dpi-rgb-peso-personalizable-memoria-integrada-11-botones-programables-negro-1438627.html-->
            </div>
            <div class="item">
                <span class="titulo-item">Auriculares gaming - Razer BlackShark V2X</span>
                <img src="IMAGENES/razercas1.png" alt="" class="img-item">
                <span class="precio-item">49,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_auriculares-gaming-razer-blackshark-v2-x-con-cable-jack-de-3-5-mm-sonido-7-1-con-micr%C3%B3fono-negro-1501142.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-PROMO.SECUNDARIOS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8ui5zWo59A4HGi_2oZAiOnuiJDFWfxG-E0DoaWIpHhkLQya8Sk8pkgaArPQEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Auriculares gaming - Razer BlackShark V2 </span>
                <img src="IMAGENES/razercas2.png" alt="" class="img-item">
                <span class="precio-item">61,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_auriculares-gaming-razer-blackshark-v2-se-diadema-alambricos-usb-12-hz-28-khz-microfono-negro-1515054.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-PROMO.SECUNDARIOS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8u7A5dDPZt1AKkbE1EoqCZvhZWbhqPDFzc33cVy8gxblo7UW3b0auAaAmTOEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Auriculares gaming - Razer Kraken V3</span>
                <img src="IMAGENES/razercas3.png" alt="" class="img-item">
                <span class="precio-item">119,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_auriculares-gaming-razer-kraken-v3-cancelacion-pasiva-ruido-razer-chromatm-rgb-microfono-razer-hyperclear-negro-1532689.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-RESTO.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8vot6GcpR0HyN5vAOK2VO4ji2Cw_nws3xuIMfgIkUHCu70K7l6aNQkaAoK7EALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">APPLE EarPods</span>
                <img src="IMAGENES/applecas1.png" alt="" class="img-item">
                <span class="precio-item">14,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_apple-earpods-auriculares-de-boton-cable-conexion-lightning-microfono-blanco-1340798.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-PROMO.SECUNDARIOS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8t_DYR1-RJlnigGg97nf6XVs25m6yesIyWXb3jlkLHonxf1sxpdaiIaAlQDEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">APPLE AirPods (2019 2ª gen)</span>
                <img src="IMAGENES/applecas2.png" alt="" class="img-item">
                <span class="precio-item">109,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_apple-airpods-2019-2%C2%AA-gen-inalambricos-bluetooth%C2%AE-estuche-carga-no-inalambrica-chip-h1-siri-blanco-1450020.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-PROMO.SECUNDARIOS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8tMCb7CN7DfnkHQF7O7la6AcyCdkNNtLYif7_f1dsEBxQi5O3ayzq4aAh6uEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">APPLE AirPods Max</span>
                <img src="IMAGENES/applecas3.png" alt="" class="img-item">
                <span class="precio-item">541,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_diadema-bluetooth-apple-airpods-max-cancelaci%C3%B3n-activa-de-ruido-bluetooth-smart-case-plata-1492459.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-RESTO.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8vzWb5sU-jVu2Cav_vR64smZ5kLx_epqDcRlZ8by9hGiOelPi9CIA4aAkCGEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Auriculares gaming - Logitech G G432</span>
                <img src="IMAGENES/logitechcas1.png" alt="" class="img-item">
                <span class="precio-item">89,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_auriculares-gaming-logitech-g432-de-diadema-cable-dts-headphonex-20-transductores-50-mm-pcxbox-oneps4nintendo-switch-negro-y-azul-1456095.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-RESTO.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8sMIaspZQ6O7XJW7m6D2y_G5bKDQjcaVafHeZLY7HG-FO4O3kS874caAgviEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Auriculares gaming - Logitech G G733</span>
                <img src="IMAGENES/logitechcas2.png" alt="" class="img-item">
                <span class="precio-item">159,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_auriculares-gaming-logitech-g733-diadema-inalambricos-microfono-pcmacps-hasta-29h-de-bateria-71-canales-168-millones-de-colores-negro-1486770.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-RESTO.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8tpg74iAtY5k3NCPPQlL_1pLRxX_Qi7XV0S6Dz7MKV_6sXjsTCyVocaAtyXEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Auriculares gaming - Logitech G ASTRO A50 X</span>
                <img src="IMAGENES/logitechcas3.png" alt="" class="img-item">
                <span class="precio-item">399,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_auriculares-gaming-logitech-g-astro-a50-x-estacion-base-multidispositivo-hdmi-4k-lightspeed-microfono-pcmacpsxbox-bluetooth-negro-1571949.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-RESTO.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8vrGIEF24AX8mfmix_vfj6RLE2DagH1U44hjlPsUmh3OPmiTtXa1UYaApaKEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Alfombrilla gaming - Razer Gigantus V2 Medium</span>
                <img src="IMAGENES/razeralfom1.png" alt="" class="img-item">
                <span class="precio-item">11,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_alfombrilla-gaming-razer-gigantus-v2-medium-36-cm-superficie-de-tela-texturizada-de-microtejidos-negro-1509407.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-RESTO.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8tYFeHmTh-M1mj3OJ7PMZK8NKODITw0eQfM9G0fWW8bCEUKTaGCjDsaAksUEALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Alfombrilla gaming - Razer Alfombrilla Razer Goliathus Chroma</span>
                <img src="IMAGENES/razeralfom1.png" alt="" class="img-item">
                <span class="precio-item">49,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_alfombrilla-gaming-razer-alfombrilla-razer-goliathus-chroma-1435266.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-RESTO.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8sI4MsB9986XAgkXgz7WcZw2RMAONs0hcElzYPDJHoJa5B3QTu_IQsaAhB7EALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Alfombrilla gaming - Logitech G G640 x Team Heretics</span>
                <img src="IMAGENES/logitechalfom1.png" alt="" class="img-item">
                <span class="precio-item">19,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_alfombrilla-gaming-logitech-g-g640-x-team-heretics-base-de-goma-antideslizante-superficie-moderada-enrollable-cobertura-total-negro-y-dorado-1569647.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-RESTO.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8tgMDfl7WpYhim5YraVltYnydx7xa1S7JMv1BqrT_XmBfi_eIcDi2QaAhb_EALw_wcB&gclsrc=aw.ds-->
            </div>
            <div class="item">
                <span class="titulo-item">Alfombrilla gaming - Logitech G G840</span>
                <img src="IMAGENES/logitechalfom2.png" alt="" class="img-item">
                <span class="precio-item">44,99€</span>
                <button class="boton-item">Agregar al Carrito</button>
                <!--https://www.mediamarkt.es/es/product/_alfombrilla-gaming-logitech-g-g840-base-antideslizante-negro-1540528.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-RESTO.CATEGORIAS-ALL-ALL&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8usC0RLi9nGBVV0wYShLWoPcFmJvvjCjh9y1h1FZgJoWmAH4gY8ocsaApRuEALw_wcB&gclsrc=aw.ds-->
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

<script>
    // Cargar el carrito desde el servidor cuando se carga la página
    document.addEventListener('DOMContentLoaded', loadCarritoFromServer);

    function loadCarritoFromServer() {
        fetch('PHP/cargar_carrito.php')
            .then(response => response.json())
            .then(data => {
                data.forEach(item => {
                    agregarItemAlCarrito(item.titulo, item.precio, item.imagenSrc);
                    document.querySelectorAll('.carrito-item').forEach(carritoItem => {
                        if (carritoItem.getElementsByClassName('carrito-item-titulo')[0].innerText === item.titulo) {
                            carritoItem.getElementsByClassName('carrito-item-cantidad')[0].value = item.cantidad;
                        }
                    });
                });
            });
    }
</script>

</body>
</html>