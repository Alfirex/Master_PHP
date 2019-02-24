<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Subir archivos PHP</title>
</head>
<body>
    <h1>Subir imagenes con PHP</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo" />
        <input type="submit" value="Enviar" />
    </form>
</body>
</html>
