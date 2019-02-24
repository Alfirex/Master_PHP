<?php
/*
 * COOKIE: Es un fichero que se almacena en el ordenador del usuario que visita la web, con el fin de recordar datos
 * o rastrar el comportamiento del mimo en la web
 */

    // Crear cookies
    //setcookie("nombre", "Valor que solo puede ser texto", caducidad, ruta, dominio);

    // COOKIE BASICA
    setcookie("miCookie", "Valor de mi Gallete");

    // COOKIE con EXPIRACION
    setcookie("unYear", "Valor de mi cookie de 365 dias", time() + (60 * 60 * 24 * 365));

header('Location:ver_cookies.php');
?>


