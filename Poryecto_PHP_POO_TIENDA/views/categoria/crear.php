<h1>Crear una nueva Categoria</h1>

<form action="<?=base_url?>categoria/save" method="post">
    <label for="name">Nombre</label>
    <input type="text" name="name" required>

    <input type="submit" value="Insertar">
</form>