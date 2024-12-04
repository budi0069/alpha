<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Alpha::index');
$routes->get('/formdaftar', 'Alpha::formDaftar');
$routes->post('/formdaftar/daftar', 'Alpha::Daftar');
$routes->get('/masuk', 'Alpha::formMasuk');
