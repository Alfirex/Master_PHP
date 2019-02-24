<?php

if ($_COOKIE['miCookie']){
    // De esta manera Eliminamos una Cookie
    unset($_COOKIE['miCookie']);
    setcookie('miCookie','', time()-100);
}
header('Location:ver_cookies.php');
?>