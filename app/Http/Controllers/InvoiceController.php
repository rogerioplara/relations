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

        $invoice = Invoice::create($data);

        return response()->json($invoice, 200);
    }

    public function findOne(Request $r)
    {
        $invoice = Invoice::find($r->id);
        // é possível popular o retorno com as informações da relação
        $invoice['user'] = $invoice->user;
        $invoice['address'] = $invoice->address;
        return $invoice;
    }
}
