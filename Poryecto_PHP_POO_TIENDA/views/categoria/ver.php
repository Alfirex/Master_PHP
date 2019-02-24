<?php if (isset($categoria)): ?>
    <h1><?=$categoria->nombre?></h1>
    <?php if ($productos->num_rows == 0): ?>
        <p>No hay Productos para mostrar</p>
    <?php else: ?>
        <?php while ($pro = $productos->fetch_object()) :?>
            <article class="product">
                <a href="<?=base_url?>producto/ver&id=<?=$pro->id?>">
                    <?php if ($pro->imagen != null):?>
                        <img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" alt="">
                    <?php else:?>
                        <img src="<?=base_url?>assets/img/camiseta.png" alt="">
                    <?php endif;?>
                    <h2><?= $pro->nombre ?></h2>
                </a>
                <p><?= $pro->precio ?></p>
                <a href="<?= base_url ?>carrito/add&id=<?= $pro->id ?>" class="button">Comprar</a>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
<?php else: ?>
    <h1>La categoria No existe</h1>
<?php endif; ?>
