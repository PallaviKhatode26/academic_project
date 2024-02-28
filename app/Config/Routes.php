<?php

use CodeIgniter\Router\RouteCollection;

/*
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin', 'Home::admin');
$routes->get('/sidebar', 'Home::side');
$routes->get('/user', 'Foodcontroller::show');
$routes->get('/user-form', 'Foodcontroller::create');
$routes->post('/submit-form', 'Foodcontroller::store');
$routes->get('delete/(:num)', 'Foodcontroller::delete/$1');
$routes->get('edit-view/(:num)', 'Foodcontroller::singleUser/$1');
$routes->post('update', 'Foodcontroller::update');

// chef routes start
$routes->get('/chef', 'Chefscontroller::show');
$routes->get('/chef-form', 'Chefscontroller::create');
$routes->post('/submitchef-form', 'Chefscontroller::store');
$routes->get('deletechef/(:num)', 'Chefscontroller::deletechef/$1');
$routes->get('editchef/(:num)', 'Chefscontroller::edituser/$1');
$routes->post('updatechef', 'Chefscontroller::updatechef');
// $routes->get('exampleController/loadContent', 'Foodcontroller::loadContent');
//customer route start******
$routes->get('/customer', 'Customercontroller::show');
$routes->get('/customer-form', 'Customercontroller::create');
$routes->post('/submitcust-form', 'Customercontroller::store');
$routes->get('deletecust/(:num)', 'Customercontroller::deletecust/$1');
$routes->get('edit-cust/(:num)', 'Customercontroller::singlecustomer/$1');
$routes->post('updatecust', 'Customercontroller::update');

$routes->get('/waiter', 'Waitercontroller::show');
$routes->get('/waiter-form', 'Waitercontroller::create');
$routes->post('/submitwaiter-form', 'Waitercontroller::store');
$routes->get('deletewaiter/(:num)', 'Waitercontroller::deletewaiter/$1');
$routes->get('edit-waiter/(:num)', 'Waitercontroller::singlewaiter/$1');
$routes->post('updatewaiter', 'Waitercontroller::update');

service('auth')->routes($routes);
