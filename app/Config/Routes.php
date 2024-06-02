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
