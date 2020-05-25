<?php

use Bramus\Router\Router;

$router = new Router();
$router->setNamespace('App\Controller');

$router->get('/', 'AppController@index');

$router->get('/vehicule', 'VehiculeController@index');

$router->run();

