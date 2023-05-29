<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;

class PriceController extends Controller
{
    public function index()
    {
        $prices = Price::all()->first();
        return view('prices.index', compact('prices'));
    }

    public function create()
    {
        return view('prices.create');
    }

    public function store(Request $request)
    {
        Price::create($request->all());
        return redirect('/precos');
    }
}
