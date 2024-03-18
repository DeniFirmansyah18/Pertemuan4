<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Page::index');

$routes->get('/', 'Page::about');

$routes->get('/', 'Page::contact');

//$routes->setAutoRoute(true);
