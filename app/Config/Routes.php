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

/*Rutas del formulario de registro*/ 
$routes->get('/registro','Usuario_controller::create');
$routes->post('/enviar-form', 'Usuario_controller::formValidation');
/*rutas del login*/
$routes->get('/login','Login_Controller');
$routes->post('/enviarlogin','Login_Controller::auth');
$routes->get('/panel','Panel_Controller::index',['filter'=> 'auth']);
$routes->get('/logout','Login_controller::logout');