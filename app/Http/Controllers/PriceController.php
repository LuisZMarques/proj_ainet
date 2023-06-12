<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;

class PriceController extends Controller
{
    public function index()
    {
        $price = Price::all()->first();
        return view('prices.show', compact('price'));
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
