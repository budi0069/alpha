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
$routes->get('/form_input', 'Alpha::form_input');
$routes->post('/form_input/simpan', 'Alpha::simpan');
$routes->get('/riwayat_pemakaian/hapus/(:num)', 'Alpha::hapus/$1');
$routes->get('/riwayat_pemakaian', 'Alpha::riwayat_pemakaian');
$routes->post('/masuk/ceklogin', 'Alpha::ceklogin');
$routes->get('/logout', 'Alpha::logout');

$routes->post('/admin/cetak', 'Alpha::cetak');

