<?php

namespace App\Http\Controllers;

use App\Models\PurchaseInvoice;
use Illuminate\Http\Request;
use DB;
use Exception;

class PurchaseInvoiceController extends Controller
{
    //
    public function index() {
        //$purchase_invoice = PurchaseInvoice::all();
        return view('modules.buying.purchaseinvoice');
    }
}