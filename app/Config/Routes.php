<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('contacto', 'Home::contacto');
$routes->get('soporte', 'Home::soporte');
$routes->get('catalogo', 'Home::catalogo');
$routes->get('preguntas_frecuentes', 'Home::preguntas_frecuentes');