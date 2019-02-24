<?php if (isset($edit) && isset($pro) && is_object($pro)): ?>
    <h1>Editar Productos <?= $pro->nombre ?></h1>
    <?php $url_action = base_url . "producto/save&id=".$pro->id; ?>
<?php else: ?>
    <h1>Crear nuevos Productos</h1>
    <?php $url_action = base_url . "producto/save"; ?>
<?php endif; ?>
<div class="form_container">

    <form action="<?=$url_action?>" method="post" enctype="multipart/form-data">
        <label for="name">Nombre</label>
        <input type="text" name="name" value="<?= isset($pro) && is_object($pro) ? $pro->nombre : ''?>">

        <label for="description">Descripcion</label>
        <textarea name="description"><?= isset($pro) && is_object($pro) ? $pro->descripcion : '' ?></textarea>

        <label for="price">Precio</label>
        <input type="text" name="price" value="<?= isset($pro) && is_object($pro) ? $pro->precio : '' ?>">

        <label for="stock">Stock</label>
        <input type="number" name="stock" value="<?= isset($pro) && is_object($pro) ? $pro->stock : ''?>">

        <label for="category">Categoria</label>
        <?php $categorias = Utils::showCategorias(); ?>
        <select name="category">
            <?php while ($cat = $categorias->fetch_object()): ?>
                <option value="<?=$cat->id ?>" <?= isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : ''?>>
                     <?=$cat->nombre ?>
                </option>
            <?php endwhile; ?>
        </select>

        <label for="image">Imagen</label>
        <?php if (isset($pro) && is_object($pro) && !empty($pro->imagen)):?>
            <img src="<?=base_url?>uploads/images/<?= $pro->imagen?>" alt="" class="thumb">
        <?php endif;?>
        <input type="file" name="image">
        <input type="submit" value="Guardar">
    </form>
</div>