<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\Articles; // Add this line
use App\Controllers\News; 
use App\Controllers\Pages;

$routes->resource('articles');  // Add this line

$routes->get('news', [News::class, 'index']);           
$routes->get('news/(:segment)', [News::class, 'show']); 

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);