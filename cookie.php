<?php
include("cproducto.php");
$producto= new Producto(1,"Naranja",2.80,100);
setcookie("producto",base64_encode(serialize($producto)),time()+86400);
?>