<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MainController::index');
$routes->get('adicionar', 'MainController::adicionar');
$routes->get('adicionarAutoria', 'MainController::adicionarAutoria');
$routes->post('salvarAutoria', 'MainController::salvarAutoria');
$routes->post('salvar', 'MainController::salvar');
$routes->get('editar/(:segment)', 'MainController::editar/$1');
$routes->post('salvarEdicao/(:segment)', 'MainController::salvarEdicao/$1');
$routes->get('remover/(:segment)', 'MainController::remover/$1');
$routes->get('removerAutoria/(:segment)', 'MainController::removerAutoria/$1');
$routes->get('editarAutoria/(:segment)', 'MainController::editarAutoria/$1');
$routes->get('autoria', 'MainController::autoria');


