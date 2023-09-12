<?php

use CodeIgniter\Router\RouteCollection;

/*
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); 
$routes->get('/resources/(:any)', 'Home::resources/$1'); 
$routes->get('/admin', 'Admin\Auth::index',['filter' => 'auth']);
$routes->post('/auth', 'Admin\Auth::auth');
$routes->get('/login', 'Admin\Auth::index');
$routes->get('/logout', 'Admin\Auth::logout');
$routes->get('/dashboard', 'Admin\Dashboard::index',['filter' => 'auth']);
// $routes->resource('api/admin');
// $routes->resource('api/aduan');
