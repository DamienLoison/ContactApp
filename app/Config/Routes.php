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
$routes->setDefaultController('User');
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
//ROUTES ACCUEIL
$routes->get('/', 'Accueil::index');
$routes->get('/', 'Accueil::note_patch');

//ROUTES RECHERCHE
$routes->get('/', 'Recherche::index');

//ROUTES CONTACT
$routes->get('/', 'Recherche::tout_les_contacts');
$routes->get('/', 'Recherche::recherche_contact');
$routes->get('/', 'Recherche::delete_contact');
$routes->get('/', 'Recherche::modifier_contact');
$routes->get('/', 'Recherche::update_contact');

//ROUTES ORGANISATION
$routes->get('/', 'Recherche::toute_les_organisations');
$routes->get('/', 'Recherche::recherche_organisation');
$routes->get('/', 'Recherche::delete_organisation');
$routes->get('/', 'Recherche::modifier_organisation');
$routes->get('/', 'Recherche::update_organisation');

//ROUTES LOGIN
$routes->get('/', 'Recherche::recherche_de_login');
$routes->get('/', 'Recherche::tout_les_login');
$routes->get('/', 'Recherche::delete_login');
$routes->get('/', 'Recherche::modifier_login');
$routes->get('/', 'Recherche::update_login');

//ROUTES USER
$routes->get('/Inscription', 'User::inscription');
$routes->get('/Connexion', 'User::connexion');
$routes->match(['get','post'],'inscription', 'User::inscription');

// custom routes
//$routes->get('/', 'SignupController::index');
//$routes->get('/signup', 'SignupController::index');
//$routes->get('/signin', 'SigninController::index');
//$routes->get('/profile', 'ProfileController::index', ['filter' => 'authGuard']);
$routes->get('/dashboard', 'Dashboard::index',['filter' => 'auth']);
//ROUTES 

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
