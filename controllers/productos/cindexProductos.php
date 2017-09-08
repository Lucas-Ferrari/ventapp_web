<?php

// ../ventapp_web_desa/controllers/productos/cindexProductos.php

require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/fw/ventappfw.php' ;
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/models/Productos.php';
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/views/indexProductos.php';

$p = new Producto;
$todos = $p->getForIndex();

$v = new indexProductos;
$v->productos = $todos;
$v->render();




?>