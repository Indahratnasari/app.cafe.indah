<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/dashboard', 'Home::dashboard',['Filters'=>'Auth']);
$routes->get('/','Home::index');

$routes->get('/user', 'usercontroller::tampil',['Filters'=>'Auth']);
$routes->add('/users', 'usercontroller::simpan');
$routes->get('/user/delete/(:segment)','usercontroller::delete/$1');
$routes->add('/Usercontroller/edit/(:segment)', 'usercontroller::edit/$1');

$routes->get('/menu', 'MenuController::tampil');
$routes->add('menus', 'MenuController::simpan');
$routes->get('/MenuController/delete/(:segment)', 'MenuController::delete/$1');
$routes->add('/menu/edit/(:segment)', 'Menucontroller::edit/$1');

$routes->get('/pesanan', 'PesananController::tampil');
$routes->add('/pesanan', 'Pesanancontroller::addCart');
$routes->add('/pesanan', 'Pesanancontroller::simpan');
$routes->get('/Pesanancontroller/hapusCart/(:segment)', 'Pesanancontroller::hapusCart/$1');
$routes->get('/pesanan/edit(:segment)', 'Pesanancontroller::edit/$1');

$routes->get('/detail', 'Detailcontroller::tampil');
$routes->add('/detail', 'Detailcontroller::simpan');
$routes->get('/detailcontroller/hapusCart/(:segment)', 'Detailcontroller::hapusCart/$1');
$routes->get('/detail/edit(:segment)', 'Detailcontroller::edit/$1');

$routes->get('/laporan','Laporancontroller::tampil');

$routes->get('/login','usercontroller::tlogin');
$routes->add('login','usercontroller::login');
$routes->get('/logout','Usercontroller::Logout');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *11111111111111111
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
