
<!-- Codigo utilizado para cerrar sesion-->
<?php

    session_start();
    session_destroy();
    header("location: ../Inicio_sesion.php");


?>