<?php


namespace App\Controllers;

use App\Core\Controller;

class InvoicesController extends Controller{
    public function listInvoices(){
        return $this->view('dashboard/invoices/listInvoices');
    }
}