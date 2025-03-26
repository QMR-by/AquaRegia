<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// HOME PAGE
$routes->get('/', 'Home::landing');

// HEADER
$routes->get('support', 'Home::support');
$routes->get('causes', 'Home::causes');

// FOOTER
$routes->get('terms', 'Home::terms');
$routes->get('about', 'Home::about');
$routes->get('privacy', 'Home::privacy');
$routes->get('modernSlavery', 'Home::modernSlavery');
$routes->get('humanRights', 'Home::humanRights');

// MEDIA GALLERY (formerly airlines)
$routes->get('mediagallery', 'Home::mediagallery');

// FLIGHT SEARCH PAGE
$routes->get('flightSearch', 'Home::flightSearch');
$routes->get('latestFlights', 'Home::latestFlights');
$routes->get('findFlightNum', 'Home::findFlightNum');

// BOOK FLIGHT PAGE
$routes->get('bookFlight', 'Home::bookFlight');
$routes->post('bookFlightAirport', 'Home::bookFlightAirport');
$routes->post('bookFlightFlyDetails', 'Home::bookFlightFlyDetails');
$routes->post('bookFlightSeats', 'Home::bookFlightSeats');
$routes->post('confirmDetails', 'Home::confirmDetails');

// PAYMENT PAGE
$routes->get('reviewCosts', 'Home::reviewCosts');

// PASSENGER.PHP
$routes->get('login', 'Passenger::login');
$routes->get('signup', 'Passenger::signup');
$routes->get('logout', 'Passenger::logoutacc');
$routes->get('profile', 'Passenger::profile');
$routes->get('editProfile', 'Passenger::editProfile');
$routes->get('adminProfile', 'Home::adminProfile');
$routes->get('adminPage', 'Home::adminPage');

// BACKEND - Passenger Model
$routes->post('signup/register', 'Passenger::register');
$routes->post('login/account', 'Passenger::loginacc');
$routes->post('profile/update', 'Passenger::updateProfile');