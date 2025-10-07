<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// Puihaha site routes
$routes->get('services', 'Home::services');
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');
