<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Imprimir por pantallas - Master en PHP</title>
    </head>
    <body>
        <h1>Master en PHP - <?php echo "Imprimir por pantallas"; ?> </h1>

        <?= "Bienvenido al atajo echo "?>
        <?php
        /**
         * Created by PhpStorm.
         * User: Alfirex
         * Date: 30/01/2019
         * Time: 23:59
         */

            // Titular de la seccion
            echo "<h3>Listado  de videojuegos</h3>";
            /*
            Esta es una lista
            de videojuegos
            moderno
             */
            echo "<ul>"
                   ."<li>GTA</li>"
                   ."<li>Fifa</li>"
                   ."<li>Mario Bros</li>"
                 ."</ul>";

            //echo "Hola Hola Hola";

            // Parrafo explicativo
            echo '<p>Esta es toda'.' - '.' lista de juegos </p>';

        ?>
    </body>
</html>

