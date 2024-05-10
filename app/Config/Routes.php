
<?php

use CodeIgniter\Router\RouteCollection;


$routes->get('/', 'Home::index');

$routes->get('/clientes', 'Clientes::index');
$routes->get('/clientes/documentacion', 'Clientes::documentacionIndex');
$routes->get('/clientes/nombre/(:any)', 'Clientes::getClienteNombre/$1');


$routes->get('/comentarios', 'Comentarios::index');
$routes->get('/comentarios/documentacion', 'Comentarios::documentacionIndex');
$routes->get('/comentarios/calificacion/(:num)', 'Comentarios::getComentarioCalificacion/$1');

$routes->get('/facturas', 'Facturas::index');
$routes->get('/facturas/documentacion', 'Facturas::documentacionIndex');

$routes->get('/habitaciones', 'Habitaciones::index');
$routes->get('/habitaciones/documentacion', 'Habitaciones::documentacionIndex');

$routes->get('/hoteles', 'Hoteles::index');
$routes->get('/hoteles/documentacion', 'Hoteles::documentacionIndex');

$routes->get('/reservaciones', 'Reservaciones::index');
$routes->get('/reservaciones/documentacion', 'Reservaciones::documentacionIndex');
