<?php
// /ventapp_web_desa/controllers/productos/nuevoProducto.php

require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/fw/ventappfw.php' ;
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/models/Productos.php';
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/views/nuevoProducto.php';

$v = new nuevoProducto;
$v->render();



// SELECT `AUTO_INCREMENT` FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'DatabaseName' AND   TABLE_NAME   = 'TableName';



?>