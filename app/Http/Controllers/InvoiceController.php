<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(Request $r)
    {
        $invoices = Invoice::all();
        return $invoices;
    }

    public function insert(Request $r)
    {
        $data = $r->only(['description', 'amount', 'address_id', 'user_id']);

        // dd($data);

        $invoice = Invoice::create($data);

        return response()->json($invoice, 200);
    }
}
