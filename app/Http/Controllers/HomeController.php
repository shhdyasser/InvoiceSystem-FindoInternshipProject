<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\Invoice;

class HomeController extends Controller
{
    public function index()
    {
        $stats = [
            'clients'  => Client::count(),
            'products' => class_exists(\App\Models\Product::class) ? Product::count() : 0,
            'invoices' => class_exists(\App\Models\Invoice::class) ? Invoice::count() : 0,
        ];

        return view('dashboard', compact('stats'));
    }
}
