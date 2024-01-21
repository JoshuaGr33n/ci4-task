<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('tasks', 'Tasks::index');
$routes->get('tasks/create', 'Tasks::create');
$routes->post('tasks', 'Tasks::store');
$routes->get('tasks/edit/(:num)', 'Tasks::edit/$1');
$routes->post('tasks/update/(:num)', 'Tasks::update/$1');
$routes->get('tasks/delete/(:num)', 'Tasks::delete/$1');

