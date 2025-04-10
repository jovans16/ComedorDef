<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('login', 'AuthController::login'); //  formulario de inicio de sesión
$routes->post('login', 'AuthController::authenticate'); // Procesar inicio de sesion
$routes->get('register', 'AuthController::register'); // Mostrar formulario de registro
$routes->post('register', 'AuthController::create'); // Procesar registro
$routes->get('logout', 'AuthController::logout'); // Cerrar sesión

//Ruta de la vista principal
$routes->get('PagPrincipal', 'AuthController::PagPrincipal');
//Ruta para registro de lotes
$routes->get('registroLot', 'LoteController::registroLot');
$routes->post('guardarLote', 'LoteController::guardarLote');

//$routes->get('panel', 'PanelController::index'); para el panel
