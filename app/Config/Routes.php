<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('input', 'InputController::index');
$routes->post('input/store', 'InputController::store');