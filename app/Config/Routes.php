<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/aduan', 'Aduan::index'); 
$routes->resource('api/admin');
$routes->resource('api/aduan');