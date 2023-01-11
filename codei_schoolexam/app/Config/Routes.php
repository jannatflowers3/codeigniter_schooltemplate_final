<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('SigninController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//  dashbaord routing
$routes->get('admindashboard', 'AdminDashboard::index',['filter' => 'authGuard']);
$routes->get('/adminlogin', 'AdminDashboard::adminlogin',['filter' => 'authGuard']);
$routes->resource('Studentmanagement');
// admin routing start
$routes->get('/admin', 'Admin::index', ['filter' => 'authGuard']);
$routes->get('/admin/new', 'Admin::new', ['filter' => 'authGuard']);
// $routes->resource('Admin');
$routes->resource('Teacher');
$routes->resource('Courses');
$routes->resource('Staffs');
$routes->resource('StudentSubject');
// signin controller
$routes->get('/Studentquery', 'Studentquery::index');
$routes->get('/Frontend', 'Frontend::index');
$routes->get('/teacherlist', 'Frontend::teacherlist');
$routes->get('/studentSubject', 'StudentSubject::index');





$routes->get('/users/signup', 'SignupController::index');
$routes->post('/users/store', 'SignupController::store');

$routes->get('/users/signin', 'SigninController::index');
$routes->post('/users/login', 'SigninController::loginAuth');
$routes->get('/users/logout', 'SigninController::logout');
// defaultlayout
$routes->get('/test','TestController::index');
// TestController
// students routes
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
