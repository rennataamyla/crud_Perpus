<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'buku::index');
 $routes->get('/buku', 'buku::index');
 $routes->get('/buku/create', 'buku::create');
 $routes->post('/buku/store', 'buku::store');
 $routes->get('/buku/update/(:num)', 'buku::update/$1');
 $routes->get('/buku/edit/(:num)', 'buku::edit/$1');
 $routes->post('buku/delete/(:num)', 'buku::delete/$1');

$routes->get('/user', 'user::index');
$routes->get('/user/create','user::create');
$routes->post('/user/tambah','user::tambah');
$routes->get('user/update/(:num)', 'User::update/$1');
$routes->get('/user/edit(:num)', 'user::edit/$1');
$routes->get('user/delete/(:num)', 'user::delete/$1');

$routes->get('/peminjaman','peminjaman::index');
$routes->get('/peminjaman/coba','peminjaman::create');
$routes->post('/peminjaman/tambah','peminjaman::tambah');
$routes->get('/peminjaman/update/(:num)','peminjaman::update/$1');
$routes->post('/peminjaman/edit/(:num)','peminjaman::edit/$1');
$routes->get('/peminjaman/hapus/(:num)','peminjaman::hapus/$1');

$routes->get('/pengembalian', 'pengembalian::index');
$routes->get('/pengembalian/tambah', 'pengembalian::tambah');
$routes->post('/pengembalian/penyimpanan', 'pengembalian::penyimpanan');
$routes->get('/pengembalian/edit/(:num)', 'pengembalian::edit/$1');
$routes->post('/pengembalian/update/(:num)', 'pengembalian::update/$1');
$routes->get('/pengembalian/delete/(:num)', 'pengembalian::delete/$1');

