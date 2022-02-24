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
$routes->get('/', 'Home::index');
//Accueil route
$routes->get('/', 'Accueil::index');
$routes->get('/', 'Accueil::note_patch');
//Recherche route
$routes->get('/', 'Recherche::index');
//Recherche route -> CONTACT
$routes->get('/', 'Recherche::aide_contact');
$routes->get('/', 'Recherche::tout_les_contacts');
$routes->get('/', 'Recherche::recherche_contact');
//Recherche route -> ORGANISATION
$routes->get('/', 'Recherche::toute_les_organisations');
$routes->get('/', 'Recherche::recherche_organisation');
//Recherche route -> LOGIN
$routes->get('/', 'Recherche::recherche_de_login');
$routes->get('/', 'Recherche::tout_les_login');

//Autres route


$routes->get('/', 'Supprimer::supprimer_contact');
$routes->get('/', 'Supprimer::supprimer_organisation');
$routes->get('/', 'Supprimer::supprimer_login');


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
