<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Publico::index');



$routes->get('inicio', 'Publico::index');

$routes->get('sobre-mi', 'Publico::sobreMi');

$routes->get('contacto', 'Publico::contacto');

$routes->get('posts/(:segment)', 'Publico::publicacion/$1');


$routes->group('admin', static function ($routes) {

    $routes->resource('publicacion');
    
    $routes->resource('categoria');

    $routes->get('dashboard', 'Panel::index');
    
});






service('auth')->routes($routes);