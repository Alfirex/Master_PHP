<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <!--  En el method le pasamos el tipo de envio que queremos hacer -->
        <form method="get" action="recibir.php">
            <p>
                <label for="">Nombre:
                    <input type="text" name="nombre">
                </label>
            </p>
            <p>
                <label for="">Apellidos:
                    <input type="text" name="apellidos">
                </label>
            </p>
            <input type="submit" value="Enviar" >
        </form>
    </body>
</html>
