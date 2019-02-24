<?php if (isset($_SESSION['identity'])):?>
    <h1>Hacer pedido</h1>
    <p>
        <a href="<?=base_url?>carrito/index">Ver los productos y el precio del pedido </a>
    </p>

    <br>

    <h3>Direccion para el envio:</h3>
    <form action="<?=base_url?>pedido/add" method="post">
        <label for="province">Provincia</label>
        <input type="text" name="province" required>

        <label for="location">Localidad</label>
        <input type="text" name="location" required>

        <label for="address">Dirección</label>
        <input type="text" name="address"required>

        <input type="submit" value="Confirmar pedido" >
    </form>

<?php else:?>
    <h1>Necesitas estar Identificado</h1>
    <p>Necesitas estar logueado en la web para poder realizar tu pedido.</p>
<?php endif;?>


