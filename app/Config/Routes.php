<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\Customers;
use App\Controllers\Users;

/** @var RouteCollection $routes */
$routes->get('/', [Pages::class, 'index']);
$routes->get('about', [Pages::class, 'about']);
$routes->get('customers', [Customers::class, 'index']);
$routes->get('users', [Users::class, 'index']);