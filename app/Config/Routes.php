<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Alpha::index');
$routes->get('/daftar', 'Alpha::daftar');
$routes->post('/store', 'Alpha::store');
$routes->get('/store', 'Alpha::store');
$routes->get('/masuk', 'Alpha::masuk');
// $routes->post('/masuk', 'Alpha::masuk');
