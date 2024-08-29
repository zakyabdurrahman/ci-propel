<?php

use App\Controllers\News;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('news/new', [News::class, "new"]);
$routes->post('news', [News::class, "create"]);


$routes->get('/pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
