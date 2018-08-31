<?php

namespace oliverbj\invoiceconverter\Http\Controllers;

use Illuminate\Routing\Controller;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('invoiceconverter::home');
    }
}
