<h1>Registrarse</h1>
<?php
if (isset($_SESSION['register']) &&  $_SESSION['register'] == "complete"): ?>
    <strong class="alert_green"> Registro completado correctamente</strong>
<?php elseif (isset($_SESSION['register']) &&  $_SESSION['register'] == "failed"): ?>
    <strong class="alert_red"> Registro fallo, Introduce bien los datos</strong>
<?php endif; ?>
<?php Utils::deleteSession('register')?>
<form action="<?=base_url?>usuario/save" method="post">
    <label for="name">Nombre</label>
    <input type="text" name="name"  required/>

    <label for="surname">Apellidos</label>
    <input type="text" name="surname"  required/>

    <label for="email">Email</label>
    <input type="email" name="email"  required/>

    <label for="password">Contraseña</label>
    <input type="password" name="password"  required/>
    <input type="submit" value="Registrarse"/>
</form>