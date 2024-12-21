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
$routes->get('/riwayat_pemakaian', 'Alpha::riwayat_pemakaian');
$routes->post('/masuk/ceklogin', 'Alpha::ceklogin');
$routes->get('/logout', 'Alpha::logout');
