<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'DashboardController::dashboard');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

$routes->get('/component/button', 'ComponentController::button');
$routes->get('/component/cards', 'ComponentController::cards');

$routes->get('/utility/color', 'UtilityController::color');
$routes->get('/utility/border', 'UtilityController::border');
$routes->get('/utility/animation', 'UtilityController::animation');
$routes->get('/utility/other', 'UtilityController::other');

$routes->get('/page/register', 'pageController::register');
$routes->get('/page/login', 'pageController::login');
$routes->post('/page/store', 'pageController::store');
$routes->post('/page/check', 'pageController::check');
$routes->get('/logout', 'pageController::logout');

$routes->get('/chart', 'ChartController::index');

$routes->get('/page', 'UserController::index');
$routes->get('/page/edit/(:num)', 'UserController::edit/$1');
$routes->post('/page/update/(:num)', 'UserController::update/$1');
$routes->get('/page/delete/(:num)','UserController::delete/$1');

$routes->get('/employee/add', 'EmployeeController::add');
$routes->post('/employee/store', 'EmployeeController::store');

$routes->get('/employee', 'EmpshowController::index');
$routes->get('/employee/edit/(:num)', 'EmpshowController::edit/$1');
$routes->post('/employee/update/(:num)', 'EmpshowController::update/$1');
$routes->get('/employee/delete/(:num)','EmpshowController::delete/$1');




