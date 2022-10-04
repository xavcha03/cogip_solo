<?php

namespace App\Routes;

use Bramus\Router\Router;
use App\Controllers\HomeController;
use App\Controllers\CompaniesController;
use App\Controllers\InvoicesController;

$router = new Router();

//FrontOffice
$router->get('/', function () {
    (new HomeController)->index();
});


//DashBoard
//Page principale
$router->get('/dashboard', function(){
    (new HomeController)->dashboard();
});
//Invoices
$router->get('/dashboard/invoices', function(){
    (new InvoicesController)->listInvoices();
});


$router->run();
