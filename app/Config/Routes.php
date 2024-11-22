<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Alpha::index');
$routes->get('/daftar', 'Alpha::formDaftar');
$routes->get('/masuk', 'Alpha::formMasuk');
