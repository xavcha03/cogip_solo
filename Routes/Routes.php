<?php

namespace App\Routes;

use Bramus\Router\Router;
use App\Controllers\HomeController;
use App\Controllers\CompaniesController;

$router = new Router();

//FrontOffice
$router->get('/', function () {
    (new HomeController)->index();
});


//DashBoard
$router->get('/dashboard', function(){
    (new HomeController)->dashboard();
});


$router->run();
