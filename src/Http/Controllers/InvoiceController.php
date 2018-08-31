<?php

namespace oliverbj\invoiceconverter\Http\Controllers;

class InvoiceController extends BaseController
{
    public function index()
    {
        return view('invoiceconverter::home');
    }
}
