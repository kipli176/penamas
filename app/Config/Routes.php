<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/aduan', 'Aduan::index');
$routes->get('/aduan/sukses', 'Aduan::sukses');
$routes->resource('api/admin');
$routes->resource('api/aduan');