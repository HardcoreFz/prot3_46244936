<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('quienes_somos','Home::quienes_somos');
$routes->get('acercade','Home::acercade');
$routes->get('registro','Home::registro');
$routes->get('login','Home::login');
$routes->get('/registro','Usuario_controller::create');
$routes->post('/enviar-form', 'Usuario_controller::formValidation');