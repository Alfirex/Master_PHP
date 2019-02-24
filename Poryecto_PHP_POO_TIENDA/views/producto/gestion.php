<h1>Gestion de Productos:</h1>

<a href="<?= base_url ?>producto/crear" class="button button-small"> Crear Producto</a>

<!--Mensajes de error de confimacion de Creacion-->
<?php if (isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
    <strong class="alert_green">El producto se ha creado correctamente</strong>
<?php elseif (isset($_SESSION['producto']) && $_SESSION['producto'] == 'failed'): ?>
    <strong class="alert_red">El producto NO se ha creado correctamente</strong>
<?php endif; ?>
<?php Utils::deleteSession('producto'); ?>

<!--Mensajes de error de confimacion de Eliminacion-->
<?php if (isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
    <strong class="alert_green">El producto se ha eliminado correctamente</strong>
<?php elseif (isset($_SESSION['delete']) && $_SESSION['delete'] == 'failed'): ?>
    <strong class="alert_red">El producto NO se ha eliminado correctamente</strong>
<?php endif; ?>
<?php Utils::deleteSession('delete'); ?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>
    <?php while ($pro = $productos->fetch_object()):?>
        <tr>
            <td><?= $pro->id?></td>
            <td><?= $pro->nombre?></td>
            <td><?= $pro->precio?></td>
            <td><?= $pro->stock?></td>
            <td>
                <a href="<?= base_url ?>producto/editar&id=<?=$pro->id ?>" class="button button-gestion">Editar</a>
                <a href="<?= base_url ?>producto/eliminar&id=<?=$pro->id ?>" class="button button-red">Eliminar</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>