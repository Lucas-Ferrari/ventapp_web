<?php
// ../ventapp_web_desa/controllers/productos/indexClientes.php

require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/fw/ventappfw.php';
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/models/clientes.php';
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/views/indexClientes.php';


$cl = new Cliente;
$todos = $cl->getAll();

$v = new indexClientes;
$v->clientes = $todos;
$v->render();

?>