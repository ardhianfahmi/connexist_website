<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('about', 'About::index');
$routes->get('client', 'Client::index');
$routes->get('contact', 'Contact::index');
$routes->get('news', 'News::index');
$routes->get('product', 'Product::index');
$routes->get('service', 'Service::index');
$routes->get('ourproduct', 'OurProduct::index');
// $routes->get('energy', 'Energy::index');
// $routes->get('cybersecurity', 'CyberSecurity::index');
// $routes->get('ecommerce', 'Ecommerce::index');
// $routes->get('webdev', 'WebDev::index');
$routes->get('crossplatform', 'CrossPlatform::index');
$routes->get('cybersecurity', 'CyberSecurity::index');
$routes->get('ecommercesol', 'ECommerceSolution::index');
$routes->get('finance', 'Finance::index');
$routes->get('projectman', 'ProjectMan::index');
$routes->get('research', 'Research::index');
$routes->get('webmobile', 'WebMobile::index');
/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
