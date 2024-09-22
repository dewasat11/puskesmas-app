<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth\Authcontroller::login');
$routes->get('/register', 'Auth\Authcontroller::register');
$routes->get('/dashboard', 'Dashboard\DashboardController::index');
$routes->post('login', 'Auth\Authcontroller::loginProses');
$routes->post('register', 'Auth\Authcontroller::registerProses');
$routes->get('/pasien', 'Pasien\Pasiencontroller::index');
$routes->group('dokter', function($routes) {
    $routes->get('/', 'Dokter\DokterController::index');
    $routes->post('save', 'Dokter\DokterController::store');
    $routes->get('delete/(:num)', 'Dokter\DokterController::destroy/$1');
});